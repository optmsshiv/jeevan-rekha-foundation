<?php
/**
 * Contact form handler for Jeevan Rekha Foundation.
 *
 * Flow: validate -> log to data/inquiries.csv (backup, always works) ->
 * send via Gmail SMTP using PHPMailer -> JSON response.
 *
 * SETUP REQUIRED before this works: open includes/config.php and paste a
 * real Gmail "App Password" into the SMTP_APP_PASSWORD constant. Generate
 * one at https://myaccount.google.com/apppasswords (needs 2-Step
 * Verification enabled on the SMTP_USER account first). Until that's set,
 * submissions still get logged to data/inquiries.csv, so nothing is lost —
 * they just won't be emailed yet.
 */

require_once '../includes/config.php';
require_once '../vendor/phpmailer/Exception.php';
require_once '../vendor/phpmailer/PHPMailer.php';
require_once '../vendor/phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
}

// Honeypot — a hidden field real users never fill in. If it has a value,
// this is almost certainly a bot; pretend success so it doesn't retry.
if (!empty($_POST['website'])) {
    echo json_encode(['success' => true]);
    exit;
}

function clean_line($value) {
    return trim(str_replace(["\r", "\n"], ' ', $value));
}

$name    = clean_line($_POST['name'] ?? '');
$phone   = clean_line($_POST['phone'] ?? '');
$email   = clean_line($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];
if ($name === '' || strlen($name) > 100) {
    $errors[] = 'Please enter your full name.';
}
if ($phone === '' || !preg_match('/^[0-9+\-\s()]{7,20}$/', $phone)) {
    $errors[] = 'Please enter a valid phone number.';
}
if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}
if ($message === '' || strlen($message) > 6000) {
    $errors[] = 'Please write your message.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

$messageForStorage = str_replace(["\r\n", "\r", "\n"], ' | ', trim($message));

// 1) Log to CSV — the reliable backup. Always attempted first, regardless
//    of whether the email send below succeeds.
$dataDir = __DIR__ . '/../data';
if (!is_dir($dataDir)) {
    @mkdir($dataDir, 0755, true);
}
$logFile = $dataDir . '/inquiries.csv';
$isNewFile = !file_exists($logFile);
$fp = @fopen($logFile, 'a');
if ($fp) {
    if ($isNewFile) {
        fputcsv($fp, ['Timestamp', 'Name', 'Phone', 'Email', 'Message']);
    }
    fputcsv($fp, [date('Y-m-d H:i:s'), $name, $phone, $email, $messageForStorage]);
    fclose($fp);
}

// 2) Send via Gmail SMTP.
$mailSent = false;
$mailError = '';

if (SMTP_APP_PASSWORD === 'PASTE_16_CHARACTER_APP_PASSWORD_HERE') {
    $mailError = 'SMTP_APP_PASSWORD not yet configured in includes/config.php.';
} else {
    // 2a) Notification to the clinic
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USER;
        $mail->Password   = SMTP_APP_PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom(SMTP_USER, SITE_NAME);
        $mail->addAddress(SITE_EMAIL);
        if ($email !== '') {
            $mail->addReplyTo($email, $name);
        }

        $mail->Subject = 'New Enquiry - ' . SITE_NAME;
        $mail->Body    = "Name: $name\n"
                        . "Phone: $phone\n"
                        . "Email: " . ($email !== '' ? $email : '—') . "\n\n"
                        . "Message:\n" . trim($message) . "\n\n"
                        . "Time: " . date('d M Y, h:i A');

        $mail->send();
        $mailSent = true;
    } catch (PHPMailerException $e) {
        $mailError = $mail->ErrorInfo;
    }

    // 2b) Designed auto-reply confirmation to the visitor — only possible if
    // they gave an email address (it's an optional field on the form).
    if ($email !== '') {
        $reply = new PHPMailer(true);
        try {
            $reply->isSMTP();
            $reply->Host       = 'smtp.gmail.com';
            $reply->SMTPAuth   = true;
            $reply->Username   = SMTP_USER;
            $reply->Password   = SMTP_APP_PASSWORD;
            $reply->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $reply->Port       = 587;

            $reply->setFrom(SMTP_USER, SITE_NAME);
            $reply->addAddress($email, $name);
            $reply->addReplyTo(SITE_EMAIL, SITE_NAME);

            $logoCid = 'jrflogo';
            $logoPath = __DIR__ . '/../assets/img/logo.jpeg';
            if (file_exists($logoPath)) {
                $reply->addEmbeddedImage($logoPath, $logoCid);
            }

            $reply->isHTML(true);
            $reply->Subject = 'We\'ve received your message — ' . SITE_NAME;

            $safeName    = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
            $safeMessage = nl2br(htmlspecialchars(trim($message), ENT_QUOTES, 'UTF-8'));
            $logoImgTag  = file_exists($logoPath) ? "<img src=\"cid:{$logoCid}\" alt=\"" . SITE_NAME . "\" width=\"56\" height=\"56\" style=\"display:block;border-radius:50%;\">" : '';

            $reply->Body = <<<HTML
<!DOCTYPE html>
<html>
<body style="margin:0;padding:0;background-color:#f4faff;font-family:Arial,Helvetica,sans-serif;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4faff;padding:32px 16px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" style="max-width:520px;background-color:#ffffff;border-radius:12px;overflow:hidden;border:1px solid #e3f0f8;">

                    <tr>
                        <td style="background-color:#1B3A2E;padding:28px 32px;">
                            <table role="presentation" width="100%"><tr>
                                <td width="56">{$logoImgTag}</td>
                                <td style="padding-left:14px;">
                                    <span style="color:#ffffff;font-size:18px;font-weight:bold;">Jeevan Rekha Foundation</span><br>
                                    <span style="color:#D4AF37;font-size:11px;letter-spacing:1px;text-transform:uppercase;">De-Addiction Center</span>
                                </td>
                            </tr></table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:32px;">
                            <h1 style="margin:0 0 12px;color:#111d23;font-size:20px;">Thank you, {$safeName}.</h1>
                            <p style="margin:0 0 20px;color:#3e4945;font-size:14px;line-height:1.6;">
                                We've received your message and a member of our team will get back to you shortly. Every conversation with us is completely confidential.
                            </p>

                            <table role="presentation" width="100%" style="background-color:#f4faff;border-left:4px solid #006953;border-radius:6px;margin-bottom:24px;">
                                <tr><td style="padding:16px 18px;">
                                    <p style="margin:0 0 6px;color:#006953;font-size:11px;font-weight:bold;letter-spacing:1px;text-transform:uppercase;">Your Message</p>
                                    <p style="margin:0;color:#111d23;font-size:14px;line-height:1.6;">{$safeMessage}</p>
                                </td></tr>
                            </table>

                            <p style="margin:0 0 8px;color:#3e4945;font-size:14px;">Need urgent help? Reach us directly:</p>
                            <p style="margin:0 0 4px;color:#111d23;font-size:14px;">📞 <a href="tel:+919296785775" style="color:#006953;text-decoration:none;">92967 85775</a></p>
                            <p style="margin:0;color:#111d23;font-size:14px;">💬 <a href="https://wa.me/919296785775" style="color:#006953;text-decoration:none;">WhatsApp us</a></p>
                        </td>
                    </tr>

                    <tr>
                        <td style="background-color:#f4faff;padding:18px 32px;border-top:1px solid #e3f0f8;">
                            <p style="margin:0;color:#3e4945;font-size:11px;">
                                Jeevan Rekha Foundation · Purvi Bypass Road, Jaipalpatti, Madhepura, Bihar - 852113
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
HTML;

            $reply->AltBody = "Thank you, {$name}.\n\n"
                . "We've received your message and a member of our team will get back to you shortly.\n\n"
                . "Your message:\n" . trim($message) . "\n\n"
                . "Need urgent help? Call " . SITE_PHONE_DISPLAY . " or WhatsApp us: https://wa.me/" . SITE_WHATSAPP . "\n\n"
                . SITE_NAME . " — " . SITE_ADDRESS;

            $reply->send();
        } catch (PHPMailerException $e) {
            // Confirmation email failing shouldn't block the form submission —
            // the clinic notification above is the important one. Just log it.
            error_log('[contact form] Visitor confirmation email failed: ' . $reply->ErrorInfo);
        }
    }
}

