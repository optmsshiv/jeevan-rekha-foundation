<?php
require_once 'includes/config.php';
$page_title = 'पेज नहीं मिला';
$page_description = 'यह पेज उपलब्ध नहीं है।';
$current_page = '';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>
    <section class="max-w-site mx-auto px-5 md:px-10 pt-24 pb-32 text-center reveal active">
        <svg viewBox="0 0 200 200" class="w-40 h-40 mx-auto mb-8" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <rect width="200" height="200" rx="6" fill="#ddeaf2"/>
            <path d="M30 150 L60 90 L85 140 L110 70 L140 120 L170 60"
                  fill="none" stroke="#924538" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="6 8"/>
        </svg>
        <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">404</span>
        <h1 class="font-headline text-3xl md:text-4xl text-on-background mt-4 mb-4">यह रेखा यहाँ टूट जाती है</h1>
        <p class="font-body text-on-background/70 max-w-md mx-auto mb-10">जो पेज आप खोज रहे हैं वह मौजूद नहीं है या हटा दिया गया है। चलिए, आपको सही रास्ते पर वापस ले चलते हैं।</p>
        <a href="./" class="inline-block bg-primary text-on-primary px-8 py-4 rounded-card font-semibold hover:bg-primary-deep transition-colors">होम पेज पर जाएं</a>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
