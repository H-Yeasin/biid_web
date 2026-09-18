<?php
$pageTitle = $pageTitle ?? 'BIID Innovation Lab | B-Lab';
$pageDescription = $pageDescription ?? 'BIID Innovation Lab (B-Lab) supports entrepreneurs with business development services, access to finance, training and growth tools.';
$activePage = $activePage ?? '';
function blab_active($key, $activePage){ return $key === $activePage ? 'active' : ''; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
  <link rel="stylesheet" href="/b-lab/assets/blab.css">
</head>
<body>
<div class="top-strip">BIID Innovation Lab (B-Lab) &nbsp;·&nbsp; <strong>Entrepreneurship · Access to Finance · Training · Growth</strong></div>
<header class="nav">
  <div class="container nav-inner">
    <a class="brand" href="/b-lab/">
      <img src="/b-lab/b_lab.png" alt="B-Lab Logo" onerror="this.style.display='none';this.nextElementSibling.style.display='block';">
      <span class="brand-fallback" style="display:none;">BIID Innovation Lab<small>B-LAB</small></span>
    </a>
    <nav class="nav-links" id="navLinks">
      <a class="<?php echo blab_active('home',$activePage); ?>" href="/b-lab/">Home</a>
      <a href="/b-lab/#about">About Us</a>
      <a class="<?php echo blab_active('services',$activePage); ?>" href="/b-lab/services.php">Services</a>
      <a class="<?php echo blab_active('finance',$activePage); ?>" href="/b-lab/your_partner.php">Access to Finance</a>
      <a class="<?php echo blab_active('banks',$activePage); ?>" href="/b-lab/banks.php">Bank's Loan Info</a>
      <a class="<?php echo blab_active('entrepreneurs',$activePage); ?>" href="/b-lab/entreprenuers_profile.php">Entrepreneurs</a>
      <a class="<?php echo blab_active('contact',$activePage); ?>" href="/b-lab/Contact_Us.php">Contact</a>
    </nav>
    <div class="nav-actions">
      <a class="nav-btn outline" href="https://forms.gle/rs5fqaWyVXnZ36Gi6" target="_blank" rel="noopener"><i class="ti ti-user-plus"></i> Registration</a>
      <a class="nav-btn solid" href="/b-lab/login.php"><i class="ti ti-login-2"></i> Log In</a>
    </div>
    <button class="menu-btn" id="menuBtn" type="button" aria-label="Toggle navigation"><i class="ti ti-menu-2"></i></button>
  </div>
</header>
<!--https://fill.formnx.com/f/registration-11cy77-->
