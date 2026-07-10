<?php
require_once 'includes/config.php';
$page_title = 'होम';
$page_description = 'जीवन रेखा फाउंडेशन — मधेपुरा, बिहार स्थित नशा मुक्ति केंद्र। मेडिकल डिटॉक्स, काउंसलिंग, योग और पारिवारिक सहयोग के साथ सम्मानजनक रिकवरी।';
$current_page = 'home';
?>
<!-- Top Contact Bar — index page only, sits above the shared navbar -->
<div class="hidden md:block bg-primary-deep text-on-primary">
    <div class="max-w-site mx-auto px-5 md:px-10 py-2.5 flex justify-between items-center text-xs font-body">
        <div class="flex gap-6 items-center">
            <span class="flex items-center gap-2">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18z"/></svg>
                सम्मानजनक व सुरक्षित देखभाल
                <!-- TODO: यदि केंद्र वास्तव में सरकारी पंजीकृत / ISO प्रमाणित है, तो सत्यापित विवरण के साथ यहां बदलें -->
            </span>
            <span class="flex items-center gap-2">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .3 2 .7 3a2 2 0 0 1-.4 2.1L8 10.3a16 16 0 0 0 6 6l1.5-1.4a2 2 0 0 1 2.1-.4c1 .4 2 .6 3 .7a2 2 0 0 1 1.7 2z"/></svg>
                24×7 हेल्पलाइन: <?php echo SITE_PHONE_DISPLAY; ?>
            </span>
            <span class="flex items-center gap-2">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v4M12 17h.01M10.3 3.9 1.8 18a2 2 0 0 0 1.7 3h17a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0z"/></svg>
                आपातकालीन एडमिशन उपलब्ध
            </span>
        </div>
        <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>" target="_blank" rel="noopener" class="bg-on-primary/15 px-3 py-1 rounded-full flex items-center gap-2 hover:bg-on-primary/25 transition-colors">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3a9 9 0 0 0-7.8 13.5L3 21l4.7-1.2A9 9 0 1 0 12 3z"/><path d="M8.5 9.5c.3 2.5 2.5 4.7 5 5" stroke-linecap="round"/></svg>
            व्हाट्सएप सहायता
        </a>
    </div>
