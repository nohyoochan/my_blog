$(function (){
    new fullpage('#fullpage', {
        verticalCentered: false,
        scrollBar:false,
        anchors: ['anchor1', 'anchor2', 'anchor3','anchor4'],
        menu: '#menu',
      })
});

/*
$(function (){
  $('.load .gnb-bar').mouseenter(function() {
    $(this).parent().addClass('active');
  });
  
  $('.load').mouseleave(function() {
    $(this).removeClass('active');
  })
});
*/


$(function (){
  $('.load .gnb-bar').mouseenter(function() {
    $('.header').addClass('active');
  });
  
  $('.load .gnb-bar').mouseleave(function() {
    $('.header').removeClass('active');
  });
});


  var SideMenuBar__hide = function() {
    $('.allMenuWrap').css('right', ''); 
  }
  
  var SideMenuBar__show = function() {
    $('.allMenuWrap').css('right', '0');
  }


  /*
  var myFullpage = new fullpage('#fullpage', {
    verticalCentered: true,
    anchors: ['anchor1', 'anchor2', 'anchor3'],
    menu: '#menu',
    sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE']
  });
  */