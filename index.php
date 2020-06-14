<?php
ob_start();
session_start();
include_once('config/connect.php');
include_once('config/function.php');
require_once __DIR__ . '\common\php\common.php';
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
    insertCSS('css\header.css');
    insertCSS('css\footer.css');
    insertCSS('css\style.css');
    insertCSS('css\btn_cart.css');
    ?>
</head>

<body>
    <!----------------  Header  ---------------->
    <?php
    include_once('modules/header/header.php');
    include_once('modules/header/header_sp.php');
    ?>
    <!----------------  Banner  ----------------->
    <div class="Responsive">
        <div class="Banner">
        <?php
        include_once('modules/banner/carousel.php');
        include_once('modules/banner/banner.php');
        ?>
        </div>
    </div>
    <!----------------  Content  ----------------->
    <?php
    if(isset($_GET['page_layout'])){
        switch($_GET['page_layout']){
            case 'cart': include_once('modules/cart/cart.php'); break;
            case 'category': include_once('modules/category/category.php'); break;
            case 'product': include_once('modules/product/product.php'); break;
            case 'success': include_once('modules/cart/success.php'); break;
            default: include_once('modules/product/product.php');
        }
    }else{
        include_once('modules/promotion/promotion.php');
        include_once('modules/featured/featured.php');
    }
    ?>
    <!----------------  btn cart  ----------------->
    <?php include_once('modules/cart/btn_cart.php'); ?>
    <!----------------  Footer  ----------------->
    <?php include_once('modules/footer/footer.php'); ?>
    <!----------------  Btn back to top  ----------------->
    <?php include_once('modules/btn_backtotop/btn_backtotop.php') ?>
    <?php insertJS('js\btnBackToTop.js') ?>
    <!----------------  custom JS  ----------------->
    <?php insertJS('js\script.js') ?>
</body>

</html>