</div>
<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>

    <!-- HERO — full-bleed photo with a shaded overlay for text legibility -->
    <section class="relative min-h-[620px] md:min-h-[680px] flex items-center overflow-hidden">
        <div class="absolute inset-0 bg-surface-container-high"></div>
        <img src="assets/img/outer.jpeg" alt="जीवन रेखा फाउंडेशन परिसर" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
        <div class="absolute inset-0 bg-gradient-to-r from-primary-deep/90 via-primary-deep/60 to-primary-deep/20"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-primary-deep/70 via-transparent to-transparent"></div>

        <div class="relative z-10 max-w-site mx-auto px-5 md:px-10 w-full">
            <div class="max-w-xl reveal active">
                <span class="inline-flex items-center gap-2 text-highlight-gold font-body text-xs tracking-[0.2em] uppercase mb-6">
                    <span class="h-px w-6 bg-highlight-gold"></span> बिहार का भरोसेमंद पुनर्वास केंद्र
                </span>
                <h1 class="font-headline text-3xl md:text-5xl leading-[1.25] text-on-primary mb-6">
                    प्रमाण-आधारित रिकवरी।<br>वैज्ञानिक उत्कृष्टता।
                </h1>
                <p class="font-body text-base md:text-lg text-on-primary/85 leading-relaxed mb-10 max-w-md">
                    आधुनिक मनोचिकित्सा और समग्र वेलनेस को जोड़कर, जीवन रेखा फाउंडेशन दीर्घकालिक सोबरायटी की ओर एक स्पष्ट चिकित्सकीय रास्ता प्रदान करता है।
                </p>
                <div class="flex flex-wrap gap-4 mb-16">
                    <a href="contact" class="bg-highlight-gold text-on-background px-7 py-3.5 rounded-card font-semibold hover:bg-highlight-gold/90 transition-colors">क्लिनिकल परामर्श बुक करें</a>
                    <a href="services" class="border border-on-primary/40 text-on-primary px-7 py-3.5 rounded-card font-semibold hover:bg-on-primary/10 transition-colors">उपचार योजनाएं देखें</a>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-4 gap-x-4 gap-y-6 pt-8 border-t border-on-primary/20">
                    <div>
                        <p class="font-headline text-2xl md:text-3xl text-highlight-gold">100+</p>
                        <p class="font-body text-[10px] md:text-xs text-on-primary/70 uppercase tracking-widest mt-1">परिवारों का भरोसा</p>
                    </div>
                    <div>
                        <p class="font-headline text-2xl md:text-3xl text-highlight-gold">24×7</p>
                        <p class="font-body text-[10px] md:text-xs text-on-primary/70 uppercase tracking-widest mt-1">मेडिकल सहायता</p>
                    </div>
                    <div>
                        <p class="font-headline text-2xl md:text-3xl text-highlight-gold">अनुभवी</p>
                        <p class="font-body text-[10px] md:text-xs text-on-primary/70 uppercase tracking-widest mt-1">चिकित्सा टीम</p>
                    </div>
                    <div>
                        <p class="font-headline text-2xl md:text-3xl text-highlight-gold">100%</p>
                        <p class="font-body text-[10px] md:text-xs text-on-primary/70 uppercase tracking-widest mt-1">गोपनीयता</p>
                    </div>
                </div>
                <!-- NOTE for dev: confirm/replace these figures with real numbers before
                     launch — for a healthcare service, stats read as factual claims. -->
            </div>
        </div>
    </section>

    <!-- METHODOLOGY -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-24 grid grid-cols-1 md:grid-cols-[0.85fr_1.15fr] gap-16">
        <div class="reveal">
            <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">हमारी पद्धति</span>
            <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3 mb-6">वैज्ञानिक रिकवरी प्रोटोकॉल</h2>
            <p class="font-body text-on-background/70 leading-relaxed mb-10">
                हम एक प्रमाण-आधारित, बहुआयामी दृष्टिकोण अपनाते हैं। हर रोगी को व्यक्तिगत पुनर्वास योजना के साथ प्राथमिकता दी जाती है।
            </p>
            <div class="space-y-5">
                <div class="flex items-start gap-4">
                    <div class="w-11 h-11 rounded-card bg-surface-container-high flex items-center justify-center shrink-0">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#006953" stroke-width="2"><path d="M9 12l2 2 4-4M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-headline text-base text-on-background">दिशा-निर्देशों का पालन</h4>
                        <p class="font-body text-sm text-on-background/60 mt-0.5">स्वास्थ्य एवं सुरक्षा मानकों के अनुरूप संचालन।</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-11 h-11 rounded-card bg-surface-container-high flex items-center justify-center shrink-0">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#006953" stroke-width="2"><path d="M19 14c1.5 0 3-1.5 3-3.5S20.5 7 19 7c-.4-2-2-3.5-4-3.5-1.2 0-2.3.6-3 1.5-.7-.9-1.8-1.5-3-1.5-2 0-3.6 1.5-4 3.5C3.5 7 2 8.5 2 10.5S3.5 14 5 14"/><path d="M8 14v3a4 4 0 0 0 8 0v-3"/></svg>
                    </div>
                    <div>
                        <h4 class="font-headline text-base text-on-background">मनोचिकित्सक-नेतृत्व</h4>
                        <p class="font-body text-sm text-on-background/60 mt-0.5">क्लिनिकल मूल्यांकन और मेडिकल डिटॉक्स की निगरानी।</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-11 h-11 rounded-card bg-surface-container-high flex items-center justify-center shrink-0">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#006953" stroke-width="2"><rect x="5" y="11" width="14" height="9" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/></svg>
                    </div>
                    <div>
                        <h4 class="font-headline text-base text-on-background">100% गोपनीय</h4>
                        <p class="font-body text-sm text-on-background/60 mt-0.5">सख्त डेटा गोपनीयता और निजी निवास प्रोटोकॉल।</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 reveal">
            <div class="glass-card p-7 rounded-card lift">
                <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="#006953" stroke-width="1.8" class="mb-5"><path d="M8 2v4M16 2v4M5 22V10a3 3 0 0 1 3-3h8a3 3 0 0 1 3 3v12"/><path d="M9 15c1 1 2 1 3 1s2 0 3-1"/></svg>
                <h3 class="font-headline text-lg text-primary mb-2">शराब मुक्ति उपचार</h3>
                <p class="font-body text-xs text-on-background/65 mb-4 leading-relaxed">सुरक्षित मेडिकल डिटॉक्स के बाद रिलैप्स-रोकथाम प्रशिक्षण और दीर्घकालिक सोबरायटी के लिए काउंसलिंग।</p>
                <a href="services" class="font-body text-xs font-semibold text-primary flex items-center gap-1.5 hover:gap-2.5 transition-all">क्लिनिकल विवरण <span aria-hidden="true">→</span></a>
            </div>
            <div class="glass-card p-7 rounded-card lift">
                <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="#006953" stroke-width="1.8" class="mb-5"><rect x="4" y="7" width="16" height="13" rx="2"/><path d="M9 7V5a3 3 0 0 1 6 0v2M12 11v5M9.5 13.5h5"/></svg>
                <h3 class="font-headline text-lg text-primary mb-2">पदार्थ नशा मुक्ति</h3>
                <p class="font-body text-xs text-on-background/65 mb-4 leading-relaxed">सिंथेटिक व प्राकृतिक पदार्थों की निर्भरता के लिए व्यापक, चिकित्सकीय निगरानी वाले प्रोटोकॉल।</p>
                <a href="services" class="font-body text-xs font-semibold text-primary flex items-center gap-1.5 hover:gap-2.5 transition-all">क्लिनिकल विवरण <span aria-hidden="true">→</span></a>
            </div>
            <div class="glass-card p-7 rounded-card lift">
                <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="#006953" stroke-width="1.8" class="mb-5"><path d="M19 14c1.5 0 3-1.5 3-3.5S20.5 7 19 7c-.4-2-2-3.5-4-3.5-1.2 0-2.3.6-3 1.5-.7-.9-1.8-1.5-3-1.5-2 0-3.6 1.5-4 3.5C3.5 7 2 8.5 2 10.5S3.5 14 5 14"/><path d="M8 14v3a4 4 0 0 0 8 0v-3"/></svg>
                <h3 class="font-headline text-lg text-primary mb-2">मानसिक स्वास्थ्य</h3>
                <p class="font-body text-xs text-on-background/65 mb-4 leading-relaxed">अवसाद, चिंता और तनाव-संबंधी स्थितियों का प्रमाणित क्लिनिकल साइकोलॉजिस्ट द्वारा उपचार।</p>
                <a href="services" class="font-body text-xs font-semibold text-primary flex items-center gap-1.5 hover:gap-2.5 transition-all">क्लिनिकल विवरण <span aria-hidden="true">→</span></a>
            </div>
            <div class="glass-card p-7 rounded-card lift">
                <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="#006953" stroke-width="1.8" class="mb-5"><path d="M17 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2M10 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <h3 class="font-headline text-lg text-primary mb-2">पारिवारिक परामर्श</h3>
                <p class="font-body text-xs text-on-background/65 mb-4 leading-relaxed">रिश्तों को फिर से मजबूत करने और घर पर सहायक वातावरण बनाने के लिए पारिवारिक सहयोग सत्र।</p>
                <a href="services" class="font-body text-xs font-semibold text-primary flex items-center gap-1.5 hover:gap-2.5 transition-all">क्लिनिकल विवरण <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>

    <!-- ABOUT TEASER -->
    <section class="bg-surface-container-low py-24">
        <div class="max-w-site mx-auto px-5 md:px-10 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="relative reveal">
                <div class="aspect-[4/5] rounded-card bg-surface-container-high flex items-center justify-center relative overflow-hidden border-4 border-white">
                    <!-- TODO: replace with -->
                    <img src="assets/img/admin.jpeg" alt="काउंसलिंग सत्र" class="w-full h-full object-cover">
                    <span class="absolute bottom-4 right-4 font-body text-[11px] text-on-background/40">काउंसलिंग सत्र</span>
                </div>
                
            </div>
            <div class="reveal">
                <span class="font-body text-xs tracking-[0.2em] uppercase text-highlight-gold font-semibold">हमारे केंद्र के बारे में</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3 mb-6">विज्ञान और सहानुभूति के साथ उपचार</h2>
                <p class="font-body text-on-background/70 leading-relaxed mb-8">
                    जीवन रेखा फाउंडेशन केवल एक पुनर्वास केंद्र नहीं — बदलाव की एक जगह है। हम आधुनिक मनोचिकित्सा को पारंपरिक स्वास्थ्य अभ्यासों के साथ जोड़कर एक बहुआयामी उपचार पद्धति अपनाते हैं।
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start gap-3">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#006953" stroke-width="2" class="shrink-0 mt-0.5"><circle cx="12" cy="12" r="9"/><path d="m8 12 3 3 5-6"/></svg>
                        <span class="font-body text-sm text-on-background/75">हर एडमिशन से पहले प्रमाणित मनोरोग मूल्यांकन</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#006953" stroke-width="2" class="shrink-0 mt-0.5"><circle cx="12" cy="12" r="9"/><path d="m8 12 3 3 5-6"/></svg>
                        <span class="font-body text-sm text-on-background/75">पौष्टिक, संतुलित भोजन शारीरिक रिकवरी के लिए</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#006953" stroke-width="2" class="shrink-0 mt-0.5"><circle cx="12" cy="12" r="9"/><path d="m8 12 3 3 5-6"/></svg>
                        <span class="font-body text-sm text-on-background/75">दीर्घकालिक सोबरायटी के लिए व्यक्तिगत आफ्टरकेयर प्लान</span>
                    </li>
                </ul>
                <a href="about" class="inline-flex items-center gap-2 text-primary font-semibold hover:gap-3 transition-all">
                    और जानें <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- RECOVERY PATHWAY -->
    <section class="bg-primary-deep">
        <div class="max-w-site mx-auto px-5 md:px-10 py-24">
            <div class="text-center max-w-xl mx-auto mb-16 reveal">
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">सोबरायटी की ओर रास्ता</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-primary mt-3">पूर्ण जीवन-पुनर्स्थापना की एक संरचित यात्रा</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 reveal">
                <div>
                    <div class="w-14 h-14 bg-highlight-gold text-on-background rounded flex items-center justify-center font-headline text-lg font-bold mb-5">01</div>
                    <h4 class="font-headline text-on-primary mb-2">मेडिकल मूल्यांकन</h4>
                    <p class="font-body text-xs text-on-primary/70 leading-relaxed mb-4">पूर्ण मनोरोग, शारीरिक और मनोवैज्ञानिक जांच से व्यक्तिगत योजना तैयार होती है।</p>
                    <div class="h-1 w-full bg-on-primary/15 rounded-full overflow-hidden"><div class="h-full w-1/4 bg-highlight-gold"></div></div>
                    <p class="font-body text-[10px] text-on-primary/50 uppercase tracking-widest mt-2">चरण की शुरुआत</p>
                </div>
                <div>
                    <div class="w-14 h-14 bg-on-primary text-primary rounded flex items-center justify-center font-headline text-lg font-bold mb-5">02</div>
                    <h4 class="font-headline text-on-primary mb-2">क्लिनिकल डिटॉक्स</h4>
                    <p class="font-body text-xs text-on-primary/70 leading-relaxed mb-4">चिकित्सक-निगरानी में विषहरण, अधिकतम आराम और सुरक्षा सुनिश्चित करते हुए।</p>
                    <div class="h-1 w-full bg-on-primary/15 rounded-full overflow-hidden"><div class="h-full w-2/4 bg-on-primary"></div></div>
                    <p class="font-body text-[10px] text-on-primary/50 uppercase tracking-widest mt-2">शारीरिक उपचार</p>
                </div>
                <div>
                    <div class="w-14 h-14 bg-on-primary text-primary rounded flex items-center justify-center font-headline text-lg font-bold mb-5">03</div>
                    <h4 class="font-headline text-on-primary mb-2">कोर थेरेपी</h4>
                    <p class="font-body text-xs text-on-primary/70 leading-relaxed mb-4">गहन काउंसलिंग, समूह सत्र और मनोवैज्ञानिक बदलाव के लिए समग्र कार्यशालाएं।</p>
                    <div class="h-1 w-full bg-on-primary/15 rounded-full overflow-hidden"><div class="h-full w-3/4 bg-on-primary"></div></div>
                    <p class="font-body text-[10px] text-on-primary/50 uppercase tracking-widest mt-2">व्यवहारिक बदलाव</p>
                </div>
                <div>
                    <div class="w-14 h-14 bg-on-primary text-primary rounded flex items-center justify-center font-headline text-lg font-bold mb-5">04</div>
                    <h4 class="font-headline text-on-primary mb-2">आफ्टरकेयर प्लानिंग</h4>
                    <p class="font-body text-xs text-on-primary/70 leading-relaxed mb-4">दीर्घकालिक सहयोग के लिए पुनर्एकीकरण रणनीतियां और सपोर्ट सिस्टम।</p>
                    <div class="h-1 w-full bg-on-primary/15 rounded-full overflow-hidden"><div class="h-full w-full bg-on-primary"></div></div>
                    <p class="font-body text-[10px] text-on-primary/50 uppercase tracking-widest mt-2">पूर्ण पुनर्स्थापना</p>
                </div>
            </div>
            <a href="programs" class="inline-flex items-center gap-2 mt-12 text-on-primary font-semibold hover:gap-3 transition-all">
                पूरी प्रक्रिया देखें <span aria-hidden="true">→</span>
            </a>
        </div>

        <div class="bg-highlight-gold">
            <div class="max-w-site mx-auto px-5 md:px-10 py-6 flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-3 text-on-background">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" class="shrink-0"><path d="M12 9v4M12 17h.01M10.3 3.9 1.8 18a2 2 0 0 0 1.7 3h17a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0z"/></svg>
                    <div>
                        <p class="font-body font-semibold text-sm">तुरंत एडमिशन चाहिए?</p>
                        <p class="font-body text-xs text-on-background/70">आपातकालीन प्रतिक्रिया टीम 24×7 उपलब्ध है।</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="bg-primary-deep text-on-primary px-5 py-2.5 rounded-card font-semibold text-sm flex items-center gap-2 hover:bg-primary transition-colors">
                        <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .3 2 .7 3a2 2 0 0 1-.4 2.1L8 10.3a16 16 0 0 0 6 6l1.5-1.4a2 2 0 0 1 2.1-.4c1 .4 2 .6 3 .7a2 2 0 0 1 1.7 2z"/></svg>
                        कॉल: <?php echo SITE_PHONE_DISPLAY; ?>
                    </a>
                    <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>" target="_blank" rel="noopener" class="bg-on-background text-highlight-gold px-5 py-2.5 rounded-card font-semibold text-sm hover:opacity-90 transition-opacity">
                        व्हाट्सएप करें
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FACILITIES PREVIEW -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-24">
        <div class="text-center mb-14 reveal">
            <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">हमारा केंद्र</span>
            <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3">हमारी सुविधाएं</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-4 md:h-[520px] reveal">
            <div class="md:col-span-2 md:row-span-2 relative rounded-card overflow-hidden bg-surface-container-high flex items-end p-6 min-h-[240px]">
                <img src="assets/img/yoga.jpeg" alt="ध्यान कक्ष" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
                <span class="font-headline text-lg text-on-background relative z-10">ध्यान कक्ष</span>
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
            </div>
            <div class="relative rounded-card overflow-hidden bg-surface-container-high flex items-end p-5 min-h-[140px]">
                <img src="assets/img/room1.jpeg" alt="आरामदायक कक्ष" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
                <span class="font-body text-sm text-on-background/70 relative z-10">आरामदायक कक्ष</span>
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
            </div>
            <div class="relative rounded-card overflow-hidden bg-surface-container-high flex items-end p-5 min-h-[140px]">
                <img src="assets/img/room2.jpeg" alt="शांत परिसर" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
                <span class="font-body text-sm text-on-background/70 relative z-10">शांत परिसर</span>
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
            </div>
            <div class="md:col-span-2 relative rounded-card overflow-hidden bg-surface-container-high flex items-end p-5 min-h-[140px]">
                <img src="assets/img/gate.jpeg" alt="वेलनेस क्षेत्र" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
                <span class="font-body text-sm text-on-background/70 relative z-10">वेलनेस क्षेत्र</span>
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
            </div>
        </div>
        <!-- Photos: drop files into assets/img/ using these exact names and they'll
             appear automatically, no code changes needed —
             facility-campus.jpg, facility-rooms.jpg, facility-meditation.jpg, facility-wellness.jpg
             Recommended: landscape, at least 1000px wide, under ~500KB each. -->
    </section>

    <!-- TEAM (generic roles — replace with real staff before launch) -->
    <section class="bg-surface-container-low py-24">
        <div class="max-w-site mx-auto px-5 md:px-10">
            <div class="text-center max-w-lg mx-auto mb-14 reveal">
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">हमारी टीम</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3">अनुभवी और समर्पित विशेषज्ञ</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 reveal">
                <div class="text-center">
                    <div class="w-32 h-32 mx-auto rounded-full bg-surface-container-high flex items-center justify-center mb-5 border-4 border-white">
                        <svg viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#3e4945" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.5-7 8-7s8 3 8 7"/></svg>
                    </div>
                    <h4 class="font-headline text-lg text-primary">वरिष्ठ मनोचिकित्सक</h4>
                    <p class="font-body text-sm text-on-background/60 mt-1">नशा मुक्ति चिकित्सा में विशेषज्ञ</p>
                </div>
                <div class="text-center">
                    <div class="w-32 h-32 mx-auto rounded-full bg-surface-container-high flex items-center justify-center mb-5 border-4 border-white">
                        <svg viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#3e4945" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.5-7 8-7s8 3 8 7"/></svg>
                    </div>
                    <h4 class="font-headline text-lg text-primary">क्लिनिकल साइकोलॉजिस्ट</h4>
                    <p class="font-body text-sm text-on-background/60 mt-1">काउंसलिंग व पारिवारिक थेरेपी विशेषज्ञ</p>
                </div>
                <div class="text-center">
                    <div class="w-32 h-32 mx-auto rounded-full bg-surface-container-high flex items-center justify-center mb-5 border-4 border-white">
                        <svg viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#3e4945" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.5-7 8-7s8 3 8 7"/></svg>
                    </div>
                    <h4 class="font-headline text-lg text-primary">वेलनेस कोच</h4>
                    <p class="font-body text-sm text-on-background/60 mt-1">योग व समग्र स्वास्थ्य मार्गदर्शन</p>
                </div>
            </div>
            <p class="font-body text-xs text-on-background/40 mt-8 text-center">
                <!-- TODO: वास्तविक टीम सदस्यों के नाम, योग्यता और तस्वीरें यहां जोड़ें -->
                वास्तविक टीम की जानकारी जल्द जोड़ी जाएगी।
            </p>
        </div>
    </section>

    <!-- QUOTE -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-24 reveal">
        <div class="bg-primary-deep text-on-primary rounded-card p-12 md:p-16 text-center">
            <p class="font-headline text-2xl md:text-3xl leading-relaxed max-w-2xl mx-auto">
                "रिकवरी आपकी कहानी का अंत नहीं — एक नए जीवन की <span class="text-highlight-gold">शुरुआत</span> है।"
            </p>
            <div class="flex items-center justify-center gap-3 mt-8">
                <span class="h-px w-10 bg-highlight-gold"></span>
                <span class="font-body text-xs tracking-[0.2em] uppercase text-highlight-gold">जीवन रेखा फाउंडेशन</span>
                <span class="h-px w-10 bg-highlight-gold"></span>
            </div>
        </div>
    </section>

    <!-- FAQ — two column, with callout quote -->
    <section class="max-w-site mx-auto px-5 md:px-10 pb-24 reveal">
        <div class="grid grid-cols-1 md:grid-cols-[0.85fr_1.15fr] gap-14">
            <div>
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">पारदर्शिता पहले</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3 mb-6">अक्सर पूछे जाने वाले सवाल</h2>
                <p class="font-body text-on-background/70 leading-relaxed mb-8">
                    हम पूर्ण पारदर्शिता में विश्वास रखते हैं। यदि आपके कोई और क्लिनिकल सवाल हैं, तो कृपया सीधे हमारी टीम से संपर्क करें।
                </p>
                <div class="glass-card rounded-card p-6 border-l-4 border-primary">
                    <p class="font-headline text-base text-on-background italic leading-relaxed">"रोगी की गोपनीयता हमारी सर्वोच्च नैतिक प्राथमिकता है। हम सख्त प्रोटोकॉल के साथ यह सुनिश्चित करते हैं कि आपकी जानकारी और निवास कभी उजागर न हो।"</p>
                    <p class="font-body text-xs text-on-background/50 mt-4">— चिकित्सा एवं परामर्श टीम</p>
                    <!-- NOTE for dev: attributed generically until a real named medical
                         board / director is confirmed for the site. -->
                </div>
            </div>

            <div class="space-y-4">
                <details class="glass-card rounded-card p-6 group">
                    <summary class="font-headline text-base text-on-background cursor-pointer list-none flex justify-between items-center gap-4">
                        प्रोग्राम की औसत अवधि कितनी होती है?
                        <span class="text-primary shrink-0 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="font-body text-sm text-on-background/70 mt-4 leading-relaxed">यह हर व्यक्ति की स्थिति पर निर्भर करता है। मूल्यांकन के बाद हमारी टीम सही अवधि सुझाएगी — <a href="programs" class="text-primary hover:underline">पूरी प्रक्रिया यहां देखें</a>।</p>
                </details>
                <details class="glass-card rounded-card p-6 group">
                    <summary class="font-headline text-base text-on-background cursor-pointer list-none flex justify-between items-center gap-4">
                        क्या 24×7 नर्सिंग व मेडिकल सहायता उपलब्ध है?
                        <span class="text-primary shrink-0 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="font-body text-sm text-on-background/70 mt-4 leading-relaxed">जी हां, हमारी टीम चौबीसों घंटे उपलब्ध रहती है ताकि आपातकालीन स्थिति में तुरंत सहायता मिल सके।</p>
                </details>
                <details class="glass-card rounded-card p-6 group">
                    <summary class="font-headline text-base text-on-background cursor-pointer list-none flex justify-between items-center gap-4">
                        केंद्र में क्या वस्तुएं प्रतिबंधित हैं?
                        <span class="text-primary shrink-0 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="font-body text-sm text-on-background/70 mt-4 leading-relaxed">सुरक्षा और उपचार प्रक्रिया की जानकारी एडमिशन से पहले हमारी टीम द्वारा विस्तार से समझाई जाती है।</p>
                </details>
                <details class="glass-card rounded-card p-6 group">
                    <summary class="font-headline text-base text-on-background cursor-pointer list-none flex justify-between items-center gap-4">
                        क्या इलाज के दौरान परिवार मिल सकता है?
                        <span class="text-primary shrink-0 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="font-body text-sm text-on-background/70 mt-4 leading-relaxed">हां, पारिवारिक सहयोग हमारी प्रक्रिया का अहम हिस्सा है। मुलाकात की विशिष्ट जानकारी हमारी टीम से लें।</p>
                </details>
                <details class="glass-card rounded-card p-6 group">
                    <summary class="font-headline text-base text-on-background cursor-pointer list-none flex justify-between items-center gap-4">
                        क्या डिस्चार्ज के बाद भी सहयोग मिलता है?
                        <span class="text-primary shrink-0 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="font-body text-sm text-on-background/70 mt-4 leading-relaxed">जी हां, हमारा आफ्टरकेयर प्लान नियमित फॉलो-अप और सहयोग समूहों के साथ दीर्घकालिक सोबरायटी में मदद करता है।</p>
                </details>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
