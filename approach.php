<?php
require_once 'includes/config.php';
$page_title = 'Our Approach to De-Addiction Treatment';
$page_description = 'The seven pillars behind treatment at Jeevan Rekha Foundation — early intervention, medical and psychological care, family counselling, and more.';
$current_page = 'approach';
include 'includes/header.php';
include 'includes/navbar.php';

$pillars = [
    [
        'title' => 'Early Intervention',
        'hindi' => 'प्रारंभिक हस्तक्षेप',
        'desc'  => 'The earlier addiction is addressed, the easier recovery becomes. We work with families to recognize warning signs and act quickly, before dependency deepens and complications set in.',
        'icon'  => '<path d="M12 2v6M12 22v-6M4.9 4.9l4.2 4.2M14.9 14.9l4.2 4.2M2 12h6M16 12h6M4.9 19.1l4.2-4.2M14.9 9.1l4.2-4.2"/>',
        'image' => 'outer.jpeg',
    ],
    [
        'title' => 'Medical Treatment',
        'hindi' => 'चिकित्सा उपचार',
        'desc'  => 'Safe, physician-supervised detoxification that manages withdrawal symptoms and physical dependency, with continuous health monitoring throughout the treatment period.',
        'icon'  => '<path d="M9 12l2 2 4-4M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18z"/>',
        'image' => 'room1.jpeg',
    ],
    [
        'title' => 'Psychological Treatment',
        'hindi' => 'मनोवैज्ञानिक उपचार',
        'desc'  => 'Individual and group therapy to address the mental and emotional roots of addiction, helping patients understand their triggers and build lasting coping skills.',
        'icon'  => '<path d="M19 14c1.5 0 3-1.5 3-3.5S20.5 7 19 7c-.4-2-2-3.5-4-3.5-1.2 0-2.3.6-3 1.5-.7-.9-1.8-1.5-3-1.5-2 0-3.6 1.5-4 3.5C3.5 7 2 8.5 2 10.5S3.5 14 5 14"/><path d="M8 14v3a4 4 0 0 0 8 0v-3"/>',
        'image' => 'doctor-3.jpeg',
    ],
    [
        'title' => 'Family Counselling',
        'hindi' => 'पारिवारिक परामर्श',
        'desc'  => 'Recovery is stronger with family involved. We hold regular sessions to heal relationships, educate families about addiction, and prepare a supportive home environment.',
        'icon'  => '<path d="M17 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2M10 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>',
        'image' => 'office.jpeg',
    ],
    [
        'title' => 'Treating the Root Cause',
        'hindi' => 'मूल कारण का उपचार',
        'desc'  => 'Addiction is often a symptom of something deeper — trauma, stress, or an underlying mental health condition. We look past the symptom to treat what\'s actually driving it.',
        'icon'  => '<circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.9 4.9l2.8 2.8M16.3 16.3l2.8 2.8M2 12h4M18 12h4M4.9 19.1l2.8-2.8M16.3 7.7l2.8-2.8"/>',
        'image' => 'med1.jpeg',
    ],
    [
        'title' => 'Community Awareness',
        'hindi' => 'सामुदायिक जागरूकता',
        'desc'  => 'We run outreach and awareness programs across the region, helping communities understand addiction as a medical condition rather than a moral failing.',
        'icon'  => '<circle cx="9" cy="7" r="4"/><path d="M2 21v-2a4 4 0 0 1 4-4h6a4 4 0 0 1 4 4v2"/><path d="M17 3.13a4 4 0 0 1 0 7.75M21 21v-2a4 4 0 0 0-3-3.87"/>',
        'image' => 'outer.jpeg',
    ],
    [
        'title' => 'Reducing Stigma',
        'hindi' => 'कलंक को कम करना',
        'desc'  => 'Shame keeps people from seeking help. Through open conversation and education, we work to change how addiction and recovery are seen, so more people come forward sooner.',
        'icon'  => '<path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.8 1-1a5.5 5.5 0 0 0 0-7.6z"/>',
        'image' => null,
    ],
];
?>

<main>

    <!-- HERO -->
    <section class="relative min-h-[380px] md:min-h-[440px] flex items-end overflow-hidden">
        <div class="absolute inset-0 bg-surface-container-high"></div>
        <img src="assets/img/admin.jpeg" alt="Counselling session" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
        <div class="absolute inset-0 bg-gradient-to-t from-primary-deep/95 via-primary-deep/60 to-primary-deep/20"></div>
        <div class="relative z-10 max-w-site mx-auto px-5 md:px-10 pb-12 md:pb-16 w-full reveal active">
            <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Our Approach</span>
            <h1 class="font-headline text-3xl md:text-5xl text-on-primary mt-4 max-w-2xl leading-[1.3]">Seven Pillars Behind Every Treatment Plan</h1>
            <p class="font-body text-on-primary/80 mt-5 max-w-lg leading-relaxed">Recovery is rarely one-dimensional. Our approach treats the whole person — medically, psychologically, and within the context of family and community.</p>
        </div>
    </section>

    <!-- PILLARS -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-24">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php foreach ($pillars as $i => $p): ?>
            <div class="glass-card rounded-card lift reveal overflow-hidden <?php echo $i === 6 ? 'md:col-span-2' : ''; ?>">
                <?php if ($p['image']): ?>
                <div class="aspect-[16/9] relative">
                    <img src="assets/img/<?php echo $p['image']; ?>" alt="<?php echo $p['title']; ?>" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                </div>
                <?php endif; ?>
                <div class="p-8">
                    <div class="flex items-start gap-5">
                        <div class="w-14 h-14 bg-primary/10 rounded-card flex items-center justify-center shrink-0">
                            <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="#006953" stroke-width="1.8"><?php echo $p['icon']; ?></svg>
                        </div>
                        <div>
                            <h3 class="font-headline text-xl text-primary mb-0.5"><?php echo $p['title']; ?></h3>
                            <p class="font-body text-sm text-highlight-gold mb-3"><?php echo $p['hindi']; ?></p>
                            <p class="font-body text-sm text-on-background/70 leading-relaxed"><?php echo $p['desc']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- CTA -->
    <section class="max-w-site mx-auto px-5 md:px-10 pb-24 text-center reveal">
        <div class="bg-gradient-to-br from-primary to-primary-container rounded-card p-12 md:p-16 text-on-primary">
            <h2 class="font-headline text-2xl md:text-3xl mb-4">See How This Comes Together in Treatment</h2>
            <p class="font-body text-on-primary/80 mb-8 max-w-md mx-auto">Explore our programs and the step-by-step recovery journey.</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="programs" class="inline-block bg-highlight-gold text-on-background px-8 py-4 rounded-card font-semibold hover:bg-highlight-gold/90 transition-colors">View Programs</a>
                <a href="contact" class="inline-block border border-on-primary/40 text-on-primary px-8 py-4 rounded-card font-semibold hover:bg-on-primary/10 transition-colors">Contact Us</a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
