<?php
require_once 'includes/config.php';
$page_title = 'Treatment Programs & Recovery Process';
$page_description = 'From first assessment to aftercare — explore the step-by-step recovery journey and residential and outpatient programs at Jeevan Rekha Foundation.';
$current_page = 'programs';
include 'includes/header.php';
include 'includes/navbar.php';

$stages = [
    [
        'title' => 'First Conversation & Assessment',
        'desc'  => 'In a confidential conversation, we understand the person\'s situation and decide on the right program. Family can be part of this step too.',
        'image' => null,
    ],
    [
        'title' => 'Admission',
        'desc'  => 'The necessary paperwork and welcome process — kept simple and stress-free, so the person feels at ease.',
        'image' => null,
    ],
    [
        'title' => 'Medical Detox',
        'desc'  => 'Safe detoxification under round-the-clock medical supervision, prioritizing physical stability.',
        'image' => 'room1.jpeg',
    ],
    [
        'title' => 'Therapy & Rehabilitation',
        'desc'  => 'Individual counselling, group sessions, yoga, and life skills — to build strength from within.',
        'image' => 'med1.jpeg',
    ],
    [
        'title' => 'Family Reunion',
        'desc'  => 'Sessions with the family, so understanding and support are already in place before returning home.',
        'image' => 'room2.jpeg',
    ],
    [
        'title' => 'Aftercare',
        'desc'  => 'Regular follow-up and support groups, so recovery stays stable in the long run.',
        'image' => null,
    ],
];
?>

    <main>

        <!-- HERO -->
        <section class="relative min-h-[380px] md:min-h-[440px] flex items-end overflow-hidden">
            <div class="absolute inset-0 bg-surface-container-high"></div>
            <img src="assets/img/yoga2.jpeg" alt="Therapy session" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
            <div class="absolute inset-0 bg-gradient-to-t from-primary-deep/95 via-primary-deep/60 to-primary-deep/20"></div>
            <div class="relative z-10 max-w-site mx-auto px-5 md:px-10 pb-12 md:pb-16 w-full reveal active">
                <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Programs</span>
                <h1 class="font-headline text-3xl md:text-5xl text-on-primary mt-4 max-w-2xl leading-[1.3]">This Journey Happens One Step at a Time</h1>
                <p class="font-body text-on-primary/80 mt-5 max-w-lg leading-relaxed">Every stage is carefully designed — from the first conversation to lasting recovery.</p>
            </div>
        </section>

        <!-- PATIENT RESPONSIBILITIES -->
        <section class="bg-primary-deep">
            <div class="max-w-site mx-auto px-5 md:px-10 py-16">
                <div class="max-w-lg mb-10 reveal">
                    <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Before You Begin</span>
                    <h2 class="font-headline text-2xl md:text-3xl text-on-primary mt-3">Patient Responsibilities</h2>
                    <p class="font-body text-on-primary/70 mt-3 leading-relaxed">Recovery is a partnership. Here's what we ask of every patient during treatment.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-4 reveal">
                    <div class="flex items-start gap-3">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#D4AF37" stroke-width="2.5" class="shrink-0 mt-0.5"><path d="m5 12 5 5L20 7"/></svg>
                        <span class="font-body text-sm text-on-primary/85">Follow the treatment plan and guidelines set by our clinical team</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#D4AF37" stroke-width="2.5" class="shrink-0 mt-0.5"><path d="m5 12 5 5L20 7"/></svg>
                        <span class="font-body text-sm text-on-primary/85">Attend all scheduled therapy, counselling, and medical sessions</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#D4AF37" stroke-width="2.5" class="shrink-0 mt-0.5"><path d="m5 12 5 5L20 7"/></svg>
                        <span class="font-body text-sm text-on-primary/85">Treat fellow patients, staff, and the center's environment with respect</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#D4AF37" stroke-width="2.5" class="shrink-0 mt-0.5"><path d="m5 12 5 5L20 7"/></svg>
                        <span class="font-body text-sm text-on-primary/85">Be honest during counselling and medical assessments — it helps us help you</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#D4AF37" stroke-width="2.5" class="shrink-0 mt-0.5"><path d="m5 12 5 5L20 7"/></svg>
                        <span class="font-body text-sm text-on-primary/85">Avoid bringing prohibited items — our team explains these before admission</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#D4AF37" stroke-width="2.5" class="shrink-0 mt-0.5"><path d="m5 12 5 5L20 7"/></svg>
                        <span class="font-body text-sm text-on-primary/85">Participate actively in group activities and family sessions</span>
                    </div>
                </div>
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
                        <div class="flex flex-col sm:flex-row sm:items-start gap-5">
                            <div class="max-w-xl">
                                <h3 class="font-headline text-xl md:text-2xl text-on-background mb-2"><?php echo $stage['title']; ?></h3>
                                <p class="font-body text-sm md:text-base text-on-background/70 leading-relaxed"><?php echo $stage['desc']; ?></p>
                            </div>
                            <?php if ($stage['image']): ?>
                                <div class="w-full sm:w-32 h-24 sm:h-24 rounded-card overflow-hidden shrink-0 relative bg-surface-container-high">
                                    <img src="assets/img/<?php echo $stage['image']; ?>" alt="<?php echo $stage['title']; ?>" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- PROGRAM TYPES -->
        <section class="bg-surface-container-low py-24">
            <div class="max-w-site mx-auto px-5 md:px-10">
                <div class="text-center max-w-lg mx-auto mb-14 reveal">
                    <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Program Types</span>
                    <h2 class="font-headline text-3xl md:text-4xl text-on-background mt-3">The Right Path for Your Situation</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 reveal">
                    <div class="glass-card rounded-card lift overflow-hidden">
                        <div class="aspect-[16/9] relative bg-surface-container-high">
                            <img src="assets/img/room1.jpeg" alt="Residential Program room" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                        </div>
                        <div class="p-10">
                            <div class="flex items-start justify-between mb-6">
                                <div class="w-14 h-14 bg-primary/10 rounded-card flex items-center justify-center">
                                    <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="#006953" stroke-width="1.8"><path d="M3 18v-7a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v7M3 18h18M3 18v2M21 18v2M5 9V7a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2"/></svg>
                                </div>
                                <span class="bg-highlight-gold/15 text-highlight-gold font-body text-sm font-semibold px-3 py-1.5 rounded-full whitespace-nowrap">120 Days Standard</span>
                            </div>
                            <h3 class="font-headline text-2xl text-primary mb-3">Residential Program</h3>
                            <p class="font-body text-base text-on-background/70 leading-relaxed mb-6">Live-in treatment for complete care — recommended for more serious cases.</p>
                            <ul class="space-y-2.5 mb-6">
                                <li class="flex items-center gap-2 font-body text-sm text-on-background/70"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="#006953" stroke-width="2.5" class="shrink-0"><path d="m5 12 5 5L20 7"/></svg> 24×7 medical supervision</li>
                                <li class="flex items-center gap-2 font-body text-sm text-on-background/70"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="#006953" stroke-width="2.5" class="shrink-0"><path d="m5 12 5 5L20 7"/></svg> A controlled, trigger-free environment</li>
                                <li class="flex items-center gap-2 font-body text-sm text-on-background/70"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="#006953" stroke-width="2.5" class="shrink-0"><path d="m5 12 5 5L20 7"/></svg> Daily therapy and activities</li>
                                <li class="flex items-center gap-2 font-body text-sm text-on-background/70"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="#006953" stroke-width="2.5" class="shrink-0"><path d="m5 12 5 5L20 7"/></svg> Indoor games and recreational activities</li>
                            </ul>
                            <div class="bg-highlight-gold/10 border-l-4 border-highlight-gold rounded-card p-5 flex items-start gap-3">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#D4AF37" stroke-width="2" class="shrink-0 mt-0.5"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 2"/></svg>
                                <p class="font-body text-sm text-on-background leading-relaxed"><strong class="text-primary font-headline text-base block mb-0.5">Extended Psychological Care Track — 150 Days</strong>For patients who need more intensive psychological support, giving extra time for deeper therapeutic work.</p>
                            </div>
                        </div>
                    </div>
                    <div class="glass-card rounded-card lift overflow-hidden">
                        <div class="aspect-[16/9] relative bg-surface-container-high">
                            <img src="assets/img/gate.jpeg" alt="Outpatient Program" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                        </div>
                        <div class="p-10">
                            <div class="w-14 h-14 bg-primary/10 rounded-card flex items-center justify-center mb-6">
                                <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="#006953" stroke-width="1.8"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M9 22V12h6v10"/></svg>
                            </div>
                            <h3 class="font-headline text-2xl text-primary mb-3">Outpatient Program</h3>
                            <p class="font-body text-base text-on-background/70 leading-relaxed mb-6">Treatment with regular sessions while living at home — keeping daily life going.</p>
                            <ul class="space-y-2.5">
                                <li class="flex items-center gap-2 font-body text-sm text-on-background/70"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="#006953" stroke-width="2.5" class="shrink-0"><path d="m5 12 5 5L20 7"/></svg> Sessions on a flexible schedule</li>
                                <li class="flex items-center gap-2 font-body text-sm text-on-background/70"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="#006953" stroke-width="2.5" class="shrink-0"><path d="m5 12 5 5L20 7"/></svg> Ability to keep working or studying</li>
                                <li class="flex items-center gap-2 font-body text-sm text-on-background/70"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="#006953" stroke-width="2.5" class="shrink-0"><path d="m5 12 5 5L20 7"/></svg> Suited to mild-to-moderate cases</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="max-w-site mx-auto px-5 md:px-10 py-24 text-center reveal">
            <div class="bg-gradient-to-br from-primary to-primary-container rounded-card p-12 md:p-16 text-on-primary">
                <h2 class="font-headline text-2xl md:text-3xl mb-4">Let Us Help You Choose the Right Program.</h2>
                <p class="font-body text-on-primary/80 mb-8 max-w-md mx-auto">The assessment call is completely free and confidential.</p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="contact" class="inline-block bg-highlight-gold text-on-background px-8 py-4 rounded-card font-semibold hover:bg-highlight-gold/90 transition-colors">Get Free Advice</a>
                    <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="inline-block border border-on-primary/40 text-on-primary px-8 py-4 rounded-card font-semibold hover:bg-on-primary/10 transition-colors">Call: <?php echo SITE_PHONE_DISPLAY; ?></a>
                </div>
            </div>
        </section>

    </main>

<?php include 'includes/footer.php'; ?>