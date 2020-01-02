<?php
if(isset($_GET['brand_id']) && filter_var($_GET['brand_id'], FILTER_VALIDATE_INT)){
    $brand_id = $_GET['brand_id'];
    $query = mysqli_query($connect, "SELECT * FROM brand WHERE brand_id = $brand_id");
    if(mysqli_num_rows($query) > 0){
        $brand_data = mysqli_fetch_assoc($query);

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $brand_name = xss_clean($_POST['brand_name']);
            // check duplibrande brand_name
            $sql = "SELECT * FROM brand WHERE brand_name = '$brand_name' AND brand_id != $brand_id";
            $query = mysqli_query($connect, $sql);
            if(mysqli_num_rows($query) > 0){
                $_SESSION['error'] = "Tên thương hiệu đã tồn tại.";
            }else{
                // img
                if($_FILES['file']['name']==''){
                    $brand_image = $brand_data['brand_image'];
                }else{
                    $file_name = $_FILES['file']['name'];
                    $file_tmp = $_FILES['file']['tmp_name'];
                    $ext = strtolower(end(explode('.',$file_name)));
                    $rename = uniqid(rand(), true).'.'.$ext;
                
                    $brand_image = $rename;
                    // xóa ảnh sản phẩm cũ
                    if (file_exists('img/brand/'.$brand_data['brand_image'])){
                        unlink('img/brand/'.$brand_data['brand_image']);
                    }

                }
                $brand_slug = to_slug($brand_name);
                $sql = "UPDATE brand SET brand_name = '$brand_name', brand_slug = '$brand_slug', brand_image = '$brand_image' WHERE brand_id = $brand_id";
                $query = mysqli_query($connect, $sql);
                $affected_rows = mysqli_affected_rows($connect);
                if ($affected_rows > 0) {
                    move_uploaded_file($file_tmp, "img/brand/".$rename);
                    // xóa ảnh trong thư mục tạm
                    recursiveDelete("img/temporary");
                    $_SESSION['success'] = "Cập nhật thành công";
                    header('location: index.php?page_layout=brand');

                } else {
                    $_SESSION['error'] = "Cập nhật thất bại";
                    header('location: index.php?page_layout=brand');
                }
            }
        }
    }else{
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        header('location: index.php?page_layout=brand');
    }
}else{
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    header('location: index.php?page_layout=brand');
}
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang tổng quan</a></li>
            <li class="breadcrumb-item"><a href="index.php?page_layout=brand">Thương hiệu</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cập nhật thương hiệu</li>
        </ol>
    </nav>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="brand_name">Tên thương hiệu:</label>
            <input required class="form-control" id="brand_name" name="brand_name" placeholder="Tên thương hiệu" value="<?php if(isset($brand_data['brand_name'])){echo $brand_data['brand_name'];} ?>">
        </div>
        <div class="form-group">
            <label>Ảnh thương hiệu</label>
            <input name="file" id="file" type="file" class="form-control-file">
            <br>
            <div class="Add-brand__image">
                <img src="img/brand/<?php if(isset($brand_data['brand_image'])){echo $brand_data['brand_image'];} ?>" class="img-fluid" id="js-img">
            </div>
            <input type="button" class="btn btn-primary btn-sm mt-3" value="Upload" id="js-uploadFile">
        </div>
        <button name="sbm" type="submit" class="btn btn-success">Lưu</button>
    </form>
</main>