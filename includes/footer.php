  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <div class="footer-logo">
            <div class="logo-emblem"><i class="fa-solid fa-bolt"></i></div>
            <div class="logo-wordmark">
              <span class="logo-main">EZYGO</span>
              <span class="logo-tagline">BD Electric</span>
            </div>
          </div>
          <p>Bangladesh's #1 electric vehicle rental network — building a greener future, one ride at a time.</p>
          <div class="footer-social">
            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
        <div class="footer-links">
          <h4>Riders</h4>
          <ul>
            <li><a href="services.php">Daily Rental</a></li>
            <li><a href="services.php">Monthly Plan</a></li>
            <li><a href="services.php">E-Rickshaw Plan</a></li>
            <li><a href="contact.php">Find a Hub</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h4>Partners</h4>
          <ul>
            <li><a href="services.php">Delivery Fleet</a></li>
            <li><a href="franchise.php">Franchise</a></li>
            <li><a href="advertising.php">Advertising</a></li>
            <li><a href="evs.php">EzyFleet.ai</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h4>Company</h4>
          <ul>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; <?= date('Y') ?> Ezygo Electric Limited. All rights reserved. Serving Bangladesh with clean mobility.</p>
      </div>
    </div>
  </footer>

  <button class="back-to-top" id="backToTop" aria-label="Back to top"><i class="fa-solid fa-arrow-up"></i></button>

  <script src="assets/js/script.js"></script>
<?php if (!empty($pageJs)): ?>
  <script src="assets/js/<?= $pageJs ?>"></script>
<?php endif; ?>
