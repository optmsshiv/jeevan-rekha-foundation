<?php
require_once 'includes/config.php';
$page_title = 'About Us';
$page_description = 'The story of Jeevan Rekha Foundation, our approach, and our holistic outlook on de-addiction.';
$current_page = 'about';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>

    <!-- HERO -->
    <section class="relative min-h-[380px] md:min-h-[440px] flex items-end overflow-hidden">
        <div class="absolute inset-0 bg-surface-container-high"></div>
        <img src="assets/img/room2.jpeg" alt="Jeevan Rekha Foundation campus" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
        <div class="absolute inset-0 bg-gradient-to-t from-primary-deep/95 via-primary-deep/60 to-primary-deep/20"></div>
        <div class="relative z-10 max-w-site mx-auto px-5 md:px-10 pb-12 md:pb-16 w-full reveal active">
            <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">About Us</span>
            <h1 class="font-headline text-3xl md:text-5xl text-on-primary mt-4 max-w-2xl leading-[1.3]">
                Our Belief Is Right There in the Name.
            </h1>
        </div>
    </section>

    <!-- FOUNDING INFO STRIP -->
    <section class="bg-primary">
        <div class="max-w-site mx-auto px-5 md:px-10 py-8 grid grid-cols-1 sm:grid-cols-3 gap-6 text-center sm:text-left">
            <div class="flex items-center gap-3 justify-center sm:justify-start">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#D4AF37" stroke-width="2" class="shrink-0"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                <div>
                    <p class="font-headline text-lg text-on-primary">Founded 2024</p>
                    <p class="font-body text-xs text-on-primary/60">The beginning of Jeevan Rekha Foundation</p>
                </div>
            </div>
            <div class="flex items-center gap-3 justify-center sm:justify-start">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#D4AF37" stroke-width="2" class="shrink-0"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <div>
                    <p class="font-headline text-lg text-on-primary">Madhepura, Bihar</p>
                    <p class="font-body text-xs text-on-primary/60">Located on the East Bypass Road</p>
                </div>
            </div>
            <div class="flex items-center gap-3 justify-center sm:justify-start">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#D4AF37" stroke-width="2" class="shrink-0"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.8 1-1a5.5 5.5 0 0 0 0-7.6z"/></svg>
                <div>
                    <p class="font-headline text-lg text-on-primary">Holistic Care</p>
                    <p class="font-body text-xs text-on-primary/60">Medical, mental, and family</p>
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
            <p>"Jeevan Rekha" means — <strong class="text-primary">the line of life, a lifeline</strong>. For anyone struggling with addiction, life can feel like a broken, scattered line — but every line can be made straight, steady, and clear again.</p>
            <p>Jeevan Rekha Foundation was founded in 2024 on this belief — a place where medical science, mental health, and family understanding come together to help a person stand up again. We believe recovery is not a punishment, but a process of care.</p>
            <p>Today, Jeevan Rekha Foundation is working to become that first trusted step for many families, when they don't know what to do next.</p>
        </div>
    </section>

    <!-- MISSION / VISION -->
    <section class="max-w-site mx-auto px-5 md:px-10 pb-20 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="glass-card p-10 rounded-card lift reveal">
            <h3 class="font-headline text-2xl text-primary mb-3">Our Mission</h3>
            <p class="font-body text-sm text-on-background/70 leading-relaxed">To provide the best medical and mental healthcare with dignity to every person, regardless of their background or situation — without judgement.</p>
        </div>
        <div class="glass-card p-10 rounded-card lift reveal">
            <h3 class="font-headline text-2xl text-primary mb-3">Our Vision</h3>
            <p class="font-body text-sm text-on-background/70 leading-relaxed">A society where de-addiction is met with understanding and support, not shame — and where every family gets the right help at the right time.</p>
        </div>
    </section>

    <!-- CORE VALUES -->
    <section class="bg-surface-container-low py-24">
        <div class="max-w-site mx-auto px-5 md:px-10">
            <div class="text-center max-w-lg mx-auto mb-14 reveal">
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Our Values</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3">What Guides Us</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 reveal">
                <div class="text-center">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#006953" stroke-width="2"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.8 1-1a5.5 5.5 0 0 0 0-7.6z"/></svg>
                    </div>
                    <h4 class="font-headline text-base text-on-background mb-1">Compassion</h4>
                    <p class="font-body text-xs text-on-background/60">Seeing every person with respect and understanding.</p>
                </div>
                <div class="text-center">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#006953" stroke-width="2"><rect x="5" y="11" width="14" height="9" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/></svg>
                    </div>
                    <h4 class="font-headline text-base text-on-background mb-1">Confidentiality</h4>
                    <p class="font-body text-xs text-on-background/60">Strictly protecting your privacy at every step.</p>
                </div>
                <div class="text-center">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#006953" stroke-width="2"><path d="M9 12l2 2 4-4M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18z"/></svg>
                    </div>
                    <h4 class="font-headline text-base text-on-background mb-1">Integrity</h4>
                    <p class="font-body text-xs text-on-background/60">Transparent, honest, and ethical care.</p>
                </div>
                <div class="text-center">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#006953" stroke-width="2"><path d="M19 14c1.5 0 3-1.5 3-3.5S20.5 7 19 7c-.4-2-2-3.5-4-3.5-1.2 0-2.3.6-3 1.5-.7-.9-1.8-1.5-3-1.5-2 0-3.6 1.5-4 3.5C3.5 7 2 8.5 2 10.5S3.5 14 5 14"/><path d="M8 14v3a4 4 0 0 0 8 0v-3"/></svg>
                    </div>
                    <h4 class="font-headline text-base text-on-background mb-1">Excellence</h4>
                    <p class="font-body text-xs text-on-background/60">No compromise on clinical quality.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR PROMISE -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-24">
        <div class="grid grid-cols-1 md:grid-cols-[0.8fr_1.2fr] gap-16 items-start">
            <div class="reveal">
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Our Promise</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3 mb-6">A Promise to Every Family</h2>
                <p class="font-body text-on-background/70 leading-relaxed">The recovery journey can be uncertain — our commitment isn't. This is what we promise every person and family.</p>
            </div>
            <div class="space-y-5 reveal">
                <div class="flex items-start gap-4 border-b border-outline-variant pb-5">
                    <span class="font-headline text-2xl text-highlight-gold shrink-0">01</span>
                    <div>
                        <h4 class="font-headline text-base text-on-background mb-1">A Welcome Without Judgement</h4>
                        <p class="font-body text-sm text-on-background/65">Every person's story is different — we listen, we don't judge.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 border-b border-outline-variant pb-5">
                    <span class="font-headline text-2xl text-highlight-gold shrink-0">02</span>
                    <div>
                        <h4 class="font-headline text-base text-on-background mb-1">Transparent Communication</h4>
                        <p class="font-body text-sm text-on-background/65">Treatment, progress, and next steps — families are always kept informed.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 border-b border-outline-variant pb-5">
                    <span class="font-headline text-2xl text-highlight-gold shrink-0">03</span>
                    <div>
                        <h4 class="font-headline text-base text-on-background mb-1">A Person-Centered Plan</h4>
                        <p class="font-body text-sm text-on-background/65">No two treatment plans are the same.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="font-headline text-2xl text-highlight-gold shrink-0">04</span>
                    <div>
                        <h4 class="font-headline text-base text-on-background mb-1">Support Even After Discharge</h4>
                        <p class="font-body text-sm text-on-background/65">Recovery continues beyond the center — we stay with you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- APPROACH -->
    <section class="bg-surface-container-low py-24 reveal">
        <div class="max-w-site mx-auto px-5 md:px-10">
            <div class="max-w-lg mb-12">
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Our Approach</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3">Three Foundations, Working Together</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="border-l-2 border-primary pl-6 py-2">
                    <h4 class="font-headline text-lg text-on-background mb-2">Medical</h4>
                    <p class="font-body text-sm text-on-background/70 leading-relaxed">Safe detox and treatment under the supervision of qualified doctors.</p>
                </div>
                <div class="border-l-2 border-highlight-gold pl-6 py-2">
                    <h4 class="font-headline text-lg text-on-background mb-2">Mental</h4>
                    <p class="font-body text-sm text-on-background/70 leading-relaxed">Building inner strength through counselling, therapy, and self-understanding.</p>
                </div>
                <div class="border-l-2 border-outline-variant pl-6 py-2">
                    <h4 class="font-headline text-lg text-on-background mb-2">Family</h4>
                    <p class="font-body text-sm text-on-background/70 leading-relaxed">Bringing the family along, so there's still support after recovery.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FACILITY GLIMPSE -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-24">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10 reveal">
            <div>
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Our Center</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3">A Glimpse</h2>
            </div>
            <a href="gallery" class="inline-flex items-center gap-2 text-primary font-semibold hover:gap-3 transition-all">View Full Gallery <span aria-hidden="true">→</span></a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 reveal">
            <div class="aspect-[4/3] rounded-card overflow-hidden relative group">
                <img src="assets/img/gate.jpeg" alt="Entrance" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" onerror="this.style.display='none'">
            </div>
            <div class="aspect-[4/3] rounded-card overflow-hidden relative group">
                <img src="assets/img/yoga.jpeg" alt="Yoga and meditation area" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" onerror="this.style.display='none'">
            </div>
            <div class="aspect-[4/3] rounded-card overflow-hidden relative group">
                <img src="assets/img/room1.jpeg" alt="Patient room" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <!-- VOLUNTEER -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-24">
        <div class="bg-gradient-to-br from-surface-container-low to-surface-container-high rounded-card p-10 md:p-14 grid grid-cols-1 md:grid-cols-[1fr_auto] gap-10 items-center reveal">
            <div>
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Get Involved</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3 mb-4">Volunteer With Us</h2>
                <p class="font-body text-on-background/70 leading-relaxed max-w-xl mb-6">
                    Recovery is stronger with community support. If you'd like to give your time or skills, there are several ways to get involved:
                </p>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-3">
                    <li class="flex items-center gap-2 font-body text-sm text-on-background/75">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="#006953" stroke-width="2.5" class="shrink-0"><path d="m5 12 5 5L20 7"/></svg>
                        Peer support & mentoring
                    </li>
                    <li class="flex items-center gap-2 font-body text-sm text-on-background/75">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="#006953" stroke-width="2.5" class="shrink-0"><path d="m5 12 5 5L20 7"/></svg>
                        Community awareness programs
                    </li>
                    <li class="flex items-center gap-2 font-body text-sm text-on-background/75">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="#006953" stroke-width="2.5" class="shrink-0"><path d="m5 12 5 5L20 7"/></svg>
                        Skill-building workshops
                    </li>
                    <li class="flex items-center gap-2 font-body text-sm text-on-background/75">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="#006953" stroke-width="2.5" class="shrink-0"><path d="m5 12 5 5L20 7"/></svg>
                        Administrative & event support
                    </li>
                </ul>
            </div>
            <a href="contact" class="inline-block bg-primary text-on-primary px-8 py-4 rounded-card font-semibold hover:bg-primary-deep transition-colors whitespace-nowrap text-center">Become a Volunteer</a>
        </div>
    </section>

    <!-- ABOUT FAQ -->
    <section class="bg-surface-container-low py-24 reveal">
        <div class="max-w-site mx-auto px-5 md:px-10">
            <div class="text-center max-w-lg mx-auto mb-14">
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Good to Know</span>
                <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3">Frequently Asked Questions</h2>
            </div>
            <div class="max-w-2xl mx-auto space-y-4">
                <details class="glass-card rounded-card p-6 group">
                    <summary class="font-headline text-base text-on-background cursor-pointer list-none flex justify-between items-center gap-4">
                        Is Jeevan Rekha Foundation only for people from Madhepura?
                        <span class="text-primary shrink-0 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="font-body text-sm text-on-background/70 mt-4 leading-relaxed">No, we welcome families from across Bihar and beyond. Support is available for those coming from far away too — contact us to discuss.</p>
                </details>
                <details class="glass-card rounded-card p-6 group">
                    <summary class="font-headline text-base text-on-background cursor-pointer list-none flex justify-between items-center gap-4">
                        Should I only reach out for severe cases?
                        <span class="text-primary shrink-0 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="font-body text-sm text-on-background/70 mt-4 leading-relaxed">No, seeking help early is often the most effective. From mild to severe — we have a program for every situation.</p>
                </details>
                <details class="glass-card rounded-card p-6 group">
                    <summary class="font-headline text-base text-on-background cursor-pointer list-none flex justify-between items-center gap-4">
                        Do I need to visit the center for the first conversation?
                        <span class="text-primary shrink-0 text-xl leading-none group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="font-body text-sm text-on-background/70 mt-4 leading-relaxed">No, the first conversation can happen over phone or WhatsApp too. Visiting the center is only necessary at the time of admission.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="max-w-site mx-auto px-5 md:px-10 py-24 reveal">
        <div class="bg-gradient-to-br from-primary to-primary-container rounded-card p-12 md:p-16 text-on-primary text-center">
            <h2 class="font-headline text-2xl md:text-3xl mb-4">Meet Our Team, Have a Conversation.</h2>
            <p class="font-body text-on-primary/80 mb-8 max-w-md mx-auto">Contact us today for a confidential and free first conversation.</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="contact" class="inline-block bg-highlight-gold text-on-background px-8 py-4 rounded-card font-semibold hover:bg-highlight-gold/90 transition-colors">Contact Us</a>
                <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="inline-block border border-on-primary/40 text-on-primary px-8 py-4 rounded-card font-semibold hover:bg-on-primary/10 transition-colors">Call: <?php echo SITE_PHONE_DISPLAY; ?></a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
