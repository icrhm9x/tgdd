<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cat_name = mysqli_real_escape_string($connect, xss_clean($_POST['cat_name']));
    $cat_icon = mysqli_real_escape_string($connect, xss_clean($_POST['cat_icon']));
    // nổi bật
    if(isset($_POST['cat_featured'])){
        $cat_featured = 1;
    }else{
        $cat_featured = 0;
    }
    // check duplicate cat_name
    $sql = "SELECT * FROM category WHERE cat_name = '$cat_name'";
    $query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($query) > 0){
        $_SESSION['error'] = "Tên danh mục đã tồn tại.";
    }else{
        $cat_slug = to_slug($cat_name);
        $sql = "INSERT INTO category (cat_name, cat_slug, cat_icon, cat_featured) VALUES ('$cat_name','$cat_slug','$cat_icon','$cat_featured')";
        $query = mysqli_query($connect, $sql);
        $_SESSION['success'] = "Thêm mới thành công";
        header('location: index.php?page_layout=category');
    }
}
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang tổng quan</a></li>
            <li class="breadcrumb-item"><a href="index.php?page_layout=category">Danh mục</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thêm danh mục</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2">
        <h1 class="h2">Thêm danh mục</h1>
    </div>
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="alert alert-danger">
            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>
    <form method="POST">
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="cat_name">Tên danh mục:</label>
                <input required class="form-control" id="cat_name" name="cat_name" placeholder="Tên danh mục">
            </div>
            <div class="form-group col-md-2">
                <label for="cat_icon">Icon:</label>
                <select name="cat_icon" class="form-control">
                    <option value="fas fa-mobile-alt">Điện thoại</option>
                    <option value="fas fa-tablet-alt">Tablet</option>
                    <option value="fas fa-laptop-code">Laptop</option>
                    <option value="fas fa-headphones-alt">Phụ kiện</option>
                    <option value="far fa-clock">Đồng hồ</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label>Danh mục nổi bật</label>
            <div class="form-check">
                <input class="form-check-input" name="cat_featured" type="checkbox" value="1" id="cat_featured">
                <label class="form-check-label font-weight-normal" for="cat_featured">
                    Nổi bật
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</main>