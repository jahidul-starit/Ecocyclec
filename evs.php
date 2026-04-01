<?php
$pageTitle = "Our EVs — EzygoBD | Electric Fleet for Bangladesh";
$pageDesc  = "Explore EzygoBD's electric vehicle fleet — e-scooters, e-bikes, e-rickshaws, AI fleet management and white-label EV solutions across Bangladesh.";
$pageCss   = 'evs.css';
$pageJs    = 'evs.js';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body>

<?php include 'includes/header.php'; ?>
<?php include 'includes/mega-menu.php'; ?>

  <!-- ============ HERO ============ -->
  <section class="evs-hero">
    <video class="evs-hero-video" autoplay muted loop playsinline aria-hidden="true">
      <source src="assets/videos/HUAIHAI Sparky Teaser.mp4" type="video/mp4" />
    </video>
    <div class="evs-hero-overlay"></div>
    <div class="evs-hero-content container">
      <p class="evs-eyebrow ef-fade">AI-Powered EV Platform</p>
      <h1 class="ef-fade">Start Your Rental Business<br><span>Manage Your Fleet Efficiency</span></h1>
      <p class="evs-hero-sub ef-fade">EzygoBD's smart electric vehicle platform connects riders, operators and businesses across Bangladesh — reducing costs, emissions and complexity.</p>
      <div class="evs-hero-ctas ef-fade">
        <a href="index.php#cta-download" class="btn btn-primary evs-cta-pill"><i class="fa-solid fa-bolt"></i> Get Started Now</a>
        <a href="#evs-platform" class="btn btn-ghost evs-cta-ghost"><i class="fa-solid fa-play"></i> How It Works</a>
      </div>
      <div class="evs-hero-riders ef-fade">
        <div class="evs-rider-avatars">
          <span class="ra"><i class="fa-solid fa-user"></i></span>
          <span class="ra"><i class="fa-solid fa-user"></i></span>
          <span class="ra"><i class="fa-solid fa-user"></i></span>
        </div>
        <p><strong>12,000+</strong> active riders across Bangladesh</p>
      </div>
    </div>
    <div class="evs-hero-wave">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,20 C480,75 960,-15 1440,40 L1440,80 L0,80 Z" fill="#ffffff"/>
      </svg>
    </div>
  </section>

  <!-- ============ PLATFORM STRIP ============ -->
  <section id="evs-platform" class="evs-platform-strip">
    <div class="container">
      <p class="evs-strip-heading ef-fade">AI-Driven Platform for EV Infrastructure.</p>
      <p class="evs-strip-sub ef-fade">Everything you need to deploy, operate and scale an electric vehicle fleet — in one unified system.</p>
      <div class="evs-platform-features ef-fade">
        <div class="epf-item"><div class="epf-icon"><i class="fa-solid fa-location-dot"></i></div><h4>EV Tracking</h4><p>Real-time GPS on every vehicle. Live battery, speed and trip data at your fingertips.</p></div>
        <div class="epf-item"><div class="epf-icon"><i class="fa-solid fa-leaf"></i></div><h4>Zero-Emission Fleet</h4><p>100% electric. Reduce carbon footprint and fuel costs simultaneously.</p></div>
        <div class="epf-item"><div class="epf-icon"><i class="fa-solid fa-wrench"></i></div><h4>Smart Maintenance</h4><p>Predictive alerts flag issues before breakdowns. Service scheduling, auto-assigned.</p></div>
        <div class="epf-item"><div class="epf-icon"><i class="fa-solid fa-chart-line"></i></div><h4>Rapid Scaling</h4><p>Add vehicles, hubs or cities in minutes. Modular pricing grows with your business.</p></div>
      </div>
    </div>
  </section>

  <!-- ============ WHITE LABEL SOLUTIONS ============ -->
  <section class="evs-whitelabel">
    <div class="container">
      <div class="wl-layout">
        <div class="wl-visual ef-fade">
          <div class="wl-scooter-card">
            <div class="wl-scooter-bg"><i class="fa-solid fa-motorcycle wl-scooter-icon"></i></div>
            <div class="wl-badge wl-badge--tl"><i class="fa-solid fa-star"></i> Top Pick</div>
            <div class="wl-badge wl-badge--br wl-badge--green"><i class="fa-solid fa-bolt"></i> 120km range</div>
            <div class="wl-mini-tags">
              <span class="wl-tag"><i class="fa-solid fa-shield-halved"></i> Insurance</span>
              <span class="wl-tag"><i class="fa-solid fa-headset"></i> 24/7 Support</span>
              <span class="wl-tag"><i class="fa-solid fa-bolt"></i> Fast Charge</span>
            </div>
          </div>
        </div>
        <div class="wl-content ef-fade">
          <span class="section-eyebrow">White Label Solutions</span>
          <h2 class="wl-title">White Label Solutions<br>for Your Business</h2>
          <p class="wl-desc">EzygoBD provides enterprise operators and startups a turnkey EV stack — branded fleet, booking app, IoT hardware and analytics dashboard — deployed under your brand in weeks.</p>
          <div class="wl-tech-box">
            <div class="wl-tech-header">
              <div class="wl-tech-icon"><i class="fa-solid fa-microchip"></i></div>
              <div><h4>Intelligent EV Technology That Powers Your Fleet</h4><p>From sensor to software, every component is purpose-built for the Bangladesh market.</p></div>
            </div>
            <ul class="wl-feature-list">
              <li><i class="fa-solid fa-circle-check"></i> Real-Time Battery &amp; Location Monitoring</li>
              <li><i class="fa-solid fa-circle-check"></i> Integrated Rider App with Bengali Language UI</li>
              <li><i class="fa-solid fa-circle-check"></i> Automated Fleet Performance Analytics</li>
              <li><i class="fa-solid fa-circle-check"></i> Smart Geo-Fencing &amp; No-Go Zone Control</li>
              <li><i class="fa-solid fa-circle-check"></i> Driver Behaviour Scoring &amp; Incentives</li>
            </ul>
            <div class="wl-mini-stats">
              <div class="wl-mstat"><span class="wl-mstat-val" data-target="98">0</span><span>%</span><small>Uptime SLA</small></div>
              <div class="wl-mstat"><span class="wl-mstat-val" data-target="72">0</span><span>h</span><small>Deploy Time</small></div>
              <div class="wl-mstat"><span class="wl-mstat-val" data-target="40">0</span><span>%</span><small>Cost Saving</small></div>
            </div>
          </div>
          <a href="services.php" class="btn btn-primary mt-1">Learn More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ SUCCESS STORY ============ -->
  <section class="evs-success">
    <div class="container">
      <div class="ss-layout">
        <div class="ss-visual ef-fade">
          <div class="ss-img-panel">
            <div class="ss-img-bg"></div>
            <div class="ss-brand-badge">
              <div class="ss-brand-icon"><i class="fa-solid fa-bolt"></i></div>
              <div><span class="ss-brand-name">EzyFleet.ai</span><small>Fleet Management OS</small></div>
            </div>
            <div class="ss-proven-badge">Proven.</div>
          </div>
          <p class="ss-caption">Operational Excellence Through Technology</p>
        </div>
        <div class="ss-content ef-fade">
          <span class="section-eyebrow">Success Story</span>
          <h2 class="ss-title">How EzygoBD Transformed<br>Last-Mile Delivery in Dhaka</h2>
          <p class="ss-desc">A leading e-commerce company in Bangladesh replaced 600 petrol bikes with EzygoBD e-scooters, cutting fuel costs by 65% and improving on-time delivery rates.</p>
          <div class="ss-stats-row">
            <div class="ss-stat"><div class="ss-stat-val"><span class="ss-count" data-target="30000">0</span><span>+</span></div><p>Daily Deliveries<br>Completed</p></div>
            <div class="ss-stat-divider"></div>
            <div class="ss-stat"><div class="ss-stat-val"><span class="ss-count" data-target="500000">0</span><span>+</span></div><p>Kilometres<br>Logged Monthly</p></div>
          </div>
          <div class="ss-quote">
            <i class="fa-solid fa-quote-left"></i>
            <p>"EzygoBD's fleet OS gave us real-time visibility on every scooter. Our delivery SLA improved from 78% to 96% in 3 months."</p>
            <cite>— Logistics Director, Leading BD E-commerce Co.</cite>
          </div>
          <a href="about.php" class="btn btn-primary">Read the Case Study <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ FLEET OPTIMIZATION ============ -->
  <section class="evs-fleet-opt">
    <div class="container">
      <div class="fo-header">
        <span class="section-eyebrow ef-fade">Intelligent Fleet Management</span>
        <h2 class="section-title ef-fade">Autonomous Unified Fleet<br>Optimization Solution</h2>
        <p class="section-sub ef-fade">Our platform uses machine-learning to predict demand, pre-position vehicles and auto-assign maintenance — keeping your fleet at peak performance with zero manual effort.</p>
      </div>
      <div class="fo-layout">
        <div class="fo-features ef-fade">
          <div class="fo-feat"><div class="fo-feat-icon"><i class="fa-solid fa-map-location-dot"></i></div><div><h4>Geofence &amp; Zone-Based Dispatch</h4><p>Automatically assign riders to zones. Reduce deadhead kilometres and increase utilisation.</p></div></div>
          <div class="fo-feat"><div class="fo-feat-icon"><i class="fa-solid fa-battery-full"></i></div><div><h4>Predictive Battery Management</h4><p>AI forecasts charge depletion and routes vehicles to stations before they run flat.</p></div></div>
          <div class="fo-feat"><div class="fo-feat-icon"><i class="fa-solid fa-gauge-high"></i></div><div><h4>Live KPI Performance Dashboard</h4><p>Distance, revenue, energy consumed, rider score — all in a single real-time view.</p></div></div>
          <div class="fo-feat"><div class="fo-feat-icon"><i class="fa-solid fa-bell"></i></div><div><h4>Automated Alert &amp; Incident System</h4><p>Instant notifications for harsh braking, overloading, or off-route excursions.</p></div></div>
          <div class="fo-feat"><div class="fo-feat-icon"><i class="fa-solid fa-users-gear"></i></div><div><h4>Multi-Role Team Management</h4><p>Assign fleet managers, mechanics and riders with granular permission control.</p></div></div>
          <a href="services.php" class="btn btn-primary fo-btn">Get Started <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="fo-mockup ef-fade">
          <div class="fo-screen fo-screen--main">
            <div class="fo-screen-bar"><span></span><span></span><span></span></div>
            <div class="fo-screen-body">
              <div class="fo-mini-map"><i class="fa-solid fa-map"></i><div class="fo-map-dots"><span class="fd1"></span><span class="fd2"></span><span class="fd3"></span><span class="fd4"></span><span class="fd5"></span></div></div>
              <div class="fo-screen-stats">
                <div class="fo-ss-item"><span class="fo-ss-val">142</span><small>Active</small></div>
                <div class="fo-ss-item"><span class="fo-ss-val">98%</span><small>Uptime</small></div>
                <div class="fo-ss-item"><span class="fo-ss-val">3.2T</span><small>CO₂ saved</small></div>
              </div>
            </div>
          </div>
          <div class="fo-float-card fo-float-card--1"><i class="fa-solid fa-motorcycle"></i><div><strong>EZY-0142</strong><small>Battery 84% · Online</small></div></div>
          <div class="fo-float-card fo-float-card--2"><i class="fa-solid fa-charging-station"></i><div><strong>Charging Hub A</strong><small>12 slots available</small></div></div>
        </div>
      </div>
      <div class="fo-benefit-row">
        <div class="fo-ben-card ef-fade">
          <div class="fo-ben-icon" style="--bc:#00c853"><i class="fa-solid fa-shield-halved"></i></div>
          <h4>Real-Time Fleet Safety</h4>
          <ul><li>Speed violation alerts</li><li>Geo-fence breach notifications</li><li>Crash detection via accelerometer</li><li>Emergency SOS button integration</li></ul>
        </div>
        <div class="fo-ben-card ef-fade">
          <div class="fo-ben-icon" style="--bc:#f59e0b"><i class="fa-solid fa-chart-bar"></i></div>
          <h4>Intelligent Analytics</h4>
          <ul><li>Revenue per vehicle reports</li><li>Energy cost-per-km breakdown</li><li>Maintenance cost tracking</li><li>Rider performance leaderboard</li></ul>
        </div>
        <div class="fo-ben-card ef-fade">
          <div class="fo-ben-icon" style="--bc:#8b5cf6"><i class="fa-solid fa-microchip"></i></div>
          <h4>Advanced IoT System</h4>
          <ul><li>4G/MQTT connected hardware</li><li>Tamper-proof GPS module</li><li>OTA firmware updates</li><li>Remote immobilisation</li></ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ OUR PRODUCTS ============ -->
  <section class="evs-products">
    <div class="container">
      <div class="section-header">
        <span class="section-eyebrow ef-fade">Our Product Lineup</span>
        <h2 class="section-title ef-fade">Our EVs &amp; Platform Tools</h2>
        <p class="section-sub ef-fade">Purpose-built electric vehicles and software products for every use-case across Bangladesh.</p>
      </div>

      <div class="evp-row ef-fade">
        <div class="evp-info">
          <span class="evp-num">01</span><h3>EzyGo E-Scooter</h3>
          <p>Our flagship two-wheeler — built for daily commuting, food delivery and last-mile logistics. Lightweight, powerful and engineered for Bangladesh roads.</p>
          <ul class="evp-specs"><li><i class="fa-solid fa-road"></i> 120 km range per charge</li><li><i class="fa-solid fa-bolt"></i> 3-hour fast charge</li><li><i class="fa-solid fa-weight-hanging"></i> Payload: 150 kg</li><li><i class="fa-solid fa-gauge-high"></i> Top speed: 60 km/h</li></ul>
          <a href="services.php" class="btn btn-primary">Rent Now <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="evp-visual evp-visual--green"><div class="evp-bg-circle"></div><i class="fa-solid fa-motorcycle evp-icon"></i><div class="evp-badge">₿ From ৳ 150/day</div></div>
      </div>

      <div class="evp-row evp-row--reverse ef-fade">
        <div class="evp-info">
          <span class="evp-num">02</span><h3>EzyRide E-Bike</h3>
          <p>Pedal-assist electric bike for urban commuters who want exercise without the sweat. Fold-flat design fits inside apartments and offices.</p>
          <ul class="evp-specs"><li><i class="fa-solid fa-road"></i> 80 km range (assist mode)</li><li><i class="fa-solid fa-bolt"></i> 2.5-hour charge</li><li><i class="fa-solid fa-weight-hanging"></i> Vehicle weight: 22 kg</li><li><i class="fa-solid fa-gauge-high"></i> Assist up to 35 km/h</li></ul>
          <a href="services.php" class="btn btn-primary">Rent Now <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="evp-visual evp-visual--blue"><div class="evp-bg-circle"></div><i class="fa-solid fa-bicycle evp-icon"></i><div class="evp-badge">From ৳ 100/day</div></div>
      </div>

      <div class="evp-row ef-fade">
        <div class="evp-info">
          <span class="evp-num">03</span><h3>EzyHaul E-Rickshaw</h3>
          <p>Three-wheel electric cargo vehicle purpose-built for hyperlocal delivery businesses. Carry larger loads with zero emissions and dramatically lower running costs.</p>
          <ul class="evp-specs"><li><i class="fa-solid fa-road"></i> 100 km range per charge</li><li><i class="fa-solid fa-box"></i> Cargo capacity: 500 kg</li><li><i class="fa-solid fa-bolt"></i> 4-hour full charge</li><li><i class="fa-solid fa-bangladeshi-taka-sign"></i> Save ৳ 8,000+/month vs CNG</li></ul>
          <a href="services.php" class="btn btn-primary">Partner Now <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="evp-visual evp-visual--orange"><div class="evp-bg-circle"></div><i class="fa-solid fa-truck-pickup evp-icon"></i><div class="evp-badge">Earn ৳ 35K+/month</div></div>
      </div>

      <div class="evp-row evp-row--reverse ef-fade">
        <div class="evp-info">
          <span class="evp-num">04</span><h3>EzygoBD Rider App</h3>
          <p>Our mobile application puts EV rentals, payments and support in the palm of your hand. Available in Bengali and English, with bKash / Nagad integration.</p>
          <ul class="evp-specs"><li><i class="fa-brands fa-android"></i> Android &amp; iOS</li><li><i class="fa-solid fa-mobile-screen"></i> Bengali language UI</li><li><i class="fa-solid fa-credit-card"></i> bKash / Nagad / Card</li><li><i class="fa-solid fa-star"></i> 4.8 ★ App Store rating</li></ul>
          <a href="index.php#cta-download" class="btn btn-primary">Download App <i class="fa-solid fa-download"></i></a>
        </div>
        <div class="evp-visual evp-visual--purple"><div class="evp-bg-circle"></div><i class="fa-solid fa-mobile-screen-button evp-icon"></i><div class="evp-badge">Free Download</div></div>
      </div>

      <div class="evp-row ef-fade">
        <div class="evp-info">
          <span class="evp-num">05</span><h3>EzyFleet GPS System</h3>
          <p>All-in-one IoT hardware unit installed on every EzygoBD vehicle. Delivers live location, battery telemetry, ride events and remote-lock capability over 4G.</p>
          <ul class="evp-specs"><li><i class="fa-solid fa-satellite"></i> GPS accuracy: &lt; 5m</li><li><i class="fa-solid fa-signal"></i> 4G LTE connectivity</li><li><i class="fa-solid fa-lock"></i> Remote immobilisation</li><li><i class="fa-solid fa-rotate"></i> OTA firmware updates</li></ul>
          <a href="services.php" class="btn btn-primary">View Platform <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="evp-visual evp-visual--teal"><div class="evp-bg-circle"></div><i class="fa-solid fa-satellite-dish evp-icon"></i><div class="evp-badge">All Models Included</div></div>
      </div>

    </div>
  </section>

  <!-- ============ PARTNERS ============ -->
  <section class="evs-partners">
    <div class="container">
      <div class="section-header">
        <span class="section-eyebrow ef-fade">Trusted By</span>
        <h2 class="section-title ef-fade">Powering Innovation at Leading Companies</h2>
        <p class="section-sub ef-fade">Bangladesh's top delivery companies, startups and enterprises trust EzygoBD to run their electric fleets.</p>
      </div>
      <div class="ep-logo-grid ef-fade">
        <div class="ep-logo-chip"><i class="fa-solid fa-store"></i><span>ShopExpress BD</span></div>
        <div class="ep-logo-chip"><i class="fa-solid fa-truck-fast"></i><span>SwiftDeliver</span></div>
        <div class="ep-logo-chip"><i class="fa-solid fa-utensils"></i><span>FoodRun BD</span></div>
        <div class="ep-logo-chip"><i class="fa-solid fa-building"></i><span>UrbanLogix</span></div>
        <div class="ep-logo-chip"><i class="fa-solid fa-box"></i><span>ParcelBD</span></div>
        <div class="ep-logo-chip"><i class="fa-solid fa-mobile-screen"></i><span>RiderPro</span></div>
        <div class="ep-logo-chip"><i class="fa-solid fa-leaf"></i><span>GreenMove</span></div>
        <div class="ep-logo-chip"><i class="fa-solid fa-city"></i><span>MetroFleet</span></div>
      </div>
    </div>
  </section>

  <!-- ============ APP CTA ============ -->
  <section class="evs-app-cta">
    <div class="container">
      <div class="eac-layout ef-fade">
        <div class="eac-text">
          <span class="section-eyebrow">Navigate the Future</span>
          <h2>Navigate the Future<br>with Our Fleet App</h2>
          <p>Download EzygoBD and start riding or managing your fleet today. Available on Android and iOS — completely free.</p>
          <div class="eac-store-badges">
            <a href="#" class="eac-badge"><i class="fa-brands fa-google-play"></i><div><small>Get it on</small><strong>Google Play</strong></div></a>
            <a href="#" class="eac-badge"><i class="fa-brands fa-apple"></i><div><small>Download on the</small><strong>App Store</strong></div></a>
          </div>
        </div>
        <div class="eac-qr">
          <div class="eac-qr-box"><i class="fa-solid fa-qrcode"></i><p>Scan to Download</p></div>
          <div class="eac-phone-frame"><div class="eac-phone-inner"><i class="fa-solid fa-mobile-screen-button"></i></div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ FAQ ============ -->
  <section class="evs-faq">
    <div class="container">
      <div class="faq-layout">
        <div class="faq-left ef-fade">
          <div class="faq-big-text">FAQ</div>
          <div class="faq-left-body">
            <span class="section-eyebrow">Got Questions?</span>
            <h2>Frequently Asked<br>Questions</h2>
            <p>Can't find what you're looking for? Reach out to our support team.</p>
            <a href="index.php#contact" class="btn btn-primary">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="faq-right ef-fade">
          <div class="faq-list">
            <div class="faq-item"><button class="faq-q" aria-expanded="false">How do I rent an EzygoBD e-scooter?<i class="fa-solid fa-chevron-down"></i></button><div class="faq-a"><p>Download the EzygoBD app, register with your NID, choose your plan (daily, weekly or monthly) and pick up your vehicle from the nearest hub. The whole process takes under 10 minutes.</p></div></div>
            <div class="faq-item"><button class="faq-q" aria-expanded="false">What is the minimum age to rent?<i class="fa-solid fa-chevron-down"></i></button><div class="faq-a"><p>Riders must be 18 years or older and hold a valid Bangladeshi driving licence. NID verification is done through the app at signup.</p></div></div>
            <div class="faq-item"><button class="faq-q" aria-expanded="false">Is the vehicle insured? What happens after an accident?<i class="fa-solid fa-chevron-down"></i></button><div class="faq-a"><p>Yes. Every EzygoBD vehicle carries third-party liability insurance. Comprehensive rider accident cover is included in monthly plans. Call our 24/7 helpline immediately after an incident.</p></div></div>
            <div class="faq-item"><button class="faq-q" aria-expanded="false">Where are the charging / pickup hubs located?<i class="fa-solid fa-chevron-down"></i></button><div class="faq-a"><p>We currently operate hubs in Dhaka (Dhanmondi, Gulshan, Uttara, Mirpur, Mohammadpur), Chittagong and Sylhet. Use the map in the app to find the nearest hub and check live vehicle availability.</p></div></div>
            <div class="faq-item"><button class="faq-q" aria-expanded="false">How does the Franchise (FOCO) model work?<i class="fa-solid fa-chevron-down"></i></button><div class="faq-a"><p>Under the FOCO model, EzygoBD owns and manages the vehicles while you own the hub real estate. You share revenue without handling operations. Starting investment is ৳ 4.5 Lakhs for 10 scooters, with projected 90%* ROI in 3 years.</p></div></div>
            <div class="faq-item"><button class="faq-q" aria-expanded="false">Can my business get a white-label EV fleet solution?<i class="fa-solid fa-chevron-down"></i></button><div class="faq-a"><p>Absolutely. EzygoBD offers a full white-label package — branded vehicles, customised rider app (your logo/colours), dedicated fleet dashboard and 24/7 enterprise support. Contact our partnerships team for a quote.</p></div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ CONTACT / GET IN TOUCH ============ -->
  <section class="evs-contact">
    <div class="container">
      <div class="ec-layout">
        <div class="ec-info ef-fade">
          <span class="section-eyebrow">Reach Out</span>
          <h2>Get In Touch!</h2>
          <p>Whether you're a rider, a business, or an investor — our team is ready to help you go electric.</p>
          <ul class="ec-detail-list">
            <li><div class="ec-det-icon"><i class="fa-solid fa-location-dot"></i></div><div><strong>Head Office</strong><p>Plot#34, 7th Floor, Road Sonargaon Janapath Rd, Dhaka</p></div></li>
            <li><div class="ec-det-icon"><i class="fa-solid fa-phone"></i></div><div><strong>Phone / WhatsApp</strong><p>01828-721222 / 01576-597666</p></div></li>
            <li><div class="ec-det-icon"><i class="fa-solid fa-envelope"></i></div><div><strong>Email</strong><p>hello@ezygobd.com</p></div></li>
          </ul>
          <div class="ec-social">
            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
          </div>
        </div>
        <div class="ec-form-wrap ef-fade">
          <form class="ec-form" action="form-handler.php" method="POST">
            <input type="hidden" name="form_type" value="evs_contact">
            <div class="ec-form-row">
              <div class="ec-form-group"><label for="ec-name">Full Name</label><input type="text" id="ec-name" name="name" placeholder="Your name" required /></div>
              <div class="ec-form-group"><label for="ec-phone">Phone</label><input type="tel" id="ec-phone" name="phone" placeholder="+880 1XXX-XXXXXX" required /></div>
            </div>
            <div class="ec-form-group"><label for="ec-email">Email Address</label><input type="email" id="ec-email" name="email" placeholder="you@example.com" /></div>
            <div class="ec-form-group"><label for="ec-type">I am a…</label><select id="ec-type" name="inquiry_type"><option value="">Select one</option><option>Individual Rider</option><option>Delivery Business</option><option>Franchise Investor</option><option>Enterprise / White Label</option><option>Media / Press</option></select></div>
            <div class="ec-form-group"><label for="ec-msg">Message</label><textarea id="ec-msg" name="message" rows="4" placeholder="Tell us how we can help…"></textarea></div>
            <button type="submit" class="btn btn-primary ec-submit">Send Message <i class="fa-solid fa-paper-plane"></i></button>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
