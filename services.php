<?php
$pageTitle = "Services — EzygoBD | EV Rental & Partner Solutions";
$pageDesc  = "Explore EzygoBD's services for riders and business partners — rent an EV, earn with e-rickshaws, launch a franchise, or manage a fleet.";
$pageCss   = 'services.css';
$pageJs    = 'services.js';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body>

<?php include 'includes/header.php'; ?>
<?php include 'includes/mega-menu.php'; ?>

  <!-- ============ SERVICES HERO ============ -->
  <section class="svc-hero">
    <video class="svc-hero-video" autoplay muted loop playsinline aria-hidden="true">
      <source src="assets/videos/HUAIHAI Sparky Teaser.mp4" type="video/mp4" />
    </video>
    <div class="svc-hero-overlay"></div>

    <div class="svc-menu-wrapper container">
      <div class="svc-menu-card">

        <div class="svc-col">
          <h2 class="svc-col-title"><i class="fa-solid fa-circle-user"></i> For Riders</h2>
          <div class="svc-grid">
            <a href="index.php#partner" class="svc-card svc-card--earn sf-fade">
              <div class="svc-card-bg" style="background: linear-gradient(145deg,#0a2010,#0d3a1a);">
                <div class="svc-tag"><i class="fa-solid fa-bangladeshi-taka-sign"></i> Earn More</div>
                <div class="svc-card-body">
                  <p class="svc-card-kicker">Kom Khorche Beshi Dao</p>
                  <h3 class="svc-card-headline">Earn More <br>with EzygoBD</h3>
                  <ul class="svc-card-perks">
                    <li><i class="fa-solid fa-check-circle"></i> Lowest rent</li>
                    <li><i class="fa-solid fa-check-circle"></i> Zero extra charges</li>
                    <li><i class="fa-solid fa-check-circle"></i> Unlimited km</li>
                  </ul>
                </div>
                <div class="svc-card-icon-bg"><i class="fa-solid fa-motorcycle"></i></div>
              </div>
            </a>
            <a href="index.php#cta-download" class="svc-card svc-card--tall svc-card--featured sf-fade">
              <div class="svc-card-bg" style="background: linear-gradient(170deg,#042b0e 0%,#07481a 45%,#0a5c22 100%);">
                <div class="svc-tag svc-tag--accent"><i class="fa-solid fa-star"></i> Featured</div>
                <div class="svc-card-body">
                  <p class="svc-card-kicker">Nao Ghor Nieo Apnar</p>
                  <h3 class="svc-card-headline">Take Home an<br><span>E-Scooter</span></h3>
                  <div class="svc-pricing-row">
                    <div class="svc-price-item"><span class="svc-price-label">One-time fee</span><span class="svc-price-val">৳ 4,999*</span></div>
                    <div class="svc-price-divider"></div>
                    <div class="svc-price-item"><span class="svc-price-label">Monthly rent</span><span class="svc-price-val">৳ 2,100</span></div>
                    <div class="svc-price-divider"></div>
                    <div class="svc-price-item"><span class="svc-price-label">Duration</span><span class="svc-price-val">1 Year</span></div>
                  </div>
                </div>
                <div class="svc-ev-img"><i class="fa-solid fa-motorcycle" style="font-size:7rem;color:rgba(0,200,83,.22);"></i></div>
              </div>
            </a>
            <a href="index.php#partner" class="svc-card svc-card--rickshaw sf-fade">
              <div class="svc-card-bg" style="background: linear-gradient(145deg,#0b2214,#103318);">
                <div class="svc-tag svc-tag--blue"><i class="fa-solid fa-truck-pickup"></i> 3-Wheeler</div>
                <div class="svc-card-body">
                  <p class="svc-card-kicker">Earn ৳ 25,000 – ৳ 35,000</p>
                  <h3 class="svc-card-headline">Monthly with an<br>E-Rickshaw</h3>
                </div>
                <div class="svc-card-icon-bg"><i class="fa-solid fa-truck-pickup"></i></div>
              </div>
            </a>
          </div>
        </div>

        <div class="svc-divider"></div>

        <div class="svc-col">
          <h2 class="svc-col-title"><i class="fa-solid fa-handshake"></i> For Partners</h2>
          <div class="svc-grid">
            <a href="index.php#partner" class="svc-card svc-card--delivery sf-fade">
              <div class="svc-card-bg" style="background: linear-gradient(145deg,#0a2010,#0d3a1a);">
                <div class="svc-tag svc-tag--teal"><i class="fa-solid fa-truck-fast"></i> Delivery</div>
                <div class="svc-card-body">
                  <p class="svc-card-kicker">Last-mile EV fleet</p>
                  <h3 class="svc-card-headline">Delivery Solution<br>for Your Business</h3>
                </div>
                <div class="svc-card-icon-bg"><i class="fa-solid fa-truck-fast"></i></div>
              </div>
            </a>
            <a href="index.php#partner" class="svc-card svc-card--franchise sf-fade">
              <div class="svc-card-bg" style="background: linear-gradient(145deg,#09200e,#093215);">
                <div class="svc-tag svc-tag--gold"><i class="fa-solid fa-crown"></i> Franchise</div>
                <div class="svc-card-body">
                  <p class="svc-card-kicker">Introducing EzygoBD Franchise (FOCO) Model</p>
                  <h3 class="svc-card-headline">Earn <span class="svc-highlight">90%* ROI</span><br>in Just 3 Years</h3>
                  <p class="svc-franchise-note">Starting investment <strong>৳ 4.5 Lakhs</strong><br><small>with 10 scooters</small></p>
                </div>
                <div class="svc-card-icon-bg"><i class="fa-solid fa-crown"></i></div>
              </div>
            </a>
            <a href="index.php#partner" class="svc-card svc-card--ads sf-fade">
              <div class="svc-card-bg" style="background: linear-gradient(145deg,#0c1e10,#112b16);">
                <div class="svc-tag svc-tag--orange"><i class="fa-solid fa-bullhorn"></i> Advertising</div>
                <div class="svc-card-body">
                  <p class="svc-card-kicker">Drive Your <strong>BRAND</strong> Forward</p>
                  <h3 class="svc-card-headline">with EzygoBD<br>Electric</h3>
                  <div class="svc-ad-stats">
                    <span><strong>250M+</strong> Impressions</span>
                    <span><strong>5M+</strong> Deliveries</span>
                  </div>
                </div>
                <div class="svc-card-icon-bg"><i class="fa-solid fa-bullhorn"></i></div>
              </div>
            </a>
            <a href="index.php#partner" class="svc-card svc-card--fleet sf-fade">
              <div class="svc-card-bg" style="background: linear-gradient(145deg,#091b0d,#0c2b13);">
                <div class="svc-tag svc-tag--purple"><i class="fa-solid fa-microchip"></i> FleetTech</div>
                <div class="svc-card-body">
                  <p class="svc-card-kicker">Smart IoT Fleet Management</p>
                  <h3 class="svc-card-headline">EzyFleet.ai<br>Platform</h3>
                </div>
                <div class="svc-card-icon-bg"><i class="fa-solid fa-microchip"></i></div>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>

    <div class="svc-hero-wave">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,40 C360,85 1080,-5 1440,40 L1440,80 L0,80 Z" fill="#f0faf3"/>
      </svg>
    </div>
  </section>

  <!-- ============ FULL SERVICE LIST ============ -->
  <section class="svc-full-list">
    <div class="container">
      <div class="section-header">
        <span class="section-eyebrow">Everything We Offer</span>
        <h2 class="section-title">Complete Service Catalogue</h2>
        <p class="section-sub">From daily commuters to enterprise fleet managers — EzygoBD has a plan for everyone.</p>
      </div>

      <div class="svc-cat-block sf-fade">
        <div class="svc-cat-header">
          <div class="svc-cat-icon-wrap"><i class="fa-solid fa-circle-user"></i></div>
          <div><h3>For Riders</h3><p>Affordable EV rentals that put money back in your pocket</p></div>
        </div>
        <div class="svc-detail-grid">
          <div class="svc-detail-card sf-fade">
            <div class="svc-detail-icon" style="--ic:#00c853"><i class="fa-solid fa-motorcycle"></i></div>
            <h4>Daily Rental</h4>
            <p>Rent an e-scooter for the day. No deposit, no fuel cost. Just ride.</p>
            <span class="svc-detail-badge">From ৳ 150/day</span>
          </div>
          <div class="svc-detail-card sf-fade">
            <div class="svc-detail-icon" style="--ic:#00b4d8"><i class="fa-solid fa-calendar-days"></i></div>
            <h4>Monthly Subscription</h4>
            <p>Lock in a low monthly rate and take the scooter home. Unlimited km.</p>
            <span class="svc-detail-badge">From ৳ 2,100/mo</span>
          </div>
          <div class="svc-detail-card sf-fade">
            <div class="svc-detail-icon" style="--ic:#f59e0b"><i class="fa-solid fa-truck-pickup"></i></div>
            <h4>E-Rickshaw Earning Plan</h4>
            <p>Partner with EzygoBD as an e-rickshaw operator and earn a steady income.</p>
            <span class="svc-detail-badge">Up to ৳ 35K/mo</span>
          </div>
          <div class="svc-detail-card sf-fade">
            <div class="svc-detail-icon" style="--ic:#a855f7"><i class="fa-solid fa-shield-halved"></i></div>
            <h4>Rider Insurance</h4>
            <p>Every EzygoBD rider gets complimentary accident & theft protection.</p>
            <span class="svc-detail-badge">Included Free</span>
          </div>
        </div>
      </div>

      <div class="svc-cat-block sf-fade">
        <div class="svc-cat-header">
          <div class="svc-cat-icon-wrap svc-cat-icon-wrap--gold"><i class="fa-solid fa-handshake"></i></div>
          <div><h3>For Partners</h3><p>Business-grade EV solutions designed to scale</p></div>
        </div>
        <div class="svc-detail-grid">
          <div class="svc-detail-card sf-fade">
            <div class="svc-detail-icon" style="--ic:#00c853"><i class="fa-solid fa-truck-fast"></i></div>
            <h4>Last-Mile Delivery Fleet</h4>
            <p>Deploy a branded EV delivery fleet with real-time GPS tracking and analytics.</p>
            <span class="svc-detail-badge">Custom Pricing</span>
          </div>
          <div class="svc-detail-card sf-fade">
            <div class="svc-detail-icon" style="--ic:#f59e0b"><i class="fa-solid fa-crown"></i></div>
            <h4>Franchise (FOCO Model)</h4>
            <p>Own an EzygoBD franchise hub with our Full Operate Company Own model — 90%* ROI in 3 years.</p>
            <span class="svc-detail-badge">৳ 4.5 Lakhs+</span>
          </div>
          <div class="svc-detail-card sf-fade">
            <div class="svc-detail-icon" style="--ic:#ef4444"><i class="fa-solid fa-bullhorn"></i></div>
            <h4>EV Advertising Network</h4>
            <p>Wrap our scooters and rickshaws with your brand. 250M+ monthly impressions.</p>
            <span class="svc-detail-badge">From ৳ 12K/mo</span>
          </div>
          <div class="svc-detail-card sf-fade">
            <div class="svc-detail-icon" style="--ic:#8b5cf6"><i class="fa-solid fa-microchip"></i></div>
            <h4>EzyFleet.ai Platform</h4>
            <p>IoT-powered fleet management dashboard — charge scheduling, driver scoring, remote diagnostics.</p>
            <span class="svc-detail-badge">SaaS Plan</span>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ============ CTA STRIP ============ -->
  <section class="svc-cta-strip">
    <div class="container">
      <div class="svc-cta-inner sf-fade">
        <div class="svc-cta-text">
          <h2>Ready to get started?</h2>
          <p>Download the EzygoBD app or talk to our team today.</p>
        </div>
        <div class="svc-cta-buttons">
          <a href="index.php#cta-download" class="btn btn-primary"><i class="fa-solid fa-download"></i> Get the App</a>
          <a href="index.php#contact" class="btn btn-outline"><i class="fa-solid fa-phone"></i> Talk to Sales</a>
        </div>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
