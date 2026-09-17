<?php
// Each page sets $active to one of: home, about, work, products, team, news, partners, contact
$active = $active ?? '';
function nav_active($key, $active) { return $key === $active ? ' class="active"' : ''; }
?>
<!-- ============================================================
     BREAKING NEWS BAR
     ============================================================ -->
<div id="breaking-news-bar">
    <div class="inner">
        <span class="ticker-label">&#128226; NEW</span>
        <div class="news-ticker-container">
            <a href="publications.php" class="news-item active">International Nutrition Olympiad (INO) 2026 Officially Launched on 9 July 2026 &rarr;</a>
            <a href="publications.php" class="news-item">MoU Signing Between BIID Foundation and NAF Bangladesh &rarr;</a>
            <a href="publications.php" class="news-item">BIID Conducts Community FGD in Kamta, Manikganj for Nutri-Mart Study &rarr;</a>
            <a href="publications.php" class="news-item">Celebrating 18 years of BIID Foundation! &rarr;</a>
            <a href="publications.php" class="news-item">Adolescent Awareness Session at Dhankora Girish Institute, Manikganj &rarr;</a>
        </div>
    </div>
</div>

<!-- ============================================================
     NAVIGATION
     ============================================================ -->
<header id="navigation">
    <div class="nav-inner">
        <div class="nav-brand">
            <a href="index.php"><img src="img/BIID foundation_Logo.jpeg" alt="BIID Logo"></a>
        </div>
        <nav class="nav-links" id="navLinks">
            <a href="index.php"<?php echo nav_active('home', $active); ?>>Home</a>
            <a href="about.php"<?php echo nav_active('about', $active); ?>>About</a>
            <div class="nav-dropdown nav-work-dropdown">
                <a href="our-work.php"<?php echo nav_active('work', $active) . nav_active('products', $active); ?>>Our Work &#9662;</a>
                <div class="nav-dropdown-menu">
                    <a href="our-work.php">Programs &amp; Projects</a>
                    <a href="products.php">Products</a>
                </div>
            </div>
            <a href="team.php"<?php echo nav_active('team', $active); ?>>Team</a>
            <a href="publications.php"<?php echo nav_active('news', $active); ?>>News &amp; Publications</a>
            <a href="partners.php"<?php echo nav_active('partners', $active); ?>>Partners</a>
            <a href="contact.php"<?php echo nav_active('contact', $active); ?>>Contact</a>
        </nav>
        <a href="contact.php" class="btn btn-primary btn-sm nav-cta">Get Involved</a>
        <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
