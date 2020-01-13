<?php
session_start();
include_once('../../config/connect.php');
include_once('../../config/function.php');
if(!isset($_SESSION['cus_id']) && !isset($_SESSION['cus_name']) && !isset($_SESSION['cus_email']) && !isset($_COOKIE['remember'])){
    header('location: ../../login.php');
    exit;
}
if (isset($_GET['prd_id']) && filter_var($_GET['prd_id'], FILTER_VALIDATE_INT)) {
    $prd_id = $_GET['prd_id'];
    $query = mysqli_query($connect, "SELECT * FROM product WHERE prd_id = $prd_id");
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_assoc($query)) {
            $prd = $data;
        }
        //kiem tra neu ton tai san pham thi cap nhat gio hang
        //
        //nguoc lai thi them moi san pham vao gio hang
        if (!isset($_SESSION['cart'][$prd_id])) {
            //them moi
            $_SESSION['cart'][$prd_id]['prd_id'] = $prd_id;
            $_SESSION['cart'][$prd_id]['prd_name'] = $prd['prd_name'];
            $_SESSION['cart'][$prd_id]['prd_image'] = $prd['prd_image'];
            $_SESSION['cart'][$prd_id]['prd_price'] = $prd['prd_price'];
            $_SESSION['cart'][$prd_id]['prd_sale'] = $prd['prd_sale'];
            $_SESSION['cart'][$prd_id]['prd_promotion'] = $prd['prd_promotion'];
            $_SESSION['cart'][$prd_id]['prd_quantity'] = 1;
        } else {
            $_SESSION['cart'][$prd_id]['prd_quantity'] += 1;
        }
    } else {
        header('location: ../../index.php');
    }
} else {
    header('location: ../../index.php');
}
header('location: ../../cart.php');
?>