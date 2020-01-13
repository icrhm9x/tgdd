<?php
if(isset($_GET['prd_id']) && filter_var($_GET['prd_id'], FILTER_VALIDATE_INT)){
    $prd_id = $_GET['prd_id'];
    $query_prd = mysqli_query($connect, "SELECT * FROM product WHERE prd_id = $prd_id");
    if(mysqli_num_rows($query_prd) > 0){
        $data_prd = mysqli_fetch_assoc($query_prd);

    }else{
        header('location: index.php');
    }
}else{
    header('location: index.php');
}
?>
<div class="Responsive">
    <div class="Product">
        <div class="Product-head">
            <h1><?php echo $data_prd['prd_name'] ?></h1>
            <div class="Product-head-rating">
                <span class="Product-head-rating__ico"><i class="fas fa-star"></i></span>
                <span class="Product-head-rating__ico"><i class="fas fa-star"></i></span>
                <span class="Product-head-rating__ico"><i class="fas fa-star"></i></span>
                <span class="Product-head-rating__ico"><i class="fas fa-star"></i></span>
                <span class="Product-head-rating__ico"><i class="fas fa-star"></i></span>
            </div>
        </div>
        <div class="Product-content">
            <div class="Product-content-img">
                <img src="admin/img/product/<?php echo $data_prd['prd_image'] ?>" alt="">
            </div>
            <div class="Product-content-order">
                <div class="Product-content-order-price">
                    <strong><?php echo number_format($data_prd['prd_price']-$data_prd['prd_sale'],0,'','.') ?>₫</strong>
                    <span><?php if($data_prd['prd_sale'] > 0){echo number_format($data_prd['prd_price'],0,'','.').'₫';} ?></span>
                </div>
                <div class="Product-content-order-promo">
                    <strong>KHUYẾN MÃI</strong>
                    <p><i class="fas fa-check-circle"></i><?php  ?>Cơ hội trúng 2020 Chuột vàng</p>
                    <p><i class="fas fa-check-circle"></i><?php  ?>Giảm ngay 300.000đ (đã trừ vào giá)</p>
                </div>
                <div class="Product-content-order-btn">
                    <a class="Product-content-order-btn-buynow" href="modules/cart/addcart.php?prd_id=<?php echo $data_prd['prd_id'] ?>">
                        <p>Mua ngay</p>
                        <span>Giao tận nơi hoặc nhận tại siêu thị</span>
                    </a>
                    <p>Gọi đặt mua: 1800.1060 (miễn phí - 7:30-22:00)</p>
                </div>
            </div>
            <div class="Product-content-info">
                <div class="Product-content-info__txt"><i class="fas fa-info-circle"></i>Thông tin:</div>
                <div class="Product-content-info-list">
                    <div class="Product-content-info-in"><i class="fas fa-box-open"></i>
                        <p>Trong hộp có: <?php echo $data_prd['prd_accessories'] ?></p>
                    </div>
                    <div class="Product-content-info-wr"><i class="fas fa-medal"></i>
                        <p><?php echo $data_prd['prd_warranty'] ?></p>
                    </div>
                    <div class="Product-content-info-ch"><i class="fas fa-undo"></i>
                        <p>Lỗi là đổi mới trong 1 tháng tại hơn 2017 siêu thị toàn quốc</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="Product-body">
            <div class="Product-body-article">
                <h2>Đặc điểm nổi bật của <?php echo $data_prd['prd_name'] ?></h2>
                <?php echo $data_prd['prd_details'] ?>
            </div>
            <div class="Product-body-detail">
                <h2>Thông số kỹ thuật</h2>
                <div class="Product-body-detail-list">
                    <div class="Product-body-detail-item">
                        <p>Màn hình:</p><span>IPS LCD, 6.22", HD+</span>
                    </div>
                    <div class="Product-body-detail-item">
                        <p>Hệ điều hành:</p><span>Android 9.0 (Pie)</span>
                    </div>
                    <div class="Product-body-detail-item">
                        <p>Camera sau:</p><span>Chính 12 MP & Phụ 2 MP</span>
                    </div>
                    <div class="Product-body-detail-item">
                        <p>CPU:</p><span>Snapdragon 439 8 nhân</span>
                    </div>
                    <div class="Product-body-detail-item">
                        <p>RAM:</p><span>4 GB</span>
                    </div>
                    <div class="Product-body-detail-item">
                        <p>Bộ nhớ trong:</p><span>64 GB</span>
                    </div>
                    <div class="Product-body-detail-item">
                        <p>Camera sau:</p><span>Chính 12 MP & Phụ 2 MP</span>
                    </div>
                    <div class="Product-body-detail-item">
                        <p>CPU:</p><span>Snapdragon 439 8 nhân</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="Product-detail">
            <div class="Product-detail-rating">
                <h3 class="Product-detail-rating__txt">63 đánh giá Xiaomi Redmi 8 (4GB/64GB)</h3>
                <div class="Product-detail-rating-ctn">
                    <div class="Product-detail-rating-ctn-ico">4.2<i class="fas fa-star"></i></div>
                    <div class="Product-detail-rating-ctn-list">
                        <div class="Product-detail-rating-ctn-item">
                            <span>5<i class="fas fa-star"></i></span>
                            <div class="Product-detail-rating-ctn-item-cl">
                                <div class="Product-detail-rating-ctn-item-cl-in"></div>
                            </div>
                            <p>29 đánh giá</p>
                        </div>
                        <div class="Product-detail-rating-ctn-item">
                            <span>5<i class="fas fa-star"></i></span>
                            <div class="Product-detail-rating-ctn-item-cl">
                                <div class="Product-detail-rating-ctn-item-cl-in"></div>
                            </div>
                            <p>29 đánh giá</p>
                        </div>
                        <div class="Product-detail-rating-ctn-item">
                            <span>5<i class="fas fa-star"></i></span>
                            <div class="Product-detail-rating-ctn-item-cl">
                                <div class="Product-detail-rating-ctn-item-cl-in"></div>
                            </div>
                            <p>29 đánh giá</p>
                        </div>
                        <div class="Product-detail-rating-ctn-item">
                            <span>5<i class="fas fa-star"></i></span>
                            <div class="Product-detail-rating-ctn-item-cl">
                                <div class="Product-detail-rating-ctn-item-cl-in"></div>
                            </div>
                            <p>29 đánh giá</p>
                        </div>
                        <div class="Product-detail-rating-ctn-item">
                            <span>5<i class="fas fa-star"></i></span>
                            <div class="Product-detail-rating-ctn-item-cl">
                                <div class="Product-detail-rating-ctn-item-cl-in"></div>
                            </div>
                            <p>29 đánh giá</p>
                        </div>
                    </div>
                    <div class="Product-detail-rating-ctn-btn">
                        <a class="Product-detail-rating-ctn-btn__txt" href="#">
                            <p>Gửi đánh giá của bạn</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="Product-detail-cmt">
                <div class="Product-detail-cmt__txt">Bình luận sản phẩm</div>
                <form action="" method="post">
                    <div class="Product-detail-cmt-txtarea">
                        <textarea name="" id="" cols="30" rows="5"></textarea>
                    </div>
                    <a href="#" class="Product-detail-cmt-btn">
                        <p>Gửi</p>
                    </a>
                </form>
                <div class="Product-detail-cmt-list">
                    <div class="Product-detail-cmt-item">
                        <div class="Product-detail-cmt-item__name">mỹ Dung</div>
                        <div class="Product-detail-cmt-item__txt">Điện thoại có tính năng nâng cao không nhỉ?</div>
                        <div class="Product-detail-cmt-item__time">35 phút trước </div>
                    </div>
                    <div class="Product-detail-cmt-item">
                        <div class="Product-detail-cmt-item__name">Mỹ Dung</div>
                        <div class="Product-detail-cmt-item__txt">Điện thoại có tính năng nâng cao không nhỉ?</div>
                        <div class="Product-detail-cmt-item__time">35 phút trước </div>
                    </div>
                    <div class="Product-detail-cmt-item">
                        <div class="Product-detail-cmt-item__name">Mỹ Dung</div>
                        <div class="Product-detail-cmt-item__txt">Điện thoại có tính năng nâng cao không nhỉ?</div>
                        <div class="Product-detail-cmt-item__time">35 phút trước </div>
                    </div>
                    <div class="Product-detail-cmt-item">
                        <div class="Product-detail-cmt-item__name">Mỹ Dung</div>
                        <div class="Product-detail-cmt-item__txt">Điện thoại có tính năng nâng cao không nhỉ?</div>
                        <div class="Product-detail-cmt-item__time">35 phút trước </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>