$(document).ready(function(){
    $('.slick').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        autoplay: true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ],
        autoplaySpeed: 2000,
        prevArrow:
        `<button type='button' class='slick-prev pull-left'><i class="fa-solid fa-chevron-left"></i></button>`,
        nextArrow:
        `<button type='button' class='slick-next pull-right'><i class="fa-solid fa-chevron-right"></i></button>`,
    });
  });
  
  
