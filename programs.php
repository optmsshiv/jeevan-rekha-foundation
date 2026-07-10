<?php
require_once 'includes/config.php';
$page_title = 'प्रोग्राम्स';
$page_description = 'जीवन रेखा फाउंडेशन के उपचार प्रोग्राम — एडमिशन से लेकर आफ्टरकेयर तक, पूरी रिकवरी यात्रा।';
$current_page = 'programs';
include 'includes/header.php';
include 'includes/navbar.php';

$stages = [
    [
        'title' => 'पहली बातचीत व मूल्यांकन',
        'desc'  => 'एक गोपनीय बातचीत में हम व्यक्ति की स्थिति समझते हैं और सही प्रोग्राम तय करते हैं। परिवार भी इस चरण में शामिल हो सकता है।',
    ],
    [
        'title' => 'एडमिशन',
        'desc'  => 'ज़रूरी कागज़ी कार्यवाही और स्वागत प्रक्रिया — सरल और तनावमुक्त रखी जाती है, ताकि व्यक्ति सहज महसूस करे।',
    ],
    [
        'title' => 'मेडिकल डिटॉक्स',
        'desc'  => 'चिकित्सकों की चौबीसों घंटे निगरानी में सुरक्षित विषहरण, शारीरिक स्थिरता को प्राथमिकता देते हुए।',
    ],
    [
        'title' => 'थेरेपी व पुनर्वास',
        'desc'  => 'व्यक्तिगत काउंसलिंग, समूह सत्र, योग और जीवन-कौशल — भीतर से मज़बूती बनाने के लिए।',
    ],
    [
        'title' => 'पारिवारिक पुनर्मिलन',
        'desc'  => 'परिवार के साथ सत्र, ताकि घर लौटने पर समझ और सहयोग का माहौल पहले से तैयार हो।',
    ],
    [
        'title' => 'आफ्टरकेयर',
        'desc'  => 'नियमित फॉलो-अप और सहयोग समूह, ताकि रिकवरी दीर्घकालिक और स्थिर बनी रहे।',
    ],
];
?>

