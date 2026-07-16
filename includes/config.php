<?php
// ---------------------------------------------------
// Rekha Foundation — Site-wide constants
// Update these in ONE place; every page pulls from here.
// ---------------------------------------------------

define('SITE_NAME', 'Jeevan Rekha Foundation');
define('SITE_TAGLINE', 'De-Addiction Center');
define('SITE_URL', 'https://rekhafoundation.com');
define('SITE_PHONE_DISPLAY', '92967 85775');
define('SITE_PHONE_TEL', '+919296785775');
// Direct number for the Co-Founder & Director — shown on their profile card on the About page.
define('COFOUNDER_PHONE_DISPLAY', '76317 65802');
define('COFOUNDER_PHONE_TEL', '+917631765802');
define('SITE_EMAIL', 'care@rekhafoundation.com');

// Gmail SMTP — used by api/contact.php to reliably deliver form submissions
// (PHP's plain mail() gets silently dropped/spam-filtered by Gmail too often).
// SMTP_USER must be a real Gmail or Google Workspace mailbox with 2-Step
// Verification enabled. Generate the App Password at:
// https://myaccount.google.com/apppasswords — paste the 16-character code
// below with no spaces. Submissions are sent to SITE_EMAIL above.
define('SMTP_USER', SITE_EMAIL);
define('SMTP_APP_PASSWORD', 'PASTE_16_CHARACTER_APP_PASSWORD_HERE');

// Meta WhatsApp Cloud API — sends a template message to the admin's WhatsApp
// for every contact form submission. See developers.facebook.com > your app
// > WhatsApp > API Setup for the Phone Number ID and access token, and
// WhatsApp Manager > Message Templates for the approved template name.
define('META_WA_PHONE_NUMBER_ID', 'PASTE_PHONE_NUMBER_ID_HERE');
define('META_WA_ACCESS_TOKEN', 'PASTE_PERMANENT_ACCESS_TOKEN_HERE');
define('META_WA_TEMPLATE_NAME', 'new_enquiry_alert');
// Separate template for the visitor-facing confirmation (business-initiated,
// so it also needs its own Meta approval). Suggested body: "Thank you {{1}},
// we've received your enquiry and will contact you shortly. — Jeevan Rekha Foundation"
define('META_WA_CONFIRMATION_TEMPLATE_NAME', 'enquiry_confirmation');
define('META_WA_ADMIN_NUMBER', 'PASTE_ADMIN_WHATSAPP_NUMBER_HERE'); // e.g. 919296785775, no + or spaces
define('SITE_ADDRESS', 'Purvi Bypass Road, Jaipalpatti, Front of Honda Showroom, Madhepura, Bihar - 852113');
// Structured address parts — used for SEO schema markup (JSON-LD) in includes/header.php.
// Keep in sync with SITE_ADDRESS above if you ever edit the address.
define('SITE_ADDRESS_STREET', 'Purvi Bypass Road, Jaipalpatti, Front of Honda Showroom');
define('SITE_ADDRESS_CITY', 'Madhepura');
define('SITE_ADDRESS_STATE', 'Bihar');
define('SITE_ADDRESS_ZIP', '852113');
define('SITE_ADDRESS_COUNTRY', 'IN');
define('SITE_WHATSAPP', '919296785775');
define('SITE_MAPS_URL', 'https://www.google.com/maps/search/?api=1&query=' . urlencode(SITE_ADDRESS));

// Second location — Purnia branch
define('BRANCH2_NAME', 'Purnia Branch');
define('BRANCH2_ADDRESS', 'Mehata Chowk, Madhubani, Purnia');
define('BRANCH2_PHONE1_DISPLAY', '72501 26500');
define('BRANCH2_PHONE1_TEL', '+917250126500');
define('BRANCH2_PHONE2_DISPLAY', '75429 59002');
define('BRANCH2_PHONE2_TEL', '+917542959002');
define('BRANCH2_MAPS_URL', 'https://www.google.com/maps/search/?api=1&query=' . urlencode(BRANCH2_ADDRESS));

// Social links — footer icons. TODO: replace # with real profile URLs, or
// remove the corresponding <a> block in includes/footer.php if a platform isn't used.
define('SITE_FACEBOOK', '#');
define('SITE_INSTAGRAM', '#');
define('SITE_YOUTUBE', '#');

// Nav items used by includes/navbar.php
// key = matched against $current_page set on each page
// hrefs are clean (no .php) — .htaccess rewrites these internally to the
// matching .php file, and 301-redirects anyone who types .php back to clean.
$NAV_ITEMS = [
    'home'     => ['label' => 'Home',        'href' => './'],
    'about'    => ['label' => 'About Us',    'href' => 'about'],
    'approach' => ['label' => 'Our Approach','href' => 'approach'],
    'services' => ['label' => 'Services',    'href' => 'services'],
    'programs' => ['label' => 'Programs',    'href' => 'programs'],
    'gallery'  => ['label' => 'Gallery',     'href' => 'gallery'],
    'contact'  => ['label' => 'Contact Us',  'href' => 'contact'],
];
