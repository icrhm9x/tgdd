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
    insertCSS('css\product.css');
    insertCSS('css\btn_cart.css');
    ?>
</head>

<body>
    <!----------------  Header  ---------------->
    <?php
    include_once('modules/header/header.php');
    include_once('modules/header/header_sp.php');
    ?>
    <!----------------  Product  ---------------->
    <?php include_once('modules/product/product.php'); ?>
    <!----------------  btn cart  ----------------->
    <?php include_once('modules/cart/btn_cart.php'); ?>
    
    <!----------------  Footer  ----------------->
    <?php include_once('modules/footer/footer.php'); ?>
    <!----------------  Btn back to top  ----------------->
    <?php include_once('modules/btn_backtotop/btn_backtotop.php') ?>
    <?php insertJS('js\btnBackToTop.js') ?>
</body>

</html>