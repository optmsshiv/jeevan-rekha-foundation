<?php
// Each page must set $page_title and $page_description before including this file.
if (!isset($page_title)) { $page_title = SITE_NAME; }
if (!isset($page_description)) { $page_description = 'जीवन रेखा फाउंडेशन — सम्मान, गोपनीयता और चिकित्सकीय देखभाल के साथ नशा मुक्ति की ओर एक नई शुरुआत।'; }
?>
<!DOCTYPE html>
<html lang="hi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $page_title; ?> | <?php echo SITE_NAME; ?></title>
<meta name="description" content="<?php echo $page_description; ?>">

<link rel="icon" href="assets/img/favicon.ico" sizes="any">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32.png">
<link rel="icon" type="image/png" sizes="48x48" href="assets/img/favicon-48.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="192x192" href="assets/img/android-chrome-192.png">

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
