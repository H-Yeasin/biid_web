<!-- ============================================================
     PROJECTS
     ============================================================ -->
<section id="projects">
    <div class="section-wrapper">
        <p class="eyebrow">Our Work</p>
        <h2 class="section-title">Projects &amp; Programmes</h2>
        <p class="section-sub">Explore BIID Foundation's active portfolio — ICT-powered agriculture, nutrition, women empowerment, and SME development.</p>

        <div class="tab-row">
            <button class="tab-btn active" onclick="switchTab('projects',this)">Projects</button>
            <button class="tab-btn" onclick="switchTab('programmes',this)">Programmes</button>
        </div>

        <div class="tab-content active" id="tab-projects">
            <div class="card-grid">
                <div class="proj-card" id="pledge"><div class="card-icon"><i class="ti ti-leaf"></i></div><div class="card-title">Pledge for Her</div><div class="card-desc">Menstrual health and hygiene empowerment for adolescent girls via Nutrition Club network.</div><span class="card-tag tag-p">Project</span></div>
                <div class="proj-card" id="nirvoya"><div class="card-icon"><i class="ti ti-shield-check"></i></div><div class="card-title">Nirvoya</div><div class="card-desc">Cyber bullying awareness and safe digital spaces for women and girls.</div><span class="card-tag tag-p">Project</span></div>
                <div class="proj-card" id="zero-cost-eas"><div class="card-icon"><i class="ti ti-tractor"></i></div><div class="card-title">Zero Cost EAS Model</div><div class="card-desc">Free ICT-enabled agricultural extension and advisory services for rural farmers.</div><span class="card-tag tag-p">Project</span></div>
                <div class="proj-card" id="wifi"><div class="card-icon"><i class="ti ti-device-mobile"></i></div><div class="card-title">WIFI Training Program</div><div class="card-desc">Digital capacity building for women-led micro and small enterprises.</div><span class="card-tag tag-p">Project</span></div>
                <div class="proj-card" id="ingenaes"><div class="card-icon"><i class="ti ti-book"></i></div><div class="card-title">INGENAES</div><div class="card-desc">Integrating gender and nutrition within agricultural extension services.</div><span class="card-tag tag-p">Project</span></div>
                <div class="proj-card" id="farmbook"><div class="card-icon"><i class="ti ti-chart-line"></i></div><div class="card-title">Farmbook</div><div class="card-desc">Business planning and profitability tools for smallholder farmers.</div><span class="card-tag tag-p">Project</span></div>
                <div class="proj-card" id="ground-cover"><div class="card-icon"><i class="ti ti-map-pin"></i></div><div class="card-title">Ground Cover App</div><div class="card-desc">Smartphone-based irrigation scheduling using image processing and GIS.</div><span class="card-tag tag-p">Project</span></div>
                <div class="proj-card" id="peer-sme"><div class="card-icon"><i class="ti ti-users"></i></div><div class="card-title">Peer-to-Peer SME</div><div class="card-desc">Peer business networks among SMEs in southern Bangladesh delta.</div><span class="card-tag tag-p">Project</span></div>
                <div class="proj-card" id="sme-online"><div class="card-icon"><i class="ti ti-world"></i></div><div class="card-title">SME Online Advisory</div><div class="card-desc">ICT-based advisory platform enabling rural MSMEs to access markets.</div><span class="card-tag tag-p">Project</span></div>
                <div class="proj-card" id="intel-easy-steps"><div class="card-icon"><i class="ti ti-device-laptop"></i></div><div class="card-title">Intel Easy Steps</div><div class="card-desc">Digital literacy program for adults, women, and rural communities.</div><span class="card-tag tag-p">Project</span></div>
            </div>
        </div>

        <div class="tab-content" id="tab-programmes">
            <div class="card-grid">
                <div class="proj-card" id="nutrition-club"><div class="card-icon"><i class="ti ti-apple"></i></div><div class="card-title">Nutrition Club</div><div class="card-desc">Community and youth-led nutrition awareness network across Bangladesh.</div><span class="card-tag tag-g">Programme</span></div>
                <div class="proj-card" id="e-pushti"><div class="card-icon"><i class="ti ti-device-mobile"></i></div><div class="card-title">e-Pushti</div><div class="card-desc">Online learning platform for nutrition, healthy lifestyle, courses, webinars, vlogs, and learning resources.</div><span class="card-tag tag-g">Programme</span></div>
                <div class="proj-card" id="ino"><div class="card-icon"><i class="ti ti-trophy"></i></div><div class="card-title">INO</div><div class="card-desc">International Nutrition Olympiad — global youth platform since 2017.</div><span class="card-tag tag-g">Programme</span></div>
                <div class="proj-card" id="blab"><div class="card-icon"><i class="ti ti-bulb"></i></div><div class="card-title">BIID Innovation Lab (B-Lab)</div><div class="card-desc">Empowering rural youth entrepreneurs especially in agriculture.</div><span class="card-tag tag-g">Programme</span></div>
                <div class="proj-card" id="ekrishok"><div class="card-icon"><i class="ti ti-plant"></i></div><div class="card-title">e-Krishok</div><div class="card-desc">Agricultural information and market linkage via ICT centers.</div><span class="card-tag tag-g">Programme</span></div>
                <div class="proj-card" id="bicg"><div class="card-icon"><i class="ti ti-building-community"></i></div><div class="card-title">BICG</div><div class="card-desc">Bangladesh ICT Consulting Group — research-based ICT policy advocacy.</div><span class="card-tag tag-g">Programme</span></div>
                <div class="proj-card" id="girls-cafe"><div class="card-icon"><i class="ti ti-coffee"></i></div><div class="card-title">Girls Café</div><div class="card-desc">Women-owned food franchise network for safe, nutritious food.</div><span class="card-tag tag-g">Programme</span></div>
                <div class="proj-card" id="nca"><div class="card-icon"><i class="ti ti-school"></i></div><div class="card-title">Nutrition Club Academy</div><div class="card-desc">Experiential learning for youth health champions, virtual and in-person.</div><span class="card-tag tag-g">Programme</span></div>
            </div>
        </div>
    </div>
</section>
<!-- Project Popup Card -->
<div class="project-popup-overlay" id="projectPopup">
    <div class="project-popup-card">
        <button class="project-popup-close" id="projectPopupClose" aria-label="Close">&times;</button>

        <div>
            <h3 class="project-popup-title" id="projectPopupTitle"></h3>
            <p class="project-popup-desc" id="projectPopupDesc"></p>
        </div>

        <div class="project-popup-action">
            <a href="#" target="_blank" class="project-popup-btn" id="projectPopupBtn">Visit Site</a>
        </div>
    </div>
</div>


<hr class="divider">
