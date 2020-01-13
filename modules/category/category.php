<?php
if(isset($_GET['cat_id']) && filter_var($_GET['cat_id'], FILTER_VALIDATE_INT)){
    $cat_id = $_GET['cat_id'];
    $query_cat = mysqli_query($connect, "SELECT cat_name FROM category WHERE cat_id = $cat_id");
    if(mysqli_num_rows($query_cat) > 0){
        $data_cat = mysqli_fetch_assoc($query_cat);

        $query_bra = mysqli_query($connect, "SELECT DISTINCT brand_image FROM brand AS b INNER JOIN product AS p ON b.brand_id = p.brand_id WHERE p.cat_id = $cat_id");
        
    }else{
        header('location: index.php');
    }
}else{
    header('location: index.php');
}
?>
<div class="Responsive">
    <div class="Brand">
        <div class="Brand-list">
            <?php while($data_bra = mysqli_fetch_assoc($query_bra)){ ?>
            <a class="Brand-list-item" href="#">
                <img src="admin/img/brand/<?php echo $data_bra['brand_image'] ?>" alt="">
            </a>
            <?php } ?>
        </div>
    </div>
</div>
<div class="Responsive">
    <div class="Product">
        <div class="Product-head">
            <h2 class="Product-head__txt"><?php echo $data_cat['cat_name'] ?> nổi bật nhất</h2>
        </div>
        <div class="Product-content">
            <div class="Product-content-list">
                <?php
                $query_prd = mysqli_query($connect, "SELECT * FROM product WHERE cat_id = $cat_id ORDER BY prd_id DESC LIMIT 25");
                if(mysqli_num_rows($query_prd) > 0){
                    while($data_prd = mysqli_fetch_assoc($query_prd)){
                ?>
                <div class="Product-content-item">
                    <a class="Product-content-item__img" href="product.php?prd_id=<?php echo $data_prd['prd_id'] ?>">
                        <img src="admin/img/product/<?php echo $data_prd['prd_image'] ?>" alt="">
                    </a>
                    <div class="Product-content-item-detail">
                        <a class="Product-content-item-detail__name" href="product.php?prd_id=<?php echo $data_prd['prd_id'] ?>"><?php echo $data_prd['prd_name'] ?></a>
                        <p class="Product-content-item-detail__price">
                            <?php echo number_format($data_prd['prd_price']-$data_prd['prd_sale'],0,'','.') ?>₫
                            <span><?php if($data_prd['prd_sale'] > 0){echo number_format($data_prd['prd_price'],0,'','.').'₫';} ?></span>
                        </p>
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
                <?php
                    }
                }else{
                    echo "<p>Chưa có sản phẩm ở danh mục này</p>";
                }
                ?>
            </div>
        </div>
    </div>
</div>