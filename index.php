<?php
$pageTitle = "EzygoBD — Bangladesh's #1 EV Rental Network";
$pageDesc  = "Efficient, eco-friendly, and affordable electric vehicle rentals across Bangladesh. Rent e-scooters, e-bikes, and e-rickshaws at your fingertips.";
$pageCss   = '';
$pageJs    = '';
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
  <section id="hero" class="hero">
    <video class="hero-video" autoplay muted loop playsinline aria-hidden="true">
      <source src="assets/videos/HUAIHAI Sparky Teaser.mp4" type="video/mp4" />
    </video>
    <div class="hero-overlay"></div>
    <div class="hero-content container">
      <h1>Ditch Petrol. Go Electric with <span class="highlight">Bangladesh's #1 EV Rental</span> Platform.</h1>
      <p class="hero-sub">Efficient, Eco-friendly, and Affordable Rides at your fingertips.<br>Ditch the cost and pollution.</p>
      <a href="#contact" class="btn btn-primary btn-lg hero-cta">Contact Us</a>
      <div class="hero-badges">
        <span><i class="fa-solid fa-shield-halved"></i> Insured Rides</span>
        <span><i class="fa-solid fa-bolt"></i> Instant Unlock</span>
        <span><i class="fa-solid fa-leaf"></i> Zero Emission</span>
      </div>
    </div>
  </section>

  <!-- ============ SERVICES ("Our Offer") ============ -->
  <section id="services" class="section services">
    <div class="container">
      <div class="section-header">
        <span class="tag">What We Offer</span>
        <h2>Explore Our Range of Electric Vehicles &amp; Services</h2>
        <p>From personal commutes to business fleets — we've got the green solution.</p>
      </div>
      <div class="services-grid">
        <div class="service-card">
          <div class="service-icon"><i class="fa-solid fa-motorcycle"></i></div>
          <h3>2-Wheeler Rental</h3>
          <p>Individual daily rentals of e-bikes and e-scooters for effortless city commutes.</p>
        </div>
        <div class="service-card">
          <div class="service-icon"><i class="fa-solid fa-truck-pickup"></i></div>
          <h3>B2B Fleet</h3>
          <p>Scalable fleet solutions for businesses looking to electrify their operations.</p>
        </div>
        <div class="service-card">
          <div class="service-icon"><i class="fa-solid fa-box"></i></div>
          <h3>Delivery EVs</h3>
          <p>Purpose-built e-scooters with cargo boxes for food &amp; grocery delivery partners.</p>
        </div>
        <div class="service-card">
          <div class="service-icon"><i class="fa-solid fa-briefcase"></i></div>
          <h3>Corporate</h3>
          <p>Sustainable employee commuting programs for forward-thinking companies.</p>
        </div>
        <div class="service-card">
          <div class="service-icon"><i class="fa-solid fa-van-shuttle"></i></div>
          <h3>3-Wheeler</h3>
          <p>Reliable e-rickshaws for last-mile connectivity and passenger transport.</p>
        </div>
        <div class="service-card">
          <div class="service-icon"><i class="fa-solid fa-charging-station"></i></div>
          <h3>Charging Stations</h3>
          <p>Access our growing EzygoBD charging &amp; battery-swap network across Bangladesh.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ IMPACT COUNTER ============ -->
  <section id="impact" class="section impact">
    <div class="impact-overlay"></div>
    <div class="container impact-content">
      <span class="tag tag-light">Our Impact</span>
      <h2>Powering a Greener Bangladesh</h2>
      <div class="impact-hero-number" data-target="25000">0+</div>
      <p class="impact-label">Impactful Rides &amp; counting</p>
      <div class="counters">
        <div class="counter-item">
          <i class="fa-solid fa-road"></i>
          <span class="counter-value" data-target="180000">0</span>
          <span class="counter-suffix">km</span>
          <p>Total Distance Covered</p>
        </div>
        <div class="counter-item">
          <i class="fa-solid fa-cloud"></i>
          <span class="counter-value" data-target="4200">0</span>
          <span class="counter-suffix">tons</span>
          <p>CO₂ Emissions Saved</p>
        </div>
        <div class="counter-item">
          <i class="fa-solid fa-users"></i>
          <span class="counter-value" data-target="1500">0</span>
          <span class="counter-suffix">+</span>
          <p>Jobs Created</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ HOW IT WORKS ============ -->
  <section id="how-it-works" class="section how-it-works">
    <div class="container">
      <div class="section-header">
        <span class="tag">The Ezygo Way</span>
        <h2>How It Works</h2>
        <p>Get on the road in four simple steps.</p>
      </div>
      <div class="steps">
        <div class="step">
          <div class="step-number">1</div>
          <div class="step-icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
          <h3>Download &amp; Register</h3>
          <p>Get the EzygoBD app and complete your quick KYC verification.</p>
        </div>
        <div class="step-line"></div>
        <div class="step">
          <div class="step-number">2</div>
          <div class="step-icon"><i class="fa-solid fa-motorcycle"></i></div>
          <h3>Select Your Ride</h3>
          <p>Browse available EVs near you and pick the one that fits.</p>
        </div>
        <div class="step-line"></div>
        <div class="step">
          <div class="step-number">3</div>
          <div class="step-icon"><i class="fa-solid fa-lock-open"></i></div>
          <h3>Unlock &amp; Ride</h3>
          <p>Scan the QR code on the vehicle to unlock it instantly and ride.</p>
        </div>
        <div class="step-line"></div>
        <div class="step">
          <div class="step-number">4</div>
          <div class="step-icon"><i class="fa-solid fa-square-parking"></i></div>
          <h3>Park &amp; Complete</h3>
          <p>Park at any designated spot, end your ride, and pay seamlessly.</p>
        </div>
      </div>
      <div class="app-mockup">
        <div class="phone-frame">
          <div class="phone-screen">
            <div class="mock-header"><span>EzygoBD</span><i class="fa-solid fa-bell"></i></div>
            <div class="mock-map"></div>
            <div class="mock-card">
              <div class="mock-card-row"><i class="fa-solid fa-motorcycle"></i><span>E-Scooter Pro</span><strong>৳120/hr</strong></div>
              <div class="mock-card-row"><i class="fa-solid fa-battery-full"></i><span>Battery: 92%</span><strong>45 km range</strong></div>
              <button class="btn btn-primary btn-sm">Unlock Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ PARTNER BENEFITS ============ -->
  <section id="about" class="section partner-benefits">
    <div class="container">
      <div class="section-header">
        <span class="tag">Why EzygoBD?</span>
        <h2>Benefits for Everyone</h2>
      </div>
      <div class="benefits-split">
        <div class="benefit-col">
          <div class="benefit-header">
            <i class="fa-solid fa-helmet-safety"></i>
            <h3>Drivers: Maximize Your Earnings</h3>
          </div>
          <ul class="benefit-list">
            <li><i class="fa-solid fa-check-circle"></i> Save up to 70% on fuel costs compared to petrol</li>
            <li><i class="fa-solid fa-check-circle"></i> Minimal maintenance — no engine, no oil changes</li>
            <li><i class="fa-solid fa-check-circle"></i> Earn more per ride with lower running expenses</li>
            <li><i class="fa-solid fa-check-circle"></i> Free battery swaps at any EzygoBD station</li>
            <li><i class="fa-solid fa-check-circle"></i> Weekly payouts &amp; transparent dashboard</li>
          </ul>
          <a href="#partner" class="btn btn-outline">Join as Driver</a>
        </div>
        <div class="benefit-col">
          <div class="benefit-header">
            <i class="fa-solid fa-building"></i>
            <h3>Businesses: Go Green, Save Green</h3>
          </div>
          <ul class="benefit-list">
            <li><i class="fa-solid fa-check-circle"></i> Predictable, fixed monthly fleet costs</li>
            <li><i class="fa-solid fa-check-circle"></i> Tax benefits for adopting green technology</li>
            <li><i class="fa-solid fa-check-circle"></i> Branding opportunities on branded fleet vehicles</li>
            <li><i class="fa-solid fa-check-circle"></i> Real-time fleet tracking &amp; analytics dashboard</li>
            <li><i class="fa-solid fa-check-circle"></i> Dedicated account manager for enterprise clients</li>
          </ul>
          <a href="#partner" class="btn btn-outline">Enterprise Inquiry</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ KEY STATISTICS ============ -->
  <section id="stats" class="section statistics">
    <div class="container">
      <div class="section-header">
        <span class="tag">Data-Driven</span>
        <h2>Performance at a Glance</h2>
        <p>Real-time metrics that power our mission.</p>
      </div>
      <div class="charts-grid">
        <div class="chart-card">
          <h4>Our Fleet Efficiency</h4>
          <div class="bar-chart">
            <div class="bar-group"><div class="bar" style="--bar-h:82px"><span>60%</span></div><span class="bar-label">Q1</span></div>
            <div class="bar-group"><div class="bar" style="--bar-h:98px"><span>72%</span></div><span class="bar-label">Q2</span></div>
            <div class="bar-group"><div class="bar" style="--bar-h:116px"><span>85%</span></div><span class="bar-label">Q3</span></div>
            <div class="bar-group"><div class="bar" style="--bar-h:127px"><span>93%</span></div><span class="bar-label">Q4</span></div>
          </div>
        </div>
        <div class="chart-card">
          <h4>Rider Earnings Growth</h4>
          <div class="bar-chart bar-chart-earnings">
            <div class="bar-group"><div class="bar bar-accent" style="--bar-h:54px"><span>৳8k</span></div><span class="bar-label">Jan</span></div>
            <div class="bar-group"><div class="bar bar-accent" style="--bar-h:75px"><span>৳11k</span></div><span class="bar-label">Apr</span></div>
            <div class="bar-group"><div class="bar bar-accent" style="--bar-h:95px"><span>৳14k</span></div><span class="bar-label">Jul</span></div>
            <div class="bar-group"><div class="bar bar-accent" style="--bar-h:122px"><span>৳18k</span></div><span class="bar-label">Oct</span></div>
          </div>
        </div>
        <div class="chart-card">
          <h4>Battery Network Health</h4>
          <div class="donut-chart">
            <svg viewBox="0 0 36 36" class="donut">
              <circle class="donut-ring" cx="18" cy="18" r="15.9155" fill="none" stroke="#e6e6e6" stroke-width="3"></circle>
              <circle class="donut-segment seg-1" cx="18" cy="18" r="15.9155" fill="none" stroke="#00c853" stroke-width="3" stroke-dasharray="72 28" stroke-dashoffset="25"></circle>
              <circle class="donut-segment seg-2" cx="18" cy="18" r="15.9155" fill="none" stroke="#ffc107" stroke-width="3" stroke-dasharray="18 82" stroke-dashoffset="53"></circle>
              <circle class="donut-segment seg-3" cx="18" cy="18" r="15.9155" fill="none" stroke="#ff5252" stroke-width="3" stroke-dasharray="10 90" stroke-dashoffset="35"></circle>
            </svg>
            <div class="donut-legend">
              <span><i style="color:#00c853">●</i> Healthy 72%</span>
              <span><i style="color:#ffc107">●</i> Charging 18%</span>
              <span><i style="color:#ff5252">●</i> Maintenance 10%</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ APP SHOWCASE ============ -->
  <section id="app-showcase" class="section app-showcase">
    <div class="container">
      <div class="section-header">
        <span class="tag">Our App</span>
        <h2>Unlock the Power of Green Mobility via Our App</h2>
        <p>Everything you need — booking, tracking, payments — in one place.</p>
      </div>
      <div class="app-screens">
        <div class="app-screen-card">
          <div class="screen-mock">
            <div class="screen-top-bar"><span>9:41</span><span><i class="fa-solid fa-signal"></i> <i class="fa-solid fa-wifi"></i> <i class="fa-solid fa-battery-full"></i></span></div>
            <div class="screen-body"><i class="fa-solid fa-calendar-check fa-3x"></i><h5>Easy Booking</h5><p>Reserve your EV in seconds. Choose time, vehicle &amp; pickup point.</p></div>
          </div>
        </div>
        <div class="app-screen-card">
          <div class="screen-mock">
            <div class="screen-top-bar"><span>9:41</span><span><i class="fa-solid fa-signal"></i> <i class="fa-solid fa-wifi"></i> <i class="fa-solid fa-battery-full"></i></span></div>
            <div class="screen-body"><i class="fa-solid fa-credit-card fa-3x"></i><h5>Secure Payment</h5><p>Pay via bKash, Nagad, card, or wallet. 100% encrypted.</p></div>
          </div>
        </div>
        <div class="app-screen-card">
          <div class="screen-mock">
            <div class="screen-top-bar"><span>9:41</span><span><i class="fa-solid fa-signal"></i> <i class="fa-solid fa-wifi"></i> <i class="fa-solid fa-battery-full"></i></span></div>
            <div class="screen-body"><i class="fa-solid fa-map-location-dot fa-3x"></i><h5>Route Tracking</h5><p>Live GPS tracking, optimized routes &amp; nearby station finder.</p></div>
          </div>
        </div>
        <div class="app-screen-card">
          <div class="screen-mock">
            <div class="screen-top-bar"><span>9:41</span><span><i class="fa-solid fa-signal"></i> <i class="fa-solid fa-wifi"></i> <i class="fa-solid fa-battery-full"></i></span></div>
            <div class="screen-body"><i class="fa-solid fa-clock-rotate-left fa-3x"></i><h5>Ride History</h5><p>Complete ride logs, invoices &amp; carbon savings tracker.</p></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ PARTNER WITH US ============ -->
  <section id="partner" class="section partner">
    <div class="container">
      <div class="section-header">
        <span class="tag">Join Us</span>
        <h2>Partner With Us for a Greener Future</h2>
        <p>Whether you're a driver or an enterprise — there's a place for you.</p>
      </div>
      <div class="partner-split">
        <div class="partner-col">
          <h3><i class="fa-solid fa-id-card"></i> Driver / Rider Registration</h3>
          <form class="partner-form" action="form-handler.php" method="POST">
            <input type="hidden" name="form_type" value="driver">
            <div class="form-group">
              <label for="driverName">Full Name</label>
              <input type="text" id="driverName" name="name" placeholder="Your full name" required />
            </div>
            <div class="form-group">
              <label for="driverPhone">Phone Number</label>
              <input type="tel" id="driverPhone" name="phone" placeholder="+880 1XXX-XXXXXX" required />
            </div>
            <div class="form-group">
              <label for="driverCity">City</label>
              <select id="driverCity" name="city" required>
                <option value="">Select city</option>
                <option>Dhaka</option>
                <option>Chittagong</option>
                <option>Sylhet</option>
                <option>Rajshahi</option>
                <option>Khulna</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="driverVehicle">Preferred Vehicle</label>
              <select id="driverVehicle" name="vehicle">
                <option value="">Select type</option>
                <option>E-Scooter</option>
                <option>E-Bike</option>
                <option>E-Rickshaw</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Register as Driver</button>
          </form>
        </div>
        <div class="partner-col">
          <h3><i class="fa-solid fa-handshake"></i> Enterprise / Investor Inquiry</h3>
          <form class="partner-form" action="form-handler.php" method="POST">
            <input type="hidden" name="form_type" value="enterprise">
            <div class="form-group">
              <label for="bizName">Company Name</label>
              <input type="text" id="bizName" name="company" placeholder="Company name" required />
            </div>
            <div class="form-group">
              <label for="bizEmail">Business Email</label>
              <input type="email" id="bizEmail" name="email" placeholder="contact@company.com" required />
            </div>
            <div class="form-group">
              <label for="bizType">Inquiry Type</label>
              <select id="bizType" name="inquiry_type" required>
                <option value="">Select type</option>
                <option>Fleet Partnership</option>
                <option>Corporate Commute</option>
                <option>Investment</option>
                <option>Franchise</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="bizMessage">Message</label>
              <textarea id="bizMessage" name="message" rows="3" placeholder="Tell us about your needs…"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Inquiry</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ TESTIMONIALS ============ -->
  <section id="testimonials" class="section testimonials">
    <div class="container">
      <div class="section-header">
        <span class="tag">Voices</span>
        <h2>What Our Community Says</h2>
        <p>Real stories from riders, businesses, and delivery partners.</p>
      </div>
      <div class="testimonial-carousel" id="testimonialCarousel">
        <div class="testimonial-track">
          <div class="testimonial-card">
            <div class="testimonial-avatar"><i class="fa-solid fa-user-tie"></i></div>
            <p class="testimonial-quote">"EzygoBD helped me cut my daily fuel cost by 65%. I earn more as a delivery rider now and I feel good about the environment."</p>
            <h4>Rahim Uddin</h4>
            <span>Delivery Partner, Dhaka</span>
          </div>
          <div class="testimonial-card">
            <div class="testimonial-avatar"><i class="fa-solid fa-user"></i></div>
            <p class="testimonial-quote">"As a woman commuter, I feel safe and empowered using EzygoBD's e-scooters. The app is very easy to use and rides are smooth."</p>
            <h4>Fatema Akter</h4>
            <span>Daily Commuter, Chittagong</span>
          </div>
          <div class="testimonial-card">
            <div class="testimonial-avatar"><i class="fa-solid fa-building"></i></div>
            <p class="testimonial-quote">"We switched our company fleet to EzygoBD EVs. Fixed monthly costs and a dedicated manager made the transition seamless."</p>
            <h4>Tanvir Hasan</h4>
            <span>CEO, GreenLogistics BD</span>
          </div>
          <div class="testimonial-card">
            <div class="testimonial-avatar"><i class="fa-solid fa-user-graduate"></i></div>
            <p class="testimonial-quote">"Renting an e-bike for my university commute saves me money every month. Plus, it's fun and eco-friendly!"</p>
            <h4>Nusrat Jahan</h4>
            <span>Student, Sylhet</span>
          </div>
        </div>
        <div class="carousel-controls">
          <button class="carousel-btn" id="carouselPrev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <div class="carousel-dots" id="carouselDots"></div>
          <button class="carousel-btn" id="carouselNext" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ NEWS / BLOG ============ -->
  <section id="news" class="section news">
    <div class="container">
      <div class="section-header">
        <span class="tag">Latest</span>
        <h2>News &amp; Blog</h2>
      </div>
      <div class="news-grid">
        <article class="news-card">
          <div class="news-img"><i class="fa-solid fa-newspaper fa-3x"></i></div>
          <div class="news-body">
            <span class="news-date">Mar 15, 2026</span>
            <h4>EzygoBD Expands to Chittagong</h4>
            <p>Our EV network now covers 50+ stations across Chittagong, making green commuting accessible to over 5 million residents.</p>
            <a href="#" class="link-arrow">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </article>
        <article class="news-card">
          <div class="news-img"><i class="fa-solid fa-bolt fa-3x"></i></div>
          <div class="news-body">
            <span class="news-date">Feb 28, 2026</span>
            <h4>Launching Fast-Swap Battery Stations</h4>
            <p>Swap your battery in under 60 seconds at our new fast-swap hubs — no more waiting around to charge.</p>
            <a href="#" class="link-arrow">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </article>
        <article class="news-card">
          <div class="news-img"><i class="fa-solid fa-trophy fa-3x"></i></div>
          <div class="news-body">
            <span class="news-date">Jan 10, 2026</span>
            <h4>EzygoBD Wins Green Innovation Award</h4>
            <p>Recognized by the Bangladesh Climate Council for our contributions to urban mobility and carbon reduction.</p>
            <a href="#" class="link-arrow">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ============ FAQ ============ -->
  <section id="faq" class="section faq">
    <div class="container">
      <div class="section-header">
        <div class="faq-deco">
          <i class="fa-solid fa-circle-question"></i>
          <span class="faq-big-text">FAQ</span>
          <i class="fa-solid fa-lightbulb"></i>
        </div>
        <h2>Frequently Asked Questions</h2>
        <p>Find answers about EzygoBD — from general queries to payments, vehicles, batteries &amp; partnerships.</p>
      </div>
      <div class="faq-categories">
        <button class="faq-cat active" data-cat="all">All</button>
        <button class="faq-cat" data-cat="general">General</button>
        <button class="faq-cat" data-cat="payment">Payment</button>
        <button class="faq-cat" data-cat="vehicle">Vehicle Usage</button>
        <button class="faq-cat" data-cat="battery">Battery &amp; Charging</button>
        <button class="faq-cat" data-cat="partnership">Partnership</button>
      </div>
      <div class="faq-list" id="faqList">
        <div class="faq-item" data-cat="general">
          <button class="faq-q">What is EzygoBD? <i class="fa-solid fa-chevron-down"></i></button>
          <div class="faq-a"><p>EzygoBD is Bangladesh's leading EV rental platform. We offer e-scooters, e-bikes, and e-rickshaws on rent for personal, delivery, and corporate use.</p></div>
        </div>
        <div class="faq-item" data-cat="general">
          <button class="faq-q">Which cities does EzygoBD operate in? <i class="fa-solid fa-chevron-down"></i></button>
          <div class="faq-a"><p>We currently operate in Dhaka, Chittagong, and Sylhet, with plans to expand to Rajshahi and Khulna soon.</p></div>
        </div>
        <div class="faq-item" data-cat="payment">
          <button class="faq-q">What payment methods are accepted? <i class="fa-solid fa-chevron-down"></i></button>
          <div class="faq-a"><p>We accept bKash, Nagad, credit/debit cards, and in-app wallet top-ups. All transactions are encrypted and secure.</p></div>
        </div>
        <div class="faq-item" data-cat="payment">
          <button class="faq-q">Is there a security deposit? <i class="fa-solid fa-chevron-down"></i></button>
          <div class="faq-a"><p>A small refundable deposit of ৳500 is required at registration. It is fully refundable when you close your account.</p></div>
        </div>
        <div class="faq-item" data-cat="vehicle">
          <button class="faq-q">Do I need a license to ride? <i class="fa-solid fa-chevron-down"></i></button>
          <div class="faq-a"><p>For e-scooters and e-bikes, a valid driving license is required. E-rickshaws do not require a license under current regulations.</p></div>
        </div>
        <div class="faq-item" data-cat="vehicle">
          <button class="faq-q">What happens if the vehicle breaks down? <i class="fa-solid fa-chevron-down"></i></button>
          <div class="faq-a"><p>Contact our 24/7 support through the app. We will dispatch a replacement vehicle or roadside assistance within 30 minutes.</p></div>
        </div>
        <div class="faq-item" data-cat="battery">
          <button class="faq-q">How does battery swapping work? <i class="fa-solid fa-chevron-down"></i></button>
          <div class="faq-a"><p>Visit any EzygoBD station, hand in your depleted battery, and receive a fully charged one in under 60 seconds. It's free for active subscribers.</p></div>
        </div>
        <div class="faq-item" data-cat="battery">
          <button class="faq-q">What is the average range per charge? <i class="fa-solid fa-chevron-down"></i></button>
          <div class="faq-a"><p>Our vehicles offer 40-80 km per charge depending on the model, terrain, and rider weight.</p></div>
        </div>
        <div class="faq-item" data-cat="partnership">
          <button class="faq-q">How can my business partner with EzygoBD? <i class="fa-solid fa-chevron-down"></i></button>
          <div class="faq-a"><p>Fill out the Enterprise Inquiry form above or email us at partners@ezygobd.com. Our team will connect with you within 24 hours.</p></div>
        </div>
        <div class="faq-item" data-cat="partnership">
          <button class="faq-q">Can I invest in EzygoBD? <i class="fa-solid fa-chevron-down"></i></button>
          <div class="faq-a"><p>Yes! We are open to strategic investors. Please reach out via the Enterprise Inquiry form or email invest@ezygobd.com.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ RESOURCES & CONTACT ============ -->
  <section id="contact" class="section contact">
    <div class="container">
      <div class="section-header">
        <span class="tag">Connect</span>
        <h2 class="contact-title">Get In Touch!</h2>
        <p>Resources, maps, and all the ways to reach us.</p>
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
            <li><i class="fa-solid fa-phone"></i> +880 1700-000000</li>
            <li><i class="fa-solid fa-location-dot"></i> Level 5, Green Tower, Gulshan-2, Dhaka 1212</li>
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
            <a href="#" aria-label="X / Twitter"><i class="fa-brands fa-x-twitter"></i></a>
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

  <!-- ============ CTA DOWNLOAD ============ -->
  <section id="cta-download" class="section cta-download">
    <div class="container cta-download-inner">
      <div class="cta-text">
        <h2>Ready to Go Green?</h2>
        <p>Download the EzygoBD app and start your first ride today.</p>
        <div class="store-badges">
          <a href="#" class="store-badge" aria-label="Download on App Store">
            <i class="fa-brands fa-apple"></i>
            <div><small>Download on the</small><strong>App Store</strong></div>
          </a>
          <a href="#" class="store-badge" aria-label="Get on Google Play">
            <i class="fa-brands fa-google-play"></i>
            <div><small>Get it on</small><strong>Google Play</strong></div>
          </a>
        </div>
      </div>
      <div class="cta-phone">
        <div class="phone-frame phone-frame-sm">
          <div class="phone-screen" style="background:linear-gradient(135deg,#00c853 0%,#00e676 100%);display:flex;align-items:center;justify-content:center;flex-direction:column;color:#fff;">
            <i class="fa-solid fa-leaf fa-3x"></i>
            <strong style="margin-top:.5rem;font-size:1.2rem">EzygoBD</strong>
            <small>Ride Green</small>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
