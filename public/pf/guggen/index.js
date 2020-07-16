$(function(){
    $('.my-slider-1 > .owl-carousel').owlCarousel({
        items:1
      });    
});

$(function(){
  function MySlider2__init() {
    $('.my-slider-2 > .owl-carousel').owlCarousel({
      responsive:{
        0:{
          items:4
        }
      },
      loop:true,
      dots:false,
      nav:true,
      navText: ['좌', '우']
    });
  }
  MySlider2__init();
});
