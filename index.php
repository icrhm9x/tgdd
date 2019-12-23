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
                    <div class="js-carouselNavItem Carousel-nav-item Carousel-nav-item--active" data-index="1">
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
    <!----------------  Product  ----------------->
    <div class="Responsive">
        <div class="Product">
            <div class="Product-head">
                <h2 class="Product-head__txt">Điện thoại nổi bật nhất</h2>
                <div class="Product-head-tag">
                    <a href="#">iPhone 11 Pro</a>
                    <a href="#">iPhone 11 Pro Max</a>
                    <a href="#">Điện thoại Samsung</a>
                    <a href="#">Galaxy Note 10 Đỏ</a>
                    <a href="#">Vivo U10</a>
                    <a href="#">Xem tất cả 160 điện thoại</a>
                </div>
            </div>
            <div class="Product-content">
                <div class="Product-content-list">
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-001.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-002.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-003.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-004.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-005.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-006.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-007.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-008.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-009.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-010.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Responsive">
        <div class="Product">
            <div class="Product-head">
                <h2 class="Product-head__txt">Laptop nổi bật nhất</h2>
                <div class="Product-head-tag">
                    <a href="#">Asus</a>
                    <a href="#">Dell</a>
                    <a href="#">MSI</a>
                    <a href="#">Macbook</a>
                    <a href="#">Acer</a>
                    <a href="#">Xem tất cả 222 laptop</a>
                </div>
            </div>
            <div class="Product-content">
                <div class="Product-content-list">
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-001.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-002.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-003.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-004.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-005.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-001.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-002.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-003.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-004.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="Product-content-item">
                        <a class="Product-content-item__img" href="#">
                            <img src="images/product/product-005.jpg" alt="">
                        </a>
                        <div class="Product-content-item-detail">
                            <a class="Product-content-item-detail__name" href="">Samsung Galaxy A70</a>
                            <p class="Product-content-item-detail__price">8.790.000₫<span>9.290.000₫</span></p>
                            <p class="Product-content-item-detail__txt">Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
                        </div>
                        <div class="Product-content-item-gift">
                            <div class="js-productGiftBtn Product-content-item-gift__btn">
                                <i class="fas fa-gift"></i>
                                <p>Quà tặng</p>
                            </div>
                            <div class="Product-content-item-gift-detail">
                                <p class="Product-content-item-gift-detail__title">Trả góp 0%:</p>
                                <p class="Product-content-item-gift-detail__txt">Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>
                                <p class="Product-content-item-gift-detail__title">Chương trình khuyến mại:</p>
                                <p class="Product-content-item-gift-detail__txt">Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>
                                <p class="Product-content-item-gift-detail__title">Khuyến mãi hãng:</p>
                                <p class="Product-content-item-gift-detail__txt">Tặng Đồng hồ thông minh Samsung Galaxy Fit trị giá 2,490,000Đ</p>
                                <p class="Product-content-item-gift-detail__txt">Giảm thêm 3 triệu qua Galaxy Gift</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------  Footer  ----------------->
    <footer>
        <div class="Footer-top">
            <div class="Footer-top-content Responsive">
                <div class="Footer-top-content-item">
                    <a class="Footer-top-content-item__link" href="#">Tìm hiểu về mua trả góp</a>
                    <a class="Footer-top-content-item__link" href="#">Chính sách bảo hành</a>
                    <a class="Footer-top-content-item__link" href="#">Chính sách đổi trả</a>
                    <a class="Footer-top-content-item__link" href="#">Giao hàng & Thanh toán</a>
                    <a class="Footer-top-content-item__link" href="#">Hướng dẫn mua online</a>
                </div>
                <div class="Footer-top-content-item">
                    <a class="Footer-top-content-item__link" href="#">Tìm hiểu về mua trả góp</a>
                    <a class="Footer-top-content-item__link" href="#">Chính sách bảo hành</a>
                    <a class="Footer-top-content-item__link" href="#">Chính sách đổi trả</a>
                    <a class="Footer-top-content-item__link" href="#">Giao hàng & Thanh toán</a>
                    <a class="Footer-top-content-item__link" href="#">Hướng dẫn mua online</a>
                </div>
                <div class="Footer-top-content-item">
                    <p class="Footer-top-content-item__contact">Gọi mua hàng <a href="#">1800.1060</a> (7:30 - 22:00)</p>
                    <p class="Footer-top-content-item__contact">Gọi khiếu nại <a href="#">1800.1060</a> (7:30 - 22:00)</p>
                    <p class="Footer-top-content-item__contact">Gọi bảo hành <a href="#">1800.1060</a> (7:30 - 22:00)</p>
                    <p class="Footer-top-content-item__contact">Kỹ thuật <a href="#">1800.1060</a> (7:30 - 22:00)</p>
                </div>
                <div class="Footer-top-content-item">
                    <div class="Footer-top-content-item-social">
                        <a class="Footer-top-content-item-social__fb" href="#">
                            <i class="fab fa-facebook-square"></i>
                            <p>3.4tr</p>
                        </a>
                        <a class="Footer-top-content-item-social__ytb" href="#">
                            <i class="fab fa-youtube"></i>
                            <p>459k</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="Footer-bot">
            <div class="Footer-bot-txt Responsive">
                <p>© 2019. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007. 
                    Địa chỉ: 128 Trần Quang Khải, P. Tân Định, Q.1, TP.Hồ Chí Minh. Điện thoại: 18001060. 
                    Email: cskh@thegioididong.com.
                </p>
                <a href="#">Xem chính sách sử dụng web</a>
            </div>
        </div>
    </footer>
    <!----------------  Btn back to top  ----------------->
    <div class="Backtotop">
        <span class="js-backtotopBtn Backtotop__Btn"></span>
    </div>
    <?php insertJS('/tgdd/top/js/script.js') ?>
</body>

</html>