/* ===================================================
   EzygoBD — Contact Page JS
   =================================================== */

(function () {

  /* ── Tab switching ── */
  const tabs = document.querySelectorAll('.ct-tab');
  const panels = document.querySelectorAll('.ct-form-panel');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      panels.forEach(p => p.classList.remove('active'));
      tab.classList.add('active');
      const target = document.querySelector(tab.dataset.panel);
      if (target) target.classList.add('active');
    });
  });

  /* ── Show status message from query param ── */
  const params = new URLSearchParams(window.location.search);
  if (params.has('status')) {
    const msg = document.getElementById('ctFormMsg');
    if (msg) {
      if (params.get('status') === 'success') {
        msg.textContent = '✓ Your message was sent successfully! We\'ll get back to you within 24 hours.';
        msg.classList.add('show', 'success');
      } else {
        msg.textContent = '✕ Something went wrong. Please try again or email us directly.';
        msg.classList.add('show', 'error');
      }
      msg.scrollIntoView({ behavior: 'smooth', block: 'center' });
      // Clean URL
      window.history.replaceState({}, '', window.location.pathname);
    }
  }

  /* ── Scroll-in fade animations ── */
  const fadeEls = document.querySelectorAll('.ct-fade');
  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('visible');
          io.unobserve(e.target);
        }
      });
    }, { threshold: 0.12 });
    fadeEls.forEach(el => io.observe(el));
  } else {
    fadeEls.forEach(el => el.classList.add('visible'));
  }

})();
