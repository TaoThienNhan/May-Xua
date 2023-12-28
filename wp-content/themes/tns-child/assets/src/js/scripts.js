jQuery(document).ready(function($) {
    var menu = new Mmenu("#mmenu", {
        "extensions": [
            "theme-dark",
            "effect-slide"
        ],
        "navbar": {
            "title": "Menu"
        },
        "navbars": [
            {
                "position": "top",
            }
        ]
    });

    var mmenuAPI = menu.API;
    $("#mmenu-btn").click(function() {
        mmenuAPI.open();
    });
});

jQuery(document).ready(function($) {
    $('.img-gallery a').on('click', function(e) {
        e.preventDefault();
        var image_url = $(this).attr('href');
        $('.main-image img').attr('src', image_url).removeAttr('srcset');
    });
});

jQuery(function ($) {
    $('.service-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1
                }
            },

        ]
    });

    $('.product-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        prevArrow:
            `<button type='button' class='slick-prev pull-left slick-arrow'><i class="fa-solid fa-angle-left"></i></button>`,
        nextArrow:
            `<button type='button' class='slick-next pull-right slick-arrow'><i class="fa-solid fa-angle-right"></i></button>`,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1
                }
            },

        ]
    });

    $('.service-details__slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow:
            `<button type='button' class='slick-prev pull-left slick-arrow'><i class="fa-solid fa-angle-left"></i></button>`,
        nextArrow:
            `<button type='button' class='slick-next pull-right slick-arrow'><i class="fa-solid fa-angle-right"></i></button>`,
        responsive: [
            {
                breakpoint: 1366,
                settings: {
                    arrows: false,
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                }
            },

        ]
    });

    $('.new-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow:
            `<button type='button' class='slick-prev pull-left slick-arrow'><i class="fa-solid fa-angle-left"></i></button>`,
        nextArrow:
            `<button type='button' class='slick-next pull-right slick-arrow'><i class="fa-solid fa-angle-right"></i></button>`,
        responsive: [
            {
                breakpoint: 1366,
                settings: {
                    arrows: false,
                    dots: true,
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                }
            },

        ]
    });
// Slide thumbnail
    $('.slide-thumbnail').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1366,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 599,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
});

jQuery(document).ready(function($) {
    $('.img-gallery a').on('click', function(e) {
        e.preventDefault();
        var image_url = $(this).attr('href');
        $('.main-image img').attr('src', image_url).removeAttr('srcset');
    });
});
