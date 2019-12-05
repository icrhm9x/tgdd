$(function() {
    // Handler for .ready() called.
    $('.js-navHamburger').click(function(){
        $('.js-nav').toggleClass('Nav--active');
        if($('.js-nav').hasClass('Nav--active')){
            $('body').addClass('Noscroll');
        }else{
            $('body').removeClass('Noscroll');
        }
    });

    var carousel = $('.js-carousel');
    var carouselCtx = $('.js-carouselCtx');
    $(window).on('load resize', function(){
        var mWidth = carousel.width();
        var mHeight = mWidth*0.375;
        carouselCtx.height(mHeight);
    });

    var carouselList = $('.js-carouselList');
    $('.js-carouselNavItem').click(function(){
        var index = $(this).attr('data-index');
        var carouselItem = $('#carousel'+index);
        carouselList.animate({
            'left' : 0-carouselItem.position().left
        }, 200);
    });
    $(window).on('resize', function(){
        var left = 0-$('#carousel3').position().left;
        carouselList.css('left',left);
    });
  });