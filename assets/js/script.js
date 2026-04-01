/* ===================================================
   EzygoBD — Interactivity & Animations
   =================================================== */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  /* ---------- DOM refs ---------- */
  const header      = document.getElementById('header');
  const hamburger   = document.getElementById('hamburger');
  const navLinks    = document.getElementById('navLinks');
  const megaMenu    = document.getElementById('megaMenu');
  const megaClose   = document.getElementById('megaClose');
  const themeToggle = document.getElementById('themeToggle');
  const backToTop   = document.getElementById('backToTop');

  /* ---------- Hero video fade-in ---------- */
  const heroVideo = document.querySelector('.hero-video');
  if (heroVideo) {
    const showVideo = () => heroVideo.classList.add('loaded');
    if (heroVideo.readyState >= 3) {
      showVideo();
    } else {
      heroVideo.addEventListener('canplaythrough', showVideo, { once: true });
      // Fallback: show after 3 s even if canplaythrough never fires
      setTimeout(showVideo, 3000);
    }
  }

  /* ---------- Sticky header ---------- */
  const onScroll = () => {
    if (header) header.classList.toggle('scrolled', window.scrollY > 50);
    if (backToTop) backToTop.classList.toggle('show', window.scrollY > 600);
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* ---------- Mega menu open / close ---------- */
  const closeMega = () => {
    hamburger.classList.remove('active');
    hamburger.setAttribute('aria-expanded', 'false');
    if (megaMenu) {
      megaMenu.classList.remove('open');
      megaMenu.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }
  };

  hamburger.addEventListener('click', (e) => {
    e.stopPropagation();
    if (!megaMenu) return;
    const isOpen = megaMenu.classList.contains('open');
    if (isOpen) {
      closeMega();
    } else {
      hamburger.classList.add('active');
      hamburger.setAttribute('aria-expanded', 'true');
      megaMenu.classList.add('open');
      megaMenu.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    }
  });

  if (megaClose) megaClose.addEventListener('click', closeMega);

  // Close mega menu when a link inside is clicked
  if (megaMenu) {
    megaMenu.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMega));
  }

  // Close mega menu on Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeMega();
  });

  /* ---------- Theme toggle ---------- */
  const savedTheme = localStorage.getItem('ezygo-theme');
  if (savedTheme === 'dark') {
    document.body.classList.add('dark-mode');
    if (themeToggle) themeToggle.setAttribute('aria-pressed', 'true');
  }
  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      document.body.classList.toggle('dark-mode');
      const isDark = document.body.classList.contains('dark-mode');
      themeToggle.setAttribute('aria-pressed', String(isDark));
      localStorage.setItem('ezygo-theme', isDark ? 'dark' : 'light');
    });
  }

  /* ---------- Active nav highlight on scroll ---------- */
  const sections = document.querySelectorAll('section[id]');
  const navAnchors = navLinks ? navLinks.querySelectorAll('a') : [];

  const highlightNav = () => {
    const scrollY = window.scrollY + 120;
    sections.forEach(sec => {
      const top = sec.offsetTop;
      const height = sec.offsetHeight;
      const id = sec.getAttribute('id');
      if (scrollY >= top && scrollY < top + height) {
        navAnchors.forEach(a => {
          a.classList.toggle('active', a.getAttribute('href') === '#' + id);
        });
      }
    });
  };
  window.addEventListener('scroll', highlightNav, { passive: true });

  /* ---------- Back to top ---------- */
  if (backToTop) backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

  /* ---------- Animated counters ---------- */
  const animateCounter = (el, target, duration = 2000) => {
    const start = performance.now();
    const format = (n) => n.toLocaleString('en-US');
    const step = (now) => {
      const progress = Math.min((now - start) / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);          // ease‑out cubic
      el.textContent = format(Math.floor(eased * target));
      if (progress < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  };

  // Hero number
  const heroNum = document.querySelector('.impact-hero-number');
  let heroAnimated = false;

  // Smaller counters
  const counterEls = document.querySelectorAll('.counter-value');
  let countersAnimated = false;

  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      if (entry.target === heroNum && !heroAnimated) {
        heroAnimated = true;
        const target = parseInt(heroNum.dataset.target, 10);
        animateCounter(heroNum, target, 2500);
        // Keep the "+" suffix
        setTimeout(() => { heroNum.textContent = target.toLocaleString('en-US') + '+'; }, 2600);
      }
      if (!countersAnimated && entry.target.classList.contains('counter-value')) {
        countersAnimated = true;
        counterEls.forEach(c => {
          animateCounter(c, parseInt(c.dataset.target, 10), 2000);
        });
      }
    });
  }, { threshold: 0.3 });

  if (heroNum) counterObserver.observe(heroNum);
  counterEls.forEach(c => counterObserver.observe(c));

  /* ---------- Fade-up on scroll ---------- */
  const fadeEls = document.querySelectorAll(
    '.service-card, .step, .benefit-col, .chart-card, .app-screen-card, .news-card, .testimonial-card, .partner-col, .faq-item, .resource-card, .contact-col'
  );
  fadeEls.forEach(el => el.classList.add('fade-up'));

  const fadeObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        fadeObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

  fadeEls.forEach((el, i) => {
    el.style.transitionDelay = `${(i % 6) * 0.08}s`;
    fadeObserver.observe(el);
  });

  /* ---------- FAQ accordion ---------- */
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    item.querySelector('.faq-q').addEventListener('click', () => {
      const isOpen = item.classList.contains('open');
      // Close all
      faqItems.forEach(i => i.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    });
  });

  /* ---------- FAQ category filter ---------- */
  const faqCats = document.querySelectorAll('.faq-cat');
  faqCats.forEach(btn => {
    btn.addEventListener('click', () => {
      faqCats.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const cat = btn.dataset.cat;
      faqItems.forEach(item => {
        if (cat === 'all' || item.dataset.cat === cat) {
          item.style.display = '';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });

  /* ---------- Testimonial carousel ---------- */
  const track        = document.querySelector('.testimonial-track');
  const dotsContainer = document.getElementById('carouselDots');

  if (track && dotsContainer) {
    const cards   = document.querySelectorAll('.testimonial-card');
    const prevBtn = document.getElementById('carouselPrev');
    const nextBtn = document.getElementById('carouselNext');
    let currentSlide = 0;
    let slidesPerView = 3;

    const updateSlidesPerView = () => {
      if (window.innerWidth <= 768) slidesPerView = 1;
      else if (window.innerWidth <= 1024) slidesPerView = 2;
      else slidesPerView = 3;
    };
    updateSlidesPerView();

    const totalSlides = () => Math.max(1, cards.length - slidesPerView + 1);

    const buildDots = () => {
      dotsContainer.innerHTML = '';
      for (let i = 0; i < totalSlides(); i++) {
        const dot = document.createElement('span');
        dot.classList.add('dot');
        if (i === currentSlide) dot.classList.add('active');
        dot.addEventListener('click', () => goTo(i));
        dotsContainer.appendChild(dot);
      }
    };

    const goTo = (idx) => {
      currentSlide = Math.max(0, Math.min(idx, totalSlides() - 1));
      const card = cards[0];
      if (!card) return;
      const gap = 24;
      const cardWidth = card.offsetWidth + gap;
      track.style.transform = `translateX(-${currentSlide * cardWidth}px)`;
      dotsContainer.querySelectorAll('.dot').forEach((d, i) => {
        d.classList.toggle('active', i === currentSlide);
      });
    };

    if (prevBtn) prevBtn.addEventListener('click', () => goTo(currentSlide - 1));
    if (nextBtn) nextBtn.addEventListener('click', () => goTo(currentSlide + 1));

    buildDots();

    window.addEventListener('resize', () => {
      updateSlidesPerView();
      buildDots();
      goTo(Math.min(currentSlide, totalSlides() - 1));
    });

    let autoPlay = setInterval(() => {
      if (currentSlide >= totalSlides() - 1) goTo(0);
      else goTo(currentSlide + 1);
    }, 5000);

    const carousel = document.getElementById('testimonialCarousel');
    if (carousel) {
      carousel.addEventListener('mouseenter', () => clearInterval(autoPlay));
      carousel.addEventListener('mouseleave', () => {
        autoPlay = setInterval(() => {
          if (currentSlide >= totalSlides() - 1) goTo(0);
          else goTo(currentSlide + 1);
        }, 5000);
      });
    }
  }

  /* ---------- Smooth scroll for all # links ---------- */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      const target = document.querySelector(anchor.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
});
