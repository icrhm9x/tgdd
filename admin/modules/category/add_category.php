<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cat_name = xss_clean($_POST['cat_name']);
    // check duplicate cat_name
    $sql = "SELECT * FROM category WHERE cat_name = '$cat_name'";
    $query = mysqli_query($connect, $sql);
    if(mysqli_num_rows($query) > 0){
        $_SESSION['error'] = "Tên danh mục đã tồn tại.";
    }else{
        $cat_slug = to_slug($cat_name);
        $sql = "INSERT INTO category (cat_name, cat_slug) VALUES ('$cat_name','$cat_slug')";
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
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="alert alert-danger">
            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>
    <form method="POST">
        <div class="form-group">
            <label class="font-weight-bold" for="cat_name">Tên danh mục</label>
            <input required class="form-control" id="cat_name" name="cat_name" placeholder="Tên danh mục">
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</main>