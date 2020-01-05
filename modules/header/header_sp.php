
    <header class="only-sp">
        <div class="js-nav Nav">
            <div class="Nav-content">
                <a class="Nav__logo" href="#">
                    <img src="images/tgdd-logo-sp.png" alt="logo">
                </a>
                <div class="Nav-search">
                    <div class="Nav-search__input">
                        <input type="text" placeholder="Bạn tìm mua gì">
                    </div>
                    <div class="Nav-search__btn">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <div class="Nav-hamburger">
                    <div class="js-navHamburger Nav-hamburger-content">
                        <span class="Nav-hamburger-content__ico"></span>
                        <span class="Nav-hamburger-content__ico"></span>
                        <span class="Nav-hamburger-content__ico"></span>
                    </div>
                </div>
            </div>
            <div class="Nav-menu">
                <div class="Nav-menu-content">
                    <div class="Nav-menu-content-list">
                        <?php
                        $query_cat = mysqli_query($connect, "SELECT * FROM category WHERE cat_featured = 1 ORDER BY cat_id ASC");
                        while($data_cat = mysqli_fetch_assoc($query_cat)){
                        ?>
                        <a class="Nav-menu-content-item" href="#">
                            <h3><?php echo $data_cat['cat_name'] ?></h3>
                        </a>
                        <?php } ?>
                        <a class="Nav-menu-content-item" href="#">
                            <h4>Mắt kính<br>thời trang</h4>
                        </a>
                        <a class="Nav-menu-content-item" href="#">
                            <h4>Máy cũ<br>giá rẻ</h4>
                        </a>
                        <a class="Nav-menu-content-item" href="#">
                            <h4>Sim số<br>thẻ cào</h4>
                        </a>
                        <a class="Nav-menu-content-item" href="#">
                            <h4>Trả góp<br>Điện nước</h4>
                        </a>
                        <a class="Nav-menu-content-item" href="#">
                            <h4>Tin tức<br>công nghệ</h4>
                        </a>
                        <a class="Nav-menu-content-item" href="#">
                            <h4>Hỏi đáp</h4>
                        </a>
                        <a class="Nav-menu-content-item" href="#">
                            <h4>1.990<br>siêu thị</h4>
                        </a>
                    </div>
                    <div class="Nav-menu-content-phone">
                        <p>Gọi mua hàng: </p>
                        <a href="#">
                            <i class="fas fa-phone-square-alt"></i>
                            1800.1060
                        </a>
                        <span>(7:30 - 22:00)</span>
                    </div>
                </div>
            </div>
        </div>
    </header>