<?php
require_once 'includes/config.php';
$page_title = 'Gallery — Our Center in Madhepura';
$page_description = 'A photo tour of Jeevan Rekha Foundation\'s de-addiction center in Madhepura, Bihar — patient rooms, meditation areas, and campus facilities.';
$current_page = 'gallery';
include 'includes/header.php';
include 'includes/navbar.php';

// Each entry maps to an actual uploaded photo. If a file is missing, onerror
// hides the <img> and the caption still shows over the placeholder background.
$items = [
    ['file' => 'gate.jpeg',         'caption' => 'Center Entrance'],
    ['file' => 'admin.jpeg',        'caption' => 'Counselling Room'],
    ['file' => 'yoga-1.jpeg',       'caption' => 'Yoga & Meditation'],
    ['file' => 'room1.jpeg',        'caption' => 'Patient Room'],
    ['file' => 'room2.jpeg',        'caption' => 'Community Hall'],
    ['file' => 'indoor-games.jpeg', 'caption' => 'Indoor Games & Recreation'],
    ['file' => 'outer.jpeg',        'caption' => 'Garden & Open Space'],
    ['file' => 'yoga-2.jpeg',       'caption' => 'Yoga & Meditation'],
    ['file' => 'yoga-3.jpeg',       'caption' => 'Yoga & Meditation'],
    ['file' => 'yoga-4.jpeg',       'caption' => 'Yoga & Meditation'],
];
// TODO: rename your yoga photos to yoga-1.jpeg, yoga-2.jpeg, yoga-3.jpeg,
// yoga-4.jpeg (add more rows above if you have additional ones) and upload
// them into assets/img/ — they'll appear here automatically.
// TODO: upload your indoor games photo as assets/img/indoor-games.jpeg
// (carrom, chess, table tennis, etc.) and it will appear automatically too.
?>

<main>

    <!-- HERO -->
    <section class="relative min-h-[380px] md:min-h-[440px] flex items-end overflow-hidden">
        <div class="absolute inset-0 bg-surface-container-high"></div>
        <img src="assets/img/gate.jpeg" alt="Center entrance" class="absolute inset-0 w-full h-full object-cover" onerror="this.style.display='none'">
        <div class="absolute inset-0 bg-gradient-to-t from-primary-deep/95 via-primary-deep/60 to-primary-deep/20"></div>
        <div class="relative z-10 max-w-site mx-auto px-5 md:px-10 pb-12 md:pb-16 w-full reveal active">
            <span class="font-body text-xs tracking-[0.25em] uppercase text-highlight-gold font-semibold">Gallery</span>
            <h1 class="font-headline text-3xl md:text-5xl text-on-primary mt-4 max-w-2xl leading-[1.3]">A Glimpse of Our Center</h1>
            <p class="font-body text-on-primary/80 mt-5 max-w-lg leading-relaxed">A calm, safe, and dignified environment — built for recovery.</p>
        </div>
    </section>

    <section class="max-w-site mx-auto px-5 md:px-10 py-24 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <?php foreach ($items as $item): ?>
        <figure class="reveal">
            <div class="aspect-[4/3] rounded-card glass-card flex items-center justify-center relative overflow-hidden group">
                <img src="assets/img/<?php echo $item['file']; ?>" alt="<?php echo $item['caption']; ?>"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                     onerror="this.style.display='none'">
                <svg width="48" height="48" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="opacity-30 relative z-0">
                    <path d="M3 30 L9 16 L13 26 L18 12 L22 22 L34 8" stroke="#006953" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="34" cy="8" r="3" fill="#D4AF37"/>
                </svg>
            </div>
            <figcaption class="font-body text-sm text-on-background/70 mt-3"><?php echo $item['caption']; ?></figcaption>
        </figure>
        <?php endforeach; ?>
    </section>

    <!-- CTA -->
    <section class="max-w-site mx-auto px-5 md:px-10 pb-24 text-center reveal">
        <h2 class="font-headline text-2xl md:text-3xl text-on-background mb-4">Want to See It in Person?</h2>
        <p class="font-body text-on-background/70 mb-8 max-w-md mx-auto">Contact us to book a visit to the center.</p>
        <a href="contact" class="inline-block bg-primary text-on-primary px-8 py-4 rounded-card font-semibold hover:bg-primary-deep transition-colors">Book a Visit</a>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
