<div class="Responsive">
        <div class="Promotion">
            <div class="Promotion-head">
                <h2>khuyến mãi hot nhất</h2>
            </div>
            <div class="Promotion-content">
                <div class="js-promoList Promotion-content-list">
                    <?php
                    $query_prd = mysqli_query($connect, "SELECT * FROM product WHERE prd_sale >= 300000 LIMIT 15");
                    $n = 1;
                    while($data_prd = mysqli_fetch_assoc($query_prd)){
                    ?>
                    <a class="Promotion-content-item" id="promo<?php echo $n ?>" href="#">
                        <div class="Promotion-content-item__img">
                            <img src="admin/img/product/<?php echo $data_prd['prd_image'] ?>" alt="">
                            <div class="Promotion-content-item-discount">
                                <p>giảm <?php echo number_format($data_prd['prd_sale'],0,'','.') ?>₫</p>
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <div class="Promotion-content-item-detail">
                            <h3 class="Promotion-content-item-detail__name"><?php echo $data_prd['prd_name'] ?></h3>
                            <p class="Promotion-content-item-detail__price"><?php echo number_format($data_prd['prd_price']-$data_prd['prd_sale'],0,'','.') ?>₫<span><?php echo number_format($data_prd['prd_price'],0,'','.') ?>₫</span></p>
                            <p class="Promotion-content-item-detail__txt">Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)</p>
                        </div>
                    </a>
                    <?php $n++; } ?>
                </div>
                <div class="js-promoBtnPrev Promotion-content__btn Promotion-content__btn--prev">‹</div>
                <div class="js-promoBtnNext Promotion-content__btn Promotion-content__btn--next">›</div>
            </div>
        </div>
    </div>