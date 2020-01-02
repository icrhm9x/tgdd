<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $brand_name = mysqli_real_escape_string($connect, xss_clean($_POST['brand_name']));
    
    // check duplicate brand_name
    $sql = "SELECT * FROM brand WHERE brand_name = '$brand_name'";
    $query = mysqli_query($connect, $sql);
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['error'] = "Tên thương hiệu đã tồn tại.";
    } else {
        // img
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];

        $ext = strtolower(end(explode('.',$file_name)));
        $rename = uniqid(rand(), true).'.'.$ext;

        $brand_image = $rename;
        $brand_slug = to_slug($brand_name);
        $sql = "INSERT INTO brand (brand_name, brand_slug, brand_image) VALUES ('$brand_name','$brand_slug','$brand_image')";
        $query = mysqli_query($connect, $sql);
        $affected_rows = mysqli_affected_rows($connect);
        if ($affected_rows > 0) {
            move_uploaded_file($file_tmp, "img/brand/".$rename);
            // xóa ảnh trong thư mục tạm
            recursiveDelete("img/temporary");
            $_SESSION['success'] = "Thêm mới thành công";
            header('location: index.php?page_layout=brand');

        } else {
            $_SESSION['error'] = "Thêm mới thất bại";
            header('location: index.php?page_layout=brand');
        }
    }
}
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang tổng quan</a></li>
            <li class="breadcrumb-item"><a href="index.php?page_layout=brand">Thương hiệu</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thêm thương hiệu</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2">
        <h1 class="h2">Thêm thương hiệu</h1>
    </div>
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="alert alert-danger">
            <?php echo $_SESSION['error'];
            unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="brand_name">Tên thương hiệu:</label>
            <input required class="form-control" id="brand_name" name="brand_name" placeholder="Tên thương hiệu">
        </div>
        <div class="form-group">
            <label>Ảnh thương hiệu</label>
            <input required name="file" id="file" type="file" class="form-control-file">
            <br>
            <div class="Add-brand__image">
                <img src="" class="img-fluid" id="js-img">
            </div>
            <input type="button" class="btn btn-primary btn-sm mt-3" value="Upload" id="js-uploadFile">
        </div>
        <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
    </form>
</main>