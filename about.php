<?php
require_once 'includes/config.php';
$page_title = 'हमारे बारे में';
$page_description = 'जीवन रेखा फाउंडेशन की कहानी, हमारा दृष्टिकोण और नशा मुक्ति के प्रति हमारा समग्र दृष्टिकोण।';
$current_page = 'about';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>

    <!-- HERO -->
    <section class="relative min-h-[380px] md:min-h-[440px] flex items-end overflow-hidden">
        <div class="absolute inset-0 bg-surface-container-high"></div>
        <img src="assets/img/room2.jpeg" alt="जीवन रेखा फाउंडेशन परिसर" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
        <div class="absolute inset-0 bg-gradient-to-t from-primary-deep/95 via-primary-deep/60 to-primary-deep/20"></div>
        <div class="relative z-10 max-w-site mx-auto px-5 md:px-10 pb-12 md:pb-16 w-full reveal active">
            <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">हमारे बारे में</span>
            <h1 class="font-headline text-3xl md:text-5xl text-on-primary mt-4 max-w-2xl leading-[1.3]">
                नाम में ही हमारा विश्वास छुपा है।
            </h1>
        </div>
    </section>

    <!-- FOUNDING INFO STRIP -->
    <section class="bg-primary">
        <div class="max-w-site mx-auto px-5 md:px-10 py-8 grid grid-cols-1 sm:grid-cols-3 gap-6 text-center sm:text-left">
            <div class="flex items-center gap-3 justify-center sm:justify-start">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#D4AF37" stroke-width="2" class="shrink-0"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                <div>
                    <p class="font-headline text-lg text-on-primary">स्थापना 2024</p>
                    <p class="font-body text-xs text-on-primary/60">जीवन रेखा फाउंडेशन की शुरुआत</p>
                </div>
            </div>
            <div class="flex items-center gap-3 justify-center sm:justify-start">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#D4AF37" stroke-width="2" class="shrink-0"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <div>
                    <p class="font-headline text-lg text-on-primary">मधेपुरा, बिहार</p>
                    <p class="font-body text-xs text-on-primary/60">पूर्वी बाईपास रोड पर स्थित</p>
                </div>
            </div>
            <div class="flex items-center gap-3 justify-center sm:justify-start">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#D4AF37" stroke-width="2" class="shrink-0"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.8 1-1a5.5 5.5 0 0 0 0-7.6z"/></svg>
                <div>
                    <p class="font-headline text-lg text-on-primary">समग्र देखभाल</p>
                    <p class="font-body text-xs text-on-primary/60">मेडिकल, मानसिक व पारिवारिक</p>
                </div>
            </div>
        </div>
    </section>

    <!-- NAME STORY -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-20 grid grid-cols-1 md:grid-cols-[1fr_1.2fr] gap-12 items-start reveal">
        <div>
            <svg viewBox="0 0 200 200" class="w-full max-w-xs" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <rect width="200" height="200" rx="6" fill="#ddeaf2"/>
                <path d="M30 150 L55 90 L75 130 L95 70 L115 110 L145 60 L170 45"
                      fill="none" stroke="#006953" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="170" cy="45" r="6" fill="#D4AF37"/>
            </svg>
        </div>
        <div class="font-body text-on-background/75 leading-relaxed space-y-4 text-[15px] md:text-base">
            <p>"जीवन रेखा" का अर्थ है — <strong class="text-primary">जीवन की रेखा, एक लाइफलाइन</strong>। नशे से जूझ रहे हर व्यक्ति का जीवन एक टूटी हुई, बिखरी हुई रेखा जैसा महसूस हो सकता है — लेकिन हर रेखा को फिर से सीधा, स्थिर और स्पष्ट बनाया जा सकता है।</p>
            <p>यही विश्वास लेकर 2024 में जीवन रेखा फाउंडेशन की शुरुआत हुई — एक ऐसी जगह जहाँ मेडिकल विज्ञान, मानसिक स्वास्थ्य और पारिवारिक समझ मिलकर एक व्यक्ति को दोबारा खड़ा होने में मदद करते हैं। हम मानते हैं कि रिकवरी सज़ा नहीं, एक देखभाल भरी प्रक्रिया है।</p>
            <p>आज जीवन रेखा फाउंडेशन कई परिवारों के लिए वह पहला भरोसेमंद कदम बनने की दिशा में काम कर रहा है, जब वे नहीं जानते कि आगे क्या करें।</p>
        </div>
    </section>

    <!-- MISSION / VISION -->
    <section class="max-w-site mx-auto px-5 md:px-10 pb-20 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="glass-card p-10 rounded-card lift reveal">
            <h3 class="font-headline text-2xl text-primary mb-3">हमारा उद्देश्य</h3>
            <p class="font-body text-sm text-on-background/70 leading-relaxed">हर व्यक्ति को, उसकी पृष्ठभूमि या स्थिति चाहे जो हो, गरिमा के साथ सर्वोत्तम चिकित्सा और मानसिक देखभाल उपलब्ध कराना — बिना किसी निर्णय (judgement) के।</p>
        </div>
        <div class="glass-card p-10 rounded-card lift reveal">
            <h3 class="font-headline text-2xl text-primary mb-3">हमारी दृष्टि</h3>
            <p class="font-body text-sm text-on-background/70 leading-relaxed">एक ऐसा समाज जहाँ नशा मुक्ति को शर्म से नहीं, समझ और सहयोग से देखा जाए — और हर परिवार को सही समय पर सही मदद मिले।</p>
        </div>
    </section>

    <!-- CORE VALUES -->
    <section class="bg-surface-container-low py-24">
        <div class="max-w-site mx-auto px-5 md:px-10">
            <div class="text-center max-w-lg mx-auto mb-14 reveal">
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">हमारे मूल्य</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3">जो हमें दिशा देते हैं</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 reveal">
                <div class="text-center">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#006953" stroke-width="2"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.8 1-1a5.5 5.5 0 0 0 0-7.6z"/></svg>
                    </div>
                    <h4 class="font-headline text-base text-on-background mb-1">करुणा</h4>
                    <p class="font-body text-xs text-on-background/60">हर व्यक्ति को सम्मान और समझ के साथ देखना।</p>
                </div>
                <div class="text-center">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#006953" stroke-width="2"><rect x="5" y="11" width="14" height="9" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/></svg>
                    </div>
                    <h4 class="font-headline text-base text-on-background mb-1">गोपनीयता</h4>
                    <p class="font-body text-xs text-on-background/60">आपकी निजता की सख्त रक्षा हर कदम पर।</p>
                </div>
                <div class="text-center">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#006953" stroke-width="2"><path d="M9 12l2 2 4-4M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18z"/></svg>
                    </div>
                    <h4 class="font-headline text-base text-on-background mb-1">सत्यनिष्ठा</h4>
                    <p class="font-body text-xs text-on-background/60">पारदर्शी, ईमानदार और नैतिक देखभाल।</p>
                </div>
                <div class="text-center">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#006953" stroke-width="2"><path d="M19 14c1.5 0 3-1.5 3-3.5S20.5 7 19 7c-.4-2-2-3.5-4-3.5-1.2 0-2.3.6-3 1.5-.7-.9-1.8-1.5-3-1.5-2 0-3.6 1.5-4 3.5C3.5 7 2 8.5 2 10.5S3.5 14 5 14"/><path d="M8 14v3a4 4 0 0 0 8 0v-3"/></svg>
                    </div>
                    <h4 class="font-headline text-base text-on-background mb-1">उत्कृष्टता</h4>
                    <p class="font-body text-xs text-on-background/60">क्लिनिकल गुणवत्ता में कोई समझौता नहीं।</p>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR PROMISE -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-24">
        <div class="grid grid-cols-1 md:grid-cols-[0.8fr_1.2fr] gap-16 items-start">
            <div class="reveal">
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">हमारा वादा</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3 mb-6">हर परिवार से यह वादा</h2>
                <p class="font-body text-on-background/70 leading-relaxed">रिकवरी की यात्रा अनिश्चित हो सकती है — लेकिन हमारी प्रतिबद्धता नहीं। यह हम हर व्यक्ति और परिवार से वादा करते हैं।</p>
            </div>
            <div class="space-y-5 reveal">
                <div class="flex items-start gap-4 border-b border-outline-variant pb-5">
                    <span class="font-headline text-2xl text-highlight-gold shrink-0">01</span>
                    <div>
                        <h4 class="font-headline text-base text-on-background mb-1">बिना किसी निर्णय के स्वागत</h4>
                        <p class="font-body text-sm text-on-background/65">हर व्यक्ति की कहानी अलग होती है — हम सुनते हैं, आंकते नहीं।</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 border-b border-outline-variant pb-5">
                    <span class="font-headline text-2xl text-highlight-gold shrink-0">02</span>
                    <div>
                        <h4 class="font-headline text-base text-on-background mb-1">पारदर्शी संवाद</h4>
                        <p class="font-body text-sm text-on-background/65">उपचार, प्रगति और अगले कदम — परिवार को हमेशा सूचित रखा जाता है।</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 border-b border-outline-variant pb-5">
                    <span class="font-headline text-2xl text-highlight-gold shrink-0">03</span>
                    <div>
                        <h4 class="font-headline text-base text-on-background mb-1">व्यक्ति-केंद्रित योजना</h4>
                        <p class="font-body text-sm text-on-background/65">कोई भी दो उपचार योजनाएं एक जैसी नहीं होतीं।</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="font-headline text-2xl text-highlight-gold shrink-0">04</span>
                    <div>
                        <h4 class="font-headline text-base text-on-background mb-1">डिस्चार्ज के बाद भी साथ</h4>
                        <p class="font-body text-sm text-on-background/65">रिकवरी केंद्र से बाहर भी जारी रहती है — हम साथ रहते हैं।</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- APPROACH -->
    <section class="bg-surface-container-low py-24 reveal">
        <div class="max-w-site mx-auto px-5 md:px-10">
            <div class="max-w-lg mb-12">
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">हमारा दृष्टिकोण</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3">तीन आधार, एक साथ काम करते हुए</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="border-l-2 border-primary pl-6 py-2">
                    <h4 class="font-headline text-lg text-on-background mb-2">चिकित्सकीय</h4>
                    <p class="font-body text-sm text-on-background/70 leading-relaxed">योग्य डॉक्टरों की निगरानी में सुरक्षित डिटॉक्स और उपचार।</p>
                </div>
                <div class="border-l-2 border-highlight-gold pl-6 py-2">
                    <h4 class="font-headline text-lg text-on-background mb-2">मानसिक</h4>
                    <p class="font-body text-sm text-on-background/70 leading-relaxed">काउंसलिंग, थेरेपी और आत्म-समझ के माध्यम से भीतर से मजबूती।</p>
                </div>
                <div class="border-l-2 border-outline-variant pl-6 py-2">
                    <h4 class="font-headline text-lg text-on-background mb-2">पारिवारिक</h4>
                    <p class="font-body text-sm text-on-background/70 leading-relaxed">परिवार को साथ लेकर चलना, ताकि रिकवरी के बाद भी सहारा बना रहे।</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FACILITY GLIMPSE -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-24">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10 reveal">
            <div>
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">हमारा केंद्र</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3">एक झलक</h2>
            </div>
            <a href="gallery" class="inline-flex items-center gap-2 text-primary font-semibold hover:gap-3 transition-all">पूरी गैलरी देखें <span aria-hidden="true">→</span></a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 reveal">
            <div class="aspect-[4/3] rounded-card overflow-hidden relative group">
                <img src="assets/img/gate.jpeg" alt="प्रवेश द्वार" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" onerror="this.style.display='none'">
            </div>
            <div class="aspect-[4/3] rounded-card overflow-hidden relative group">
                <img src="assets/img/yoga.jpeg" alt="योग व ध्यान क्षेत्र" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" onerror="this.style.display='none'">
            </div>
            <div class="aspect-[4/3] rounded-card overflow-hidden relative group">
                <img src="assets/img/room1.jpeg" alt="रोगी कक्ष" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <!-- ABOUT FAQ -->
    <section class="bg-surface-container-low py-24 reveal">
        <div class="max-w-site mx-auto px-5 md:px-10">
            <div class="text-center max-w-lg mx-auto mb-14">
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">जानने योग्य</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3">अक्सर पूछे जाने वाले सवाल</h2>
            </div>
            <div class="max-w-2xl mx-auto space-y-4">
                <details class="glass-card rounded-card p-6 group">
                    <summary class="font-headline text-base text-on-background cursor-pointer list-none flex justify-between items-center gap-4">
                        क्या जीवन रेखा फाउंडेशन सिर्फ मधेपुरा के लोगों के लिए है?
                        <span class="text-primary shrink-0 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="font-body text-sm text-on-background/70 mt-4 leading-relaxed">नहीं, हम बिहार और उससे बाहर से भी परिवारों का स्वागत करते हैं। दूर से आने वालों के लिए भी सहयोग उपलब्ध है — हमसे संपर्क करें।</p>
                </details>
                <details class="glass-card rounded-card p-6 group">
                    <summary class="font-headline text-base text-on-background cursor-pointer list-none flex justify-between items-center gap-4">
                        क्या केवल गंभीर मामलों के लिए ही संपर्क करें?
                        <span class="text-primary shrink-0 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="font-body text-sm text-on-background/70 mt-4 leading-relaxed">नहीं, शुरुआती चरण में सहायता लेना सबसे प्रभावी होता है। हल्के से गंभीर — हर स्थिति के लिए हमारे पास कोई न कोई प्रोग्राम है।</p>
                </details>
                <details class="glass-card rounded-card p-6 group">
                    <summary class="font-headline text-base text-on-background cursor-pointer list-none flex justify-between items-center gap-4">
                        क्या पहली बातचीत के लिए केंद्र आना ज़रूरी है?
                        <span class="text-primary shrink-0 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="font-body text-sm text-on-background/70 mt-4 leading-relaxed">नहीं, पहली बातचीत फोन या व्हाट्सएप पर भी की जा सकती है। केंद्र आना केवल एडमिशन के समय आवश्यक होता है।</p>
                </details>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-24 reveal">
        <div class="bg-gradient-to-br from-primary to-primary-container rounded-card p-12 md:p-16 text-on-primary text-center">
            <h2 class="font-headline text-2xl md:text-3xl mb-4">हमारी टीम से मिलें, बात करें।</h2>
            <p class="font-body text-on-primary/80 mb-8 max-w-md mx-auto">गोपनीय और निःशुल्क पहली बातचीत के लिए आज ही संपर्क करें।</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="contact" class="inline-block bg-highlight-gold text-on-background px-8 py-4 rounded-card font-semibold hover:bg-highlight-gold/90 transition-colors">संपर्क करें</a>
                <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="inline-block border border-on-primary/40 text-on-primary px-8 py-4 rounded-card font-semibold hover:bg-on-primary/10 transition-colors">कॉल करें: <?php echo SITE_PHONE_DISPLAY; ?></a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
