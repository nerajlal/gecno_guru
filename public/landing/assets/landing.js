/* ==============================================
   GecnoGuru — Landing Page JS
   Deploy at: public_html/assets/landing.js
   ============================================== */

(function () {
    'use strict';

    /* ---------- Navbar scroll shadow ---------- */
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 20);
    });

    /* ---------- Mobile menu ---------- */
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('open');
        mobileMenu.classList.toggle('open');
    });

    // Close mobile menu on outside click
    document.addEventListener('click', (e) => {
        if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
            hamburger.classList.remove('open');
            mobileMenu.classList.remove('open');
        }
    });

    /* ---------- Mobile submenu toggle ---------- */
    const mobileServicesToggle = document.getElementById('mobile-services-toggle');
    const mobileSubmenu = document.getElementById('mobile-submenu');
    if (mobileServicesToggle) {
        mobileServicesToggle.addEventListener('click', (e) => {
            e.preventDefault();
            const isOpen = mobileSubmenu.style.display === 'flex';
            mobileSubmenu.style.display = isOpen ? 'none' : 'flex';
            mobileServicesToggle.querySelector('i').style.transform = isOpen ? '' : 'rotate(180deg)';
        });
    }

    /* ---------- Intersection Observer — fade-in ---------- */
    const fadeEls = document.querySelectorAll('.fade-in');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });
    fadeEls.forEach(el => observer.observe(el));

    /* ---------- Animated counter ---------- */
    function animateCounter(el, target, duration = 1800) {
        let start = 0;
        const step = target / (duration / 16);
        const suffix = el.dataset.suffix || '';
        const prefix = el.dataset.prefix || '';
        const timer = setInterval(() => {
            start = Math.min(start + step, target);
            el.textContent = prefix + Math.floor(start).toLocaleString() + suffix;
            if (start >= target) clearInterval(timer);
        }, 16);
    }

    const statObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                animateCounter(el, parseInt(el.dataset.target, 10));
                statObserver.unobserve(el);
            }
        });
    }, { threshold: 0.5 });
    document.querySelectorAll('[data-target]').forEach(el => statObserver.observe(el));

    /* ---------- Active nav link indicator ---------- */
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-links a[href^="#"]');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(sec => {
            if (window.scrollY >= sec.offsetTop - 80) current = sec.id;
        });
        navLinks.forEach(link => {
            link.style.color = link.getAttribute('href') === '#' + current
                ? 'var(--blue-300)'
                : '';
        });
    }, { passive: true });

    /* ---------- Smooth close mobile menu on link click ---------- */
    mobileMenu.querySelectorAll('a[href]').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('open');
            mobileMenu.classList.remove('open');
        });
    });

})();