<main>

    <!-- HERO -->
    <section class="relative min-h-[380px] md:min-h-[440px] flex items-end overflow-hidden">
        <div class="absolute inset-0 bg-surface-container-high"></div>
        <img src="assets/img/yoga.jpeg" alt="थेरेपी सत्र" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
        <div class="absolute inset-0 bg-gradient-to-t from-primary-deep/95 via-primary-deep/60 to-primary-deep/20"></div>
        <div class="relative z-10 max-w-site mx-auto px-5 md:px-10 pb-12 md:pb-16 w-full reveal active">
            <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">प्रोग्राम्स</span>
            <h1 class="font-headline text-3xl md:text-5xl text-on-primary mt-4 max-w-2xl leading-[1.3]">यह यात्रा, एक-एक कदम करके तय होती है</h1>
            <p class="font-body text-on-primary/80 mt-5 max-w-lg leading-relaxed">हर चरण को ध्यान से डिज़ाइन किया गया है — पहली बातचीत से लेकर स्थायी रिकवरी तक।</p>
        </div>
    </section>

    <!-- THE JOURNEY: vertical rekha-line connecting real sequential stages -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-24">
        <div class="relative pl-16 md:pl-20">
            <div class="journey-track" aria-hidden="true"></div>

            <?php foreach ($stages as $i => $stage): ?>
            <div class="relative mb-14 last:mb-0 reveal">
                <span class="stage-dot absolute -left-16 md:-left-20 top-1 w-[38px] h-[38px] rounded-full bg-primary text-on-primary font-headline text-sm flex items-center justify-center">
                    <?php echo $i + 1; ?>
                </span>
                <h3 class="font-headline text-xl md:text-2xl text-on-background mb-2"><?php echo $stage['title']; ?></h3>
                <p class="font-body text-sm md:text-base text-on-background/70 leading-relaxed max-w-xl"><?php echo $stage['desc']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- PROGRAM TYPES -->
    <section class="bg-surface-container-low py-24">
        <div class="max-w-site mx-auto px-5 md:px-10">
            <div class="text-center max-w-lg mx-auto mb-14 reveal">
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">प्रोग्राम के प्रकार</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3">आपकी स्थिति के अनुसार सही रास्ता</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 reveal">
                <div class="glass-card p-10 rounded-card lift">
                    <div class="w-14 h-14 bg-primary/10 rounded-card flex items-center justify-center mb-6">
                        <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="#006953" stroke-width="1.8"><path d="M3 18v-7a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v7M3 18h18M3 18v2M21 18v2M5 9V7a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2"/></svg>
                    </div>
                    <h3 class="font-headline text-2xl text-primary mb-3">आवासीय (Residential) प्रोग्राम</h3>
                    <p class="font-body text-sm text-on-background/70 leading-relaxed mb-6">पूर्ण देखभाल के लिए केंद्र में रहकर उपचार — गंभीर मामलों के लिए अनुशंसित।</p>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2 font-body text-xs text-on-background/65"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#006953" stroke-width="2.5"><path d="m5 12 5 5L20 7"/></svg> 24×7 मेडिकल निगरानी</li>
                        <li class="flex items-center gap-2 font-body text-xs text-on-background/65"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#006953" stroke-width="2.5"><path d="m5 12 5 5L20 7"/></svg> ट्रिगर-मुक्त, नियंत्रित वातावरण</li>
                        <li class="flex items-center gap-2 font-body text-xs text-on-background/65"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#006953" stroke-width="2.5"><path d="m5 12 5 5L20 7"/></svg> दैनिक थेरेपी व गतिविधियां</li>
                    </ul>
                </div>
                <div class="glass-card p-10 rounded-card lift">
                    <div class="w-14 h-14 bg-primary/10 rounded-card flex items-center justify-center mb-6">
                        <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="#006953" stroke-width="1.8"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M9 22V12h6v10"/></svg>
                    </div>
                    <h3 class="font-headline text-2xl text-primary mb-3">आउटपेशेंट प्रोग्राम</h3>
                    <p class="font-body text-sm text-on-background/70 leading-relaxed mb-6">घर पर रहते हुए नियमित सत्रों के साथ उपचार — रोज़मर्रा की ज़िंदगी जारी रखते हुए।</p>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2 font-body text-xs text-on-background/65"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#006953" stroke-width="2.5"><path d="m5 12 5 5L20 7"/></svg> लचीले शेड्यूल पर सत्र</li>
                        <li class="flex items-center gap-2 font-body text-xs text-on-background/65"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#006953" stroke-width="2.5"><path d="m5 12 5 5L20 7"/></svg> काम/पढ़ाई जारी रखने की सुविधा</li>
                        <li class="flex items-center gap-2 font-body text-xs text-on-background/65"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#006953" stroke-width="2.5"><path d="m5 12 5 5L20 7"/></svg> हल्के से मध्यम मामलों के लिए उपयुक्त</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-24 text-center reveal">
        <div class="bg-gradient-to-br from-primary to-primary-container rounded-card p-12 md:p-16 text-on-primary">
            <h2 class="font-headline text-2xl md:text-3xl mb-4">सही प्रोग्राम चुनने में हमारी मदद लें।</h2>
            <p class="font-body text-on-primary/80 mb-8 max-w-md mx-auto">मूल्यांकन कॉल पूरी तरह निःशुल्क और गोपनीय है।</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="contact" class="inline-block bg-highlight-gold text-on-background px-8 py-4 rounded-card font-semibold hover:bg-highlight-gold/90 transition-colors">निःशुल्क सलाह लें</a>
                <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="inline-block border border-on-primary/40 text-on-primary px-8 py-4 rounded-card font-semibold hover:bg-on-primary/10 transition-colors">कॉल करें: <?php echo SITE_PHONE_DISPLAY; ?></a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
