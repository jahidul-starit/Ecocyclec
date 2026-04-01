/* ===================================================
   EzygoBD — Franchise Page Script  (franchise.js)
   =================================================== */

(() => {
  'use strict';

  /* ── Hero video fade-in ─────────────────────────── */
  const vid = document.querySelector('.fr-hero-video');
  if (vid) {
    const showVid = () => vid.classList.add('loaded');
    vid.readyState >= 3 ? showVid() : vid.addEventListener('canplay', showVid, { once: true });
  }

  /* ── Smooth scroll for anchor links ─────────────── */
  document.querySelectorAll('.fr-option, .fr-detail-cta a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      const href = link.getAttribute('href');
      if (!href || href.charAt(0) !== '#') return;
      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        const headerH = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--header-h')) || 72;
        const top = target.getBoundingClientRect().top + window.scrollY - headerH - 20;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

  /* ── Intersection Observer — fade-up on scroll ──── */
  const fadeEls = document.querySelectorAll('.ff-fade');
  if (fadeEls.length) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(en => {
        if (en.isIntersecting) {
          en.target.classList.add('visible');
          io.unobserve(en.target);
        }
      });
    }, { threshold: 0.15 });
    fadeEls.forEach(el => io.observe(el));
  }

  /* ── Pre-select franchise model from hash ──────── */
  const hash = window.location.hash;
  if (hash === '#foco' || hash === '#fofo') {
    const sel = document.getElementById('frModel');
    if (sel) sel.value = hash.slice(1);
  }
})();
