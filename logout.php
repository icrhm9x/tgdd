<?php
    session_start();
    if(isset($_SESSION['cus_id']) && isset($_SESSION['cus_name']) && isset($_SESSION['cus_email'])){
        session_destroy();
    }
    if(isset($_COOKIE['remember'])){
        setcookie('remember', "", time()-(3600*24*10));
    }
    header('location: index.php');
?>