<header class="only-pc">
    <div class="Responsive">
        <div class="Menu">
            <div class="Menu-wrap">
                <a class="Menu-wrap-logo" href="index.php">
                    <img src="images/tgdd-logo.png" alt="logo">
                </a>
                <div class="Menu-wrap-search">
                    <div class="Menu-wrap-search-input">
                        <input type="text" placeholder="Bạn tìm gì...">
                    </div>
                    <div class="Menu-wrap-search-btn">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
            <div class="Menu-list">
                <?php
                $query_cat = mysqli_query($connect, "SELECT * FROM category WHERE cat_featured = 1 ORDER BY cat_id ASC");
                while($data_cat = mysqli_fetch_assoc($query_cat)){
                ?>
                <a class="Menu-item" href="#">
                    <i class="<?php echo $data_cat['cat_icon'] ?>"></i>
                    <p><?php echo $data_cat['cat_name'] ?></p>
                </a>
                <?php } ?>
                <a class="Menu-item" href="#">
                    <i class="fas fa-mobile-alt"></i>
                    <p>điện thoại</p>
                </a>
                <a class="Menu-item" href="#">
                    <i class="far fa-newspaper"></i>
                    <p>tin tức</p>
                </a>
                <a class="Menu-item" href="#">
                    <i class="fab fa-whatsapp"></i>
                    <p>hỏi đáp</p>
                </a>
            </div>
            <div class="Menu-txt">
                <a class="Menu-txt-item" href="#">
                    <p>Sim số</p>
                    <p>Thẻ cào</p>
                </a>
                <a class="Menu-txt-item" href="#">
                    <p>Đóng tiền điện,</p>
                    <p>nước, trả góp</p>
                </a>
            </div>
        </div>
    </div>
</header>