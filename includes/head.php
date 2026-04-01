  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($pageTitle ?? "EzygoBD — Bangladesh's #1 EV Rental Network") ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDesc ?? 'Efficient, eco-friendly, and affordable electric vehicle rentals across Bangladesh.') ?>" />

  <!-- Favicon (SVG) -->
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='22' fill='%2300c853'/><text y='.9em' font-size='72' x='50%' text-anchor='middle' dominant-baseline='auto' font-family='Arial' fill='white'>⚡</text></svg>" />

  <!-- Open Graph -->
  <meta property="og:type"        content="website" />
  <meta property="og:site_name"   content="EzygoBD" />
  <meta property="og:title"       content="<?= htmlspecialchars($pageTitle ?? "EzygoBD — Bangladesh's #1 EV Rental Network") ?>" />
  <meta property="og:description" content="<?= htmlspecialchars($pageDesc ?? 'Efficient, eco-friendly, and affordable electric vehicle rentals across Bangladesh.') ?>" />
  <meta property="og:image"       content="https://ezygobd.com/assets/images/og-cover.jpg" />
  <meta name="twitter:card"       content="summary_large_image" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/styles.css" />
<?php if (!empty($pageCss)): ?>
  <link rel="stylesheet" href="assets/css/<?= $pageCss ?>" />
<?php endif; ?>
