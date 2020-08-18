$(function (){
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
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

$(function initMap(){
    var uluru = {lat: -25.363, lng: 131.044};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  });
$(function initMap(){
    var uluru = {lat: -25.344, lng: 131.036};
  
    // The map, centered at Uluru
  
    var map = new google.maps.Map(
  
        document.getElementById('map'), {zoom: 4, center: uluru});
  
    // The marker, positioned at Uluru
  
    var marker = new google.maps.Marker({position: uluru, map: map});
});
