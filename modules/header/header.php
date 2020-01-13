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
                $query_cat = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id ASC");
                while($data_cat = mysqli_fetch_assoc($query_cat)){
                ?>
                <a class="Menu-item" href="index.php?page_layout=category&cat_id=<?php echo $data_cat['cat_id'] ?>">
                    <i class="<?php echo $data_cat['cat_icon'] ?>"></i>
                    <p><?php echo $data_cat['cat_name'] ?></p>
                </a>
                <?php } ?>
                <a class="Menu-item" href="#">
                    <i class="fas fa-history"></i>
                    <p>máy cũ</p>
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
                <p>Sim số</p><p>Thẻ cào</p>
                </a>
                <a class="Menu-txt-item" href="
                    <?php
                        if(isset($_SESSION['cus_id'])){
                            echo 'logout.php';
                        }elseif(isset($_COOKIE['remember'])){
                            echo 'logout.php';
                        }else{
                            echo "login.php";
                        }
                    ?>">
                    <?php
                        if(isset($_SESSION['cus_id'])){
                            echo 'Đăng xuất';
                        }elseif(isset($_COOKIE['remember'])){
                            echo 'Đăng xuất';
                        }else{
                            echo "Đăng nhập";
                        }
                    ?>
                </a>
            </div>
        </div>
    </div>
</header>