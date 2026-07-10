<?php
$services_list = [
    'Alcohol De-Addiction',
    'Drug Rehabilitation',
    'Medical Detoxification',
    'Counselling & Therapy',
    'Yoga & Meditation',
];
?>
<footer class="w-full bg-[#263238] text-white mt-32">
    <div class="max-w-site mx-auto px-5 md:px-10 pt-16 pb-10 grid grid-cols-1 md:grid-cols-[1.2fr_0.8fr_1fr_1fr] gap-10 border-b border-white/10">

        <!-- Brand -->
        <div class="flex flex-col gap-4">
            <div class="flex items-center gap-3">
                <img src="assets/img/logo.jpeg" alt="<?php echo SITE_NAME; ?> Logo" class="h-10 w-10 object-contain shrink-0 rounded-full bg-white">
                <span class="font-headline text-lg"><?php echo SITE_NAME; ?></span>
            </div>
            <p class="font-body text-sm text-white/65 leading-relaxed max-w-xs">
                A dignified path to recovery, through medical care, counselling, and family support.
            </p>
            <div class="flex gap-2.5">
                <a href="<?php echo SITE_FACEBOOK; ?>" aria-label="Facebook" class="w-9 h-9 rounded-full bg-[#1F8A70]/[.18] flex items-center justify-center text-[#1F8A70] hover:bg-[#1F8A70]/30 transition-colors">
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M14 9h3V6h-3c-2 0-3 1.2-3 3v2H9v3h2v7h3v-7h3l1-3h-4v-1c0-.6.4-1 1-1z"/></svg>
                </a>
                <a href="<?php echo SITE_INSTAGRAM; ?>" aria-label="Instagram" class="w-9 h-9 rounded-full bg-[#1F8A70]/[.18] flex items-center justify-center text-[#1F8A70] hover:bg-[#1F8A70]/30 transition-colors">
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg>
                </a>
                <a href="<?php echo SITE_YOUTUBE; ?>" aria-label="YouTube" class="w-9 h-9 rounded-full bg-[#1F8A70]/[.18] flex items-center justify-center text-[#1F8A70] hover:bg-[#1F8A70]/30 transition-colors">
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="5" width="20" height="14" rx="4"/><path d="M10 9l5 3-5 3V9z" fill="currentColor" stroke="none"/></svg>
                </a>
                <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>" target="_blank" rel="noopener" aria-label="WhatsApp" class="w-9 h-9 rounded-full bg-[#1F8A70]/[.18] flex items-center justify-center text-[#1F8A70] hover:bg-[#1F8A70]/30 transition-colors">
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3a9 9 0 0 0-7.8 13.5L3 21l4.7-1.2A9 9 0 1 0 12 3z"/><path d="M8.5 9.5c.3 2.5 2.5 4.7 5 5" stroke-linecap="round"/></svg>
                </a>
            </div>
        </div>

        <!-- Pages -->
        <div class="flex flex-col gap-3">
            <h4 class="font-body text-[11px] tracking-[0.15em] uppercase text-[#1F8A70] mb-1">Pages</h4>
            <?php foreach ($NAV_ITEMS as $item): ?>
                <a href="<?php echo $item['href']; ?>" class="font-body text-sm text-white/70 hover:text-white transition-colors w-fit"><?php echo $item['label']; ?></a>
            <?php endforeach; ?>
        </div>

        <!-- Services -->
        <div class="flex flex-col gap-3">
            <h4 class="font-body text-[11px] tracking-[0.15em] uppercase text-[#1F8A70] mb-1">Our Services</h4>
            <?php foreach ($services_list as $service): ?>
                <a href="services" class="font-body text-sm text-white/70 hover:text-white transition-colors w-fit"><?php echo $service; ?></a>
            <?php endforeach; ?>
        </div>

        <!-- Contact -->
        <div class="flex flex-col gap-3">
            <h4 class="font-body text-[11px] tracking-[0.15em] uppercase text-[#1F8A70] mb-1">Contact</h4>
            <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="font-body text-sm text-white/70 hover:text-white transition-colors flex items-center gap-2">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#1F8A70" stroke-width="2" class="shrink-0"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .3 2 .7 3a2 2 0 0 1-.4 2.1L8 10.3a16 16 0 0 0 6 6l1.5-1.4a2 2 0 0 1 2.1-.4c1 .4 2 .6 3 .7a2 2 0 0 1 1.7 2z"/></svg>
                <?php echo SITE_PHONE_DISPLAY; ?>
            </a>
            <a href="mailto:<?php echo SITE_EMAIL; ?>" class="font-body text-sm text-white/70 hover:text-white transition-colors flex items-center gap-2">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#1F8A70" stroke-width="2" class="shrink-0"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg>
                <?php echo SITE_EMAIL; ?>
            </a>
            <span class="font-body text-sm text-white/70 flex items-center gap-2">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#1F8A70" stroke-width="2" class="shrink-0"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <?php echo SITE_ADDRESS; ?>
            </span>
            <span class="font-body text-sm text-white/70 flex items-center gap-2">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#B86254" stroke-width="2" class="shrink-0"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                Available 24×7
            </span>
        </div>
    </div>

    <div class="max-w-site mx-auto px-5 md:px-10 py-5 flex flex-col md:flex-row justify-between items-center gap-2 text-xs text-white/45 font-body">
        <span>© <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</span>
        <div class="flex gap-6">
            <a href="privacy" class="hover:text-white/70 transition-colors">Privacy Policy</a>
            <a href="terms" class="hover:text-white/70 transition-colors">Terms of Service</a>
        </div>
    </div>
</footer>
<script src="assets/js/main.js"></script>
</body>
</html>
