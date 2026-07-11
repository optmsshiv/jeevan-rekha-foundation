<?php
require_once 'includes/config.php';
$page_title = 'De-Addiction Center in Madhepura, Bihar';
$page_description = 'Jeevan Rekha Foundation is a trusted de-addiction and rehabilitation center in Madhepura, Bihar, offering medical detox, counselling, yoga, and family support for lasting recovery.';
$current_page = 'home';
?>
    <!-- Top Contact Bar — index page only, sits above the shared navbar -->
    <div class="hidden md:block bg-primary-deep text-on-primary">
        <div class="max-w-site mx-auto px-5 md:px-10 py-2.5 flex justify-between items-center text-xs font-body">
            <div class="flex gap-6 items-center">
            <span class="flex items-center gap-2">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18z"/></svg>
                Dignified & Safe Care
                <!-- TODO: if the center is genuinely government-registered / ISO certified, replace with the verified claim here -->
            </span>
                <span class="flex items-center gap-2">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .3 2 .7 3a2 2 0 0 1-.4 2.1L8 10.3a16 16 0 0 0 6 6l1.5-1.4a2 2 0 0 1 2.1-.4c1 .4 2 .6 3 .7a2 2 0 0 1 1.7 2z"/></svg>
                24×7 Helpline: <?php echo SITE_PHONE_DISPLAY; ?>
            </span>
                <span class="flex items-center gap-2">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v4M12 17h.01M10.3 3.9 1.8 18a2 2 0 0 0 1.7 3h17a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0z"/></svg>
                Emergency Admission Available
            </span>
            </div>
            <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>" target="_blank" rel="noopener" class="bg-on-primary/15 px-3 py-1 rounded-full flex items-center gap-2 hover:bg-on-primary/25 transition-colors">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3a9 9 0 0 0-7.8 13.5L3 21l4.7-1.2A9 9 0 1 0 12 3z"/><path d="M8.5 9.5c.3 2.5 2.5 4.7 5 5" stroke-linecap="round"/></svg>
                WhatsApp Support
            </a>
        </div>
    </div>
