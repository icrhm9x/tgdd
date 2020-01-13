<?php
session_start();
include_once('../../config/connect.php');
include_once('../../config/function.php');
if(!isset($_SESSION['cus_id']) && !isset($_SESSION['cus_name']) && !isset($_SESSION['cus_email']) && !isset($_COOKIE['remember'])){
    header('location: login.php');
    exit;
}
if (isset($_GET['prd_id']) && filter_var($_GET['prd_id'], FILTER_VALIDATE_INT)) {
    $prd_id = $_GET['prd_id'];
    if (!empty($_SESSION['cart'][$prd_id])) {
        unset($_SESSION['cart'][$prd_id]);
        header('location: ../../cart.php');
    } else {
        header('location: ../../cart.php');
    }
} else {
    header('location: ../../cart.php');
}
?>