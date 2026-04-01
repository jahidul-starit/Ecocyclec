<?php
$pageTitle = "Contact — EzygoBD | Get In Touch";
$pageDesc  = "Reach out to EzygoBD for rider support, partnership inquiries, franchise questions or media requests. We respond within 24 hours.";
$pageCss   = 'contact.css';
$pageJs    = 'contact.js';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<style>
  .ct-fade { opacity: 0; transform: translateY(24px); transition: opacity .55s ease, transform .55s ease; }
  .ct-fade.visible { opacity: 1; transform: none; }
</style>
</head>
<body>

<?php include 'includes/header.php'; ?>
<?php include 'includes/mega-menu.php'; ?>

  <!-- ============ HERO ============ -->
  <section class="ct-hero">
    <div class="ct-hero-bg-dots"></div>
    <div class="ct-hero-content container">
      <span class="ct-hero-eyebrow">Get In Touch</span>
      <h1 class="ct-hero-title">We'd Love to<br><span>Hear From You</span></h1>
      <p class="ct-hero-sub">Whether you're a rider, a business, an investor, or just curious — our team is here and ready to help.</p>
    </div>
    <div class="ct-hero-wave">
      <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,35 C360,75 1080,-5 1440,35 L1440,70 L0,70 Z" fill="#f0faf3"/>
      </svg>
    </div>
  </section>

  <!-- ============ QUICK INFO CARDS ============ -->
  <section class="ct-info-strip">
    <div class="container">
      <div class="ct-info-grid">

        <div class="ct-info-card ct-fade">
          <div class="ct-info-icon" style="--ic:#e8f5e9;--ic-fg:#00c853"><i class="fa-solid fa-phone"></i></div>
          <h4>Phone / WhatsApp</h4>
          <p><a href="tel:+8801828721222">01828-721222</a> / <a href="tel:+8801576597666">01576-597666</a></p>
          <p style="font-size:.82rem;color:var(--clr-muted);margin-top:4px">Available 9 AM – 9 PM</p>
        </div>

        <div class="ct-info-card ct-fade">
          <div class="ct-info-icon" style="--ic:#e3f2fd;--ic-fg:#1976d2"><i class="fa-solid fa-envelope"></i></div>
          <h4>Email Us</h4>
          <p><a href="mailto:hello@ezygobd.com">hello@ezygobd.com</a></p>
          <p style="font-size:.82rem;color:var(--clr-muted);margin-top:4px">Reply within 24 hours</p>
        </div>

        <div class="ct-info-card ct-fade">
          <div class="ct-info-icon" style="--ic:#fce4ec;--ic-fg:#c2185b"><i class="fa-solid fa-location-dot"></i></div>
          <h4>Head Office</h4>
          <p>Plot#34, 7th Floor, Road<br>Sonargaon Janapath Rd, Dhaka</p>
        </div>

        <div class="ct-info-card ct-fade">
          <div class="ct-info-icon" style="--ic:#e8eaf6;--ic-fg:#3949ab"><i class="fa-solid fa-building-columns"></i></div>
          <h4>Corporate Office</h4>
          <p>6th Floor, Chattogram Software<br>Technology Park, Agrabad, Chittagong</p>
        </div>

        <div class="ct-info-card ct-fade">
          <div class="ct-info-icon" style="--ic:#fff8e1;--ic-fg:#f57f17"><i class="fa-solid fa-headset"></i></div>
          <h4>24/7 Rider Support</h4>
          <p><a href="mailto:support@ezygobd.com">support@ezygobd.com</a></p>
          <p style="font-size:.82rem;color:var(--clr-muted);margin-top:4px">Emergency breakdown help</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ MAIN CONTACT SECTION ============ -->
  <section class="ct-main">
    <div class="container">
      <div class="ct-main-grid">

        <!-- Left — details -->
        <div class="ct-fade">
          <h2 class="ct-panel-title">Contact Details</h2>
          <p class="ct-panel-sub">We're a team of passionate people building Bangladesh's cleanest mobility platform. Whatever you need, we'll find the right person to help.</p>

          <ul class="ct-detail-list">
            <li class="ct-detail-item">
              <div class="ct-detail-icon"><i class="fa-solid fa-building"></i></div>
              <div class="ct-detail-body">
                <strong>Head Office</strong>
                <span>Plot#34, 7th Floor, Road Sonargaon Janapath Rd, Dhaka</span>
              </div>
            </li>
            <li class="ct-detail-item">
              <div class="ct-detail-icon"><i class="fa-solid fa-building-columns"></i></div>
              <div class="ct-detail-body">
                <strong>Corporate Office</strong>
                <span>6th Floor, Chattogram Software Technology Park, Agrabad, Chittagong</span>
              </div>
            </li>
            <li class="ct-detail-item">
              <div class="ct-detail-icon"><i class="fa-solid fa-phone"></i></div>
              <div class="ct-detail-body">
                <strong>Phone / WhatsApp</strong>
                <a href="tel:+8801828721222">01828-721222</a> / <a href="tel:+8801576597666">01576-597666</a>
              </div>
            </li>
            <li class="ct-detail-item">
              <div class="ct-detail-icon"><i class="fa-solid fa-envelope"></i></div>
              <div class="ct-detail-body">
                <strong>General Enquiries</strong>
                <a href="mailto:hello@ezygobd.com">hello@ezygobd.com</a>
              </div>
            </li>
            <li class="ct-detail-item">
              <div class="ct-detail-icon"><i class="fa-solid fa-handshake"></i></div>
              <div class="ct-detail-body">
                <strong>Partnerships</strong>
                <a href="mailto:partners@ezygobd.com">partners@ezygobd.com</a>
              </div>
            </li>
            <li class="ct-detail-item">
              <div class="ct-detail-icon"><i class="fa-solid fa-newspaper"></i></div>
              <div class="ct-detail-body">
                <strong>Media & Press</strong>
                <a href="mailto:press@ezygobd.com">press@ezygobd.com</a>
              </div>
            </li>
          </ul>

          <div class="ct-social-row">
            <a href="#" class="ct-social-btn" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="ct-social-btn" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="ct-social-btn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#" class="ct-social-btn" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            <a href="#" class="ct-social-btn" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
          </div>

          <div class="ct-hours">
            <h4><i class="fa-solid fa-clock" style="color:var(--clr-primary);margin-right:8px"></i>Office Hours</h4>
            <div class="ct-hours-row"><span>Sunday – Thursday</span><span class="open">9:00 AM – 6:00 PM</span></div>
            <div class="ct-hours-row"><span>Saturday</span><span class="open">10:00 AM – 2:00 PM</span></div>
            <div class="ct-hours-row"><span>Friday</span><span class="closed">Closed</span></div>
            <div class="ct-hours-row"><span>Rider Support</span><span class="open">24 / 7</span></div>
          </div>
        </div>

        <!-- Right — form -->
        <div class="ct-fade">
          <div class="ct-form-wrap">
            <h3 class="ct-form-title">Send Us a Message</h3>
            <p class="ct-form-sub">Choose the type of inquiry and fill in the form below.</p>

            <div id="ctFormMsg" class="ct-form-msg"></div>

            <!-- Tabs -->
            <div class="ct-tabs" role="tablist">
              <button class="ct-tab active" data-panel="#ct-panel-general" role="tab">General</button>
              <button class="ct-tab" data-panel="#ct-panel-support" role="tab">Rider Support</button>
              <button class="ct-tab" data-panel="#ct-panel-partner" role="tab">Partnership</button>
            </div>

            <!-- Panel: General -->
            <div class="ct-form-panel active" id="ct-panel-general">
              <form action="form-handler.php" method="POST">
                <input type="hidden" name="form_type" value="contact">
                <div class="ct-form-row">
                  <div class="ct-form-group">
                    <label for="ctGenName">Full Name</label>
                    <input type="text" id="ctGenName" name="name" placeholder="Your name" required />
                  </div>
                  <div class="ct-form-group">
                    <label for="ctGenPhone">Phone</label>
                    <input type="tel" id="ctGenPhone" name="phone" placeholder="+880 1XXX-XXXXXX" />
                  </div>
                </div>
                <div class="ct-form-group">
                  <label for="ctGenEmail">Email</label>
                  <input type="email" id="ctGenEmail" name="email" placeholder="you@example.com" required />
                </div>
                <div class="ct-form-group">
                  <label for="ctGenSubject">Subject</label>
                  <input type="text" id="ctGenSubject" name="subject" placeholder="What's this about?" required />
                </div>
                <div class="ct-form-group">
                  <label for="ctGenMsg">Message</label>
                  <textarea id="ctGenMsg" name="message" rows="4" placeholder="How can we help you?" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg ct-submit-btn">
                  <i class="fa-solid fa-paper-plane"></i> Send Message
                </button>
              </form>
            </div>

            <!-- Panel: Rider Support -->
            <div class="ct-form-panel" id="ct-panel-support">
              <form action="form-handler.php" method="POST">
                <input type="hidden" name="form_type" value="support">
                <div class="ct-form-row">
                  <div class="ct-form-group">
                    <label for="ctSupName">Full Name</label>
                    <input type="text" id="ctSupName" name="name" placeholder="Your name" required />
                  </div>
                  <div class="ct-form-group">
                    <label for="ctSupPhone">Registered Phone</label>
                    <input type="tel" id="ctSupPhone" name="phone" placeholder="+880 1XXX-XXXXXX" required />
                  </div>
                </div>
                <div class="ct-form-group">
                  <label for="ctSupType">Issue Type</label>
                  <select id="ctSupType" name="issue_type">
                    <option value="">Select issue</option>
                    <option value="breakdown">Vehicle Breakdown</option>
                    <option value="payment">Payment / Billing</option>
                    <option value="app">App Problem</option>
                    <option value="battery">Battery / Charging</option>
                    <option value="account">Account Issue</option>
                    <option value="other">Other</option>
                  </select>
                </div>
                <div class="ct-form-group">
                  <label for="ctSupMsg">Describe Your Issue</label>
                  <textarea id="ctSupMsg" name="message" rows="4" placeholder="Please describe what happened..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg ct-submit-btn">
                  <i class="fa-solid fa-headset"></i> Submit Support Request
                </button>
              </form>
            </div>

            <!-- Panel: Partnership -->
            <div class="ct-form-panel" id="ct-panel-partner">
              <form action="form-handler.php" method="POST">
                <input type="hidden" name="form_type" value="partnership">
                <div class="ct-form-row">
                  <div class="ct-form-group">
                    <label for="ctParName">Full Name</label>
                    <input type="text" id="ctParName" name="name" placeholder="Your name" required />
                  </div>
                  <div class="ct-form-group">
                    <label for="ctParCompany">Company / Organisation</label>
                    <input type="text" id="ctParCompany" name="company" placeholder="Company name" required />
                  </div>
                </div>
                <div class="ct-form-group">
                  <label for="ctParEmail">Business Email</label>
                  <input type="email" id="ctParEmail" name="email" placeholder="you@company.com" required />
                </div>
                <div class="ct-form-group">
                  <label for="ctParType">Partnership Type</label>
                  <select id="ctParType" name="partnership_type">
                    <option value="">Select type</option>
                    <option value="franchise">Franchise (FOCO / FOFO)</option>
                    <option value="advertising">EV Advertising</option>
                    <option value="fleet">Corporate Fleet</option>
                    <option value="investment">Investment</option>
                    <option value="media">Media / Press</option>
                    <option value="other">Other</option>
                  </select>
                </div>
                <div class="ct-form-group">
                  <label for="ctParMsg">Message</label>
                  <textarea id="ctParMsg" name="message" rows="4" placeholder="Tell us about your proposal..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg ct-submit-btn">
                  <i class="fa-solid fa-handshake"></i> Submit Enquiry
                </button>
              </form>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ MAP PLACEHOLDER ============ -->
  <section class="ct-map">
    <div class="container">
      <div class="ct-map-inner ct-fade">
        <i class="fa-solid fa-map-location-dot"></i>
        <p>Interactive map coming soon — Plot#34, 7th Floor, Road Sonargaon Janapath Rd, Dhaka</p>
      </div>
    </div>
  </section>

  <!-- ============ FAQ TEASER ============ -->
  <section class="ct-faq">
    <div class="container">
      <div class="section-header ct-fade">
        <span class="section-eyebrow">Quick Answers</span>
        <h2 class="section-title">Common Questions</h2>
        <p class="section-sub">Can't find what you need? Reach out via the form above.</p>
      </div>

      <div class="ct-faq-grid">
        <div class="ct-faq-item ct-fade">
          <h4><i class="fa-solid fa-circle-question"></i> What are your support hours?</h4>
          <p>Rider emergency support is available 24/7 via WhatsApp. Office staff are available Sun–Thu, 9 AM – 6 PM.</p>
        </div>
        <div class="ct-faq-item ct-fade">
          <h4><i class="fa-solid fa-circle-question"></i> How fast do you respond to emails?</h4>
          <p>We aim to respond to all email enquiries within 24 hours on business days. Urgent issues via phone are handled immediately.</p>
        </div>
        <div class="ct-faq-item ct-fade">
          <h4><i class="fa-solid fa-circle-question"></i> Where do I report a vehicle issue?</h4>
          <p>Use the "Rider Support" tab in the form above or call our 24/7 helpline at 01828-721222 for immediate assistance.</p>
        </div>
        <div class="ct-faq-item ct-fade">
          <h4><i class="fa-solid fa-circle-question"></i> How do I discuss a franchise or investment?</h4>
          <p>Use the "Partnership" tab in the form above, or visit our <a href="franchise.php" style="color:var(--clr-primary)">Franchise page</a> for detailed models and ROI information.</p>
        </div>
        <div class="ct-faq-item ct-fade">
          <h4><i class="fa-solid fa-circle-question"></i> Can I visit the office in person?</h4>
          <p>Yes — our head office is at Plot#34, 7th Floor, Road Sonargaon Janapath Rd, Dhaka. Please call ahead to schedule a meeting.</p>
        </div>
        <div class="ct-faq-item ct-fade">
          <h4><i class="fa-solid fa-circle-question"></i> Have a billing or account problem?</h4>
          <p>Email <a href="mailto:support@ezygobd.com" style="color:var(--clr-primary)">support@ezygobd.com</a> with your registered phone number and a brief description of the issue.</p>
        </div>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
