<?php
// ---------------------------------------------------
// Rekha Foundation — Site-wide constants
// Update these in ONE place; every page pulls from here.
// ---------------------------------------------------

define('SITE_NAME', 'Jeevan Rekha Foundation');
define('SITE_TAGLINE', 'De-Addiction Center');
define('SITE_PHONE_DISPLAY', '92967 85775');
define('SITE_PHONE_TEL', '+919296785775');
define('SITE_EMAIL', 'care@rekhafoundation.com');
define('SITE_ADDRESS', 'Purvi Bypass Road, Jaipalpatti, Front of Honda Showroom, Madhepura, Bihar - 852113');
define('SITE_WHATSAPP', '919296785775');
define('SITE_MAPS_URL', 'https://www.google.com/maps/search/?api=1&query=' . urlencode(SITE_ADDRESS));

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
    'services' => ['label' => 'Services',    'href' => 'services'],
    'programs' => ['label' => 'Programs',    'href' => 'programs'],
    'gallery'  => ['label' => 'Gallery',     'href' => 'gallery'],
    'contact'  => ['label' => 'Contact Us',  'href' => 'contact'],
];
