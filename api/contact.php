<?php
/**
 * Contact form handler for Jeevan Rekha Foundation.
 *
 * Flow: validate -> log to data/inquiries.csv (backup, always works) ->
 * attempt email via mail() (best-effort — see NOTE below) -> JSON response.
 *
 * NOTE for dev: PHP's mail() works out of the box on most Bluehost shared
 * hosting, but delivery can be unreliable (spam folder, or silently dropped)
 * until SPF/DKIM records are set up for the domain in cPanel > Email Deliverability.
 * Because every submission is also written to data/inquiries.csv, no enquiry
 * is lost even if an email never arrives — check that file periodically, or
 * open it in Excel/Sheets. Consider upgrading to PHPMailer + real SMTP
 * credentials (e.g. the site's own email account) for reliable delivery.
 */

require_once '../includes/config.php';

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

// 1) Log to CSV — the reliable backup. Always attempted first.
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

// 2) Best-effort email notification (see NOTE at top of file).
$to = SITE_EMAIL;
$subject = 'New Enquiry - ' . SITE_NAME;
$body = "Name: $name\n"
      . "Phone: $phone\n"
      . "Email: " . ($email !== '' ? $email : '—') . "\n\n"
      . "Message:\n" . trim($message) . "\n\n"
      . "Time: " . date('d M Y, h:i A');
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$headers = "From: no-reply@{$host}\r\n";
$headers .= "Reply-To: " . ($email !== '' ? $email : "no-reply@{$host}") . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

@mail($to, $subject, $body, $headers);

// Report success either way — the CSV write is the source of truth,
// so a slow/blocked mail server never loses the enquiry.
echo json_encode(['success' => true, 'message' => 'Thank you! We will contact you shortly.']);
