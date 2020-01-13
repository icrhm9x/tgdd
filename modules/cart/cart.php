<?php if (!empty($_SESSION['cart'])) : ?>
<div class="Cart">
    <div class="Cart-top">
        <a href="index.php">Mua thêm sản phẩm khác</a>
        <p>Giỏ hàng của bạn</p>
    </div>
    <div class="Cart-box">
        <div class="Cart-box-list">
            <?php
            $total_price = 0;
            $total_sale = 0;
            foreach ($_SESSION['cart'] as $key => $data_prd){ 
            ?>
            <div class="Cart-box-item">
                <div class="Cart-box-item-img">
                    <img src="admin/img/product/<?php echo $data_prd['prd_image'] ?>" alt="">
                    <a href="modules/cart/del_cart.php?prd_id=<?php echo $data_prd['prd_id'] ?>" class="Cart-box-item-img-btn"><p><i class="far fa-calendar-times"></i>Xóa</p></a>
                </div>
                <div class="Cart-box-item-detail">
                    <a href="product.php?prd_id=<?php echo $data_prd['prd_id'] ?>"><?php echo $data_prd['prd_name'] ?></a>
                    <div class="Cart-box-item-detail-promo">
                        <span>Giảm ngay 300.000đ</span>
                        <span>Chuột không dây</span>
                        <span>Balo Laptop Asus</span>
                        <?php if($data_prd['prd_sale'] > 0){ ?>
                            <p>Giảm <span><?php echo number_format($data_prd['prd_sale'],0,',','.') ?>₫</span> còn <span>
                            <?php echo number_format(($data_prd['prd_price'] - $data_prd['prd_sale']),0,',','.') ?>₫</span></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="Cart-box-item-price">
                    <p><?php echo number_format($data_prd['prd_price'],0,',','.') ?>₫</p>
                    <div class="Cart-box-item-price-quanti">
                        <a href="modules/cart/abate_cart.php?prd_id=<?php echo $data_prd['prd_id'] ?>" class="Cart-box-item-price-quanti__abate <?php if($data_prd['prd_quantity']==1){echo "Cart-box-item-price-quanti--disable";} ?>"></a>
                        <div class="Cart-box-item-price-quanti__num"><?php echo $data_prd['prd_quantity'] ?></div>
                        <a href="modules/cart/augment_cart.php?prd_id=<?php echo $data_prd['prd_id'] ?>" class="Cart-box-item-price-quanti__augment"></a>
                    </div>
                </div>
            </div>
            <?php 
            $total_price += $data_prd['prd_price']*$data_prd['prd_quantity'];
            $total_sale += $data_prd['prd_sale']*$data_prd['prd_quantity'];
            }
            ?>
            <div class="Cart-box-pay">
                <div class="Cart-box-pay-price"><p>Tổng tiền:</p><span><?php echo number_format($total_price,0,',','.') ?>₫</span></div>
                <div class="Cart-box-pay-price"><p>Giảm:</p><span>-<?php echo number_format($total_sale,0,',','.') ?>₫</span></div>
                <div class="Cart-box-pay-total"><p>Cần thanh toán:</p><span><?php $payment = ($total_price-$total_sale); echo number_format($payment,0,',','.') ?>₫</span></div>
            </div>
        </div>
        <div class="Cart-box-form">
            <?php
            if(isset($_SESSION['cus_id'])){
                $cus_id = $_SESSION['cus_id'];
                $query_cus = mysqli_query($connect, "SELECT * FROM customer WHERE cus_id = $cus_id");
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data_tr =
                    [
                        "cus_id" => $cus_id,
                        "tr_name" => postInput('tr_name'),
                        "tr_payment" => $payment,
                        "tr_phone" => postInput('tr_phone'),
                        "tr_address" => postInput('tr_address'),
                        "tr_note" => postInput('tr_note')
                    ];

                $tr_id = insert('transaction', $data_tr);
                if ($tr_id > 0) {
                    foreach ($_SESSION['cart'] as $key => $data_prd) {
                        $data_or =
                            [
                                "tr_id" => $tr_id,
                                "prd_id" => $key,
                                "or_quantity" => $data_prd['prd_quantity'],
                                "or_price" => $data_prd['prd_price'],
                                "or_sale" => $data_prd['prd_sale']
                            ];
                        //nhap du lieu vao bang orders
                        $or_id = insert('orders', $data_or);
                        if($or_id > 0){
                            unset($_SESSION['cart']);
                            header("location: notification.php?tr_id=$tr_id");
                        }
                    }
                }
            }
            while($data_cus = mysqli_fetch_assoc($query_cus)){
            ?>
            <form action="" method="post">
                <div class="Cart-box-form-list">
                    <div class="Cart-box-form-name">
                        <input required type="text" name="tr_name" placeholder="Họ và tên" value="<?php echo isset($data_cus['cus_name'])?$data_cus['cus_name']:"" ?>">
                    </div>
                    <div class="Cart-box-form-phone">
                        <input required type="tel" name="tr_phone" placeholder="Số điện thoại" value="<?php echo isset($data_cus['cus_phone'])?$data_cus['cus_phone']:"" ?>">
                    </div>
                </div>
                <div class="Cart-box-form-email">
                    <input required type="email" name="tr_email" placeholder="Email" value="<?php echo isset($data_cus['cus_email'])?$data_cus['cus_email']:"" ?>">
                </div>
                <div class="Cart-box-form-adr">
                    <input required type="text" name="tr_address" placeholder="Địa chỉ" value="<?php echo isset($data_cus['cus_address'])?$data_cus['cus_address']:"" ?>">
                </div>
                <div class="Cart-box-form-note">
                    <input type="text" name="tr_note" placeholder="Yêu cầu khác (không bắt buộc)">
                </div>
                <div class="Cart-box-form-btn">
                    <button type="submit">Xác nhận</button>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
    <p class="Cart__txt">Bằng cách đặt hàng, bạn đồng ý với Điều khoản sử dụng của Thegioididong</p>
</div>
<?php else : ?>
<style>
    body {
        background: #fff;
    }
</style>
<div class="Null-cart">
    <i class="fas fa-cart-arrow-down"></i>
    <p>Không có sản phẩm nào trong giỏ hàng</p>
    <a href="index.php">Về trang chủ</a>
    <span>Khi cần trợ giúp vui lòng gọi 1800.1060 hoặc 028.3622.1060 (7h30 - 22h)</span>
</div>

<?php endif; ?>