// Rekha Foundation — shared behaviour across all pages

document.addEventListener('DOMContentLoaded', function () {

    // Floating WhatsApp button — appears on every page.
    // Number comes from data-whatsapp on <body>, set in includes/header.php
    // from the SITE_WHATSAPP constant in includes/config.php.
    var waNumber = document.body.getAttribute('data-whatsapp');
    if (waNumber) {
        var waLink = document.createElement('a');
        waLink.href = 'https://wa.me/' + waNumber;
        waLink.target = '_blank';
        waLink.rel = 'noopener';
        waLink.className = 'wa-float';
        waLink.setAttribute('aria-label', 'व्हाट्सएप पर लिखें');
        waLink.setAttribute('title', 'व्हाट्सएप पर लिखें');
        waLink.innerHTML =
            '<span class="wa-float-ring" aria-hidden="true"></span>' +
            '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.8" style="position:relative;z-index:1">' +
            '<path d="M12 3a9 9 0 0 0-7.8 13.5L3 21l4.7-1.2A9 9 0 1 0 12 3z"/>' +
            '<path d="M8.5 9.5c.3 2.5 2.5 4.7 5 5" stroke-linecap="round"/>' +
            '</svg>';
        document.body.appendChild(waLink);
    }

    // Scroll reveal
    var reveals = document.querySelectorAll('.reveal');
    function checkReveal() {
        var windowHeight = window.innerHeight;
        reveals.forEach(function (el) {
            var top = el.getBoundingClientRect().top;
            if (top < windowHeight - 100) {
                el.classList.add('active');
            }
        });
    }
    window.addEventListener('scroll', checkReveal);
    checkReveal();

    // Mobile menu toggle
    var toggle = document.getElementById('menu-toggle');
    var menu = document.getElementById('mobile-menu');
    if (toggle && menu) {
        toggle.addEventListener('click', function () {
            var isHidden = menu.classList.contains('hidden');
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
            toggle.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
        });
    }

    // Contact form — client-side feedback only.
    // NOTE for dev: wire this up to a PHP mail handler / API endpoint
    // before going live (see contact.php comment block).
    var contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            var btn = contactForm.querySelector('button[type="submit"]');
            var original = btn.innerText;
            btn.innerText = 'भेजा जा रहा है...';
            btn.disabled = true;
            setTimeout(function () {
                btn.innerText = 'धन्यवाद! हम जल्द संपर्क करेंगे';
                contactForm.reset();
                setTimeout(function () {
                    btn.innerText = original;
                    btn.disabled = false;
                }, 3000);
            }, 800);
        });
    }
});
