$(function (){
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3.5,
        spaceBetween: 1,
        freeMode: true,
        scrollbar: {
            el: '.swiper-scrollbar',
            draggable: true,
          },
    });
});

$(function TabBox__init(){
    $('[data-tab-head-item-name]').click(function() {
        var $this = $(this);
        var tabName = $this.attr('data-tab-name');
        var itemName = $this.attr('data-tab-head-item-name');
        // [for]
        // 모든 것을 숨기고
        $('[data-tab-name="' + tabName + '"]').removeClass('active');
        
        $('[data-tab-name="' + tabName + '"][data-tab-head-item-name="' + itemName + '"]').addClass('active');
        $('[data-tab-name="' + tabName + '"][data-tab-body-item-name="' + itemName + '"]').addClass('active');
      });
});
TabBox__init();

let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: {
      lat: 36.35111,
      lng: 127.38500
    },
    zoom: 8
  });
}