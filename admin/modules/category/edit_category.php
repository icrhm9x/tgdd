<?php
if(isset($_GET['cat_id']) && filter_var($_GET['cat_id'], FILTER_VALIDATE_INT)){
    $cat_id = $_GET['cat_id'];
    $query = mysqli_query($connect, "SELECT * FROM category WHERE cat_id = $cat_id");
    if(mysqli_num_rows($query) > 0){
        $data = mysqli_fetch_assoc($query);

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
            $sql = "SELECT * FROM category WHERE cat_name = '$cat_name' AND cat_id != $cat_id";
            $query = mysqli_query($connect, $sql);
            if(mysqli_num_rows($query) > 0){
                $_SESSION['error'] = "Tên danh mục đã tồn tại.";
            }else{
                $cat_slug = to_slug($cat_name);
                $sql = "UPDATE category SET cat_name = '$cat_name', cat_slug = '$cat_slug', cat_icon = '$cat_icon', cat_featured = '$cat_featured' WHERE cat_id = $cat_id";
                $query = mysqli_query($connect, $sql);
                $_SESSION['success'] = "Cập nhật thành công";
                header('location: index.php?page_layout=category');
            }
        }
    }else{
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        header('location: index.php?page_layout=category');
    }
}else{
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    header('location: index.php?page_layout=category');
}
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang tổng quan</a></li>
            <li class="breadcrumb-item"><a href="index.php?page_layout=category">Danh mục</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cập nhật danh mục</li>
        </ol>
    </nav>
    <form method="POST">
        <div class="form-row">
            <div class="form-group col-md-9">
                <label for="cat_name">Tên danh mục:</label>
                <input required class="form-control" id="cat_name" name="cat_name" placeholder="Tên danh mục" value="<?php if(isset($data['cat_name'])){echo $data['cat_name'];} ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="cat_icon">Icon:</label>
                <select name="cat_icon" class="form-control">
                    <option value="fas fa-mobile-alt" <?php if(isset($data['cat_icon']) && $data['cat_icon']=='fas fa-mobile-alt'){echo 'selected';} ?>>Điện thoại</option>
                    <option value="fas fa-tablet-alt" <?php if(isset($data['cat_icon']) && $data['cat_icon']=='fas fa-tablet-alt'){echo 'selected';} ?>>Tablet</option>
                    <option value="fas fa-laptop-code" <?php if(isset($data['cat_icon']) && $data['cat_icon']=='fas fa-laptop-code'){echo 'selected';} ?>>Laptop</option>
                    <option value="fas fa-headphones-alt" <?php if(isset($data['cat_icon']) && $data['cat_icon']=='fas fa-headphones-alt'){echo 'selected';} ?>>Phụ kiện</option>
                    <option value="far fa-clock" <?php if(isset($data['cat_icon']) && $data['cat_icon']=='far fa-clock'){echo 'selected';} ?>>Đồng hồ</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label>Danh mục nổi bật</label>
            <div class="form-check">
                <input class="form-check-input" name="cat_featured" type="checkbox" value="1" id="cat_featured" <?php if(isset($data['cat_featured']) && $data['cat_featured']==1){echo 'checked';} ?>>
                <label class="form-check-label font-weight-normal" for="cat_featured">
                    Nổi bật
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</main>