// Log any send failure alongside the CSV backup so it's easy to spot during setup.
if (!$mailSent && $mailError !== '') {
    error_log('[contact form] Gmail SMTP send failed: ' . $mailError);
}

// 3) WhatsApp notifications via Meta's WhatsApp Cloud API — one to the admin,
// one confirming receipt to the visitor. Both require approved message
// templates (see includes/config.php comments). Skips silently until
// META_WA_* constants are filled in — same fail-safe pattern as email above,
// never blocks the form.

function send_whatsapp_template($toNumber, $templateName, $bodyParams, $label) {
    $payload = [
        'messaging_product' => 'whatsapp',
        'to' => $toNumber,
        'type' => 'template',
        'template' => [
            'name' => $templateName,
            'language' => ['code' => 'en_US'],
            'components' => [[
                'type' => 'body',
                'parameters' => array_map(function ($p) { return ['type' => 'text', 'text' => $p]; }, $bodyParams),
            ]],
        ],
    ];

    $ch = curl_init('https://graph.facebook.com/v19.0/' . META_WA_PHONE_NUMBER_ID . '/messages');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer ' . META_WA_ACCESS_TOKEN,
            'Content-Type: application/json',
        ],
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_TIMEOUT => 8,
    ]);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);
    curl_close($ch);

    if ($curlError !== '' || $httpCode >= 300) {
        error_log("[contact form] WhatsApp ({$label}) failed (HTTP {$httpCode}): " . ($curlError ?: $response));
    }
}

