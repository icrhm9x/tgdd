<?php
$query_cat = mysqli_query($connect, "SELECT * FROM category WHERE cat_featured = 1 ORDER BY cat_id ASC");
while($data_cat = mysqli_fetch_assoc($query_cat)){
?>
<div class="Responsive">
    <div class="Product">
        <div class="Product-head">
            <h2 class="Product-head__txt"><?php echo $data_cat['cat_name'] ?> nổi bật nhất</h2>
            <div class="Product-head-tag">
                <?php
                $query_prd = mysqli_query($connect, "SELECT prd_name FROM product WHERE cat_id = {$data_cat['cat_id']} ORDER BY prd_id DESC LIMIT 4");
                while($data_prd = mysqli_fetch_assoc($query_prd)){
                ?>
                <a href="#"><?php echo $data_prd['prd_name'] ?></a>
                <?php } ?>
                <a href="#">Xem tất cả 
                <?php
                echo mysqli_num_rows(mysqli_query($connect, "SELECT prd_name FROM product WHERE cat_id = {$data_cat['cat_id']}"));
                ?> <?php echo $data_cat['cat_name'] ?></a>
            </div>
        </div>
        <div class="Product-content">
            <div class="Product-content-list">
                <?php
                $query_prd = mysqli_query($connect, "SELECT * FROM product WHERE cat_id = {$data_cat['cat_id']} ORDER BY prd_id DESC LIMIT 5");
                while($data_prd = mysqli_fetch_assoc($query_prd)){
                ?>
                <div class="Product-content-item">
                    <a class="Product-content-item__img" href="#">
                        <img src="admin/img/product/<?php echo $data_prd['prd_image'] ?>" alt="">
                    </a>
                    <div class="Product-content-item-detail">
                        <a class="Product-content-item-detail__name" href=""><?php echo $data_prd['prd_name'] ?></a>
                        <p class="Product-content-item-detail__price"><?php echo number_format($data_prd['prd_price']-$data_prd['prd_sale'],0,'','.') ?>₫<span><?php echo number_format($data_prd['prd_price'],0,'','.') ?>₫</span></p>
                        <p class="Product-content-item-detail__txt"><?php  ?>Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)</p>
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
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>