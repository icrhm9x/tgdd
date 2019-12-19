$(function() {
    // Handler for .ready() called.

    // sub menu
    $('.js-navHamburger').click(function(){
        $('.js-nav').toggleClass('Nav--active');
        if($('.js-nav').hasClass('Nav--active')){
            $('body').addClass('Noscroll');
        }else{
            $('body').removeClass('Noscroll');
        }
    });

    // ************************* Carousel *************************

    var carousel = $('.js-carousel');
    var carouselCtx = $('.js-carouselCtx');
    var carouselList = $('.js-carouselList');
    var itemLength = $('.js-carouselList .Carousel-content-item').length;
    var currentItem = 1;
    var currentX = 0;
    var isScrolling = false;
    var isNeedToBack = false;


    // calculate height carousel
    $(window).on('load resize', function(){
        var mWidth = carousel.width();
        var mHeight = mWidth*0.375;
        carouselCtx.height(mHeight);
    });

    // update left carousel when responsive
    $(window).on('resize', function(){
        var leftCarousel = 0-$('#carousel'+currentItem).position().left;
        carouselList.css('left',leftCarousel);
    });

    // default img
    $('.js-carouselList img').on('mousedown', function(e){
        e.preventDefault();
    });

    setUpCarousel();

    function scrollCarousel(index){
        if(isScrolling){
            return;
        }
        isScrolling = true;
        var carouselItem = $('#carousel'+index);
        if(carouselItem.length == 0){
            isScrolling = false;
            return;
        }
        if(carouselItem.hasClass('Cloned')){
            index = carouselItem.attr('data-index');
            var realItem = $('#carousel'+index);
            currentItem = index;
        }

        $('.Carousel-nav-item--active').removeClass('Carousel-nav-item--active');
        $('.js-carouselNavItem[data-index='+index+']').addClass('Carousel-nav-item--active');
        carouselList.animate({
            'left' : 0-carouselItem.position().left
        }, 400, function(){
            if(carouselItem.hasClass('Cloned')){
                carouselList.css('left', 0 - realItem.position().left);
            }
            isScrolling = false;
        });
    }

    function setUpCarousel(){
        var realFirstItem = carouselList.find('.Carousel-content-item').first();
        var firstItem = realFirstItem.clone();
        var firstItemIndex = itemLength + 1;
        firstItem.attr('id',"carousel"+firstItemIndex);
        firstItem.addClass('Cloned');

        var lastItem = carouselList.find('.Carousel-content-item').last().clone();
        var lastItemIndex = 0;
        lastItem.attr('id',"carousel"+lastItemIndex);
        lastItem.addClass('Cloned');

        carouselList.append(firstItem);
        carouselList.prepend(lastItem);
        carouselList.css('left', 0 - realFirstItem.position().left);
    }

    carouselList.on('mousedown', function(e){
        currentX = e.pageX;
        startX = currentX;
        window.addEventListener('mousemove', carouselGrabbing);
        window.addEventListener('mouseup', carouselStop);
    });

    function carouselGrabbing(e){
        isNeedToBack = true;
        var distanceX = e.pageX - currentX;
        currentX = e.pageX;
        carouselList.css({
            left : carouselList.position().left + distanceX
        });
        if(e.pageX - startX >= 50){
            currentItem--;
            scrollCarousel(currentItem);
            window.removeEventListener('mousemove', carouselGrabbing);
            window.removeEventListener('mouseup', carouselStop);
        }else if(startX - e.pageX >= 50){
            currentItem++;
            scrollCarousel(currentItem);
            window.removeEventListener('mousemove', carouselGrabbing);
            window.removeEventListener('mouseup', carouselStop);
        }
    }
    function carouselStop(e){
        window.removeEventListener('mousemove', carouselGrabbing);
        window.removeEventListener('mouseup', carouselStop);
        if(isNeedToBack){
            var carouselItem = $('#carousel'+currentItem);
            carouselList.animate({
                'left' : 0-carouselItem.position().left
            }, 400, function(){
                isScrolling = false;
                isNeedToBack = false;
            });
        }
    }


    $('.js-carouselNavItem').click(function(){
        if($(this).hasClass('Carousel-nav-item--active')){
            return;
        }
        currentItem = $(this).attr('data-index');
        scrollCarousel(currentItem);
    });

    $('.js-carouselBtnPrev').click(function(){
        if(isScrolling){
            return;
        }
        currentItem--;
        scrollCarousel(currentItem);
    });
    $('.js-carouselBtnNext').click(function(){
        if(isScrolling){
            return;
        }
        currentItem++;
        scrollCarousel(currentItem);
    });


    // auto scroll
    setInterval(function(){
        if(!isNeedToBack){
            currentItem++;
            scrollCarousel(currentItem);
        }
    }, 5000);

    // ************************* Promotion *************************

    var Promo = {
        list : $('.js-promoList'),
        itemLength : $('.js-promoList .Promotion-content-item').length,
        currentItem : 1,
        isScrolling : false
    }

    $(window).on('load resize', function(){
        numberItemShow = Math.floor($('.js-promoList').width()/$('.Promotion-content-item').width());
    });

    // update left promo when responsive
    $(window).on('resize', function(){
        var leftPromo = 0-$('#promo'+Promo.currentItem).position().left;
        Promo.list.css('left',leftPromo);
    });

    function scrollPromo(index){
        if(Promo.isScrolling){
            return;
        }
        Promo.isScrolling = true;
        var promoItem = $('#promo'+index);
        Promo.list.animate({
            'left' : 0-promoItem.position().left
        }, 400, function(){
            Promo.isScrolling = false;
        });
    }

    $('.js-promoBtnPrev').click(function(){
        if(Promo.isScrolling){
            return;
        }
        Promo.currentItem-=numberItemShow;
        if(Promo.currentItem < 1){
            Promo.currentItem = (Math.ceil(Promo.itemLength/numberItemShow)-1)*numberItemShow + 1;
        }
        scrollPromo(Promo.currentItem);
    });
    $('.js-promoBtnNext').click(function(){
        if(Promo.isScrolling){
            return;
        }
        Promo.currentItem+=numberItemShow;
        if(Promo.currentItem > Promo.itemLength){
            Promo.currentItem = 1;
        }
        scrollPromo(Promo.currentItem);
    });

  });