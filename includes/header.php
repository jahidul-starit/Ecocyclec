<?php
$currentPage = basename($_SERVER['SCRIPT_NAME'], '.php');
$navItems = [
  ['href' => 'evs',        'label' => 'Our EVs'],
  ['href' => 'services',   'label' => 'Services'],
  ['href' => 'about',      'label' => 'About'],
  ['href' => 'franchise',  'label' => 'Franchise'],
  ['href' => 'advertising','label' => 'Advertising'],
];
?>
  <header id="header">
    <nav class="navbar container">
      <a href="index.php" class="logo" aria-label="EzygoBD Home">
        <div class="logo-emblem"><i class="fa-solid fa-bolt"></i></div>
        <div class="logo-wordmark">
          <span class="logo-main">EZYGO</span>
          <span class="logo-tagline">BD Electric</span>
        </div>
      </a>

      <ul class="nav-links" id="navLinks">
<?php foreach ($navItems as $item): ?>
        <li><a href="<?= $item['href'] ?>.php"<?= $currentPage === $item['href'] ? ' class="active"' : '' ?>><?= $item['label'] ?></a></li>
<?php endforeach; ?>
        <li><a href="index.php#contact"<?= $currentPage === 'index' ? ' href="#contact"' : '' ?>>Contact</a></li>
      </ul>

      <div class="nav-actions">
        <a href="index.php#cta-download" class="btn-nav-cta">Book Now</a>
        <button class="theme-toggle" id="themeToggle" aria-label="Toggle dark mode" aria-pressed="false">
          <i class="fa-solid fa-sun"></i>
          <i class="fa-solid fa-moon"></i>
          <span class="toggle-thumb"></span>
        </button>
        <button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false">
          <span></span><span></span><span></span>
        </button>
      </div>
    </nav>
  </header>
