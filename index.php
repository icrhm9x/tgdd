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
    <!----------------  Header  ---------------->
    <?php require_once DOC_ROOT . '/tgdd/common/inc/header.inc';  ?>

    <!----------------  Banner  ----------------->
    <div class="Responsive">
        <div class="Banner">
            <div class="js-carousel Carousel">
                <div class="js-carouselCtx Carousel-content">
                    <div class="js-carouselList Carousel-content-list">
                        <a class="Carousel-content-item" id="carousel1" data-index="1" href="#">
                            <img src="images/banner/carousel_01-800x300.png" alt="banner">
                        </a>
                        <a class="Carousel-content-item" id="carousel2" data-index="2" href="#">
                            <img src="images/banner/carousel_02-800x300.png" alt="banner">
                        </a>
                        <a class="Carousel-content-item" id="carousel3" data-index="3" href="#">
                            <img src="images/banner/carousel_03-800x300.png" alt="banner">
                        </a>
                        <a class="Carousel-content-item" id="carousel4" data-index="4" href="#">
                            <img src="images/banner/carousel_04-800x300.png" alt="banner">
                        </a>
                        <a class="Carousel-content-item" id="carousel5" data-index="5" href="#">
                            <img src="images/banner/carousel_05-800x300.png" alt="banner">
                        </a>
                    </div>
                    <div class="js-carouselBtnPrev Carousel-content__btn Carousel-content__btn--prev">‹</div>
                    <div class="js-carouselBtnNext Carousel-content__btn Carousel-content__btn--next">›</div>
                </div>
                <div class="Carousel-nav">
                    <div class="js-carouselNavItem Carousel-nav-item Carousel-nav-item--active" data-index="1" >
                        <p class="only-pc Carousel-nav-item__txt">Lên Đời Note 10<br>Trợ Giá Đến 3,5 Triệu</p>
                    </div>
                    <div class="js-carouselNavItem Carousel-nav-item" data-index="2">
                        <p class="only-pc Carousel-nav-item__txt">Sắm iPhone Online<br>Tặng Voucher Đến 3 Triệu</p>
                    </div>
                    <div class="js-carouselNavItem Carousel-nav-item" data-index="3">
                        <p class="only-pc Carousel-nav-item__txt">OPPO Reno2 F<br>Lì Xì Ngay 500 Ngàn</p>
                    </div>
                    <div class="js-carouselNavItem Carousel-nav-item" data-index="4">
                        <p class="only-pc Carousel-nav-item__txt">Đặt Trước Galaxy A51<br>Rước Bộ Quà 1,5 Triệu</p>
                    </div>
                    <div class="js-carouselNavItem Carousel-nav-item" data-index="5">
                        <p class="only-pc Carousel-nav-item__txt">Vsmart Live<br>Trợ Giá Đến 3,5 Triệu</p>
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
    <!----------------  Promotion  ----------------->
    <div class="Responsive">
        <div class="Promotion">
            <div class="Promotion-head">
                <h2>khuyến mãi hot nhất</h2>
            </div>
            <div class="Promotion-content">
                <div class="js-promoList Promotion-content-list">
                    <a class="Promotion-content-item" id="promo1" href="#">
                        <div class="Promotion-content-item__img">
                            <img src="images/product/product-001.jpg" alt="">
                            <div class="Promotion-content-item-discount">
                                <p>giảm 600.000₫</p>
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <div class="Promotion-content-item-detail">
                            <h3 class="Promotion-content-item-detail__name">iPhone 11 Pro Max 64GB</h3>
                            <p class="Promotion-content-item-detail__price">33.990.000₫<span>39.590.000₫</span></p>
                            <p class="Promotion-content-item-detail__txt">Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)</p>
                        </div>
                    </a>
                    <a class="Promotion-content-item" id="promo2" href="#">
                        <div class="Promotion-content-item__img">
                            <img src="images/product/product-002.jpg" alt="">
                            <div class="Promotion-content-item-discount">
                                <p>giảm 600.000₫</p>
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <div class="Promotion-content-item-detail">
                            <h3 class="Promotion-content-item-detail__name">iPhone 11 Pro Max 64GB</h3>
                            <p class="Promotion-content-item-detail__price">33.990.000₫</p>
                            <p class="Promotion-content-item-detail__txt">Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)</p>
                        </div>
                    </a>
                    <a class="Promotion-content-item" id="promo3" href="#">
                        <div class="Promotion-content-item__img">
                            <img src="images/product/product-003.jpg" alt="">
                            <div class="Promotion-content-item-discount">
                                <p>giảm 600.000₫</p>
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <div class="Promotion-content-item-detail">
                            <h3 class="Promotion-content-item-detail__name">iPhone 11 Pro Max 64GB</h3>
                            <p class="Promotion-content-item-detail__price">33.990.000₫<span>39.590.000₫</span></p>
                            <p class="Promotion-content-item-detail__txt">Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)</p>
                        </div>
                    </a>
                    <a class="Promotion-content-item" id="promo4" href="#">
                        <div class="Promotion-content-item__img">
                            <img src="images/product/product-004.jpg" alt="">
                        </div>
                        <div class="Promotion-content-item-detail">
                            <h3 class="Promotion-content-item-detail__name">iPhone 11 Pro Max 64GB</h3>
                            <p class="Promotion-content-item-detail__price">33.990.000₫</p>
                            <p class="Promotion-content-item-detail__txt">Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)</p>
                        </div>
                    </a>
                    <a class="Promotion-content-item" id="promo5" href="#">
                        <div class="Promotion-content-item__img">
                            <img src="images/product/product-005.jpg" alt="">
                            <div class="Promotion-content-item-discount">
                                <p>giảm 600.000₫</p>
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <div class="Promotion-content-item-detail">
                            <h3 class="Promotion-content-item-detail__name">iPhone 11 Pro Max 64GB</h3>
                            <p class="Promotion-content-item-detail__price">33.990.000₫<span>39.590.000₫</span></p>
                            <p class="Promotion-content-item-detail__txt">Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)</p>
                        </div>
                    </a>
                    <a class="Promotion-content-item" id="promo6" href="#">
                        <div class="Promotion-content-item__img">
                            <img src="images/product/product-001.jpg" alt="">
                            <div class="Promotion-content-item-discount">
                                <p>giảm 600.000₫</p>
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <div class="Promotion-content-item-detail">
                            <h3 class="Promotion-content-item-detail__name">iPhone 11 Pro Max 64GB</h3>
                            <p class="Promotion-content-item-detail__price">33.990.000₫<span>39.590.000₫</span></p>
                            <p class="Promotion-content-item-detail__txt">Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)</p>
                        </div>
                    </a>
                    <a class="Promotion-content-item" id="promo7" href="#">
                        <div class="Promotion-content-item__img">
                            <img src="images/product/product-002.jpg" alt="">
                            <div class="Promotion-content-item-discount">
                                <p>giảm 600.000₫</p>
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <div class="Promotion-content-item-detail">
                            <h3 class="Promotion-content-item-detail__name">iPhone 11 Pro Max 64GB</h3>
                            <p class="Promotion-content-item-detail__price">33.990.000₫</p>
                            <p class="Promotion-content-item-detail__txt">Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)</p>
                        </div>
                    </a>
                    <a class="Promotion-content-item" id="promo8" href="#">
                        <div class="Promotion-content-item__img">
                            <img src="images/product/product-003.jpg" alt="">
                            <div class="Promotion-content-item-discount">
                                <p>giảm 600.000₫</p>
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <div class="Promotion-content-item-detail">
                            <h3 class="Promotion-content-item-detail__name">iPhone 11 Pro Max 64GB</h3>
                            <p class="Promotion-content-item-detail__price">33.990.000₫<span>39.590.000₫</span></p>
                            <p class="Promotion-content-item-detail__txt">Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)</p>
                        </div>
                    </a>
                    <a class="Promotion-content-item" id="promo9" href="#">
                        <div class="Promotion-content-item__img">
                            <img src="images/product/product-004.jpg" alt="">
                        </div>
                        <div class="Promotion-content-item-detail">
                            <h3 class="Promotion-content-item-detail__name">iPhone 11 Pro Max 64GB</h3>
                            <p class="Promotion-content-item-detail__price">33.990.000₫</p>
                            <p class="Promotion-content-item-detail__txt">Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)</p>
                        </div>
                    </a>
                    <a class="Promotion-content-item" id="promo10" href="#">
                        <div class="Promotion-content-item__img">
                            <img src="images/product/product-005.jpg" alt="">
                            <div class="Promotion-content-item-discount">
                                <p>giảm 600.000₫</p>
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <div class="Promotion-content-item-detail">
                            <h3 class="Promotion-content-item-detail__name">iPhone 11 Pro Max 64GB</h3>
                            <p class="Promotion-content-item-detail__price">33.990.000₫<span>39.590.000₫</span></p>
                            <p class="Promotion-content-item-detail__txt">Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)</p>
                        </div>
                    </a>
                    <a class="Promotion-content-item" id="promo11" href="#">
                        <div class="Promotion-content-item__img">
                            <img src="images/product/product-001.jpg" alt="">
                            <div class="Promotion-content-item-discount">
                                <p>giảm 600.000₫</p>
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <div class="Promotion-content-item-detail">
                            <h3 class="Promotion-content-item-detail__name">iPhone 11 Pro Max 64GB</h3>
                            <p class="Promotion-content-item-detail__price">33.990.000₫<span>39.590.000₫</span></p>
                            <p class="Promotion-content-item-detail__txt">Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)</p>
                        </div>
                    </a>
                    <a class="Promotion-content-item" id="promo12" href="#">
                        <div class="Promotion-content-item__img">
                            <img src="images/product/product-002.jpg" alt="">
                            <div class="Promotion-content-item-discount">
                                <p>giảm 600.000₫</p>
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <div class="Promotion-content-item-detail">
                            <h3 class="Promotion-content-item-detail__name">iPhone 11 Pro Max 64GB</h3>
                            <p class="Promotion-content-item-detail__price">33.990.000₫</p>
                            <p class="Promotion-content-item-detail__txt">Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)</p>
                        </div>
                    </a>
                    <a class="Promotion-content-item" id="promo13" href="#">
                        <div class="Promotion-content-item__img">
                            <img src="images/product/product-003.jpg" alt="">
                            <div class="Promotion-content-item-discount">
                                <p>giảm 600.000₫</p>
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <div class="Promotion-content-item-detail">
                            <h3 class="Promotion-content-item-detail__name">iPhone 11 Pro Max 64GB</h3>
                            <p class="Promotion-content-item-detail__price">33.990.000₫<span>39.590.000₫</span></p>
                            <p class="Promotion-content-item-detail__txt">Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)</p>
                        </div>
                    </a>
                    <a class="Promotion-content-item" id="promo14" href="#">
                        <div class="Promotion-content-item__img">
                            <img src="images/product/product-004.jpg" alt="">
                        </div>
                        <div class="Promotion-content-item-detail">
                            <h3 class="Promotion-content-item-detail__name">iPhone 11 Pro Max 64GB</h3>
                            <p class="Promotion-content-item-detail__price">33.990.000₫</p>
                            <p class="Promotion-content-item-detail__txt">Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)</p>
                        </div>
                    </a>
                    <a class="Promotion-content-item" id="promo15" href="#">
                        <div class="Promotion-content-item__img">
                            <img src="images/product/product-009.jpg" alt="">
                        </div>
                        <div class="Promotion-content-item-detail">
                            <h3 class="Promotion-content-item-detail__name">iPhone 11 Pro Max 64GB</h3>
                            <p class="Promotion-content-item-detail__price">33.990.000₫</p>
                            <p class="Promotion-content-item-detail__txt">Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)</p>
                        </div>
                    </a>
                </div>
                <div class="js-promoBtnPrev Promotion-content__btn Promotion-content__btn--prev">‹</div>
                <div class="js-promoBtnNext Promotion-content__btn Promotion-content__btn--next">›</div>
            </div>
        </div>
    </div>

    <?php insertJS('/tgdd/top/js/script.js') ?>
</body>

</html>