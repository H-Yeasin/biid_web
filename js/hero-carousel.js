/* ============================================================
   HERO CAROUSEL - SAFE INITIALIZATION
   ============================================================ */
$(window).on('load', function () {
    var heroSlider = $("#s_slide");

    if (!heroSlider.length || typeof $.fn.owlCarousel === "undefined") {
        return;
    }

    if (heroSlider.data("owl.carousel") || heroSlider.data("owlCarousel")) {
        return;
    }

    heroSlider.owlCarousel({
        items: 1,
        singleItem: true,
        loop: true,

        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,

        autoPlay: 4000,
        stopOnHover: false,

        nav: false,
        dots: false,
        navigation: false,
        pagination: false,

        smartSpeed: 700,
        slideSpeed: 700,
        paginationSpeed: 700,
        rewindSpeed: 800
    });
});
