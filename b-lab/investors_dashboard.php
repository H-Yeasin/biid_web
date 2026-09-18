<?php
$pageTitle = "Financial Institute Dashboard | B-Lab";
$pageDescription = "B-Lab financial institutions dashboard.";
$activePage = "";
require __DIR__ . '/includes/header.php';
?>

<main>
<section class="page-hero"><div class="container"><div class="page-kicker"><i class="ti ti-layout-dashboard"></i> Financial Institutions</div><h1>Financial Institute Dashboard</h1><p>A dedicated entry point for reviewing entrepreneur profiles and connecting with B-Lab's entrepreneur ecosystem.</p></div></section>
<section class="section section-alt">
  <div class="container">
    <div class="section-head"><div class="section-kicker">Welcome</div><h2>Choose where you want to start</h2></div>
    <div class="dashboard-grid">
      <a class="dashboard-card" href="/b-lab/entreprenuers_profile.php">
        <div class="dashboard-icon"><i class="ti ti-users"></i></div><h3>Browse Entrepreneurs' Profiles</h3><p>Review the entrepreneur profiles currently available through B-Lab.</p><span class="btn btn-green">Browse Profiles <i class="ti ti-arrow-right"></i></span>
      </a>
      <div class="dashboard-card">
        <div class="dashboard-icon"><i class="ti ti-handshake"></i></div><h3>Connect with Entrepreneurs for Investments</h3><p>Use the entrepreneur profile directory as the current starting point for exploring investment connections.</p><a class="btn btn-outline" href="/b-lab/entreprenuers_profile.php">Explore Entrepreneurs</a>
      </div>
    </div>
  </div>
</section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
