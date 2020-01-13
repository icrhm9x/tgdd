$(function() {
    // ************************* Btn back to top  *************************
    var backtotopBtn = $('.js-backtotopBtn');
    var isBacktotopScrolling = false;
    $(window).scroll(function(){
        if($(this).scrollTop() > 300){
            backtotopBtn.fadeIn();
        }else{
            backtotopBtn.fadeOut();
        }
    });

    backtotopBtn.click(function(){
        if(isBacktotopScrolling){
            return;
        }
        isBacktotopScrolling = true;
        $('html, body').animate({scrollTop : 0}, 500, function(){
            isBacktotopScrolling = false;
        });
    });

});