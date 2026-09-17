<?php
// BIID Foundation UK extension page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIID Foundation UK | Connecting UK Resources, Expertise & Markets</title>
    <meta name="description" content="BIID Foundation UK connects UK resources, expertise and markets with innovative development solutions in Bangladesh and beyond.">
    <link rel="icon" href="../img/BIID.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; color: #1f2937; line-height: 1.65; background:#fff; }
        a { color: inherit; text-decoration: none; }
        img { max-width: 100%; display:block; }
        :root {
            --g1:#04342C; --g2:#0F6E56; --g3:#1D9E75; --g4:#5DCAA5;
            --gl:#E1F5EE; --gs:#9FE1CB; --text:#374151; --muted:#6B7280;
            --border:#E5E7EB; --bg:#F8FAF9; --white:#fff; --amber:#BA7517;
            --shadow:0 14px 35px rgba(4,52,44,.10);
        }
        .container { width:min(1160px, calc(100% - 32px)); margin:0 auto; }
        .top-strip { background:var(--g1); color:#dff8ef; font-size:12px; padding:7px 0; text-align:center; }
        .top-strip strong { color:#fff; }
        .nav { position:sticky; top:0; z-index:1000; background:rgba(255,255,255,.97); border-bottom:1px solid var(--border); box-shadow:0 2px 10px rgba(0,0,0,.04); }
        .nav-inner { min-height:70px; display:flex; align-items:center; justify-content:space-between; gap:24px; }
        .brand { display:flex; align-items:center; gap:10px; min-width:235px; }
        .brand img { height:50px; width:auto; }
        .brand-fallback { font-weight:800; color:var(--g1); line-height:1.05; }
        .brand-fallback small { display:block; color:var(--g2); font-size:10px; letter-spacing:1.1px; margin-top:4px; }
        .nav-links { display:flex; align-items:center; gap:19px; font-size:12px; font-weight:600; color:#4b5563; }
        .nav-links a:hover { color:var(--g2); }
        .back-btn { display:inline-flex; align-items:center; gap:7px; background:var(--g2); color:#fff; padding:9px 14px; border-radius:7px; font-size:12px; font-weight:700; white-space:nowrap; }
        .back-btn:hover { background:var(--g1); }
        .menu-btn { display:none; border:1px solid var(--border); background:#fff; border-radius:7px; padding:8px 10px; font-size:20px; color:var(--g1); }

        .hero { position:relative; overflow:hidden; background:linear-gradient(135deg, #042f28 0%, #0F6E56 62%, #1D9E75 100%); color:#fff; }
        .hero::before, .hero::after { content:""; position:absolute; border-radius:50%; border:1px solid rgba(255,255,255,.14); }
        .hero::before { width:520px; height:520px; right:-180px; top:-210px; }
        .hero::after { width:330px; height:330px; right:60px; bottom:-220px; }
        .hero-inner { position:relative; z-index:2; min-height:500px; display:grid; grid-template-columns:1.25fr .75fr; gap:50px; align-items:center; padding:70px 0; }
        .eyebrow { display:inline-flex; align-items:center; gap:7px; color:var(--gs); text-transform:uppercase; letter-spacing:1.7px; font-size:11px; font-weight:800; margin-bottom:15px; }
        .hero h1 { font-size:clamp(2.25rem,5vw,4.3rem); line-height:1.05; letter-spacing:-2px; margin-bottom:18px; max-width:780px; }
        .hero h1 span { color:var(--gs); }
        .hero .lead { color:rgba(255,255,255,.82); font-size:16px; max-width:750px; line-height:1.8; }
        .hero-actions { display:flex; gap:10px; flex-wrap:wrap; margin-top:27px; }
        .btn { display:inline-flex; align-items:center; gap:8px; padding:11px 17px; border-radius:8px; font-size:13px; font-weight:700; transition:.18s; }
        .btn-light { background:#fff; color:var(--g1); }
        .btn-light:hover { transform:translateY(-2px); }
        .btn-ghost { border:1px solid rgba(255,255,255,.38); color:#fff; }
        .btn-ghost:hover { background:rgba(255,255,255,.08); }
        .hero-card { background:rgba(255,255,255,.10); border:1px solid rgba(255,255,255,.22); border-radius:18px; padding:28px; backdrop-filter:blur(5px); }
        .hero-card .icon { width:48px; height:48px; border-radius:12px; display:grid; place-items:center; background:rgba(159,225,203,.18); color:var(--gs); font-size:25px; margin-bottom:16px; }
        .hero-card h3 { font-size:15px; margin-bottom:10px; }
        .hero-card p { font-size:13px; color:rgba(255,255,255,.75); }
        .hero-card .reg { margin-top:16px; padding-top:16px; border-top:1px solid rgba(255,255,255,.16); font-size:12px; color:#fff; }

        section { padding:72px 0; }
        .section-alt { background:var(--bg); }
        .section-head { text-align:center; max-width:820px; margin:0 auto 38px; }
        .section-kicker { color:var(--g3); text-transform:uppercase; font-size:10px; font-weight:800; letter-spacing:2px; margin-bottom:7px; }
        .section-head h2 { color:var(--g1); font-size:clamp(1.7rem,3.5vw,2.6rem); line-height:1.2; margin-bottom:10px; }
        .section-head p { color:var(--muted); font-size:14px; }

        .overview-grid { display:grid; grid-template-columns:1.1fr .9fr; gap:32px; align-items:stretch; }
        .copy-card, .purpose-card { border:1px solid var(--border); border-radius:15px; padding:28px; background:#fff; box-shadow:0 5px 18px rgba(0,0,0,.03); }
        .copy-card p { color:var(--text); font-size:14px; margin-bottom:14px; }
        .copy-card p:last-child { margin-bottom:0; }
        .purpose-card { background:var(--g1); color:#fff; border-color:var(--g1); }
        .purpose-card h3 { color:var(--gs); font-size:14px; margin-bottom:14px; text-transform:uppercase; letter-spacing:1px; }
        .purpose-card p { color:rgba(255,255,255,.82); font-size:14px; }
        .purpose-card .tagline { color:#fff; font-weight:800; font-size:18px; line-height:1.4; margin-top:18px; }

        .expertise-visual { border-radius:18px; overflow:hidden; border:1px solid var(--border); box-shadow:var(--shadow); background:#fff; margin-bottom:34px; }
        .expertise-visual img { width:100%; height:auto; }
        .expertise-grid { display:grid; grid-template-columns:repeat(5,1fr); gap:12px; }
        .expert-card { border:1px solid var(--border); border-top:4px solid var(--g3); background:#fff; border-radius:12px; padding:18px; }
        .expert-card i { font-size:23px; color:var(--g2); display:block; margin-bottom:8px; }
        .expert-card h3 { color:var(--g1); font-size:13px; line-height:1.35; margin-bottom:9px; }
        .expert-card ul { padding-left:17px; color:#4b5563; font-size:11px; line-height:1.65; }

        .sector-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:15px; margin-top:18px; }
        .sector-card { background:#fff; border:1px solid var(--border); border-radius:13px; padding:20px; }
        .sector-card h3 { display:flex; gap:8px; align-items:center; color:var(--g1); font-size:14px; margin-bottom:9px; }
        .sector-card h3 i { color:var(--g3); font-size:19px; }
        .sector-card ul { padding-left:17px; font-size:12px; color:#4b5563; line-height:1.7; }
        .sector-outcome { margin-top:13px; padding-top:11px; border-top:1px dashed var(--border); color:var(--g2); font-size:11px; font-weight:700; }
        .principles { display:grid; grid-template-columns:repeat(4,1fr); gap:12px; margin-top:22px; }
        .principle { background:var(--gl); border-radius:11px; padding:16px; }
        .principle strong { display:block; color:var(--g1); font-size:12px; margin-bottom:5px; }
        .principle span { font-size:11px; color:#49655d; }

        .poor-grid { display:grid; grid-template-columns:.75fr 1.25fr; gap:34px; align-items:start; }
        .poor-title { position:sticky; top:105px; }
        .poor-title .big-icon { width:66px; height:66px; display:grid; place-items:center; border-radius:16px; background:var(--gl); color:var(--g2); font-size:32px; margin-bottom:18px; }
        .poor-title h2 { color:var(--g1); font-size:2rem; line-height:1.2; margin-bottom:9px; }
        .poor-title p { color:var(--muted); font-size:13px; }
        .benefit-list { display:grid; gap:12px; }
        .benefit { display:grid; grid-template-columns:37px 1fr; gap:13px; padding:17px; border:1px solid var(--border); border-radius:12px; background:#fff; }
        .benefit .n { width:37px; height:37px; border-radius:10px; display:grid; place-items:center; background:var(--g2); color:#fff; font-weight:800; font-size:12px; }
        .benefit p { font-size:13px; color:var(--text); }

        .service-list { display:grid; gap:18px; counter-reset:services; }
        .service-card { display:grid; grid-template-columns:220px 1fr; gap:26px; border:1px solid var(--border); border-radius:15px; background:#fff; padding:26px; box-shadow:0 4px 15px rgba(0,0,0,.025); }
        .service-card .service-side { border-right:1px solid var(--border); padding-right:22px; }
        .service-no { width:42px; height:42px; display:grid; place-items:center; border-radius:12px; background:var(--g1); color:#fff; font-size:14px; font-weight:800; margin-bottom:13px; }
        .service-card h3 { color:var(--g1); font-size:17px; line-height:1.35; margin-bottom:6px; }
        .service-card .service-sub { color:var(--g2); font-size:12px; font-weight:700; line-height:1.5; }
        .service-points { display:grid; grid-template-columns:repeat(2,minmax(0,1fr)); gap:8px 20px; }
        .service-point { display:flex; gap:8px; align-items:flex-start; font-size:12px; color:#4b5563; }
        .service-point i { color:var(--g3); margin-top:3px; flex:none; }

        .bridge { background:linear-gradient(135deg,var(--g1),#075744); color:#fff; }
        .bridge-grid { display:grid; grid-template-columns:1.1fr .9fr; gap:42px; align-items:center; }
        .bridge h2 { color:#fff; font-size:2.3rem; line-height:1.2; margin-bottom:15px; }
        .bridge p { color:rgba(255,255,255,.8); font-size:14px; margin-bottom:13px; }
        .bridge-roles { display:grid; grid-template-columns:repeat(2,1fr); gap:12px; }
        .bridge-role { padding:18px; background:rgba(255,255,255,.09); border:1px solid rgba(255,255,255,.16); border-radius:12px; }
        .bridge-role i { color:var(--gs); font-size:24px; }
        .bridge-role strong { display:block; font-size:12px; margin-top:7px; }

        .team-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:18px; }
        .team-card { background:#fff; border:1px solid var(--border); border-radius:15px; overflow:hidden; box-shadow:0 5px 18px rgba(0,0,0,.035); }
        .team-photo { height:260px; overflow:hidden; background:#eef3f1; }
        .team-photo img { width:100%; height:100%; object-fit:cover; object-position:center top; }
        .team-info { padding:18px; }
        .team-info h3 { color:var(--g1); font-size:15px; margin-bottom:4px; }
        .team-info p { color:var(--g2); font-size:11px; font-weight:700; line-height:1.5; }

        .contact-wrap { display:grid; grid-template-columns:1fr 1fr; gap:22px; }
        .contact-card { border:1px solid var(--border); border-radius:15px; padding:27px; background:#fff; }
        .contact-card h3 { color:var(--g1); font-size:17px; margin-bottom:14px; }
        .contact-item { display:flex; gap:11px; align-items:flex-start; margin-bottom:14px; color:#4b5563; font-size:13px; }
        .contact-item i { color:var(--g3); font-size:18px; margin-top:1px; }
        .cta-card { background:var(--gl); border-color:#c5ecdf; }
        .cta-card p { color:#49655d; font-size:13px; margin-bottom:16px; }
        .cta-row { display:flex; gap:9px; flex-wrap:wrap; }
        .cta-green { background:var(--g2); color:#fff; }
        .cta-outline { border:1px solid var(--g2); color:var(--g2); background:#fff; }

        footer { background:#032d26; color:rgba(255,255,255,.65); padding:35px 0 18px; font-size:12px; }
        .footer-inner { display:grid; grid-template-columns:1.3fr 1fr 1fr; gap:28px; }
        footer h4 { color:#fff; font-size:13px; margin-bottom:9px; }
        footer a { display:block; margin-bottom:6px; }
        footer a:hover { color:var(--gs); }
        .copyright { margin-top:24px; padding-top:14px; border-top:1px solid rgba(255,255,255,.10); text-align:center; font-size:10px; }

        @media (max-width: 980px) {
            .nav-links { display:none; position:absolute; left:0; right:0; top:70px; background:#fff; border-bottom:1px solid var(--border); padding:18px 22px; flex-direction:column; align-items:flex-start; }
            .nav-links.open { display:flex; }
            .menu-btn { display:block; }
            .back-btn { display:none; }
            .hero-inner, .overview-grid, .poor-grid, .bridge-grid, .contact-wrap { grid-template-columns:1fr; }
            .hero-inner { min-height:auto; padding:58px 0; }
            .hero-card { max-width:620px; }
            .expertise-grid { grid-template-columns:repeat(2,1fr); }
            .sector-grid, .principles, .team-grid { grid-template-columns:repeat(2,1fr); }
            .poor-title { position:static; }
            .service-card { grid-template-columns:1fr; }
            .service-card .service-side { border-right:0; border-bottom:1px solid var(--border); padding:0 0 18px; }
        }
        @media (max-width: 620px) {
            .container { width:min(100% - 22px, 1160px); }
            .brand img { height:42px; }
            .hero h1 { letter-spacing:-1px; }
            section { padding:54px 0; }
            .expertise-grid, .sector-grid, .principles, .team-grid, .bridge-roles, .service-points, .footer-inner { grid-template-columns:1fr; }
            .team-photo { height:320px; }
            .service-card, .copy-card, .purpose-card, .contact-card { padding:20px; }
        }
    </style>
</head>
<body>
<div class="top-strip">BIID Foundation UK &nbsp;·&nbsp; <strong>Connecting UK Resources, Expertise &amp; Markets with Innovative Development Solutions</strong></div>
<header class="nav">
    <div class="container nav-inner">
        <a class="brand" href="#top">
            <img src="../img/BIID foundation_Logo.jpeg" alt="BIID Foundation" onerror="this.style.display='none';this.nextElementSibling.style.display='block';">
            <span class="brand-fallback" style="display:none;">BIID Foundation UK<small>LEADING THROUGH INNOVATION</small></span>
        </a>
        <nav class="nav-links" id="navLinks">
            <a href="#overview">Overview</a>
            <a href="#expertise">Core Expertise</a>
            <a href="#services">Priority Services</a>
            <a href="#team">Team</a>
            <a href="#contact">Contact</a>
        </nav>
        <a class="back-btn" href="../"><i class="ti ti-arrow-left"></i> BIID Foundation</a>
        <button class="menu-btn" aria-label="Toggle navigation" onclick="document.getElementById('navLinks').classList.toggle('open')"><i class="ti ti-menu-2"></i></button>
    </div>
</header>

<main id="top">
<section class="hero">
    <div class="container hero-inner">
        <div>
            <div class="eyebrow"><i class="ti ti-world"></i> BIID Foundation · United Kingdom</div>
            <h1>BIID Foundation <span>extends wings</span> at United Kingdom</h1>
            <p class="lead">The establishment of a BIID Foundation wing in London presents a significant strategic step towards globalizing the BIID initiatives, primarily Nutrition Club (NC) and scaling the International Nutrition Olympiad (INO) as a Bangladeshi innovation to address malnutrition, promote healthy lifestyle and youth leadership. As a Business Development and Liaison office, the UK presence can contribute with meaningful impact in Africa, and the Asia-Pacific regions.</p>
            <div class="hero-actions">
                <a class="btn btn-light" href="#services"><i class="ti ti-briefcase"></i> Explore Priority Services</a>
                <a class="btn btn-ghost" href="#contact"><i class="ti ti-mail"></i> Contact BIID Foundation UK</a>
            </div>
        </div>
        <aside class="hero-card">
            <div class="icon"><i class="ti ti-building-community"></i></div>
            <h3>Business Development &amp; Liaison Office</h3>
            <p>Serving as a UK-based platform for fundraising, partnerships, technical cooperation and internationalisation while Bangladesh remains the principal implementation and grassroots innovation hub.</p>
            <div class="reg"><strong>BIID FOUNDATION (UK) LTD</strong><br>Private company limited by guarantee without share capital<br>Incorporated in September 2025</div>
        </aside>
    </div>
</section>

<section id="overview">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">Strategic Extension</div>
            <h2>Connecting Bangladesh and the United Kingdom for wider development impact</h2>
            <p>BIID Foundation UK is designed to link resources, expertise, markets and partnerships with proven and emerging development solutions.</p>
        </div>
        <div class="overview-grid">
            <div class="copy-card">
                <p>BIID Foundation UK, serving as a bridge to connect Resources, Expertise and Markets with Innovative Development Solutions in Bangladesh and Beyond. This gives the UK entity a clear role as a fundraising, partnership, technical and internationalisation platform, while the Bangladesh operation remains the principal implementation and grassroots innovation hub.</p>
                <p>BIID Foundation UK will actively promote NC &amp; INO's origin story and its success in Bangladesh to inspire other nations and highlight the potential of South-South cooperation.</p>
            </div>
            <div class="purpose-card">
                <h3>Core Positioning</h3>
                <p>The UK presence supports global expansion of BIID initiatives and creates opportunities to prove and adapt the BIID model across varied socio-economic and cultural landscapes.</p>
                <div class="tagline">Connecting UK Resources, Expertise &amp; Markets with Innovative Development Solutions in Bangladesh and Beyond.</div>
            </div>
        </div>
    </div>
</section>

<section id="expertise" class="section-alt">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">Core Expertise</div>
            <h2>Innovating Solutions. Empowering Communities. Transforming Lives.</h2>
            <p>The expertise map below is reproduced from the BIID Foundation UK brief, with its key areas also provided as accessible web content.</p>
        </div>
        <div class="expertise-visual"><img src="assets/core-expertise.png" alt="BIID Foundation UK core expertise and sector focus areas"></div>

        <div class="expertise-grid">
            <article class="expert-card"><i class="ti ti-bulb"></i><h3>1. Innovation</h3><ul><li>Social innovation for sustainable impact</li><li>Digital &amp; technology enabled solutions</li><li>AI, data &amp; emerging technologies</li><li>Pilot, test &amp; scale innovative models</li></ul></article>
            <article class="expert-card"><i class="ti ti-handshake"></i><h3>2. Private Sector Led Development</h3><ul><li>Mobilising private sector for inclusive growth</li><li>Market systems development</li><li>PPP, value chain &amp; cluster development</li><li>Private investment &amp; CSR partnerships</li></ul></article>
            <article class="expert-card"><i class="ti ti-chart-bar"></i><h3>3. Research &amp; Evidence</h3><ul><li>Applied research &amp; action research</li><li>Data analytics &amp; impact analysis</li><li>Policy research &amp; advisory</li><li>Knowledge products &amp; knowledge sharing</li></ul></article>
            <article class="expert-card"><i class="ti ti-device-desktop"></i><h3>4. ICT4D</h3><ul><li>Digital transformation for development</li><li>Mobile &amp; web platforms</li><li>Digital inclusion &amp; financial inclusion</li><li>e-Learning &amp; digital capacity development</li><li>AI &amp; data-driven solutions</li></ul></article>
            <article class="expert-card"><i class="ti ti-trending-up"></i><h3>5. Business Model Development</h3><ul><li>Inclusive &amp; scalable business models</li><li>Social enterprise development</li><li>Financial sustainability strategies</li><li>Market linkage &amp; commercialisation</li></ul></article>
        </div>

        <div class="sector-grid">
            <article class="sector-card"><h3><i class="ti ti-leaf"></i>Agriculture</h3><ul><li>Climate-smart agriculture</li><li>Digital agriculture (e-Krishok)</li><li>Farmer services &amp; advisory</li><li>Sustainable value chains</li><li>Post-harvest &amp; market linkages</li></ul><div class="sector-outcome">Productive Farms · Resilient Farmers · Sustainable Food Systems</div></article>
            <article class="sector-card"><h3><i class="ti ti-apple"></i>Nutrition</h3><ul><li>Nutrition education &amp; advocacy</li><li>Nutrition Club &amp; youth engagement</li><li>Nutritious &amp; safe food systems</li><li>Behaviour change communication</li><li>International Nutrition Olympiad (INO)</li></ul><div class="sector-outcome">Better Nutrition · Healthier Communities · Stronger Future</div></article>
            <article class="sector-card"><h3><i class="ti ti-building-bank"></i>Inclusive Financing</h3><ul><li>Sustainable Agricultural Finance (SAF)</li><li>MSME &amp; agri finance solutions</li><li>Financial inclusion</li><li>Blended finance &amp; de-risking</li><li>Investment facilitation</li></ul><div class="sector-outcome">Access to Finance · Inclusive Growth · Shared Prosperity</div></article>
            <article class="sector-card"><h3><i class="ti ti-users-group"></i>Entrepreneurship Development</h3><ul><li>Youth &amp; women entrepreneurship</li><li>Skills development &amp; capacity building</li><li>Business incubation &amp; acceleration</li><li>Market access &amp; mentoring</li><li>Job creation &amp; livelihoods</li></ul><div class="sector-outcome">Empowered Entrepreneurs · Decent Jobs · Thriving Economies</div></article>
        </div>

        <div class="principles">
            <div class="principle"><strong>Our Purpose</strong><span>To advance inclusive, sustainable and technology-enabled solutions that transform lives and livelihoods.</span></div>
            <div class="principle"><strong>Our Approach</strong><span>Innovative · Inclusive · Collaborative · Evidence-based · Sustainable · Scalable</span></div>
            <div class="principle"><strong>Our Commitment</strong><span>Impact driven solutions · Ethical partnerships · Long-term transformation</span></div>
            <div class="principle"><strong>UK – Bangladesh – Global</strong><span>Building bridges, creating impact and shaping a better future together.</span></div>
        </div>
    </div>
</section>

<section id="impact">
    <div class="container poor-grid">
        <div class="poor-title">
            <div class="big-icon"><i class="ti ti-heart-handshake"></i></div>
            <div class="section-kicker">Inclusive Development</div>
            <h2>Making BIID Foundation works for Poor</h2>
            <p>Leveraging the UK presence for investment, partnerships, adaptation and global expansion.</p>
        </div>
        <div class="benefit-list">
            <div class="benefit"><div class="n">01</div><p>Build bridge between Bangladeshi diaspora in UK for social investments.</p></div>
            <div class="benefit"><div class="n">02</div><p>Will leverage on several unique advantages towards global expansion of Nutrition Club (NC) and International Nutrition Olympiad (INO).</p></div>
            <div class="benefit"><div class="n">03</div><p>Direct access to networks and global partners in target regions (Africa &amp; Asia-Pacific), facilitating the spread of BIID's community-based nutrition education model.</p></div>
            <div class="benefit"><div class="n">04</div><p>Opportunity to adapt and prove the BIID model's effectiveness across varied socio-economic and cultural landscapes, strengthening its global relevance.</p></div>
        </div>
    </div>
</section>

<section id="services" class="section-alt">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">What We Offer</div>
            <h2>5 Priority Services of BIID Foundation UK</h2>
            <p>A focused portfolio linking development partnerships, finance, proven BIID models, digital innovation and evidence-based capacity development.</p>
        </div>
        <div class="service-list">
            <article class="service-card">
                <div class="service-side"><div class="service-no">01</div><h3>UK–Bangladesh Development Partnership &amp; Consultancy</h3><div class="service-sub">Connecting UK institutions with development opportunities in Bangladesh</div></div>
                <div class="service-points">
                    <div class="service-point"><i class="ti ti-check"></i><span>Development project design and technical assistance</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>UK–Bangladesh institutional partnerships</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Research and feasibility studies</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Programme/project management support</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Advisory services for NGOs, universities, foundations and private-sector organisations</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Identification of local implementing partners</span></div>
                </div>
            </article>
            <article class="service-card">
                <div class="service-side"><div class="service-no">02</div><h3>Resource Mobilisation &amp; Impact Investment</h3><div class="service-sub">Connecting development finance with scalable solutions</div></div>
                <div class="service-points">
                    <div class="service-point"><i class="ti ti-check"></i><span>Grant and funding opportunity identification</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Proposal and concept-note development</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>CSR and philanthropic fundraising</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Impact investment facilitation</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Blended-finance and risk-sharing models</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Connecting UK donors/investors with Bangladesh-based initiatives</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Fundraising for Nutrition Club, Nutri Mart, e-Krishok, SAF and youth entrepreneurship</span></div>
                </div>
            </article>
            <article class="service-card">
                <div class="service-side"><div class="service-no">03</div><h3>Sustainable Agriculture, Food &amp; Nutrition Solutions</h3><div class="service-sub">Taking proven BIID models to development partners and markets</div></div>
                <div class="service-points">
                    <div class="service-point"><i class="ti ti-check"></i><span>Nutrition Club – youth nutrition and leadership</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>International Nutrition Olympiad (INO)</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>e-Krishok, a digital agriculture and services for farmer &amp; MSMEs</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Sustainable Agricultural Finance (SAF)</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Nutri Mart, a marketplace for MSME on nutritious &amp; safe food</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Safe and nutritious food systems</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Climate-smart agriculture</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Nutrition-sensitive value chains</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>MSME development in food and agriculture</span></div>
                </div>
            </article>
            <article class="service-card">
                <div class="service-side"><div class="service-no">04</div><h3>Digital Innovation &amp; ICT4D Services</h3><div class="service-sub">Designing technology-enabled solutions for development</div></div>
                <div class="service-points">
                    <div class="service-point"><i class="ti ti-check"></i><span>Digital transformation advisory</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>ICT4D solution design</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Mobile/web platform development</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>AI-enabled development solutions</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Digital farmer and MSME profiling</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Digital learning and e-learning</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Digital financial inclusion</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Data and knowledge platforms</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Technology pilots and scale-up support</span></div>
                </div>
            </article>
            <article class="service-card">
                <div class="service-side"><div class="service-no">05</div><h3>Knowledge, Training, Research &amp; Impact Services</h3><div class="service-sub">Building capacity and generating evidence for development</div></div>
                <div class="service-points">
                    <div class="service-point"><i class="ti ti-check"></i><span>Training and capacity development</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Digital literacy and entrepreneurship programmes</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Nutrition education</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Food safety training</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Youth leadership programmes</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Research and action research</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Monitoring, Evaluation &amp; Learning (MEL)</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Impact assessment</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Knowledge products, manuals and e-learning content</span></div>
                    <div class="service-point"><i class="ti ti-check"></i><span>Policy briefs and knowledge dissemination</span></div>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="bridge">
    <div class="container bridge-grid">
        <div>
            <div class="section-kicker" style="color:var(--gs);">Bangladesh · UK · Beyond</div>
            <h2>A bridge for resources, expertise, markets and internationalisation</h2>
            <p>BIID Foundation UK supports fundraising, partnerships and technical connections while the Bangladesh operation remains the main implementation and grassroots innovation hub.</p>
            <p>The UK entity will promote the Nutrition Club and International Nutrition Olympiad origin story and success in Bangladesh to inspire other nations and highlight the potential of South-South cooperation.</p>
        </div>
        <div class="bridge-roles">
            <div class="bridge-role"><i class="ti ti-cash-banknote"></i><strong>Fundraising</strong></div>
            <div class="bridge-role"><i class="ti ti-users"></i><strong>Partnerships</strong></div>
            <div class="bridge-role"><i class="ti ti-tool"></i><strong>Technical Platform</strong></div>
            <div class="bridge-role"><i class="ti ti-world-share"></i><strong>Internationalisation</strong></div>
        </div>
    </div>
</section>

<section id="team">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">Leadership</div>
            <h2>BIID Foundation UK Team</h2>
        </div>
        <div class="team-grid">
            <article class="team-card"><div class="team-photo"><img src="assets/dr-golam-kabir.jpeg" alt="Dr. Golam Kabir"></div><div class="team-info"><h3>Dr. Golam Kabir</h3><p>Chairman, BIID Foundation UK</p></div></article>
            <article class="team-card"><div class="team-photo"><img src="assets/md-shahid-uddin-akbar.jpg" alt="Md. Shahid Uddin Akbar"></div><div class="team-info"><h3>Md. Shahid Uddin Akbar</h3><p>Chief Executive Officer, BIID Foundation UK</p></div></article>
            <article class="team-card"><div class="team-photo"><img src="assets/kamal-sarker.jpeg" alt="Mr. Kamal Sarker"></div><div class="team-info"><h3>Mr. Kamal Sarker, FCCA</h3><p>Chief Financial Officer, BIID Foundation UK</p></div></article>
            <article class="team-card"><div class="team-photo"><img src="assets/dr-jannatul-mim.jpeg" alt="Dr. Jannatul Mim"></div><div class="team-info"><h3>Dr. Jannatul Mim</h3><p>Director, Program, BIID Foundation UK</p></div></article>
        </div>
    </div>
</section>

<section id="contact" class="section-alt">
    <div class="container">
        <div class="section-head">
            <div class="section-kicker">Get In Touch</div>
            <h2>Contact BIID Foundation UK</h2>
        </div>
        <div class="contact-wrap">
            <div class="contact-card">
                <h3>BIID Foundation UK Limited</h3>
                <div class="contact-item"><i class="ti ti-map-pin"></i><span>14 Atherton Road, London, E7 9AJ, United Kingdom</span></div>
                <div class="contact-item"><i class="ti ti-mail"></i><a href="mailto:info@biid.org.bd">info@biid.org.bd</a></div>
                <div class="contact-item"><i class="ti ti-world"></i><a href="https://www.biid.org.bd/UK/">www.biid.org.bd/UK</a></div>
            </div>
            <div class="contact-card cta-card">
                <h3>Connect Resources with Development Solutions</h3>
                <p>For partnership, consultancy, fundraising, technical collaboration, research, training or internationalisation opportunities, connect with BIID Foundation UK.</p>
                <div class="cta-row">
                    <a class="btn cta-green" href="mailto:info@biid.org.bd"><i class="ti ti-mail-forward"></i> Email Us</a>
                    <a class="btn cta-outline" href="../"><i class="ti ti-arrow-left"></i> Main BIID Website</a>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

<footer>
    <div class="container">
        <div class="footer-inner">
            <div><h4>BIID Foundation UK</h4><p>Connecting UK Resources, Expertise &amp; Markets with Innovative Development Solutions in Bangladesh and Beyond.</p></div>
            <div><h4>Quick Links</h4><a href="#expertise">Core Expertise</a><a href="#services">Priority Services</a><a href="#team">Team</a><a href="#contact">Contact</a></div>
            <div><h4>BIID Foundation</h4><a href="../">Main Website</a><a href="../b-lab/">BIID Innovation Lab (B-Lab)</a><a href="https://www.nutritionclub-bd.net/">Nutrition Club</a><a href="https://nutritionolympiad.net/">International Nutrition Olympiad</a></div>
        </div>
        <div class="copyright">&copy; <?php echo date('Y'); ?> BIID Foundation UK. All rights reserved.</div>
    </div>
</footer>
<script>
document.querySelectorAll('#navLinks a').forEach(function(a){ a.addEventListener('click',function(){document.getElementById('navLinks').classList.remove('open');}); });
</script>
</body>
</html>