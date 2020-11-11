


// Initialize slider
$(document).on('ready', function () {
  $(".autoplay").slick({
    arrows: false,
    centerMode: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1600,

    responsive: [
      {
        breakpoint: 1024,
        settings: {

          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {

          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });
});
