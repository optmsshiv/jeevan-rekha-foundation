// Rekha Foundation — shared behaviour across all pages

// Page loader — hide once everything (including images) has finished loading.
// A small minimum-visible-time avoids an ugly flash on fast connections.
(function () {
    var loader = document.getElementById('page-loader');
    if (!loader) return;
    var minVisibleMs = 400;
    var start = Date.now();

    function hideLoader() {
        var elapsed = Date.now() - start;
        var wait = Math.max(0, minVisibleMs - elapsed);
        setTimeout(function () {
            loader.classList.add('loader-hidden');
        }, wait);
    }

    if (document.readyState === 'complete') {
        hideLoader();
    } else {
        window.addEventListener('load', hideLoader);
        // Safety net: never let the loader block the site for more than 4s
        // (e.g. a slow or missing image), even if the load event is delayed.
        setTimeout(hideLoader, 4000);
    }
})();

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
        waLink.setAttribute('aria-label', 'Message us on WhatsApp');
        waLink.setAttribute('title', 'Message us on WhatsApp');
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

    // Contact form — submits to api/contact.php via fetch, shows real
    // success/error feedback based on the server's JSON response.
    var contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            var btn = contactForm.querySelector('button[type="submit"]');
            var errorEl = document.getElementById('contact-form-error');
            var original = btn.innerText;

            if (errorEl) {
                errorEl.classList.add('hidden');
                errorEl.innerText = '';
            }
            btn.innerText = 'Sending...';
            btn.disabled = true;

            fetch(contactForm.getAttribute('action'), {
                method: 'POST',
                body: new FormData(contactForm),
                headers: { 'Accept': 'application/json' }
            })
                .then(function (res) { return res.json().then(function (data) { return { ok: res.ok, data: data }; }); })
                .then(function (result) {
                    if (result.ok && result.data.success) {
                        btn.innerText = 'Thank you! We will contact you soon';
                        contactForm.reset();
                        setTimeout(function () {
                            btn.innerText = original;
                            btn.disabled = false;
                        }, 4000);
                    } else {
                        throw new Error(result.data.message || 'Something went wrong. Please try again.');
                    }
                })
                .catch(function (err) {
                    if (errorEl) {
                        errorEl.innerText = err.message || 'Something went wrong. Please try again, or contact us directly by phone/WhatsApp.';
                        errorEl.classList.remove('hidden');
                    }
                    btn.innerText = original;
                    btn.disabled = false;
                });
        });
    }
});
