function MobileSideBar__toggle() {
    var $btn = $('.btn-toggle-mobile-side-bar');
    var $mobileSideBar = $('.mobile-side-bar');
    var $mobileSideBarBg = $('.mobile-side-bar-bg');
    var $html = $('html');

    if ( $btn.hasClass('active') ) {
        $btn.removeClass('active');
        $mobileSideBar.removeClass('active');
        $mobileSideBarBg.removeClass('active');
        $html.removeClass('mobile-side-bar-actived');
    }
    else {
        $btn.addClass('active');
        $mobileSideBar.addClass('active');
        $mobileSideBarBg.addClass('active');
        $html.addClass('mobile-side-bar-actived');
    }
}

function MobileSideBar__init() {
    $('.btn-toggle-mobile-side-bar, .mobile-side-bar-bg').click(MobileSideBar__toggle);

    $('.mobile-side-bar .mobile-side-box ul > li').click(function(e) {
        if ( $(this).hasClass('active') ) {
            $(this).removeClass('active');
        }
        else {
            $(this).addClass('active');
        }

        e.stopPropagation();
    });
}

$(function() {
    MobileSideBar__init();

    $('.btn-toggle-mobile-side-bar').click();
    $('.mobile-side-bar .menu-box-1 > ul > li:last-child').click();

});

$(function() {

$('.sbs-slider > .side-bars > div').click(function() {

    var $clickedBtn = $(this);
    var $slider = $clickedBtn.closest('.sbs-slider');
    
    var isLeft = $clickedBtn.index() == 0;
    var $currnet = $slider.find('.slides > .active');
    var $post = null;
    
    if ( isLeft ) {
        $post = $currnet.prev();
    }
    else {
        $post = $currnet.next();
    }
    
    if ( $post.length == 0 ) {
        if ( isLeft ) {
            $post = $slider.find('.slides > div:last-child');
        }
        else {
            $post = $slider.find('.slides > div:first-child');
        }
    }
    
    $currnet.removeClass('active');
    $post.addClass('active');
});

});

// 스크롤 이동
<script>

jQuery(document).ready(function($) {

$(".scroll").click(function(event){            

event.preventDefault();

$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);

})

});

</script>
