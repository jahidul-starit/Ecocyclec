<?php
$pageTitle = "About Us — EzygoBD | Bangladesh's #1 EV Rental Network";
$pageDesc  = "Learn about EzygoBD's mission, leadership, sustainability impact and partner ecosystem.";
$pageCss   = 'about.css';
$pageJs    = 'about.js';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body>

<?php include 'includes/header.php'; ?>
<?php include 'includes/mega-menu.php'; ?>

  <!-- ============ ABOUT HERO ============ -->
  <section class="about-hero">
    <video class="about-hero-video" autoplay muted loop playsinline aria-hidden="true">
      <source src="assets/videos/HUAIHAI Sparky Teaser.mp4" type="video/mp4" />
    </video>
    <div class="about-hero-overlay"></div>
    <div class="about-hero-content container">
      <p class="about-eyebrow">Our Mission</p>
      <h1>Join Us in Our Mission for<br /><span>Zero Emission</span></h1>
      <p class="about-hero-sub">Building Bangladesh's cleanest, greenest and most connected EV mobility ecosystem — one ride at a time.</p>
      <a href="#about-contact" class="btn btn-primary btn-lg about-cta-pill">Contact Us</a>
    </div>
    <div class="about-wave-bottom">
      <svg viewBox="0 0 1440 90" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,60 C200,100 400,20 600,55 C800,90 1000,10 1200,50 C1320,70 1390,35 1440,45 L1440,90 L0,90 Z" fill="#ffffff"/>
      </svg>
    </div>
  </section>

  <!-- ============ MISSION / VISION / VALUES ============ -->
  <section class="about-mvv">
    <div class="container">
      <div class="section-header">
        <span class="tag">Who We Are</span>
        <h2>Driving Bangladesh Towards a Greener Tomorrow</h2>
        <p>EzygoBD is on a mission to make clean, affordable electric mobility accessible to every Bangladeshi.</p>
      </div>
      <div class="mvv-grid">
        <div class="mvv-card au-fade-up">
          <div class="mvv-icon"><i class="fa-solid fa-bullseye"></i></div>
          <h3>Our Mission</h3>
          <p>Replace fossil-fuel vehicles with affordable, reliable electric alternatives — reducing urban air pollution and creating sustainable livelihoods across Bangladesh.</p>
        </div>
        <div class="mvv-card mvv-card--green au-fade-up">
          <div class="mvv-icon"><i class="fa-solid fa-eye"></i></div>
          <h3>Our Vision</h3>
          <p>A Bangladesh where every last-mile journey is zero-emission — powered by locally charged, locally operated electric vehicles and a thriving green economy.</p>
        </div>
        <div class="mvv-card au-fade-up">
          <div class="mvv-icon"><i class="fa-solid fa-star"></i></div>
          <h3>Our Values</h3>
          <p>Sustainability, inclusion, and innovation. We believe green mobility should be a right, not a luxury — accessible to riders, delivery partners, and corporations alike.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="section-wave wave-to-green">
    <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,35 C360,70 720,0 1080,35 C1260,52 1380,20 1440,35 L1440,70 L0,70 Z" fill="#f0fdf5"/>
    </svg>
  </div>

  <!-- ============ FOUNDER / LEADERSHIP ============ -->
  <section class="about-founder">
    <div class="container founder-layout">
      <div class="founder-bio au-fade-up">
        <span class="tag">Leadership</span>
        <h2 class="founder-name">Karim<br/>Chowdhury</h2>
        <p class="founder-role">CO-FOUNDER &amp; CEO</p>
        <p class="founder-desc">A clean-tech entrepreneur with 15 years in sustainable transport. Karim founded EzygoBD in 2022 with a vision to electrify Bangladesh's last-mile delivery and commute ecosystem.</p>
        <p class="founder-desc founder-desc--sm">Under his leadership, EzygoBD has grown to 25,000+ rides, 50+ charging stations, and 1,500+ jobs created across three cities.</p>
        <ul class="founder-social">
          <li><a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a></li>
          <li><a href="#" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a></li>
          <li><a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
        </ul>
      </div>
      <div class="founder-orbit au-fade-up">
        <div class="orbit-ring orbit-ring--outer"></div>
        <div class="orbit-ring orbit-ring--inner"></div>
        <div class="orbit-center"><i class="fa-solid fa-user-tie"></i></div>
        <div class="orbit-item orbit-item--1"><div class="orbit-avatar"><i class="fa-solid fa-user"></i></div></div>
        <div class="orbit-item orbit-item--2"><div class="orbit-avatar"><i class="fa-solid fa-user"></i></div></div>
        <div class="orbit-item orbit-item--3"><div class="orbit-avatar"><i class="fa-solid fa-user"></i></div></div>
        <div class="orbit-item orbit-item--4"><div class="orbit-avatar"><i class="fa-solid fa-user"></i></div></div>
        <div class="orbit-item orbit-item--5"><div class="orbit-avatar"><i class="fa-solid fa-user"></i></div></div>
        <div class="orbit-item orbit-item--6"><div class="orbit-avatar"><i class="fa-solid fa-user"></i></div></div>
      </div>
    </div>
  </section>

  <div class="section-wave wave-from-green">
    <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,35 C360,0 720,70 1080,35 C1260,18 1380,52 1440,35 L1440,70 L0,70 Z" fill="#f0fdf5"/>
    </svg>
  </div>

  <!-- ============ IMPACT COUNTER (dark) ============ -->
  <section class="about-impact">
    <div class="about-impact-overlay"></div>
    <div class="container about-impact-inner">
      <p class="impact-eyebrow">Carbon Saved</p>
      <div class="impact-number-row">
        <span class="impact-big-num" id="impactNum">0.00</span>
        <span class="impact-unit"> kg</span>
      </div>
      <p class="impact-sub">CO₂ reduction through EV deliveries &amp; rides across Bangladesh</p>
      <div class="impact-dots">
        <span class="idot active"></span>
        <span class="idot"></span>
        <span class="idot"></span>
        <span class="idot"></span>
      </div>
    </div>
  </section>

  <!-- ============ PARTNERS ============ -->
  <section class="about-partners">
    <div class="container partners-layout">
      <div class="partners-left au-fade-up">
        <span class="tag">Our Partners</span>
        <h2>Our sustainable journey is powered by our partners.</h2>
        <p>From leading delivery platforms to corporate fleet managers — our growing partner ecosystem is what makes EzygoBD's green mission possible.</p>
        <div class="partners-stats">
          <div class="pstat">
            <span class="pstat-val" data-target="181344">0</span>
            <span class="pstat-unit">Ton</span>
            <p>CO₂ Reduced</p>
          </div>
          <div class="pstat">
            <span class="pstat-val" data-target="2563756">0</span>
            <span class="pstat-unit">km</span>
            <p>Total Distance</p>
          </div>
        </div>
        <a href="index.php#partner" class="btn btn-outline">Partner With Us</a>
      </div>
      <div class="partners-right au-fade-up">
        <div class="partners-logo-grid">
          <div class="partner-chip"><i class="fa-solid fa-motorcycle"></i><span>ShohozRide</span></div>
          <div class="partner-chip"><i class="fa-solid fa-box"></i><span>Pathao Food</span></div>
          <div class="partner-chip"><i class="fa-solid fa-store"></i><span>Chaldal</span></div>
          <div class="partner-chip"><i class="fa-solid fa-truck-fast"></i><span>Paperfly</span></div>
          <div class="partner-chip"><i class="fa-solid fa-building"></i><span>GreenCorp BD</span></div>
          <div class="partner-chip"><i class="fa-solid fa-wallet"></i><span>bKash</span></div>
          <div class="partner-chip"><i class="fa-solid fa-leaf"></i><span>EcoFleet</span></div>
          <div class="partner-chip"><i class="fa-solid fa-solar-panel"></i><span>SolarNet BD</span></div>
        </div>
      </div>
    </div>
  </section>

  <div class="section-wave wave-to-green">
    <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,35 C360,70 720,0 1080,35 C1260,52 1380,20 1440,35 L1440,70 L0,70 Z" fill="#f0fdf5"/>
    </svg>
  </div>

  <!-- ============ LIFE AT EZYGOBD ============ -->
  <section class="life-section">
    <div class="container">
      <div class="section-header">
        <span class="tag">Our Zyppsters</span>
        <h2>Life at EzygoBD</h2>
        <p>Discover the culture that drives our team — passionate people building a cleaner world, one ride at a time.</p>
      </div>
      <div class="life-grid">
        <div class="life-card life-card--tall au-fade-up" style="--lc:#00c853">
          <div class="life-card-inner"><i class="fa-solid fa-people-group fa-3x"></i><span>Our Team</span></div>
        </div>
        <div class="life-card au-fade-up" style="--lc:#009624">
          <div class="life-card-inner"><i class="fa-solid fa-handshake fa-3x"></i><span>Community</span></div>
        </div>
        <div class="life-card au-fade-up" style="--lc:#00e676">
          <div class="life-card-inner"><i class="fa-solid fa-lightbulb fa-3x"></i><span>Innovation</span></div>
        </div>
        <div class="life-card life-card--wide au-fade-up" style="--lc:#1a202c">
          <div class="life-card-inner"><i class="fa-solid fa-award fa-3x"></i><span>Recognition &amp; Awards</span></div>
        </div>
      </div>
      <div style="text-align:center;margin-top:2.5rem;">
        <a href="index.php#partner" class="btn btn-primary">Join Our Team</a>
      </div>
    </div>
  </section>

  <div class="section-wave wave-from-green">
    <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,35 C360,0 720,70 1080,35 C1260,18 1380,52 1440,35 L1440,70 L0,70 Z" fill="#f0fdf5"/>
    </svg>
  </div>

  <!-- ============ CORPORATE VIDEO ============ -->
  <section class="corp-video-section">
    <div class="container">
      <div class="section-header">
        <span class="tag">EzygoBD Corporate</span>
        <h2>EzygoBD Corporate Video</h2>
      </div>
      <div class="corp-video-wrapper au-fade-up">
        <video class="corp-video-player" controls poster="assets/images/hero-poster.jpg">
          <source src="assets/videos/HUAIHAI Sparky Teaser.mp4" type="video/mp4" />
        </video>
        <div class="corp-video-overlay" id="corpVideoOverlay">
          <button class="corp-play-btn" id="corpPlayBtn" aria-label="Play corporate video">
            <i class="fa-solid fa-circle-play"></i>
          </button>
          <p>EzygoBD Corporate Video — Electric, Zero Emission</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ IN THE NEWS ============ -->
  <section class="news-reel-section">
    <div class="container">
      <div class="section-header">
        <span class="tag">Big Creators Feature Our Founder</span>
        <h2>In the News</h2>
      </div>
      <div class="news-reel-grid">
        <div class="news-reel-card au-fade-up">
          <div class="news-reel-thumb"><i class="fa-brands fa-youtube fa-3x"></i><span class="play-badge"><i class="fa-solid fa-play"></i></span></div>
          <p>EzygoBD Expands to Chittagong</p>
        </div>
        <div class="news-reel-card au-fade-up">
          <div class="news-reel-thumb" style="background:linear-gradient(135deg,#1e3a5f,#2d5a9e)"><i class="fa-solid fa-trophy fa-3x"></i><span class="play-badge"><i class="fa-solid fa-play"></i></span></div>
          <p>Green Innovation Award 2025</p>
        </div>
        <div class="news-reel-card au-fade-up">
          <div class="news-reel-thumb" style="background:linear-gradient(135deg,#1a3020,#2d5040)"><i class="fa-solid fa-bolt fa-3x"></i><span class="play-badge"><i class="fa-solid fa-play"></i></span></div>
          <p>Battery Swap Network Launch</p>
        </div>
        <div class="news-reel-card au-fade-up">
          <div class="news-reel-thumb" style="background:linear-gradient(135deg,#2d1b4e,#4a2d8e)"><i class="fa-solid fa-user fa-3x"></i><span class="play-badge"><i class="fa-solid fa-play"></i></span></div>
          <p>Women in EV Mobility Feature</p>
        </div>
      </div>
      <div style="text-align:center;margin-top:2rem;">
        <a href="index.php#news" class="btn btn-outline">View All News <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- ============ GET IN TOUCH ============ -->
  <section id="about-contact" class="section contact">
    <div class="container">
      <div class="section-header">
        <span class="tag">Connect</span>
        <h2 class="contact-title">Get In Touch!</h2>
        <p>We'd love to hear from you — riders, partners, investors, or media.</p>
      </div>
      <div class="resource-cards">
        <a href="#" class="resource-card"><i class="fa-solid fa-book"></i><span>User Manual</span></a>
        <a href="#" class="resource-card"><i class="fa-solid fa-map"></i><span>Charging Map</span></a>
        <a href="#" class="resource-card"><i class="fa-solid fa-shield"></i><span>Safety Guidelines</span></a>
      </div>
      <div class="contact-grid">
        <div class="contact-col">
          <h3>Contact Us</h3>
          <ul class="contact-list">
            <li><i class="fa-solid fa-envelope"></i> hello@ezygobd.com</li>
            <li><i class="fa-solid fa-phone"></i> 01828-721222 / 01576-597666</li>
            <li><i class="fa-solid fa-location-dot"></i> Plot#34, 7th Floor, Road Sonargaon Janapath Rd, Dhaka</li>
          </ul>
        </div>
        <div class="contact-col">
          <h3>Find Us</h3>
          <div class="map-placeholder">
            <i class="fa-solid fa-map-location-dot fa-3x"></i>
            <p>Charging station map coming soon</p>
          </div>
        </div>
        <div class="contact-col">
          <h3>Follow Us</h3>
          <div class="social-links">
            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
          <h3 style="margin-top:1.5rem">Quick Message</h3>
          <form class="contact-form" action="form-handler.php" method="POST">
            <input type="hidden" name="form_type" value="contact">
            <input type="text" name="name" placeholder="Your name" required />
            <input type="email" name="email" placeholder="Your email" required />
            <textarea name="message" rows="3" placeholder="Your message…"></textarea>
            <button type="submit" class="btn btn-primary">Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
