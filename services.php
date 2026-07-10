<?php
require_once 'includes/config.php';
$page_title = 'De-Addiction & Rehabilitation Services';
$page_description = 'Alcohol de-addiction, drug rehabilitation, medical detox, counselling, yoga, and family support programs at Jeevan Rekha Foundation, Madhepura, Bihar.';
$current_page = 'services';
include 'includes/header.php';
include 'includes/navbar.php';

$services = [
    [
        'title' => 'Alcohol De-Addiction',
        'desc'  => 'Scientific, proven medical programs to overcome dependency and restore liver health.',
        'icon'  => '<path d="M8 2v4M16 2v4M5 22V10a3 3 0 0 1 3-3h8a3 3 0 0 1 3 3v12"/><path d="M9 15c1 1 2 1 3 1s2 0 3-1"/>',
    ],
    [
        'title' => 'Drug Rehabilitation',
        'desc'  => 'Structured indoor and outdoor care for full recovery from substance dependency.',
        'icon'  => '<rect x="4" y="7" width="16" height="13" rx="2"/><path d="M9 7V5a3 3 0 0 1 6 0v2M12 11v5M9.5 13.5h5"/>',
    ],
    [
        'title' => 'Medical Detoxification',
        'desc'  => 'Safe detoxification under medical supervision, prioritizing patient comfort and stability.',
        'icon'  => '<path d="M9 12l2 2 4-4M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18z"/>',
    ],
    [
        'title' => 'Counselling & Therapy',
        'desc'  => 'Individual and group sessions using modern psychological techniques, including CBT.',
        'icon'  => '<path d="M19 14c1.5 0 3-1.5 3-3.5S20.5 7 19 7c-.4-2-2-3.5-4-3.5-1.2 0-2.3.6-3 1.5-.7-.9-1.8-1.5-3-1.5-2 0-3.6 1.5-4 3.5C3.5 7 2 8.5 2 10.5S3.5 14 5 14"/><path d="M8 14v3a4 4 0 0 0 8 0v-3"/>',
    ],
    [
        'title' => 'Yoga & Meditation',
        'desc'  => 'Holistic practices to reconnect mind and body, for lasting emotional balance.',
        'icon'  => '<circle cx="12" cy="6" r="3"/><path d="M12 9v4M8 22l4-6 4 6M6 15l6-2 6 2"/>',
    ],
    [
        'title' => 'Family Support Program',
        'desc'  => 'Giving families the understanding and tools to be part of their loved one\'s recovery journey.',
        'icon'  => '<path d="M17 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2M10 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>',
    ],
];
?>

<main>

    <!-- HERO -->
    <section class="relative min-h-[380px] md:min-h-[440px] flex items-end overflow-hidden">
        <div class="absolute inset-0 bg-surface-container-high"></div>
        <img src="assets/img/room1.jpeg" alt="Treatment session" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
        <div class="absolute inset-0 bg-gradient-to-t from-primary-deep/95 via-primary-deep/60 to-primary-deep/20"></div>
        <div class="relative z-10 max-w-site mx-auto px-5 md:px-10 pb-12 md:pb-16 w-full reveal active">
            <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Our Services</span>
            <h1 class="font-headline text-3xl md:text-5xl text-on-primary mt-4 max-w-2xl leading-[1.3]">A Clear Path for Every Stage of Care</h1>
            <p class="font-body text-on-primary/80 mt-5 max-w-lg leading-relaxed">Every person's journey is different — so our services are just as flexible and personal.</p>
        </div>
    </section>

    <!-- SERVICE CARDS -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-24 grid grid-cols-1 md:grid-cols-2 gap-6">
        <?php foreach ($services as $s): ?>
        <div class="glass-card p-8 md:p-10 rounded-card lift reveal flex gap-6">
            <div class="w-14 h-14 bg-primary/10 rounded-card flex items-center justify-center shrink-0">
                <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="#006953" stroke-width="1.8"><?php echo $s['icon']; ?></svg>
            </div>
            <div>
                <h3 class="font-headline text-xl text-primary mb-2"><?php echo $s['title']; ?></h3>
                <p class="font-body text-sm text-on-background/70 leading-relaxed"><?php echo $s['desc']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </section>

    <!-- YOGA & MEDITATION STRIP -->
    <section class="max-w-site mx-auto px-5 md:px-10 pb-24">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8 reveal">
            <div>
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">A Closer Look</span>
                <h2 class="font-headline text-2xl md:text-3xl text-on-background mt-2">Yoga & Meditation at Our Center</h2>
            </div>
            <a href="gallery" class="inline-flex items-center gap-2 text-primary font-semibold hover:gap-3 transition-all whitespace-nowrap">View Full Gallery <span aria-hidden="true">→</span></a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 reveal">
            <div class="aspect-square rounded-card overflow-hidden relative group bg-surface-container-high">
                <img src="assets/img/yoga-1.jpeg" alt="Yoga and meditation session" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" onerror="this.style.display='none'">
            </div>
            <div class="aspect-square rounded-card overflow-hidden relative group bg-surface-container-high">
                <img src="assets/img/yoga-2.jpeg" alt="Yoga and meditation session" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" onerror="this.style.display='none'">
            </div>
            <div class="aspect-square rounded-card overflow-hidden relative group bg-surface-container-high">
                <img src="assets/img/yoga-3.jpeg" alt="Yoga and meditation session" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" onerror="this.style.display='none'">
            </div>
            <div class="aspect-square rounded-card overflow-hidden relative group bg-surface-container-high">
                <img src="assets/img/yoga-4.jpeg" alt="Yoga and meditation session" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS TEASER -->
    <section class="bg-surface-container-low py-24">
        <div class="max-w-site mx-auto px-5 md:px-10">
            <div class="text-center max-w-lg mx-auto mb-14 reveal">
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Process</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3">Every Service Connects in This Order</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 reveal">
                <div class="text-center">
                    <div class="w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center font-headline font-bold mx-auto mb-4">1</div>
                    <h4 class="font-headline text-base text-on-background mb-1">Assessment</h4>
                    <p class="font-body text-xs text-on-background/60">A confidential conversation to choose the right service.</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center font-headline font-bold mx-auto mb-4">2</div>
                    <h4 class="font-headline text-base text-on-background mb-1">Treatment</h4>
                    <p class="font-body text-xs text-on-background/60">Detox, therapy, and services as needed.</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center font-headline font-bold mx-auto mb-4">3</div>
                    <h4 class="font-headline text-base text-on-background mb-1">Aftercare</h4>
                    <p class="font-body text-xs text-on-background/60">Long-term support and follow-up.</p>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="programs" class="inline-flex items-center gap-2 text-primary font-semibold hover:gap-3 transition-all">See the Full Process <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-24 text-center reveal">
        <div class="bg-primary-deep text-on-primary rounded-card p-12 md:p-16">
            <h2 class="font-headline text-2xl md:text-3xl mb-4">It's Hard to Know Where to Start.</h2>
            <p class="font-body text-on-primary/70 mb-8 max-w-md mx-auto">Our team will give you free guidance to choose the right program.</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="programs" class="inline-block bg-highlight-gold text-on-background px-8 py-4 rounded-card font-semibold hover:bg-highlight-gold/90 transition-colors">View Programs</a>
                <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="inline-block border border-on-primary/40 text-on-primary px-8 py-4 rounded-card font-semibold hover:bg-on-primary/10 transition-colors">Call: <?php echo SITE_PHONE_DISPLAY; ?></a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
