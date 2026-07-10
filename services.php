<?php
require_once 'includes/config.php';
$page_title = 'हमारी सेवाएं';
$page_description = 'जीवन रेखा फाउंडेशन की सेवाएं — शराब मुक्ति, ड्रग रिहैबिलिटेशन, मेडिकल डिटॉक्स, काउंसलिंग, योग और पारिवारिक सहयोग कार्यक्रम।';
$current_page = 'services';
include 'includes/header.php';
include 'includes/navbar.php';

$services = [
    [
        'title' => 'शराब मुक्ति उपचार',
        'desc'  => 'निर्भरता को दूर करने और लिवर की सेहत बहाल करने के लिए वैज्ञानिक और सिद्ध चिकित्सा कार्यक्रम।',
        'icon'  => '<path d="M8 2v4M16 2v4M5 22V10a3 3 0 0 1 3-3h8a3 3 0 0 1 3 3v12"/><path d="M9 15c1 1 2 1 3 1s2 0 3-1"/>',
    ],
    [
        'title' => 'ड्रग रिहैबिलिटेशन',
        'desc'  => 'नशीली दवाओं की लत से पूर्ण रूप से उबरने के लिए संरचित इनडोर व आउटडोर देखभाल।',
        'icon'  => '<rect x="4" y="7" width="16" height="13" rx="2"/><path d="M9 7V5a3 3 0 0 1 6 0v2M12 11v5M9.5 13.5h5"/>',
    ],
    [
        'title' => 'मेडिकल डिटॉक्सिफिकेशन',
        'desc'  => 'चिकित्सकों की निगरानी में सुरक्षित विषहरण, मरीज़ के आराम और स्थिरता को प्राथमिकता देते हुए।',
        'icon'  => '<path d="M9 12l2 2 4-4M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18z"/>',
    ],
    [
        'title' => 'काउंसलिंग व थेरेपी',
        'desc'  => 'व्यक्तिगत और समूह सत्र, आधुनिक मनोवैज्ञानिक तकनीकों (CBT सहित) के माध्यम से।',
        'icon'  => '<path d="M19 14c1.5 0 3-1.5 3-3.5S20.5 7 19 7c-.4-2-2-3.5-4-3.5-1.2 0-2.3.6-3 1.5-.7-.9-1.8-1.5-3-1.5-2 0-3.6 1.5-4 3.5C3.5 7 2 8.5 2 10.5S3.5 14 5 14"/><path d="M8 14v3a4 4 0 0 0 8 0v-3"/>',
    ],
    [
        'title' => 'योग व ध्यान',
        'desc'  => 'मन और शरीर को दोबारा जोड़ने के लिए समग्र आध्यात्मिक अभ्यास, दीर्घकालिक भावनात्मक संतुलन हेतु।',
        'icon'  => '<circle cx="12" cy="6" r="3"/><path d="M12 9v4M8 22l4-6 4 6M6 15l6-2 6 2"/>',
    ],
    [
        'title' => 'पारिवारिक सहयोग कार्यक्रम',
        'desc'  => 'परिवारों को समझ और उपकरण देकर, अपने प्रियजन की रिकवरी यात्रा में सहभागी बनाना।',
        'icon'  => '<path d="M17 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2M10 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>',
    ],
];
?>

<main>

    <!-- HERO -->
    <section class="relative min-h-[380px] md:min-h-[440px] flex items-end overflow-hidden">
        <div class="absolute inset-0 bg-surface-container-high"></div>
        <img src="assets/img/room1.jpeg" alt="उपचार सत्र" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
        <div class="absolute inset-0 bg-gradient-to-t from-primary-deep/95 via-primary-deep/60 to-primary-deep/20"></div>
        <div class="relative z-10 max-w-site mx-auto px-5 md:px-10 pb-12 md:pb-16 w-full reveal active">
            <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">हमारी सेवाएं</span>
            <h1 class="font-headline text-3xl md:text-5xl text-on-primary mt-4 max-w-2xl leading-[1.3]">देखभाल के हर चरण के लिए, एक स्पष्ट रास्ता</h1>
            <p class="font-body text-on-primary/80 mt-5 max-w-lg leading-relaxed">हर व्यक्ति की यात्रा अलग होती है — इसलिए हमारी सेवाएं भी उतनी ही लचीली और व्यक्तिगत हैं।</p>
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

    <!-- HOW IT WORKS TEASER -->
    <section class="bg-surface-container-low py-24">
        <div class="max-w-site mx-auto px-5 md:px-10">
            <div class="text-center max-w-lg mx-auto mb-14 reveal">
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">प्रक्रिया</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3">हर सेवा इस क्रम में जुड़ती है</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 reveal">
                <div class="text-center">
                    <div class="w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center font-headline font-bold mx-auto mb-4">1</div>
                    <h4 class="font-headline text-base text-on-background mb-1">मूल्यांकन</h4>
                    <p class="font-body text-xs text-on-background/60">सही सेवा चुनने के लिए गोपनीय बातचीत।</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center font-headline font-bold mx-auto mb-4">2</div>
                    <h4 class="font-headline text-base text-on-background mb-1">उपचार</h4>
                    <p class="font-body text-xs text-on-background/60">डिटॉक्स, थेरेपी और आवश्यकतानुसार सेवाएं।</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center font-headline font-bold mx-auto mb-4">3</div>
                    <h4 class="font-headline text-base text-on-background mb-1">आफ्टरकेयर</h4>
                    <p class="font-body text-xs text-on-background/60">दीर्घकालिक सहयोग और फॉलो-अप।</p>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="programs" class="inline-flex items-center gap-2 text-primary font-semibold hover:gap-3 transition-all">पूरी प्रक्रिया देखें <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-24 text-center reveal">
        <div class="bg-primary-deep text-on-primary rounded-card p-12 md:p-16">
            <h2 class="font-headline text-2xl md:text-3xl mb-4">यह तय करना मुश्किल है कि कहाँ से शुरू करें।</h2>
            <p class="font-body text-on-primary/70 mb-8 max-w-md mx-auto">हमारी टीम आपको सही प्रोग्राम चुनने में मुफ़्त सलाह देगी।</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="programs" class="inline-block bg-highlight-gold text-on-background px-8 py-4 rounded-card font-semibold hover:bg-highlight-gold/90 transition-colors">प्रोग्राम्स देखें</a>
                <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="inline-block border border-on-primary/40 text-on-primary px-8 py-4 rounded-card font-semibold hover:bg-on-primary/10 transition-colors">कॉल करें: <?php echo SITE_PHONE_DISPLAY; ?></a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
