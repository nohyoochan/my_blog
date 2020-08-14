$(function (){
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        centeredSlides: true,
        spaceBetween: 30,
        grabCursor: true,
        pagination: {
        clickable: true,
        },
        scrollbar: {
            el: '.swiper-scrollbar',
            draggable: true,
          },
    })
});
