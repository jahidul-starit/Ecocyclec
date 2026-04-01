/* ===================================================
   EzygoBD — About Page JS  (about.js)
   ===================================================
   Handles:
     1. .au-fade-up IntersectionObserver
     2. Decimal impact counter  (#impactNum)
     3. Integer partner-stats counters  (.pstat-val[data-target])
     4. Corporate video overlay  (#corpPlayBtn / #corpVideoOverlay)
     5. About hero video fade-in
   ================================================= */

document.addEventListener('DOMContentLoaded', () => {

  /* ── 1. Fade-up observer ─────────────────────────── */
  const fadeEls = document.querySelectorAll('.au-fade-up');
  if (fadeEls.length) {
    const fadeObs = new IntersectionObserver((entries) => {
      entries.forEach((e, i) => {
        if (e.isIntersecting) {
          /* Stagger siblings by index within their parent */
          const siblings = [...e.target.parentElement.children].filter(
            c => c.classList.contains('au-fade-up')
          );
          const delay = siblings.indexOf(e.target) * 90;
          setTimeout(() => e.target.classList.add('visible'), delay);
          fadeObs.unobserve(e.target);
        }
      });
    }, { threshold: 0.12 });
    fadeEls.forEach(el => fadeObs.observe(el));
  }


  /* ── 2. Decimal impact counter ───────────────────── */
  const impactNumEl = document.getElementById('impactNum');
  if (impactNumEl) {
    const TARGET   = 4200000.89;
    const DECIMALS = 2;
    const DURATION = 3000;   // ms

    let started = false;

    const easeOutCubic = t => 1 - Math.pow(1 - t, 3);

    const animateImpact = () => {
      if (started) return;
      started = true;
      const start = performance.now();
      const tick = (now) => {
        const elapsed = now - start;
        const progress = Math.min(elapsed / DURATION, 1);
        const val = TARGET * easeOutCubic(progress);
        impactNumEl.textContent = val.toLocaleString('en-US', {
          minimumFractionDigits: DECIMALS,
          maximumFractionDigits: DECIMALS,
        });
        if (progress < 1) requestAnimationFrame(tick);
        else impactNumEl.textContent = TARGET.toLocaleString('en-US', {
          minimumFractionDigits: DECIMALS,
          maximumFractionDigits: DECIMALS,
        });
      };
      requestAnimationFrame(tick);
    };

    const impactObs = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting) {
        animateImpact();
        impactObs.disconnect();
      }
    }, { threshold: 0.3 });
    impactObs.observe(impactNumEl.closest('.about-impact') || impactNumEl);
  }


  /* ── 3. Partner-stats integer counters ───────────── */
  const pstatEls = document.querySelectorAll('.pstat-val[data-target]');
  if (pstatEls.length) {
    const STAT_DURATION = 2200;
    const easeOut = t => 1 - Math.pow(1 - t, 2);

    const animateStat = (el) => {
      const target = parseInt(el.dataset.target, 10);
      const start  = performance.now();
      const tick   = (now) => {
        const p   = Math.min((now - start) / STAT_DURATION, 1);
        const val = Math.round(target * easeOut(p));
        el.textContent = val.toLocaleString('en-US');
        if (p < 1) requestAnimationFrame(tick);
        else el.textContent = target.toLocaleString('en-US');
      };
      requestAnimationFrame(tick);
    };

    const statsSection = pstatEls[0].closest('section') || pstatEls[0];
    const statsObs = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting) {
        pstatEls.forEach(el => animateStat(el));
        statsObs.disconnect();
      }
    }, { threshold: 0.25 });
    statsObs.observe(statsSection);
  }


  /* ── 4. Corporate video overlay ──────────────────── */
  const corpOverlay = document.getElementById('corpVideoOverlay');
  const corpPlayBtn = document.getElementById('corpPlayBtn');
  const corpPlayer  = document.querySelector('.corp-video-player');

  if (corpPlayBtn && corpOverlay && corpPlayer) {
    corpPlayBtn.addEventListener('click', () => {
      corpPlayer.play();
      corpOverlay.classList.add('hidden');
    });
    /* Re-show overlay when video ends */
    corpPlayer.addEventListener('ended', () => {
      corpOverlay.classList.remove('hidden');
      corpPlayer.currentTime = 0;
    });
  }


  /* ── 5. About hero video fade-in ─────────────────── */
  const aboutHeroVideo = document.querySelector('.about-hero-video');
  if (aboutHeroVideo) {
    if (aboutHeroVideo.readyState >= 3) {
      aboutHeroVideo.classList.add('loaded');
    } else {
      aboutHeroVideo.addEventListener('canplaythrough', () => {
        aboutHeroVideo.classList.add('loaded');
      }, { once: true });
    }
  }

});
