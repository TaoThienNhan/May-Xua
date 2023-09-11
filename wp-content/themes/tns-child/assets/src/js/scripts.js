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
