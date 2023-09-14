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
        dots: true,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1
                }
            },

        ]
    });
});
