document.addEventListener('DOMContentLoaded', function () {

    /* ============================================================
       NEWS TICKER
       ============================================================ */
    var items = document.querySelectorAll('.news-item');
    var current = 0;

    if (items.length > 0) {
        items.forEach(function (item) {
            item.classList.remove('active');
        });

        items[0].classList.add('active');

        setInterval(function () {
            items[current].classList.remove('active');
            current = (current + 1) % items.length;
            items[current].classList.add('active');
        }, 4000);
    }

    /* ============================================================
       MOBILE NAV TOGGLE
       ============================================================ */
    var navToggle = document.getElementById('navToggle');
    var navLinks = document.getElementById('navLinks');

    if (navToggle && navLinks) {
        navToggle.addEventListener('click', function () {
            navLinks.classList.toggle('open');
        });
    }

    /* ============================================================
       HIDE BREAKING NEWS BAR ON SCROLL DOWN
       ============================================================ */
    var bar = document.getElementById('breaking-news-bar');
    var last = 0;

    if (bar) {
        window.addEventListener('scroll', function () {
            var currentScroll = window.pageYOffset;

            bar.style.transform = (currentScroll > last && currentScroll > 80)
                ? 'translateY(-100%)'
                : 'translateY(0)';

            last = currentScroll;
        });
    }

    /* ============================================================
       PROJECT POPUP CARD (Our Work page)
       ============================================================ */
    var projectPopupData = {
        'nutrition-club': {
            title: 'Nutrition Club',
            desc: 'Community and youth-led nutrition awareness network across Bangladesh.',
            url: 'https://www.nutritionclub-bd.net/'
        },
        'e-pushti': {
            title: 'e-Pushti',
            desc: 'e-Pushti is an ICT-based online learning platform by BIID Foundation for nutrition and healthy lifestyle awareness among adolescents and youth. It includes online courses, library resources, webinars, vlogs, and Nutrition Club information.',
            url: 'https://e-pushti.net/'
        },
        'ino': {
            title: 'INO',
            desc: 'International Nutrition Olympiad — global youth platform since 2017.',
            url: 'https://nutritionolympiad.net/'
        },
        'blab': {
            title: 'BIID Innovation Lab (B-Lab)',
            desc: 'BIID Innovation Lab (B-Lab) supports rural youth entrepreneurs, especially in agriculture, by connecting innovation, entrepreneurship support, training, and access to business development opportunities.',
            url: 'b-lab/'
        },
        'ekrishok': {
            title: 'e-Krishok',
            desc: 'Agricultural information and market linkage via ICT centers.',
            url: 'https://ekrishok.com/'
        },
        'ingenaes': {
            title: 'INGENAES / eXtension',
            desc: 'INGENAES focused on integrating gender and nutrition within agricultural extension services. The old website linked this project to the eXtension platform.',
            url: 'http://www.extension.org.bd/'
        },
        'farmbook': {
            title: 'Farmbook',
            desc: 'Farmbook supports smallholder farmers and entrepreneurs with business planning, profitability calculation, and digital farm management tools. The old website linked this project to the e-Krishok Farmbook page.',
            url: 'http://wp.ekrishok.com/?page_id=288'
        },
        'ground-cover': {
            title: 'Ground Cover App',
            desc: 'Ground Cover App was developed for smartphone-based irrigation scheduling using image processing and GIS. The old website linked related research documents for this project.',
            url: 'https://www.biid.org.bd/download/thesis_zurita_milla.pdf'
        },
        'sme-online': {
            title: 'SME Online Advisory',
            desc: 'SME Online Advisory is an ICT-based platform supporting rural MSMEs with business information, advisory support, market linkage, finance access, and enterprise development resources.',
            url: 'http://sme.com.bd/'
        },
        'bicg': {
            title: 'BICG',
            desc: 'Bangladesh ICT Consulting Group (BICG) is a research-based ICT policy advocacy and advisory platform. The old code did not contain a separate website URL for BICG, only contact information.',
            url: ''
        },
        'girls-cafe': {
            title: 'Girls Café',
            desc: 'Girls Café is a women-owned food franchise initiative for safe, nutritious food and women entrepreneurship. The old code did not contain a separate website URL for Girls Café, only contact information.',
            url: ''
        },
        'nca': {
            title: 'Nutrition Club Academy',
            desc: 'Nutrition Club Academy supports experiential learning for youth health champions through virtual and in-person activities. The old code did not contain a separate website URL for NCA.',
            url: ''
        }
    };

    var popup = document.getElementById('projectPopup');
    var popupTitle = document.getElementById('projectPopupTitle');
    var popupDesc = document.getElementById('projectPopupDesc');
    var popupBtn = document.getElementById('projectPopupBtn');
    var popupClose = document.getElementById('projectPopupClose');

    if (popup && popupTitle && popupDesc && popupBtn && popupClose) {
        Object.keys(projectPopupData).forEach(function (id) {
            var card = document.getElementById(id);

            if (card) {
                card.addEventListener('click', function () {
                    var data = projectPopupData[id];

                    popupTitle.textContent = data.title;
                    popupDesc.textContent = data.desc;

                    if (data.url) {
                        popupBtn.href = data.url;
                        popupBtn.classList.remove('disabled');
                    } else {
                        popupBtn.href = 'javascript:void(0)';
                        popupBtn.classList.add('disabled');
                    }

                    popup.classList.add('active');
                });
            }
        });

        popupClose.addEventListener('click', function () {
            popup.classList.remove('active');
        });

        popup.addEventListener('click', function (e) {
            if (e.target === popup) {
                popup.classList.remove('active');
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                popup.classList.remove('active');
            }
        });
    }
});
