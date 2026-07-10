<?php
// Each page must set $page_title and $page_description before including this file.
if (!isset($page_title)) { $page_title = SITE_NAME; }
if (!isset($page_description)) { $page_description = 'Jeevan Rekha Foundation — a new beginning towards a life free from addiction, with dignity, privacy, and medical care.'; }

// Canonical URL — built from the actual request so it works whether the
// page is hit via the clean URL (production, behind .htaccess) or the
// raw .php filename (local testing).
$request_path = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
$request_path = preg_replace('#\.php$#', '', $request_path);
if ($request_path === '' || $request_path === '/index') { $request_path = '/'; }
$canonical_url = rtrim(SITE_URL, '/') . $request_path;

// Default social-share image — override per page by setting $og_image before including this file.
if (!isset($og_image)) { $og_image = rtrim(SITE_URL, '/') . '/assets/img/outer.jpeg'; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $page_title; ?> | <?php echo SITE_NAME; ?></title>
<meta name="description" content="<?php echo $page_description; ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo $canonical_url; ?>">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
<meta property="og:title" content="<?php echo $page_title; ?> | <?php echo SITE_NAME; ?>">
<meta property="og:description" content="<?php echo $page_description; ?>">
<meta property="og:url" content="<?php echo $canonical_url; ?>">
<meta property="og:image" content="<?php echo $og_image; ?>">
<meta property="og:locale" content="en_IN">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $page_title; ?> | <?php echo SITE_NAME; ?>">
<meta name="twitter:description" content="<?php echo $page_description; ?>">
<meta name="twitter:image" content="<?php echo $og_image; ?>">

<link rel="icon" href="assets/img/favicon.ico" sizes="any">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32.png">
<link rel="icon" type="image/png" sizes="48x48" href="assets/img/favicon-48.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="192x192" href="assets/img/android-chrome-192.png">

<!-- Structured data: MedicalClinic — powers Google's local business panel,
     map pack eligibility, and rich results. Update medicalSpecialty/sameAs
     as appropriate; remove any sameAs entries that stay as "#" placeholders. -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalClinic",
    "name": "<?php echo SITE_NAME; ?>",
    "alternateName": "<?php echo SITE_TAGLINE; ?>",
    "url": "<?php echo SITE_URL; ?>",
    "logo": "<?php echo rtrim(SITE_URL, '/'); ?>/assets/img/logo.jpeg",
    "image": "<?php echo $og_image; ?>",
    "telephone": "<?php echo SITE_PHONE_TEL; ?>",
    "email": "<?php echo SITE_EMAIL; ?>",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?php echo SITE_ADDRESS_STREET; ?>",
        "addressLocality": "<?php echo SITE_ADDRESS_CITY; ?>",
        "addressRegion": "<?php echo SITE_ADDRESS_STATE; ?>",
        "postalCode": "<?php echo SITE_ADDRESS_ZIP; ?>",
        "addressCountry": "<?php echo SITE_ADDRESS_COUNTRY; ?>"
    },
    "medicalSpecialty": "Psychiatric",
    "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
    }<?php
    $sameAs = array_filter([SITE_FACEBOOK, SITE_INSTAGRAM, SITE_YOUTUBE], function ($u) { return $u !== '#' && $u !== ''; });
    if (!empty($sameAs)):
    ?>,
    "sameAs": <?php echo json_encode(array_values($sameAs)); ?>
    <?php endif; ?>
}
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- Rajdhani + Hind: the Devanagari/Latin equivalents of Montserrat + Inter
     (both from Indian Type Foundry, designed as a pair) — Montserrat/Inter
     themselves have no Hindi glyphs, so this keeps the same "confident
     geometric headline + neutral systematic body" feel the design system
     calls for while actually rendering the Hindi content. -->
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;600;700&family=Hind:wght@400;500;600;700&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    surface:                    '#f4faff',
                    'surface-dim':               '#cfdce4',
                    'surface-bright':            '#f4faff',
                    'surface-container-lowest':  '#ffffff',
                    'surface-container-low':     '#e9f6fd',
                    'surface-container':         '#e3f0f8',
                    'surface-container-high':    '#ddeaf2',
                    'surface-container-highest': '#d7e4ec',
                    'on-surface':                '#111d23',
                    'on-surface-variant':        '#3e4945',
                    'inverse-surface':           '#263238',
                    'inverse-on-surface':        '#e6f3fb',
                    outline:                     '#6e7a74',
                    'outline-variant':           '#bdc9c3',
                    'surface-tint':              '#006b55',
                    primary:                     '#006953',
                    'primary-deep':              '#005140',
                    'on-primary':                '#ffffff',
                    'primary-container':         '#13846a',
                    'on-primary-container':      '#f5fff9',
                    'inverse-primary':           '#78d8ba',
                    secondary:                   '#546067',
                    'on-secondary':              '#ffffff',
                    'secondary-container':       '#d7e4ec',
                    'on-secondary-container':    '#5a666d',
                    tertiary:                    '#924538',
                    'on-tertiary':               '#ffffff',
                    'tertiary-container':        '#b15c4f',
                    'on-tertiary-container':     '#fffbff',
                    error:                       '#ba1a1a',
                    'on-error':                  '#ffffff',
                    'error-container':           '#ffdad6',
                    'on-error-container':        '#93000a',
                    'primary-fixed':             '#94f5d6',
                    'primary-fixed-dim':         '#78d8ba',
                    'on-primary-fixed':          '#002018',
                    'on-primary-fixed-variant':  '#005140',
                    'secondary-fixed':           '#d7e4ec',
                    'secondary-fixed-dim':       '#bbc8d0',
                    'on-secondary-fixed':        '#111d23',
                    'on-secondary-fixed-variant':'#3c494f',
                    'tertiary-fixed':            '#ffdad4',
                    'tertiary-fixed-dim':        '#ffb4a7',
                    'on-tertiary-fixed':         '#3d0502',
                    'on-tertiary-fixed-variant': '#783025',
                    background:                  '#f4faff',
                    'on-background':             '#111d23',
                    'surface-variant':           '#d7e4ec',
                    'highlight-gold':            '#D4AF37',
                    'surface-white':             '#FFFFFF',
                    'glass-border':              'rgba(255, 255, 255, 0.4)',
                    'sky-tint':                  '#B9E5FB',
                },
                fontFamily: {
                    headline: ['"Rajdhani"', 'sans-serif'],
                    body: ['"Hind"', 'sans-serif'],
                },
                borderRadius: {
                    card: '20px',
                    full: '9999px',
                },
                maxWidth: {
                    site: '1200px',
                },
                spacing: {
                    base: '8px',
                    'container-desktop': '80px',
                    'container-mobile': '20px',
                    gutter: '24px',
                    section: '120px',
                },
            },
        },
    };
</script>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-gradient-to-b from-surface-white via-background to-sky-tint/30 text-on-background font-body antialiased overflow-x-hidden" data-whatsapp="<?php echo SITE_WHATSAPP; ?>">
