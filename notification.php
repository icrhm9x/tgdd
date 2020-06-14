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
    <title>Đặt hàng thành công</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <?php
    insertHeadLink();
    insertCSS('css\header.css');
    insertCSS('css\noti.css');
    insertCSS('css\footer.css');
    ?>
</head>

<body>
    <!----------------  Header  ---------------->
    <?php
    include_once('modules/header/header.php');
    include_once('modules/header/header_sp.php');
    ?>
    <?php
    if(isset($_GET['tr_id']) && filter_var($_GET['tr_id'], FILTER_VALIDATE_INT)){
        $tr_id = $_GET['tr_id'];
        $query_tr = mysqli_query($connect, "SELECT * FROM transaction WHERE tr_id = $tr_id");
        if(mysqli_num_rows($query_tr) > 0){
            $data_tr = mysqli_fetch_assoc($query_tr);
        }else{
            header('location: index.php');
        }
    }else{
        header('location: index.php');
    }
    ?>
    <div class="Reponsive">
        <div class="Noti">
            <div class="Noti-head"><i class="fas fa-check"></i>Đặt hàng thành công</div>
            <div class="Noti-thank">
                Cảm ơn anh <b><?php echo $data_tr['tr_name'] ?></b> đã cho Thegioididong cơ hội được phục vụ. Trong 10 phút, nhân viên Thegioididong sẽ gửi tin nhắn hoặc gọi điện xác nhận giao hàng cho anh.
            </div>
            <div class="Noti-title">Thông tin đặt hàng:</div>
            <div class="Noti-info">
                <p>Người nhận: <b><?php echo $data_tr['tr_name'] ?></b>, <b><?php echo $data_tr['tr_phone'] ?></b></p>
                <p>Địa chỉ nhận hàng: <b><?php echo $data_tr['tr_address'] ?></b></p>
                <p>Tổng tiền: <span><?php echo number_format($data_tr['tr_payment'],0,',','.') ?>₫</span></p>
            </div>
            <div class="Noti-txt">Khi cần hỗ trợ vui lòng gọi <b>1800.1060</b> (7h30 - 22h)</div>
            <div class="Noti-title">Sản phẩm đã mua:</div>
            <div class="Noti-prd-list">
                <?php
                $sql = "SELECT * FROM orders AS o INNER JOIN transaction as t ON o.tr_id = t.tr_id INNER JOIN product as p on o.prd_id = p.prd_id WHERE t.tr_id = $tr_id";
                $query_prd = mysqli_query($connect, $sql);
                while($data_prd = mysqli_fetch_assoc($query_prd)){
                ?>
                <div class="Noti-prd-item">
                    <div class="Noti-prd-item-img">
                        <img src="admin/img/product/<?php echo $data_prd['prd_image'] ?>" alt="">
                    </div>
                    <div class="Noti-prd-item-detail">
                        <a href="#"><?php echo $data_prd['prd_name'] ?>iphone</a>
                        <div class="Noti-prd-item-detail-promo">
                            <span>Giảm ngay 300.000đ</span>
                            <span>Chuột không dây</span>
                            <span>Balo Laptop Asus</span>
                            <?php if($data_prd['or_sale'] > 0){ ?>
                                <p>Giảm <span><?php echo number_format($data_prd['or_sale'],0,',','.') ?>₫</span> còn <span>
                                <?php echo number_format(($data_prd['or_price'] - $data_prd['or_sale']),0,',','.') ?>₫</span></p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="Noti-prd-item-price">
                        <p><?php echo number_format($data_prd['or_price'],0,',','.') ?>₫</p>
                        <div class="Noti-prd-item-price-quanti">
                            <span>Số lượng:</span>
                            <strong><?php echo $data_prd['or_quantity'] ?></strong>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <a class="Noti-btn" href="index.php">Về trang chủ</a>
        </div>
    </div>
    <!----------------  Footer  ----------------->
    <?php include_once('modules/footer/footer.php'); ?>
    <!----------------  Btn back to top  ----------------->
    <?php include_once('modules/btn_backtotop/btn_backtotop.php') ?>
    <?php insertJS('js\btnBackToTop.js') ?>
</body>

</html>