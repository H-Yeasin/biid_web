/* ============================================================
   MOTION
   Scroll reveals, count-up numbers, cursor magnetism and a custom
   cursor. Loaded after site.js on every main-site page; styles are
   in css/motion.css. Each module is independent and fails open: if
   one throws, the page is left fully visible and usable.
   ============================================================ */
(function () {
    'use strict';

    var reduced = window.matchMedia('(prefers-reduced-motion: reduce)');
    var finePointer = window.matchMedia('(hover: hover) and (pointer: fine)');
    var forcedColors = window.matchMedia('(forced-colors: active)');
    var supportsTranslate = !!(window.CSS && CSS.supports && CSS.supports('translate', '0 0'));

    function listen(mq, fn) {
        if (mq.addEventListener) mq.addEventListener('change', fn);
        else if (mq.addListener) mq.addListener(fn);
    }

    function guard(fn, cleanup) {
        try {
            fn();
        } catch (err) {
            try { cleanup(); } catch (ignore) { /* nothing more to do */ }
        }
    }

    /* An element is "mid-reveal" until its reveal animation has ended (or it was shown instantly) */
    function midReveal(el) {
        return !!el.closest('[data-reveal]:not(.is-done)');
    }

    function init() {
        guard(initReveal, function () {
            document.querySelectorAll('[data-reveal]').forEach(function (el) {
                el.removeAttribute('data-reveal');
            });
        });
        guard(initCount, function () {
            document.querySelectorAll('[data-final]').forEach(function (el) {
                el.textContent = el.getAttribute('data-final');
            });
        });
        guard(initPointer, function () {
            document.documentElement.classList.remove('has-mo-cursor');
        });
    }

    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
    else init();

    /* ============================================================
       SCROLL REVEAL
       Elements below the fold get [data-reveal]; css/motion.css hides
       them until .is-in is added. Elements already on screen are never
       hidden, so there is no flash and no-JS users see everything.
       ============================================================ */
    var REVEAL_TAGS = [
        ['up', [
            '.section-head', '.mission-strip-inner > div', '.about-text > p', '.strategy-item',
            '.about-quote-card', '.work-pillar-header', '.team-group-header', '.partner-group > h3',
            '.contact-form-wrap', '.contact-info-wrap > *', '.hot-news-banner', '.view-all-news',
            '.cta-band-inner > *', '#social h2', '.social-links'
        ].join(', ')],
        ['up', [
            '.pillar-card', '.spotlight-card', '.news-card-item', '.svc-card', '.proj-card',
            '.product-card', '.team-card', '.pub-item'
        ].join(', ')],
        ['pop', '.partner-logo, .mission-logo'],
        ['mask', '.news-card-item img, .hot-news-banner img, .product-card-img']
    ];
    var REVEAL_SKIP = '#hero, footer, .footer-bottom, .project-popup-overlay, [data-no-reveal]';

    function initReveal() {
        if (reduced.matches || !supportsTranslate || !('IntersectionObserver' in window)) return;

        var vh = window.innerHeight;
        var seen = new Set();
        var candidates = [];

        /* Read pass: measure everything before touching the DOM */
        REVEAL_TAGS.forEach(function (tag) {
            document.querySelectorAll(tag[1]).forEach(function (el) {
                if (seen.has(el) || el.closest(REVEAL_SKIP)) return;
                seen.add(el);
                candidates.push({
                    el: el,
                    kind: el.getAttribute('data-reveal-as') || tag[0],
                    top: el.getBoundingClientRect().top
                });
            });
        });

        /* Write pass */
        var pending = [];
        candidates.forEach(function (c) {
            if (c.top < vh * 0.9) return;
            c.el.setAttribute('data-reveal', c.kind);
            pending.push(c.el);
        });
        if (!pending.length) return;

        function reveal(el, instant) {
            /* The observer and the scroll sweep can both reach the same element */
            var at = pending.indexOf(el);
            if (at === -1) return;
            pending.splice(at, 1);
            io.unobserve(el);
            el.classList.add('is-in');
            if (instant) el.classList.add('is-instant', 'is-done');
        }

        var io = new IntersectionObserver(function (entries) {
            var index = {};
            entries
                .filter(function (entry) { return entry.isIntersecting; })
                .sort(function (a, b) {
                    return a.target.compareDocumentPosition(b.target) & Node.DOCUMENT_POSITION_FOLLOWING ? -1 : 1;
                })
                .forEach(function (entry) {
                    /* Stagger within a batch, per kind, so cards cascade and images don't push them back */
                    var kind = entry.target.getAttribute('data-reveal');
                    index[kind] = index[kind] === undefined ? 0 : index[kind] + 1;
                    entry.target.style.animationDelay = Math.min(index[kind], 6) * 70 + 'ms';
                    reveal(entry.target, false);
                });
        }, { rootMargin: '0px 0px -10% 0px', threshold: 0 });

        pending.forEach(function (el) { io.observe(el); });

        /* Magnetism waits for the reveal animation to finish */
        document.addEventListener('animationend', function (e) {
            var el = e.target;
            if (el.hasAttribute && el.hasAttribute('data-reveal') && e.animationName.indexOf('mo-') === 0) {
                el.classList.add('is-done');
            }
        });

        /* Safety net: IntersectionObserver never reports elements that were jumped over
           (End/Home, #anchor links, scroll restoration), so show anything scrolled past. */
        var queued = false;
        window.addEventListener('scroll', function () {
            if (queued || !pending.length) return;
            queued = true;
            requestAnimationFrame(function () {
                queued = false;
                var passed = pending.filter(function (el) {
                    return el.getBoundingClientRect().bottom < 0;
                });
                passed.forEach(function (el) { reveal(el, true); });
            });
        }, { passive: true });
    }

    /* ============================================================
       COUNT-UP NUMBERS
       Opt-in with data-count="N". The server-rendered text is the
       final value, so print, SEO and no-JS all see the real number.
       ============================================================ */
    function initCount() {
        var els = document.querySelectorAll('[data-count]');
        if (reduced.matches || !els.length || !('IntersectionObserver' in window)) return;

        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                io.unobserve(entry.target);
                countTo(entry.target);
            });
        }, { threshold: 0.6 });

        els.forEach(function (el) {
            el.setAttribute('data-final', el.textContent.trim());
            el.textContent = '0';
            io.observe(el);
        });

        function countTo(el) {
            var to = parseInt(el.getAttribute('data-count'), 10);
            var final = el.getAttribute('data-final');
            if (isNaN(to)) {
                el.textContent = final;
                return;
            }
            var duration = Math.min(1400, Math.max(600, to * 60));
            /* Inside the hero, wait for the intro to finish rising */
            var start = performance.now() + (el.closest('#hero') ? 500 : 0);

            (function step(now) {
                var p = Math.min(Math.max((now - start) / duration, 0), 1);
                el.textContent = p < 1
                    ? Math.round((1 - Math.pow(1 - p, 4)) * to).toLocaleString('en-US')
                    : final;
                if (p < 1) requestAnimationFrame(step);
            })(performance.now());
        }
    }

    /* ============================================================
       POINTER ENGINE: CURSOR MAGNETISM + CUSTOM CURSOR
       One pointermove listener and one requestAnimationFrame loop
       drive both. Runs only for a fine, hovering pointer (mouse),
       never for reduced-motion or forced-colors users, and re-checks
       when those preferences change.
       ============================================================ */

    /* edge = attraction radius beyond the element's box (0 = pointer must be over it),
       pull = fraction of the pointer offset applied, max = cap in px, snap = cursor ring locks on */
    var MAGNET_TIERS = [
        { sel: '.btn:not(.disabled)', edge: 80, pull: 0.30, max: 8, snap: true },
        { sel: '.social-link', edge: 70, pull: 0.40, max: 10, snap: true },
        { sel: '.nav-brand a, .footer-logo', edge: 40, pull: 0.20, max: 5 },
        { sel: '.nav-links > a', edge: 14, pull: 0.25, max: 3, minWidth: 921 },
        { sel: '.pillar-card, .spotlight-card, .team-card-ceo', edge: 0, pull: 0.06, max: 6 }
    ];
    var MAGNET_SKIP = '.project-popup-overlay';

    var CURSOR_NATIVE = 'input, textarea, select, iframe, [contenteditable="true"]';
    var CURSOR_LINK = 'a, button, [role="button"], .btn, .proj-card, label, summary';
    var CURSOR_SNAP = '.btn, .social-link';
    /* Only cards that are real links. .proj-card is left out: 6 of the 18 have no popup behind them */
    var CURSOR_LABELS = [
        ['.pillar-card, .spotlight-card', 'View']
    ];
    /* Surfaces with a dark background, where the cursor switches to its light variant */
    var CURSOR_DARK = '#breaking-news-bar, #hero, .hot-news-banner, .about-quote-card, #testimonials, ' +
                      '#social, #footer, .footer-bottom, .cta-band';

    function initPointer() {
        var engine = null;

        function sync() {
            var on = supportsTranslate && finePointer.matches && !reduced.matches && !forcedColors.matches;
            if (on && !engine) {
                try {
                    engine = createEngine();
                } catch (err) {
                    engine = null;
                }
            } else if (!on && engine) {
                engine.destroy();
                engine = null;
            }
        }

        listen(finePointer, sync);
        listen(reduced, sync);
        listen(forcedColors, sync);
        sync();
    }

    function createEngine() {
        var html = document.documentElement;
        var disposers = [];
        var pointer = { x: -1e4, y: -1e4, active: false };
        var raf = 0;
        var last = 0;

        function destroy() {
            disposers.forEach(function (fn) { fn(); });
            disposers = [];
        }

        function on(target, type, fn, opts) {
            target.addEventListener(type, fn, opts);
            disposers.push(function () { target.removeEventListener(type, fn, opts); });
        }

        function kick() {
            if (!raf) raf = requestAnimationFrame(tick);
        }
        disposers.push(function () {
            if (raf) cancelAnimationFrame(raf);
            raf = 0;
        });

        try {
            /* ----- Magnetism ----- */
            var tiers = MAGNET_TIERS.map(function (cfg) { return { cfg: cfg, items: [] }; });
            var byEl = new Map();
            var visible = new Set();

            tiers.forEach(function (tier) {
                document.querySelectorAll(tier.cfg.sel).forEach(function (el) {
                    if (byEl.has(el) || el.closest(MAGNET_SKIP)) return;
                    var it = { el: el, x: 0, y: 0, tx: 0, ty: 0, dx: 0, dy: 0, rect: null, css: '' };
                    tier.items.push(it);
                    byEl.set(el, it);
                });
            });

            /* Cached centre excludes the offset we applied ourselves, otherwise the pull feeds back into itself */
            var measure = function (it) {
                var r = it.el.getBoundingClientRect();
                return {
                    cx: r.left + r.width / 2 - it.x,
                    cy: r.top + r.height / 2 - it.y,
                    hw: r.width / 2,
                    hh: r.height / 2
                };
            };

            var apply = function (it) {
                var v = (it.x || it.y) ? it.x.toFixed(2) + 'px ' + it.y.toFixed(2) + 'px' : '';
                if (v === it.css) return;
                it.css = v;
                if (v) it.el.style.setProperty('translate', v);
                else it.el.style.removeProperty('translate');
            };

            var vio = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    var it = byEl.get(entry.target);
                    if (entry.isIntersecting) {
                        visible.add(it);
                    } else {
                        visible.delete(it);
                        it.x = it.y = it.tx = it.ty = 0;
                        it.rect = null;
                        apply(it);
                    }
                });
                kick();
            });
            byEl.forEach(function (it) { vio.observe(it.el); });
            disposers.push(function () {
                vio.disconnect();
                byEl.forEach(function (it) { it.el.style.removeProperty('translate'); });
            });

            var invalidate = function () {
                byEl.forEach(function (it) { it.rect = null; });
            };

            var magnetUpdate = function (dt) {
                var busy = false;

                /* Read phase */
                visible.forEach(function (it) {
                    if (!it.rect && !midReveal(it.el)) it.rect = measure(it);
                });

                /* Targets: only the nearest item of each tier is pulled */
                tiers.forEach(function (tier) {
                    var cfg = tier.cfg;
                    var off = !pointer.active || (cfg.minWidth && window.innerWidth < cfg.minWidth);
                    var best = null;
                    var bestDist = Infinity;

                    tier.items.forEach(function (it) {
                        it.tx = 0;
                        it.ty = 0;
                        if (off || !it.rect || !visible.has(it)) return;
                        var dx = pointer.x - it.rect.cx;
                        var dy = pointer.y - it.rect.cy;
                        var dist = Math.hypot(
                            Math.max(Math.abs(dx) - it.rect.hw, 0),
                            Math.max(Math.abs(dy) - it.rect.hh, 0)
                        );
                        if (dist <= cfg.edge && dist < bestDist) {
                            best = it;
                            bestDist = dist;
                            it.dx = dx;
                            it.dy = dy;
                        }
                    });

                    if (best) {
                        var falloff = cfg.edge ? 1 - bestDist / cfg.edge : 1;
                        var pullX = best.dx * cfg.pull * falloff;
                        var pullY = best.dy * cfg.pull * falloff;
                        /* Cap the total distance moved, so diagonals don't travel further than straight pulls */
                        var length = Math.hypot(pullX, pullY);
                        var scale = length > cfg.max ? cfg.max / length : 1;
                        best.tx = pullX * scale;
                        best.ty = pullY * scale;
                    }
                });

                /* Write phase */
                visible.forEach(function (it) {
                    var k = 1 - Math.exp(-dt / ((it.tx || it.ty) ? 90 : 160));
                    it.x += (it.tx - it.x) * k;
                    it.y += (it.ty - it.y) * k;
                    if (Math.abs(it.tx - it.x) < 0.05 && Math.abs(it.ty - it.y) < 0.05) {
                        it.x = it.tx;
                        it.y = it.ty;
                    } else {
                        busy = true;
                    }
                    apply(it);
                });

                return busy;
            };

            /* ----- Custom cursor ----- */
            var root = document.createElement('div');
            root.className = 'mo-cursor is-hidden';
            root.setAttribute('aria-hidden', 'true');
            root.innerHTML =
                '<div class="mo-dot"><span class="mo-dot-shape"></span></div>' +
                '<div class="mo-ring"><span class="mo-shape"><span class="mo-label"></span></span></div>';
            document.body.appendChild(root);
            disposers.push(function () {
                root.remove();
                html.classList.remove('has-mo-cursor');
            });

            var dot = root.querySelector('.mo-dot');
            var ring = root.querySelector('.mo-ring');
            var label = root.querySelector('.mo-label');
            var ready = false;      /* true after the first real mouse move */
            var rx = 0;
            var ry = 0;
            var snapItem = null;

            var place = function () {
                dot.style.transform = 'translate3d(' + pointer.x + 'px,' + pointer.y + 'px,0)';
                ring.style.transform = 'translate3d(' + rx + 'px,' + ry + 'px,0)';
            };

            var setSnap = function (it) {
                if (it === snapItem) return;
                snapItem = it;
                root.classList.toggle('is-snap', !!it);
                if (it) {
                    var radius = getComputedStyle(it.el).borderTopLeftRadius;
                    root.style.setProperty('--rw', (it.rect.hw * 2 + 8) + 'px');
                    root.style.setProperty('--rh', (it.rect.hh * 2 + 8) + 'px');
                    root.style.setProperty('--rr', /%$/.test(radius) ? radius : (parseFloat(radius) + 4) + 'px');
                } else {
                    ['--rw', '--rh', '--rr'].forEach(function (name) { root.style.removeProperty(name); });
                }
            };

            /* Recomputed on pointerover, not on every move */
            var setHover = function (target) {
                if (!target || !target.closest) return;
                var cl = root.classList;
                cl.toggle('is-native', !!target.closest(CURSOR_NATIVE));
                cl.toggle('on-dark', !!target.closest(CURSOR_DARK));
                cl.toggle('is-link', !!target.closest(CURSOR_LINK));

                var text = '';
                for (var i = 0; i < CURSOR_LABELS.length && !text; i++) {
                    if (target.closest(CURSOR_LABELS[i][0])) text = CURSOR_LABELS[i][1];
                }
                cl.toggle('is-label', !!text);
                if (text) label.textContent = text;

                var snapEl = target.closest(CURSOR_SNAP);
                var it = snapEl ? byEl.get(snapEl) : null;
                if (it && !it.rect && visible.has(it) && !midReveal(it.el)) it.rect = measure(it);
                setSnap(it && it.rect ? it : null);
            };

            var cursorUpdate = function (dt) {
                if (!ready) return false;
                var tx = pointer.x;
                var ty = pointer.y;
                if (snapItem && snapItem.rect) {
                    tx = snapItem.rect.cx + snapItem.x;
                    ty = snapItem.rect.cy + snapItem.y;
                }
                var k = 1 - Math.exp(-dt / 90);
                rx += (tx - rx) * k;
                ry += (ty - ry) * k;
                var settled = Math.abs(tx - rx) < 0.1 && Math.abs(ty - ry) < 0.1;
                if (settled) {
                    rx = tx;
                    ry = ty;
                }
                place();
                return !settled;
            };

            var hide = function () {
                pointer.active = false;
                root.classList.add('is-hidden');
                root.classList.remove('is-down');
                setSnap(null);
                kick();     /* lets magnets release */
            };

            /* ----- Shared loop ----- */
            var tick = function (now) {
                raf = 0;
                var dt = last ? Math.min(now - last, 50) : 16;
                var magnetBusy = magnetUpdate(dt);
                var cursorBusy = cursorUpdate(dt);
                var busy = magnetBusy || cursorBusy;
                last = busy ? now : 0;
                if (busy) raf = requestAnimationFrame(tick);
            };

            /* ----- Events ----- */
            on(window, 'pointermove', function (e) {
                if (e.pointerType !== 'mouse') {
                    if (pointer.active) hide();
                    return;
                }
                pointer.x = e.clientX;
                pointer.y = e.clientY;
                if (!pointer.active) {
                    /* First move, or coming back after leaving the window: jump, don't fly in */
                    pointer.active = true;
                    rx = pointer.x;
                    ry = pointer.y;
                    if (!ready) {
                        ready = true;
                        html.classList.add('has-mo-cursor');
                    }
                    setHover(e.target);
                    place();
                    root.classList.remove('is-hidden');
                }
                kick();
            }, { passive: true });

            on(document, 'pointerover', function (e) {
                if (e.pointerType !== 'mouse' || !pointer.active) return;
                setHover(e.target);
                kick();
            });

            /* Leaving the window (or entering a cross-document iframe) */
            on(document, 'pointerout', function (e) {
                if (e.pointerType === 'mouse' && !e.relatedTarget && pointer.active) hide();
            });
            on(window, 'blur', function () { if (pointer.active) hide(); });
            on(document, 'visibilitychange', function () { if (document.hidden && pointer.active) hide(); });

            /* Press feedback */
            on(window, 'pointerdown', function (e) {
                if (e.pointerType === 'mouse' && e.button === 0) root.classList.add('is-down');
            }, true);
            ['pointerup', 'pointercancel', 'dragend', 'blur'].forEach(function (type) {
                on(window, type, function () { root.classList.remove('is-down'); }, true);
            });

            on(window, 'scroll', function () {
                invalidate();
                if (pointer.active) kick();
            }, { passive: true });
            /* Rects measured while an intro/reveal animation was moving an ancestor are stale once it ends */
            on(document, 'animationend', function () {
                invalidate();
                if (pointer.active) kick();
            });
            on(window, 'resize', function () {
                invalidate();
                kick();
            });
        } catch (err) {
            destroy();
            throw err;
        }

        return { destroy: destroy };
    }
})();
