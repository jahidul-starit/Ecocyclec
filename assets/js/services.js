/* ===================================================
   EzygoBD — Services Page JS  (services.js)
   ===================================================
   1. Hero video fade-in
   2. .sf-fade IntersectionObserver (staggered)
   ================================================= */

document.addEventListener('DOMContentLoaded', () => {

  /* ── 1. Hero video fade-in ──────────────────────── */
  const heroVideo = document.querySelector('.svc-hero-video');
  if (heroVideo) {
    if (heroVideo.readyState >= 3) {
      heroVideo.classList.add('loaded');
    } else {
      heroVideo.addEventListener('canplaythrough', () => {
        heroVideo.classList.add('loaded');
      }, { once: true });
    }
  }

  /* ── 2. Staggered sf-fade observer ─────────────── */
  const fadeEls = document.querySelectorAll('.sf-fade');
  if (fadeEls.length) {
    const obs = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        /* Stagger sibling cards within same grid/flex parent */
        const siblings = [...entry.target.parentElement.children].filter(
          c => c.classList.contains('sf-fade')
        );
        const delay = siblings.indexOf(entry.target) * 80;
        setTimeout(() => entry.target.classList.add('visible'), delay);
        obs.unobserve(entry.target);
      });
    }, { threshold: 0.1 });

    fadeEls.forEach(el => obs.observe(el));
  }

});
