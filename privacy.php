<?php
require_once 'includes/config.php';
$page_title = 'Privacy Policy';
$page_description = 'Privacy Policy for Jeevan Rekha Foundation — what information we collect and how we use it.';
$current_page = '';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>

    <section class="max-w-site mx-auto px-5 md:px-10 pt-16 md:pt-24 pb-16 reveal active">
        <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Legal Information</span>
        <h1 class="font-headline text-3xl md:text-5xl text-on-background mt-4 max-w-2xl leading-[1.3]">Privacy Policy</h1>
        <p class="font-body text-on-background/60 mt-4 text-sm">Last updated: <?php echo date('d F Y'); ?></p>
    </section>

    <section class="max-w-site mx-auto px-5 md:px-10 pb-12 reveal">
        <div class="bg-highlight-gold/10 border border-highlight-gold/30 rounded-card p-5 md:p-6 max-w-3xl">
            <p class="font-body text-sm text-on-background/75 leading-relaxed">
                <strong class="text-on-background">Note:</strong> This is a general template policy, written to reflect what this website actually does (contact form, WhatsApp, Google Maps). Given health-related data is involved, we recommend having a legal advisor review this before publishing, to ensure compliance with applicable Indian regulations such as the Digital Personal Data Protection Act, 2023.
            </p>
        </div>
    </section>

    <section class="max-w-site mx-auto px-5 md:px-10 pb-24">
        <div class="max-w-3xl space-y-12 font-body text-on-background/75 leading-relaxed reveal">

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">1. Introduction</h2>
                <p><?php echo SITE_NAME; ?> ("we", "us", "our") respects your privacy. This policy explains what information we collect when you use our website, how we use it, and how we keep it secure.</p>
            </div>

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">2. Information We Collect</h2>
                <p class="mb-3">We only collect information you voluntarily give us:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li><strong>Contact form:</strong> When you fill out the form on our <a href="contact" class="text-primary hover:underline">Contact Us</a> page — your name, phone number, email (optional), and message.</li>
                    <li><strong>Phone & WhatsApp:</strong> When you call or WhatsApp us directly, that conversation falls under your own phone/WhatsApp provider's privacy policy.</li>
                </ul>
                <p class="mt-3">We do not use any advertising trackers or third-party analytics scripts.</p>
            </div>

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">3. How Information Is Used</h2>
                <p>Information from the contact form is used only to get in touch with you, answer your questions, and share information about treatment. It is never sold or rented to any third party.</p>
            </div>

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">4. Data Security</h2>
                <p>Information received through the contact form is stored securely on our server and is not publicly accessible. Only authorized team members have access to this information.</p>
            </div>

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">5. Third-Party Services</h2>
                <p class="mb-3">Our website uses the following external services, each governed by its own privacy policy:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li><strong>Google Fonts</strong> — to load the website's fonts.</li>
                    <li><strong>Google Maps</strong> — to show our location on the Contact page.</li>
                    <li><strong>WhatsApp</strong> — for direct-conversation convenience.</li>
                </ul>
            </div>

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">6. Data Retention</h2>
                <p>Contact form data is retained for as long as needed — to respond to your enquiry and for future reference. You may request deletion of your data at any time.</p>
            </div>

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">7. Your Rights</h2>
                <p>You have the right to view, correct, or request deletion of your information. To do so, please email us at <a href="mailto:<?php echo SITE_EMAIL; ?>" class="text-primary hover:underline"><?php echo SITE_EMAIL; ?></a>.</p>
            </div>

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">8. Children's Privacy</h2>
                <p>This website is not directly intended for individuals under 18 years of age. If help is needed for a minor, please reach out through a guardian or adult.</p>
            </div>

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">9. Changes to This Policy</h2>
                <p>We may update this policy from time to time. Any changes will be published on this page.</p>
            </div>

            <div>
                <h2 class="font-headline text-xl md:text-2xl text-primary mb-3">10. Contact Us</h2>
                <p>For any questions related to privacy:</p>
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
