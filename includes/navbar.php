<?php
// Requires $current_page (string key from $NAV_ITEMS) to be set by the calling page.
if (!isset($current_page)) { $current_page = ''; }
?>
<header class="sticky top-0 z-50 bg-background/95 backdrop-blur border-b border-outline-variant">
    <div class="max-w-site mx-auto px-5 md:px-10 h-20 flex items-center justify-between">

        <a href="./" class="flex items-center gap-3 group">
            <img src="assets/img/logo.jpeg" alt="<?php echo SITE_NAME; ?> Logo" class="h-14 w-14 object-contain shrink-0">
            <div class="flex flex-col leading-none">
                <span class="font-headline text-xl text-primary"><?php echo SITE_NAME; ?></span>
                <span class="font-body text-[11px] tracking-[0.15em] text-on-background/50 uppercase mt-1"><?php echo SITE_TAGLINE; ?></span>
            </div>
        </a>

        <nav class="hidden md:flex items-center gap-8 font-body text-[15px] font-medium">
            <?php foreach ($NAV_ITEMS as $key => $item): ?>
                <a href="<?php echo $item['href']; ?>"
                   class="relative py-1 transition-colors <?php echo $current_page === $key ? 'text-primary' : 'text-on-background/70 hover:text-primary'; ?>">
                    <?php echo $item['label']; ?>
                    <?php if ($current_page === $key): ?>
                        <span class="absolute left-0 -bottom-1 w-full h-[2px] bg-highlight-gold"></span>
                    <?php endif; ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <div class="flex items-center gap-3">
            <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="hidden md:inline-flex items-center gap-2 bg-primary text-on-primary px-5 py-2.5 rounded-card text-sm font-semibold hover:bg-primary-deep transition-colors">
                Talk Now
            </a>
            <button id="menu-toggle" class="md:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5" aria-label="Open menu">
                <span class="w-6 h-[2px] bg-on-background"></span>
                <span class="w-6 h-[2px] bg-on-background"></span>
                <span class="w-6 h-[2px] bg-on-background"></span>
            </button>
        </div>
    </div>

    <!-- Mobile menu -->
    <nav id="mobile-menu" class="hidden md:hidden flex-col bg-background border-t border-outline-variant px-5 py-4 gap-1 font-body text-[15px]">
        <?php foreach ($NAV_ITEMS as $key => $item): ?>
            <a href="<?php echo $item['href']; ?>" class="py-3 border-b border-outline-variant <?php echo $current_page === $key ? 'text-primary font-semibold' : 'text-on-background/70'; ?>">
                <?php echo $item['label']; ?>
            </a>
        <?php endforeach; ?>
        <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="mt-4 text-center bg-primary text-on-primary px-5 py-3 rounded-card text-sm font-semibold">
            Talk Now — <?php echo SITE_PHONE_DISPLAY; ?>
        </a>
    </nav>
</header>
