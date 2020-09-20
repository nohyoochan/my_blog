$(document).ready(function(){

    $('.btn>li').on('click', function(){
    
        $('.btn>li').removeClass('on');
    
    
        $(this).addClass('on');
    
        var i =$(this).index();
    
        $('.box>div').removeClass('on');
        $('.box>div').eq(i).addClass('on');
        
    })
});
