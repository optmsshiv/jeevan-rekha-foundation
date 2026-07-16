// Rekha Foundation — shared behaviour across all pages

// Page loader — hide once everything (including images) has finished loading.
// A small minimum-visible-time avoids an ugly flash on fast connections.
// Hides via inline styles (not just a CSS class) so it can't get stuck
// visible due to a stale/cached style.css missing the .loader-hidden rule —
// and sets display:none after the fade so it's fully out of the layout.
(function () {
    var loader = document.getElementById('page-loader');
    if (!loader) return;
    var minVisibleMs = 300;
    var start = Date.now();
    var hidden = false;

    function hideLoader() {
        if (hidden) return;
        hidden = true;
        var elapsed = Date.now() - start;
        var wait = Math.max(0, minVisibleMs - elapsed);
        setTimeout(function () {
            loader.classList.add('loader-hidden');
            loader.style.opacity = '0';
            loader.style.visibility = 'hidden';
            loader.style.pointerEvents = 'none';
            setTimeout(function () {
                loader.style.display = 'none';
            }, 500);
        }, wait);
    }

    if (document.readyState === 'complete') {
        hideLoader();
    } else {
        window.addEventListener('load', hideLoader);
    }
    // Hard safety net — never let the loader block the site for more than
    // 2.5s no matter what (slow image, stalled load event, etc.).
    setTimeout(hideLoader, 2500);
})();

document.addEventListener('DOMContentLoaded', function () {

    // Success toast — click the backdrop to dismiss early (contact page only,
    // element only exists there).
    var successToast = document.getElementById('success-toast');
    if (successToast) {
        successToast.addEventListener('click', function (e) {
            if (e.target === successToast) {
                successToast.classList.remove('toast-visible');
            }
        });
    }

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
    //
    // Some hosting security layers (e.g. Imunify360's "Human Check") respond
    // to certain requests with a JS challenge instead of passing them through:
    //   <script>document.cookie = "humans_XXXXX=1"; document.location.reload(true)</script>
    // A normal page navigation executes this automatically and invisibly.
    // fetch() never executes returned <script> tags, so that cookie never
    // gets set and the request keeps getting blocked. This detects that
    // exact pattern, sets the cookie manually, and retries the real
    // submission once — replicating what a normal browser page load does.
    function extractHumanCheckCookie(text) {
        var match = /document\.cookie\s*=\s*["']([^"'=;]+)=([^"';]+)["']/.exec(text || '');
        return match ? (match[1] + '=' + match[2]) : null;
    }

    var contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            var btn = contactForm.querySelector('button[type="submit"]');
            var errorEl = document.getElementById('contact-form-error');
            var original = btn.innerText;
            var formData = new FormData(contactForm);

            if (errorEl) {
                errorEl.classList.add('hidden');
                errorEl.innerText = '';
            }
            btn.innerText = 'Sending...';
            btn.disabled = true;

            function attemptSubmit(isRetry) {
                fetch(contactForm.getAttribute('action'), {
                    method: 'POST',
                    body: formData,
                    headers: { 'Accept': 'application/json' }
                })
                    .then(function (res) {
                        return res.text().then(function (text) {
                            var data;
                            try {
                                data = JSON.parse(text);
                            } catch (parseErr) {
                                var cookiePair = extractHumanCheckCookie(text);
                                if (cookiePair && !isRetry) {
                                    document.cookie = cookiePair + '; path=/';
                                    attemptSubmit(true);
                                    return null;
                                }
                                var snippet = (text || '(empty response)').replace(/\s+/g, ' ').trim().substring(0, 300);
                                throw new Error('Our server didn\'t respond as expected. Please try again in a moment, or contact us directly by phone/WhatsApp. (HTTP ' + res.status + ': ' + snippet + ')');
                            }
                            return { ok: res.ok, data: data };
                        });
                    })
                    .then(function (result) {
                        if (result === null) return; // retry already dispatched
                        if (result.ok && result.data.success) {
                            contactForm.reset();
                            btn.innerText = original;
                            btn.disabled = false;

                            var toast = document.getElementById('success-toast');
                            if (toast) {
                                toast.classList.add('toast-visible');
                                setTimeout(function () {
                                    toast.classList.remove('toast-visible');
                                }, 3500);
                            }
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
            }

            attemptSubmit(false);
        });
    }
});
