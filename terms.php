<?php
require_once 'includes/config.php';
$page_title = 'Terms of Service';
$page_description = 'Terms of use for the Jeevan Rekha Foundation website.';
$current_page = '';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>

    <section class="max-w-site mx-auto px-5 md:px-10 pt-16 md:pt-24 pb-16 reveal active">
        <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Legal Information</span>
        <h1 class="font-headline text-3xl md:text-5xl text-on-background mt-4 max-w-2xl leading-[1.3]">Terms of Service</h1>
        <p class="font-body text-on-background/60 mt-4 text-sm">Last updated: <?php echo date('d F Y'); ?></p>
    </section>

    <section class="max-w-site mx-auto px-5 md:px-10 pb-12 reveal">
        <div class="bg-highlight-gold/10 border border-highlight-gold/30 rounded-card p-5 md:p-6 max-w-3xl">
            <p class="font-body text-sm text-on-background/75 leading-relaxed">
                <strong class="text-on-background">Note:</strong> This is a general template. As a healthcare provider, we recommend having a legal advisor review this before publishing, to ensure legal liability and compliance with local regulations are properly addressed.
            </p>
        </div>
    </section>

    <section class="max-w-site mx-auto px-5 md:px-10 pb-24">
        <div class="max-w-3xl space-y-12 font-body text-on-background/75 leading-relaxed reveal">

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">1. Acceptance of Terms</h2>
                <p>By using this website, you agree to these terms of service. If you do not agree with them, please do not use the website.</p>
            </div>

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">2. Purpose of This Website</h2>
                <p>This website provides general information about <?php echo SITE_NAME; ?> and our services. It should be used for informational purposes only.</p>
            </div>

            <div class="bg-surface-container-low rounded-card p-6 md:p-8 border-l-4 border-primary">
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">3. Medical Disclaimer</h2>
                <p class="mb-3">The information available on this website is for general informational purposes only and is not a substitute for the professional advice, diagnosis, or treatment of a qualified physician or mental health professional.</p>
                <p class="mb-3">Please always consult a qualified healthcare professional before making any medical decisions. Treatment outcomes can vary based on each person's circumstances, and nothing on this website guarantees any particular outcome.</p>
                <p><strong class="text-on-background">In an emergency:</strong> If you or someone you know is in immediate medical crisis, please go to the nearest hospital or contact local emergency services right away.</p>
            </div>

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">4. Intellectual Property</h2>
                <p>The content, design, logo, and text on this website are the property of <?php echo SITE_NAME; ?>. They may not be reproduced or used commercially without written permission.</p>
            </div>

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">5. External Links & Services</h2>
                <p>This website connects to external services such as Google Maps, Google Fonts, and WhatsApp. These services have their own separate terms and privacy policies, for which we are not responsible.</p>
            </div>

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">6. Limitation of Liability</h2>
                <p>We make efforts to ensure the accuracy of information on this website, but we will not be liable for any error, omission, or loss arising from use of the website, to the extent permitted by law.</p>
            </div>

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">7. Governing Law</h2>
                <p>These terms are governed by Indian law, and any disputes will be subject to the jurisdiction of the courts of Madhepura, Bihar.</p>
            </div>

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">8. Changes to These Terms</h2>
                <p>We may update these terms from time to time. Any changes will be published on this page.</p>
            </div>

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">9. Contact Us</h2>
                <p class="mt-2">
                    Phone: <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="text-primary hover:underline"><?php echo SITE_PHONE_DISPLAY; ?></a><br>
                    Email: <a href="mailto:<?php echo SITE_EMAIL; ?>" class="text-primary hover:underline"><?php echo SITE_EMAIL; ?></a><br>
                    Address: <?php echo SITE_ADDRESS; ?>
                </p>
            </div>

        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
