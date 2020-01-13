<?php
if(isset($_SESSION['cus_id']) && isset($_SESSION['cus_name']) && isset($_SESSION['cus_email']) || isset($_COOKIE['remember'])){
    if(isset($_SESSION['cart'])){
        $quantity = count($_SESSION['cart']);
    }else{
        $quantity = 0;
    }
?>
<a href="cart.php" class="btn_cart">
    <i class="fas fa-shopping-cart"></i>
    <span><?php echo $quantity ?></span>
</a>
<?php } ?>