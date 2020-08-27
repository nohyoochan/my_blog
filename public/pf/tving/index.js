
function SideBar__init() {
    $('.side-bar ul > li').mouseenter(function() {
      // 선택된 li
      var $li = $(this);
      
      // 선택된 li의 부모
      var $ul = $li.parent();
  
      // 선택된 녀석에게 selected 부여, 이것과 상관없이 모든 형제들의 자식은 ul은 활성화된다. 다만 z-index에 의해서 이 녀석의 자식만 보인다.
      $li.addClass('selected');
      
      // 선택된 녀석들의 후손들 중에서, 기존에 활성화 된것들 정리
      $li.find('.hover, .selected').removeClass('hover').removeClass('selected');
      // 형제들의 후손들 중에서, 기존에 활성화 된것들 정리
      $li.siblings('.selected').find('.hover, .selected').removeClass('hover').removeClass('selected');
      // 형제들 중에서, 기존에 활성화 된것들 정리
      $li.siblings('.selected').removeClass('selected');
  
      // 내가 선택한 녀석이 자식인 ul이 있다면
      // 나를 포함한 모든 형제가 자식인 ul을 활성화 하도록, 부모에게 hover 클래스 삽입
      if ( $li.find(' > ul').length > 0 ) {
        $ul.addClass('hover');
      }
      else {
        $ul.removeClass('hover');
      }
  
      return false;
    });
  }
  
  function SideBar__show() {
    $('html').addClass('side-bar-actived');
  }
  
  function SideBar__hide() {
    $('.side-bar .hover').removeClass('hover');
    $('.side-bar .selected').removeClass('selected');
    $('html').removeClass('side-bar-actived');
  }
  
  $(function() {
    SideBar__init();
  })