/* ============================================================
   advertising.js — EzygoBD Advertising Page Interactions
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {

  /* ── Fade-up scroll observer ── */
  const fadeEls = document.querySelectorAll('.af-fade');
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          setTimeout(() => entry.target.classList.add('visible'), i * 80);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    fadeEls.forEach(el => observer.observe(el));
  } else {
    fadeEls.forEach(el => el.classList.add('visible'));
  }

  /* ── Animated stat counters ── */
  const statVals = document.querySelectorAll('.ad-stat-val[data-target]');

  const animateCounter = (el) => {
    const target = +el.dataset.target;
    const duration = 1800;
    const step = 16;
    const increment = target / (duration / step);
    let current = 0;

    const tick = () => {
      current = Math.min(current + increment, target);
      el.textContent = Math.floor(current).toLocaleString();
      if (current < target) requestAnimationFrame(tick);
      else el.textContent = target.toLocaleString();
    };
    requestAnimationFrame(tick);
  };

  if ('IntersectionObserver' in window) {
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    statVals.forEach(el => counterObserver.observe(el));
  } else {
    statVals.forEach(el => { el.textContent = el.dataset.target; });
  }

  /* ── Form submit feedback ── */
  const adForm = document.querySelector('.ad-form');
  const submitBtn = adForm ? adForm.querySelector('.ad-submit-btn') : null;

  if (adForm && submitBtn) {
    adForm.querySelectorAll('[required]').forEach(field => {
      field.addEventListener('input', () => field.classList.remove('field-error'));
    });

    adForm.addEventListener('submit', (e) => {
      e.preventDefault();

      // Basic required field check
      const required = adForm.querySelectorAll('[required]');
      let valid = true;
      required.forEach(field => {
        field.classList.remove('field-error');
        if (!field.value.trim()) {
          field.classList.add('field-error');
          valid = false;
        }
      });
      if (!valid) return;

      // Show loading state
      const originalHTML = submitBtn.innerHTML;
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Sending…';

      // Simulate submission (replace with real endpoint)
      setTimeout(() => {
        submitBtn.innerHTML = '<i class="fa-solid fa-circle-check"></i> Enquiry Received!';
        submitBtn.style.background = '#00a854';
        adForm.reset();
        setTimeout(() => {
          submitBtn.innerHTML = originalHTML;
          submitBtn.style.background = '';
          submitBtn.disabled = false;
        }, 4000);
      }, 1500);
    });
  }

});
