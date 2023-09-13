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
});
