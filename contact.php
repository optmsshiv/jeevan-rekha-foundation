<?php
require_once 'includes/config.php';
$page_title = 'Contact Us';
$page_description = 'Contact Jeevan Rekha Foundation — by phone, email, or the form below. Every conversation stays completely confidential.';
$current_page = 'contact';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>

    <!-- HERO -->
    <section class="relative min-h-[380px] md:min-h-[440px] flex items-end overflow-hidden">
        <div class="absolute inset-0 bg-surface-container-high"></div>
        <img src="assets/img/outer.jpeg" alt="Jeevan Rekha Foundation campus" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
        <div class="absolute inset-0 bg-gradient-to-t from-primary-deep/95 via-primary-deep/60 to-primary-deep/20"></div>
        <div class="relative z-10 max-w-site mx-auto px-5 md:px-10 pb-12 md:pb-16 w-full reveal active">
            <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Contact Us</span>
            <h1 class="font-headline text-3xl md:text-5xl text-on-primary mt-4 max-w-2xl leading-[1.3]">Talking Is the First Step</h1>
            <p class="font-body text-on-primary/80 mt-5 max-w-lg leading-relaxed">Have a free, completely confidential conversation with our team. You are not alone.</p>
        </div>
    </section>

    <!-- TRUST ROW -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-14 grid grid-cols-1 sm:grid-cols-3 gap-6 reveal">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center shrink-0">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#006953" stroke-width="2"><rect x="5" y="11" width="14" height="9" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/></svg>
            </div>
            <div>
                <p class="font-headline text-base text-on-background">100% Confidential</p>
                <p class="font-body text-xs text-on-background/60">No information is ever shared</p>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center shrink-0">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#006953" stroke-width="2"><path d="M12 2v20M2 12h20"/></svg>
            </div>
            <div>
                <p class="font-headline text-base text-on-background">Free Consultation</p>
                <p class="font-body text-xs text-on-background/60">No charge for the first conversation</p>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center shrink-0">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#006953" stroke-width="2"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .3 2 .7 3a2 2 0 0 1-.4 2.1L8 10.3a16 16 0 0 0 6 6l1.5-1.4a2 2 0 0 1 2.1-.4c1 .4 2 .6 3 .7a2 2 0 0 1 1.7 2z"/></svg>
            </div>
            <div>
                <p class="font-headline text-base text-on-background">Fast Response</p>
                <p class="font-body text-xs text-on-background/60">24×7 emergency support</p>
            </div>
        </div>
    </section>

    <!-- EMERGENCY STRIP -->
    <section class="max-w-site mx-auto px-5 md:px-10 pb-16 reveal">
        <div class="bg-primary-deep text-on-primary rounded-card p-6 md:p-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <span class="w-3 h-3 rounded-full bg-highlight-gold shrink-0"></span>
                <p class="font-body text-sm md:text-base">Need urgent help? We're available 24×7.</p>
            </div>
            <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="bg-highlight-gold text-on-primary px-6 py-3 rounded-card font-semibold whitespace-nowrap hover:bg-highlight-gold/80 transition-colors">
                <?php echo SITE_PHONE_DISPLAY; ?>
            </a>
        </div>
    </section>

    <section class="max-w-site mx-auto px-5 md:px-10 pb-24 grid grid-cols-1 md:grid-cols-[1fr_1.2fr] gap-12">

        <!-- CONTACT INFO -->
        <div class="reveal flex flex-col gap-8">
            <div>
                <h3 class="font-body text-xs tracking-[0.2em] uppercase text-highlight-gold font-semibold mb-2">Phone</h3>
                <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="font-headline text-xl text-primary"><?php echo SITE_PHONE_DISPLAY; ?></a>
            </div>
            <div>
                <h3 class="font-body text-xs tracking-[0.2em] uppercase text-highlight-gold font-semibold mb-2">Email</h3>
                <a href="mailto:<?php echo SITE_EMAIL; ?>" class="font-headline text-xl text-primary break-all"><?php echo SITE_EMAIL; ?></a>
            </div>
            <div>
                <h3 class="font-body text-xs tracking-[0.2em] uppercase text-highlight-gold font-semibold mb-2">Address</h3>
                <p class="font-body text-on-background/80"><?php echo SITE_ADDRESS; ?></p>
            </div>
            <div>
                <h3 class="font-body text-xs tracking-[0.2em] uppercase text-highlight-gold font-semibold mb-2">WhatsApp</h3>
                <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>" target="_blank" rel="noopener" class="font-headline text-xl text-primary">Message us on WhatsApp</a>
            </div>

            <!-- Map: embedded via public Google Maps search embed (no API key needed) -->
            <div class="aspect-[4/3] rounded-card overflow-hidden glass-card">
                <iframe
                    src="https://maps.google.com/maps?q=<?php echo urlencode(SITE_ADDRESS); ?>&z=15&output=embed"
                    class="w-full h-full border-0"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="<?php echo SITE_NAME; ?> — map location">
                </iframe>
            </div>
            <a href="<?php echo SITE_MAPS_URL; ?>" target="_blank" rel="noopener" class="font-body text-sm text-primary hover:underline w-fit">View on Google Maps →</a>
        </div>

        <!-- CONTACT FORM — submits to api/contact.php (validates, logs to
             data/inquiries.csv, and attempts an email notification). -->
        <form id="contact-form" action="api/contact.php" method="POST" class="reveal glass-card p-8 md:p-10 rounded-card flex flex-col gap-5">
            <!-- Honeypot: hidden from real users via CSS below, bots often fill it in -->
            <div style="position:absolute; left:-9999px;" aria-hidden="true">
                <label for="website">Website</label>
                <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
            </div>
            <div>
                <label for="name" class="font-body text-sm text-on-background/70 block mb-2">Full Name</label>
                <input type="text" id="name" name="name" required
                       class="w-full px-4 py-3 rounded-card bg-background border border-outline-variant focus:border-primary outline-none transition-colors font-body">
            </div>
            <div>
                <label for="phone" class="font-body text-sm text-on-background/70 block mb-2">Phone Number</label>
                <input type="tel" id="phone" name="phone" required
                       class="w-full px-4 py-3 rounded-card bg-background border border-outline-variant focus:border-primary outline-none transition-colors font-body">
            </div>
            <div>
                <label for="email" class="font-body text-sm text-on-background/70 block mb-2">Email (optional)</label>
                <input type="email" id="email" name="email"
                       class="w-full px-4 py-3 rounded-card bg-background border border-outline-variant focus:border-primary outline-none transition-colors font-body">
            </div>
            <div>
                <label for="message" class="font-body text-sm text-on-background/70 block mb-2">Message</label>
                <textarea id="message" name="message" rows="4" required
                          class="w-full px-4 py-3 rounded-card bg-background border border-outline-variant focus:border-primary outline-none transition-colors font-body resize-none"></textarea>
            </div>
            <button type="submit" class="bg-primary text-on-primary px-8 py-3.5 rounded-card font-semibold hover:bg-primary-deep transition-colors">
                Send Message
            </button>
            <p id="contact-form-error" class="font-body text-xs text-red-600 text-center hidden"></p>
            <p class="font-body text-xs text-on-background/50 text-center">Your information will be kept completely confidential.</p>
        </form>

    </section>

</main>

<?php include 'includes/footer.php'; ?>
