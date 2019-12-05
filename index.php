<?php
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once DOC_ROOT . '/tgdd/common/php/common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thegioididong.com - Siêu thị điện thoại, Tablet, Laptop, Phụ kiện chính hãng</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <?php
    insertHeadLink();
    insertCSS('/tgdd/top/css/style.css');
    ?>
</head>

<body>
    <!----------------  Header ---------------->
    <?php require_once DOC_ROOT . '/tgdd/common/inc/header.inc';  ?>

    <!----------------  Banner ----------------->
    <div class="Responsive">
        <div class="Banner">
            <div class="js-carousel Carousel">
                <div class="js-carouselCtx Carousel-content">
                    <div class="js-carouselList Carousel-content-list">
                        <a class="Carousel-content-item" id="carousel1" href="#">
                            <img src="images/banner/carousel_01-800x300.png" alt="banner">
                        </a>
                        <a class="Carousel-content-item" id="carousel2" href="#">
                            <img src="images/banner/carousel_02-800x300.png" alt="banner">
                        </a>
                        <a class="Carousel-content-item" id="carousel3" href="#">
                            <img src="images/banner/carousel_03-800x300.png" alt="banner">
                        </a>
                        <a class="Carousel-content-item" id="carousel4" href="#">
                            <img src="images/banner/carousel_04-800x300.png" alt="banner">
                        </a>
                        <a class="Carousel-content-item" id="carousel5" href="#">
                            <img src="images/banner/carousel_05-800x300.png" alt="banner">
                        </a>
                        <a class="Carousel-content-item" id="carousel6" href="#">
                            <img src="images/banner/carousel_06-800x300.png" alt="banner">
                        </a>
                    </div>
                    <div class="Carousel-content__btn"></div>
                    <div class="Carousel-content__btn Carousel-content__btn--right"></div>
                </div>
                <div class="Carousel-nav">
                    <div class="js-carouselNavItem Carousel-nav-item" data-index="1" >
                        <p class="Carousel-nav-item__txt">1</p>
                    </div>
                    <div class="js-carouselNavItem Carousel-nav-item" data-index="2">
                        <p class="Carousel-nav-item__txt">2</p>
                    </div>
                    <div class="js-carouselNavItem Carousel-nav-item" data-index="3">
                        <p class="Carousel-nav-item__txt">3</p>
                    </div>
                    <div class="js-carouselNavItem Carousel-nav-item" data-index="4">
                        <p class="Carousel-nav-item__txt">4</p>
                    </div>
                    <div class="js-carouselNavItem Carousel-nav-item" data-index="5">
                        <p class="Carousel-nav-item__txt">5</p>
                    </div>
                    <div class="js-carouselNavItem Carousel-nav-item" data-index="6">
                        <p class="Carousel-nav-item__txt">6</p>
                    </div>
                </div>
            </div>
            <div class="Banner-content only-pc">
                <div class="Banner-content-item">
                    <h2 class="Banner-content-item-new">
                        <a href="#"><span>tin công nghệ</span></a>
                    </h2>
                    <a class="Banner-content-item-img" href="#">
                        <img src="images/Banner/banner_right.png" alt="banner">
                        <div class="Banner-content-item__txt">
                            <p>Chuẩn bị mở bán độc quyền Vivo U10, 3 camera, Snapdragon 665</p>
                            <span>23 phút trước</span>
                        </div>
                    </a>
                </div>
                <a class="Banner-content-item" href="#">
                    <img src="images/Banner/banner_right_01.png" alt="banner">
                </a>
                <a class="Banner-content-item" href="#">
                    <img src="images/Banner/banner_right_02.png" alt="banner">
                </a>
            </div>
        </div>
    </div>

    <?php insertJS('/tgdd/top/js/script.js') ?>
</body>

</html>