// Indian mobile numbers are typically entered as 10 digits with no country
// code — assume +91 when that's the case. Adjust here if you expand beyond India.
function normalize_whatsapp_number($rawPhone) {
    $digits = preg_replace('/\D/', '', $rawPhone);
    if (strlen($digits) === 10) {
        $digits = '91' . $digits;
    }
    return $digits;
}

$placeholders = [
    META_WA_PHONE_NUMBER_ID === 'PASTE_PHONE_NUMBER_ID_HERE',
    META_WA_ACCESS_TOKEN === 'PASTE_PERMANENT_ACCESS_TOKEN_HERE',
    META_WA_ADMIN_NUMBER === 'PASTE_ADMIN_WHATSAPP_NUMBER_HERE',
];
if (!in_array(true, $placeholders, true)) {
    // 3a) Notify the admin — template params must match {{1}}, {{2}}, {{3}}
    // in the approved META_WA_TEMPLATE_NAME template.
    $waMessageParam = mb_substr(trim($message), 0, 300); // WhatsApp template params have a length limit
    send_whatsapp_template(META_WA_ADMIN_NUMBER, META_WA_TEMPLATE_NAME, [$name, $phone, $waMessageParam], 'admin notification');

    // 3b) Confirm receipt to the visitor — template params must match {{1}}
    // in the approved META_WA_CONFIRMATION_TEMPLATE_NAME template.
    $visitorWaNumber = normalize_whatsapp_number($phone);
    if ($visitorWaNumber !== '') {
        send_whatsapp_template($visitorWaNumber, META_WA_CONFIRMATION_TEMPLATE_NAME, [$name], 'visitor confirmation');
    }
}

// Report success either way — the CSV write is the source of truth,
// so a misconfigured or temporarily down mail server never loses the enquiry.
echo json_encode(['success' => true, 'message' => 'Thank you! We will contact you shortly.']);
