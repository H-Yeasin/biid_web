<!-- ============================================================
     NEWS & PUBLICATIONS
     ============================================================ -->
<section id="news">
    <div class="section-wrapper section-wrapper-tight">
        <p class="eyebrow">Updates</p>
        <h1 class="section-title">News &amp; Publications</h1>
    </div>

    <!-- Hot News Banner -->
    <div class="hot-news-banner">
        <span class="hot-badge">&#9733; HOT NEWS</span>
        <h2>International Nutrition Olympiad (INO) 2026 Officially Launched</h2>
        <p>International Nutrition Olympiad (INO) 2026 was officially launched on 9 July 2026 at Amari Dhaka, Gulshan. Organised by BIID Foundation in collaboration with GAIN Bangladesh, the initiative aims to mobilise the private sector and empower youth to advance safe and nutritious food for all.</p>
        <img src="img/news/RAH05200.jpg" alt="International Nutrition Olympiad 2026 launching ceremony at Amari Dhaka">
    </div>

    <div class="section-wrapper">
        <div class="section-head">
            <p class="eyebrow">News Archive</p>
            <h2 class="section-title">All Recent News</h2>
        </div>

        <div class="news-full-grid">
            <div class="news-card-item">
                <strong>International Nutrition Olympiad (INO) 2026 Officially Launched</strong>
                <img src="img/news/RAH05200.jpg" alt="INO 2026 launching ceremony">
                <p>International Nutrition Olympiad (INO) 2026 was officially launched on 9 July 2026 at Amari Dhaka, Gulshan. Organised by BIID Foundation in collaboration with GAIN Bangladesh, the initiative brings together government, the private sector, academia, development partners, youth organisations, and civil society. The INO 2026 Grand Finale is scheduled for 10&ndash;11 December 2026 in Bangladesh.</p>
            </div>

            <div class="news-card-item">
                <strong>MoU Signing Between BIID Foundation and NAF Bangladesh</strong>
                <img src="img/news/Memo of Understanding.jpg" alt="MoU Signing">
                <p>On February 19, 2026, BIID Foundation and Nutritious Agrifuture Bangladesh Limited (NAF Bangladesh) signed a Memorandum of Understanding (MoU) to strengthen collaboration on youth engagement, nutrition education, and improving access to safe, affordable, and nutritious food across Bangladesh.</p>
            </div>

            <div class="news-card-item">
                <strong>BIID Conducts Community FGD in Kamta, Manikganj for Nutri-Mart Study</strong>
                <img src="img/news/Nutri_Mart_Study.jpeg" alt="Nutri-Mart Study">
                <p>On February 17, 2026, the BIID Foundation team visited Kamta, Manikganj to conduct a community Focus Group Discussion (FGD) through a courtyard meeting as part of the Nutri-Mart feasibility study.</p>
            </div>

            <div class="news-card-item">
                <strong>Adolescent Awareness Session at Dhankora Girish Institute, Manikganj</strong>
                <img src="img/news/Epushti_Nirvoya.jpeg" alt="Awareness Session">
                <p>On February 17, 2026, BIID Foundation visited Dhankora Girish Institute, Manikganj for an adolescent awareness session introducing Nirvoya and e-Pushti (with Robi Axiata Limited). Discussions covered nutrition, cyber bullying, menstrual hygiene, and adolescent well-being.</p>
            </div>
        </div>
    </div>

    <hr class="divider">

    <div class="section-wrapper">
        <div class="section-head">
            <p class="eyebrow">Reports</p>
            <h2 class="section-title">Publications</h2>
            <p class="section-sub">The ICT4D Community Newsletter is a publication initiative by BIID Foundation, supported by PROTIC &mdash; a participatory action research intervention by Oxfam and Monash University &mdash; sharing news, innovations, and ICT-for-development initiatives from grassroots communities.</p>
        </div>
        <div class="publications-list">
            <?php
            $publications = [
                ['title' => 'ICT4D Community Newsletter — Volume 1, Issue 1', 'file' => 'Newsletter_Volume 1, Issue 1_Print Version.pdf'],
                ['title' => 'ICT4D Community Newsletter — Volume 1, Issue 2', 'file' => 'Newsletter_Volume 1, Issue 2_Print Version.pdf'],
                ['title' => 'ICT4D Community Newsletter — Volume 1, Issue 3', 'file' => 'Newsletter_Volume 1, Issue 3_Print Version.pdf'],
                ['title' => 'ICT4D Community Newsletter — Volume 1, Issue 4', 'file' => 'Newsletter_Volume 1, Issue 4_Print Version.pdf'],
                ['title' => 'ICT4D Community Newsletter — Volume 2, Issue 1', 'file' => 'Newsletter_Volume 2, Issue 1_Print Version.pdf'],
            ];
            foreach ($publications as $pub):
            ?>
            <div class="pub-item">
                <i class="ti ti-file-text"></i>
                <div>
                    <strong><?php echo htmlspecialchars($pub['title']); ?></strong>
                    <span>BIID Foundation &amp; PROTIC (Oxfam / Monash University)</span>
                </div>
                <a href="assets/newsletters/<?php echo rawurlencode($pub['file']); ?>" class="btn btn-secondary btn-sm" target="_blank">Download PDF</a>
            </div>
            <?php endforeach; ?>
            <div class="pub-item">
                <i class="ti ti-file-text"></i>
                <div>
                    <strong>Nutrition Club Newsletter — Issue 01-2025</strong>
                    <span>Published April 1, 2025</span>
                </div>
                <a href="https://e-pushti.net/storage/newsletter/Newsletter-issue-01-2025.pdf" class="btn btn-secondary btn-sm" target="_blank">Download PDF</a>
            </div>
        </div>
    </div>
</section>
