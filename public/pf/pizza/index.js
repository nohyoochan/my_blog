$(function () {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      }) 
});

$(function () {
  $('.js-tp-slider-filter').slick({
    infinite: false,
    speed: 300,
    slidesToShow: 3.5,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
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
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  
  $('.js-tp-voucher-filter').on('change', function(){
    var val = $(this).val();
  
    if (val === '__') {
  console.log(val);
      $('.js-tp-slider-filter').slick('slickUnfilter');
    } else {
      $('.js-tp-slider-filter').slick('slickFilter',function( index ) {
        var indexval = $(this).data('filter').indexOf(val)
          , filter = (indexval >= 0) ? 1 : 0;
  console.log(index, val, indexval, filter);
        return filter;
      });
    }
  })
});