<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

    <main>

        <!-- HERO — full-bleed photo with a light wash overlay (left to right) for text legibility -->
        <section class="relative min-h-[620px] md:min-h-[680px] flex items-center overflow-hidden">
            <div class="absolute inset-0 bg-surface-container-high"></div>
            <img src="assets/img/outer.jpeg" alt="Jeevan Rekha Foundation campus" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
            <div class="absolute inset-0 bg-gradient-to-r from-white/98 via-white/75 to-white/20"></div>

            <div class="relative z-10 max-w-site mx-auto px-5 md:px-10 w-full">
                <div class="max-w-xl reveal active">
                <span class="inline-flex items-center gap-2 bg-red-50 shadow-sm text-on-background font-body text-xs font-semibold px-4 py-2.5 rounded-full mb-6">
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#924538" stroke-width="2.5" class="shrink-0"><path d="M12 9v4M12 17h.01M10.3 3.9 1.8 18a2 2 0 0 0 1.7 3h17a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0z"/></svg>
                    24×7 Emergency Admission Available
                </span>
                    <h1 class="font-headline text-3xl md:text-5xl leading-[1.25] text-on-background mb-6">
                        Evidence-Based Recovery.<br><span class="text-primary">Scientific Excellence.</span>
                    </h1>
                    <p class="font-body text-base md:text-lg text-on-background/70 leading-relaxed mb-10 max-w-md">
                        Bihar's first rehabilitation center built on love and care, Jeevan Rekha Foundation combines modern psychiatry with holistic wellness for a clear medical path toward lasting sobriety.
                    </p>
                    <div class="flex flex-wrap gap-4 mb-16">
                        <a href="contact" class="bg-highlight-gold text-on-background px-7 py-3.5 rounded-card font-semibold hover:bg-highlight-gold/90 transition-colors">Book a Clinical Consult</a>
                        <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="bg-primary text-on-primary px-7 py-3.5 rounded-card font-semibold hover:bg-primary-deep transition-colors flex items-center gap-2">
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .3 2 .7 3a2 2 0 0 1-.4 2.1L8 10.3a16 16 0 0 0 6 6l1.5-1.4a2 2 0 0 1 2.1-.4c1 .4 2 .6 3 .7a2 2 0 0 1 1.7 2z"/></svg>
                            Call Now
                        </a>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-x-4 gap-y-3">
                        <div class="flex items-center gap-2">
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="#006953" class="shrink-0"><circle cx="12" cy="12" r="10"/><path d="m8.5 12.5 2.5 2.5 5-5" stroke="white" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <span class="font-body text-sm text-on-background/80">Medical Detox</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="#006953" class="shrink-0"><circle cx="12" cy="12" r="10"/><path d="m8.5 12.5 2.5 2.5 5-5" stroke="white" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <span class="font-body text-sm text-on-background/80">Counselling</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="#006953" class="shrink-0"><circle cx="12" cy="12" r="10"/><path d="m8.5 12.5 2.5 2.5 5-5" stroke="white" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <span class="font-body text-sm text-on-background/80">Family Support</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="#006953" class="shrink-0"><circle cx="12" cy="12" r="10"/><path d="m8.5 12.5 2.5 2.5 5-5" stroke="white" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <span class="font-body text-sm text-on-background/80">Aftercare</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-x-4 gap-y-6 pt-8 mt-8 border-t border-outline-variant">
                        <div>
                            <p class="font-headline text-2xl md:text-3xl text-primary">100+</p>
                            <p class="font-body text-[10px] md:text-xs text-on-background/60 uppercase tracking-widest mt-1">Families Trust Us</p>
                        </div>
                        <div>
                            <p class="font-headline text-2xl md:text-3xl text-primary">24×7</p>
                            <p class="font-body text-[10px] md:text-xs text-on-background/60 uppercase tracking-widest mt-1">Medical Support</p>
                        </div>
                        <div>
                            <p class="font-headline text-2xl md:text-3xl text-primary">Experienced</p>
                            <p class="font-body text-[10px] md:text-xs text-on-background/60 uppercase tracking-widest mt-1">Medical Team</p>
                        </div>
                        <div>
                            <p class="font-headline text-2xl md:text-3xl text-primary">100%</p>
                            <p class="font-body text-[10px] md:text-xs text-on-background/60 uppercase tracking-widest mt-1">Confidential</p>
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
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Our Methodology</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3 mb-6">Scientific Recovery Protocol</h2>
                <p class="font-body text-on-background/70 leading-relaxed mb-10">
                    We follow an evidence-based, multidisciplinary approach. Every patient is given priority with a personalized rehabilitation plan.
                </p>
                <div class="space-y-5">
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 rounded-card bg-surface-container-high flex items-center justify-center shrink-0">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#006953" stroke-width="2"><path d="M9 12l2 2 4-4M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-headline text-base text-on-background">Guideline-Compliant</h4>
                            <p class="font-body text-sm text-on-background/60 mt-0.5">Operations aligned with health and safety standards.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 rounded-card bg-surface-container-high flex items-center justify-center shrink-0">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#006953" stroke-width="2"><path d="M19 14c1.5 0 3-1.5 3-3.5S20.5 7 19 7c-.4-2-2-3.5-4-3.5-1.2 0-2.3.6-3 1.5-.7-.9-1.8-1.5-3-1.5-2 0-3.6 1.5-4 3.5C3.5 7 2 8.5 2 10.5S3.5 14 5 14"/><path d="M8 14v3a4 4 0 0 0 8 0v-3"/></svg>
                        </div>
                        <div>
                            <h4 class="font-headline text-base text-on-background">Psychiatrist-Led</h4>
                            <p class="font-body text-sm text-on-background/60 mt-0.5">Clinical assessment and medical detox under supervision.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 rounded-card bg-surface-container-high flex items-center justify-center shrink-0">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#006953" stroke-width="2"><rect x="5" y="11" width="14" height="9" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/></svg>
                        </div>
                        <div>
                            <h4 class="font-headline text-base text-on-background">100% Confidential</h4>
                            <p class="font-body text-sm text-on-background/60 mt-0.5">Strict data privacy and residency protocols.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 reveal">
                <div class="glass-card p-7 rounded-card lift">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="#006953" stroke-width="1.8" class="mb-5"><path d="M8 2v4M16 2v4M5 22V10a3 3 0 0 1 3-3h8a3 3 0 0 1 3 3v12"/><path d="M9 15c1 1 2 1 3 1s2 0 3-1"/></svg>
                    <h3 class="font-headline text-lg text-primary mb-2">Alcohol De-Addiction</h3>
                    <p class="font-body text-xs text-on-background/65 mb-4 leading-relaxed">Safe medical detox followed by relapse-prevention training and counselling for lasting sobriety.</p>
                    <a href="services" class="font-body text-xs font-semibold text-primary flex items-center gap-1.5 hover:gap-2.5 transition-all">Clinical Details <span aria-hidden="true">→</span></a>
                </div>
                <div class="glass-card p-7 rounded-card lift">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="#006953" stroke-width="1.8" class="mb-5"><rect x="4" y="7" width="16" height="13" rx="2"/><path d="M9 7V5a3 3 0 0 1 6 0v2M12 11v5M9.5 13.5h5"/></svg>
                    <h3 class="font-headline text-lg text-primary mb-2">Substance De-Addiction</h3>
                    <p class="font-body text-xs text-on-background/65 mb-4 leading-relaxed">Comprehensive, medically supervised protocols for synthetic and natural substance dependency.</p>
                    <a href="services" class="font-body text-xs font-semibold text-primary flex items-center gap-1.5 hover:gap-2.5 transition-all">Clinical Details <span aria-hidden="true">→</span></a>
                </div>
                <div class="glass-card p-7 rounded-card lift">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="#006953" stroke-width="1.8" class="mb-5"><path d="M19 14c1.5 0 3-1.5 3-3.5S20.5 7 19 7c-.4-2-2-3.5-4-3.5-1.2 0-2.3.6-3 1.5-.7-.9-1.8-1.5-3-1.5-2 0-3.6 1.5-4 3.5C3.5 7 2 8.5 2 10.5S3.5 14 5 14"/><path d="M8 14v3a4 4 0 0 0 8 0v-3"/></svg>
                    <h3 class="font-headline text-lg text-primary mb-2">Mental Wellness</h3>
                    <p class="font-body text-xs text-on-background/65 mb-4 leading-relaxed">Treatment of depression, anxiety, and stress-related conditions by certified clinical psychologists.</p>
                    <a href="services" class="font-body text-xs font-semibold text-primary flex items-center gap-1.5 hover:gap-2.5 transition-all">Clinical Details <span aria-hidden="true">→</span></a>
                </div>
                <div class="glass-card p-7 rounded-card lift">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="#006953" stroke-width="1.8" class="mb-5"><path d="M17 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2M10 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    <h3 class="font-headline text-lg text-primary mb-2">Family Counselling</h3>
                    <p class="font-body text-xs text-on-background/65 mb-4 leading-relaxed">Family support sessions to rebuild relationships and create a supportive home environment.</p>
                    <a href="services" class="font-body text-xs font-semibold text-primary flex items-center gap-1.5 hover:gap-2.5 transition-all">Clinical Details <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>

        <!-- ABOUT TEASER -->
        <section class="bg-surface-container-low py-24">
            <div class="max-w-site mx-auto px-5 md:px-10 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="relative reveal">
                    <div class="aspect-[4/5] rounded-card bg-surface-container-high flex items-center justify-center relative overflow-hidden border-4 border-white">
                        <img src="assets/img/admin.jpeg" alt="Counselling session" class="w-full h-full object-cover">
                        <span class="absolute bottom-4 right-4 font-body text-[11px] text-on-background/40">Counselling Session</span>
                    </div>
                </div>
                <div class="reveal">
                    <span class="font-body text-xs tracking-[0.2em] uppercase text-highlight-gold font-semibold">About Our Center</span>
                    <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3 mb-6">Healing with Science and Empathy</h2>
                    <p class="font-body text-on-background/70 leading-relaxed mb-8">
                        Jeevan Rekha Foundation is more than a rehabilitation center — it's a place of transformation. We combine modern psychiatry with traditional wellness practices in a multidisciplinary approach to treatment.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#006953" stroke-width="2" class="shrink-0 mt-0.5"><circle cx="12" cy="12" r="9"/><path d="m8 12 3 3 5-6"/></svg>
                            <span class="font-body text-sm text-on-background/75">Certified psychiatric assessment before every admission</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#006953" stroke-width="2" class="shrink-0 mt-0.5"><circle cx="12" cy="12" r="9"/><path d="m8 12 3 3 5-6"/></svg>
                            <span class="font-body text-sm text-on-background/75">Nutritious, balanced meals for physical recovery</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#006953" stroke-width="2" class="shrink-0 mt-0.5"><circle cx="12" cy="12" r="9"/><path d="m8 12 3 3 5-6"/></svg>
                            <span class="font-body text-sm text-on-background/75">A personalized aftercare plan for lasting sobriety</span>
                        </li>
                    </ul>
                    <a href="about" class="inline-flex items-center gap-2 text-primary font-semibold hover:gap-3 transition-all">
                        Learn More <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- RECOVERY PATHWAY -->
        <section class="bg-primary-deep">
            <div class="max-w-site mx-auto px-5 md:px-10 py-24">
                <div class="text-center max-w-xl mx-auto mb-16 reveal">
                    <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">The Path to Sobriety</span>
                    <h2 class="font-headline text-3xl md:text-4xl text-on-primary mt-3">A Structured Journey of Complete Life Restoration</h2>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 reveal">
                    <div>
                        <div class="w-14 h-14 bg-highlight-gold text-on-background rounded flex items-center justify-center font-headline text-lg font-bold mb-5">01</div>
                        <h4 class="font-headline text-on-primary mb-2">Medical Assessment</h4>
                        <p class="font-body text-xs text-on-primary/70 leading-relaxed mb-4">A complete psychiatric, physical, and psychological screening shapes a personalized plan.</p>
                        <div class="h-1 w-full bg-on-primary/15 rounded-full overflow-hidden"><div class="h-full w-1/4 bg-highlight-gold"></div></div>
                        <p class="font-body text-[10px] text-on-primary/50 uppercase tracking-widest mt-2">Start of the Journey</p>
                    </div>
                    <div>
                        <div class="w-14 h-14 bg-on-primary text-primary rounded flex items-center justify-center font-headline text-lg font-bold mb-5">02</div>
                        <h4 class="font-headline text-on-primary mb-2">Clinical Detox</h4>
                        <p class="font-body text-xs text-on-primary/70 leading-relaxed mb-4">Physician-supervised detoxification, ensuring maximum comfort and safety.</p>
                        <div class="h-1 w-full bg-on-primary/15 rounded-full overflow-hidden"><div class="h-full w-2/4 bg-on-primary"></div></div>
                        <p class="font-body text-[10px] text-on-primary/50 uppercase tracking-widest mt-2">Physical Healing</p>
                    </div>
                    <div>
                        <div class="w-14 h-14 bg-on-primary text-primary rounded flex items-center justify-center font-headline text-lg font-bold mb-5">03</div>
                        <h4 class="font-headline text-on-primary mb-2">Core Therapy</h4>
                        <p class="font-body text-xs text-on-primary/70 leading-relaxed mb-4">In-depth counselling, group sessions, and holistic workshops for psychological change.</p>
                        <div class="h-1 w-full bg-on-primary/15 rounded-full overflow-hidden"><div class="h-full w-3/4 bg-on-primary"></div></div>
                        <p class="font-body text-[10px] text-on-primary/50 uppercase tracking-widest mt-2">Behavioral Change</p>
                    </div>
                    <div>
                        <div class="w-14 h-14 bg-on-primary text-primary rounded flex items-center justify-center font-headline text-lg font-bold mb-5">04</div>
                        <h4 class="font-headline text-on-primary mb-2">Aftercare Planning</h4>
                        <p class="font-body text-xs text-on-primary/70 leading-relaxed mb-4">Reintegration strategies and support systems for long-term follow-through.</p>
                        <div class="h-1 w-full bg-on-primary/15 rounded-full overflow-hidden"><div class="h-full w-full bg-on-primary"></div></div>
                        <p class="font-body text-[10px] text-on-primary/50 uppercase tracking-widest mt-2">Full Restoration</p>
                    </div>
                </div>
                <a href="programs" class="inline-flex items-center gap-2 mt-12 text-on-primary font-semibold hover:gap-3 transition-all">
                    See the Full Process <span aria-hidden="true">→</span>
                </a>
            </div>

            <div class="bg-highlight-gold">
                <div class="max-w-site mx-auto px-5 md:px-10 py-6 flex flex-col md:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-3 text-on-background">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" class="shrink-0"><path d="M12 9v4M12 17h.01M10.3 3.9 1.8 18a2 2 0 0 0 1.7 3h17a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0z"/></svg>
                        <div>
                            <p class="font-body font-semibold text-sm">Need Immediate Admission?</p>
                            <p class="font-body text-xs text-on-background/70">Our emergency response team is available 24×7.</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="bg-primary-deep text-on-primary px-5 py-2.5 rounded-card font-semibold text-sm flex items-center gap-2 hover:bg-primary transition-colors">
                            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .3 2 .7 3a2 2 0 0 1-.4 2.1L8 10.3a16 16 0 0 0 6 6l1.5-1.4a2 2 0 0 1 2.1-.4c1 .4 2 .6 3 .7a2 2 0 0 1 1.7 2z"/></svg>
                            Call: <?php echo SITE_PHONE_DISPLAY; ?>
                        </a>
                        <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>" target="_blank" rel="noopener" class="bg-on-background text-highlight-gold px-5 py-2.5 rounded-card font-semibold text-sm hover:opacity-90 transition-opacity">
                            WhatsApp Us
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- FACILITIES PREVIEW -->
        <section class="max-w-site mx-auto px-5 md:px-10 py-24">
            <div class="text-center mb-14 reveal">
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Our Center</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3">Our Facilities</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-4 md:h-[520px] reveal">
                <div class="md:col-span-2 md:row-span-2 relative rounded-card overflow-hidden bg-surface-container-high flex items-end p-6 min-h-[240px]">
                    <img src="assets/img/yoga.jpeg" alt="Meditation room" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
                    <span class="font-headline text-lg text-on-background relative z-10">Meditation Room</span>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                </div>
                <div class="relative rounded-card overflow-hidden bg-surface-container-high flex items-end p-5 min-h-[140px]">
                    <img src="assets/img/room1.jpeg" alt="Comfortable room" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
                    <span class="font-body text-sm text-on-background/70 relative z-10">Comfortable Rooms</span>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                </div>
                <div class="relative rounded-card overflow-hidden bg-surface-container-high flex items-end p-5 min-h-[140px]">
                    <img src="assets/img/room2.jpeg" alt="Quiet campus" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
                    <span class="font-body text-sm text-on-background/70 relative z-10">Quiet Campus</span>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                </div>
                <div class="md:col-span-2 relative rounded-card overflow-hidden bg-surface-container-high flex items-end p-5 min-h-[140px]">
                    <img src="assets/img/gate.jpeg" alt="Wellness area" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
                    <span class="font-body text-sm text-on-background/70 relative z-10">Wellness Area</span>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                </div>
            </div>
        </section>

        <!-- TEAM — photo-ready placeholder cards. Photo naming: doctor-1.jpeg,
             doctor-2.jpeg, doctor-3.jpeg. Replace [Add Name] and role/bio text
             with real staff details once confirmed — no other changes needed.
             NOTE: badges intentionally show role only, not years-of-experience
             or degree claims, until real credentials are confirmed. -->
        <section class="bg-surface-container-low py-24">
            <div class="max-w-site mx-auto px-5 md:px-10">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14 reveal">
                    <div class="max-w-xl">
                        <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Expert Clinical Leadership</span>
                        <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3 mb-4">Led by Dedicated Specialists</h2>
                        <p class="font-body text-on-background/65 leading-relaxed">Our multidisciplinary team ensures every patient receives attentive, professional care in a supportive setting.</p>
                    </div>
                    <a href="about" class="inline-block border border-primary text-primary font-body text-xs font-semibold tracking-wide uppercase px-6 py-3 rounded-card hover:bg-primary hover:text-on-primary transition-colors whitespace-nowrap">Meet Our Team</a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 reveal">
                    <div class="glass-card rounded-card overflow-hidden lift">
                        <div class="aspect-[4/5] relative bg-surface-container-high">
                            <img src="assets/img/dr.jpeg" alt="Senior Psychiatrist" class="absolute inset-0 w-full h-full object-cover grayscale" onerror="this.style.display='none'">
                            <span class="absolute bottom-4 left-4 bg-primary-deep text-on-primary font-body text-[10px] font-semibold tracking-wide uppercase px-3 py-1.5 rounded">Psychiatry Lead</span>
                        </div>
                        <div class="p-6">
                            <h4 class="font-headline text-lg text-on-background">[Add Name]</h4>
                            <p class="font-body text-xs text-highlight-gold font-semibold tracking-wide uppercase mt-1">Senior Psychiatrist</p>
                            <p class="font-body text-sm text-on-background/60 mt-3 leading-relaxed">Specializing in de-addiction medicine and dual diagnosis care.</p>
                        </div>
                    </div>
                    <div class="glass-card rounded-card overflow-hidden lift">
                        <div class="aspect-[4/5] relative bg-surface-container-high">
                            <img src="assets/img/counseller.jpeg" alt="Clinical Psychologist" class="absolute inset-0 w-full h-full object-cover grayscale" onerror="this.style.display='none'">
                            <span class="absolute bottom-4 left-4 bg-primary-deep text-on-primary font-body text-[10px] font-semibold tracking-wide uppercase px-3 py-1.5 rounded">Counselling Lead</span>
                        </div>
                        <div class="p-6">
                            <h4 class="font-headline text-lg text-on-background">[Add Name]</h4>
                            <p class="font-body text-xs text-highlight-gold font-semibold tracking-wide uppercase mt-1">Clinical Psychologist</p>
                            <p class="font-body text-sm text-on-background/60 mt-3 leading-relaxed">Focused on trauma-informed care and family therapy.</p>
                        </div>
                    </div>
                    <div class="glass-card rounded-card overflow-hidden lift">
                        <div class="aspect-[4/5] relative bg-surface-container-high">
                            <img src="assets/img/admin.jpeg" alt="Wellness Coach" class="absolute inset-0 w-full h-full object-cover grayscale" onerror="this.style.display='none'">
                            <span class="absolute bottom-4 left-4 bg-primary-deep text-on-primary font-body text-[10px] font-semibold tracking-wide uppercase px-3 py-1.5 rounded">Wellness Lead</span>
                        </div>
                        <div class="p-6">
                            <h4 class="font-headline text-lg text-on-background">[Add Name]</h4>
                            <p class="font-body text-xs text-highlight-gold font-semibold tracking-wide uppercase mt-1">Wellness Coach</p>
                            <p class="font-body text-sm text-on-background/60 mt-3 leading-relaxed">Integrating yoga and mindfulness with clinical therapies.</p>
                        </div>
                    </div>
                </div>

                <p class="font-body text-xs text-on-background/40 mt-8 text-center">
                    <!-- TODO: add real team members' names, qualifications, and photos here -->
                    Real team information will be added soon.
                </p>
            </div>
        </section>

        <!-- QUOTE -->
        <section class="max-w-site mx-auto px-5 md:px-10 py-24 reveal">
            <div class="bg-primary-deep text-on-primary rounded-card p-12 md:p-16 text-center">
                <p class="font-headline text-2xl md:text-3xl leading-relaxed max-w-2xl mx-auto">
                    "Recovery isn't the end of your story — it's the <span class="text-highlight-gold">beginning</span> of a new life."
                </p>
                <div class="flex items-center justify-center gap-3 mt-8">
                    <span class="h-px w-10 bg-highlight-gold"></span>
                    <span class="font-body text-xs tracking-[0.2em] uppercase text-highlight-gold">Jeevan Rekha Foundation</span>
                    <span class="h-px w-10 bg-highlight-gold"></span>
                </div>
            </div>
        </section>

        <!-- FAQ — two column, with callout quote -->
        <section class="max-w-site mx-auto px-5 md:px-10 pb-24 reveal">
            <div class="grid grid-cols-1 md:grid-cols-[0.85fr_1.15fr] gap-14">
                <div>
                    <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Transparency First</span>
                    <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3 mb-6">Frequently Asked Questions</h2>
                    <p class="font-body text-on-background/70 leading-relaxed mb-8">
                        We believe in complete transparency. If you have any further clinical questions, please contact our team directly.
                    </p>
                    <div class="glass-card rounded-card p-6 border-l-4 border-primary">
                        <p class="font-headline text-base text-on-background italic leading-relaxed">"Patient confidentiality is our highest ethical priority. We follow strict protocols to ensure your information and residency are never disclosed."</p>
                        <p class="font-body text-xs text-on-background/50 mt-4">— Medical & Counselling Team</p>
                        <!-- NOTE for dev: attributed generically until a real named medical
                             board / director is confirmed for the site. -->
                    </div>
                </div>

                <div class="space-y-4">
                    <details class="glass-card rounded-card p-6 group">
                        <summary class="font-headline text-base text-on-background cursor-pointer list-none flex justify-between items-center gap-4">
                            What is the average duration of a program?
                            <span class="text-primary shrink-0 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                        </summary>
                        <p class="font-body text-sm text-on-background/70 mt-4 leading-relaxed">Our standard residential program runs 120 days. Patients who need more intensive psychological support follow an extended 150-day track — <a href="programs" class="text-primary hover:underline">see the full process here</a>.</p>
                    </details>
                    <details class="glass-card rounded-card p-6 group">
                        <summary class="font-headline text-base text-on-background cursor-pointer list-none flex justify-between items-center gap-4">
                            Is 24×7 nursing and medical support available?
                            <span class="text-primary shrink-0 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                        </summary>
                        <p class="font-body text-sm text-on-background/70 mt-4 leading-relaxed">Yes, our team is available around the clock so help is always available in an emergency.</p>
                    </details>
                    <details class="glass-card rounded-card p-6 group">
                        <summary class="font-headline text-base text-on-background cursor-pointer list-none flex justify-between items-center gap-4">
                            What items are prohibited at the center?
                            <span class="text-primary shrink-0 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                        </summary>
                        <p class="font-body text-sm text-on-background/70 mt-4 leading-relaxed">Safety and treatment guidelines are explained in detail by our team before admission.</p>
                    </details>
                    <details class="glass-card rounded-card p-6 group">
                        <summary class="font-headline text-base text-on-background cursor-pointer list-none flex justify-between items-center gap-4">
                            Can family visit during treatment?
                            <span class="text-primary shrink-0 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                        </summary>
                        <p class="font-body text-sm text-on-background/70 mt-4 leading-relaxed">Yes, family involvement is a key part of our process. Please check with our team for specific visiting details.</p>
                    </details>
                    <details class="glass-card rounded-card p-6 group">
                        <summary class="font-headline text-base text-on-background cursor-pointer list-none flex justify-between items-center gap-4">
                            Is there support after discharge?
                            <span class="text-primary shrink-0 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                        </summary>
                        <p class="font-body text-sm text-on-background/70 mt-4 leading-relaxed">Yes, our aftercare plan supports long-term sobriety through regular follow-up and support groups.</p>
                    </details>
                </div>
            </div>
        </section>

        <!-- FAQ structured data — must mirror the visible Q&A above -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "What is the average duration of a program?",
                        "acceptedAnswer": { "@type": "Answer", "text": "Our standard residential program runs 120 days. Patients who need more intensive psychological support follow an extended 150-day track." }
                    },
                    {
                        "@type": "Question",
                        "name": "Is 24x7 nursing and medical support available?",
                        "acceptedAnswer": { "@type": "Answer", "text": "Yes, our team is available around the clock so help is always available in an emergency." }
                    },
                    {
                        "@type": "Question",
                        "name": "What items are prohibited at the center?",
                        "acceptedAnswer": { "@type": "Answer", "text": "Safety and treatment guidelines are explained in detail by our team before admission." }
                    },
                    {
                        "@type": "Question",
                        "name": "Can family visit during treatment?",
                        "acceptedAnswer": { "@type": "Answer", "text": "Yes, family involvement is a key part of our process. Please check with our team for specific visiting details." }
                    },
                    {
                        "@type": "Question",
                        "name": "Is there support after discharge?",
                        "acceptedAnswer": { "@type": "Answer", "text": "Yes, our aftercare plan supports long-term sobriety through regular follow-up and support groups." }
                    }
                ]
            }
        </script>

    </main>

<?php include 'includes/footer.php'; ?>