<?php
if(isset($_GET['cat_id']) && filter_var($_GET['cat_id'], FILTER_VALIDATE_INT)){
    $cat_id = $_GET['cat_id'];
    $query = mysqli_query($connect, "SELECT * FROM category WHERE cat_id = $cat_id");
    if(mysqli_num_rows($query) > 0){
        $data = mysqli_fetch_assoc($query);

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $cat_name = xss_clean($_POST['cat_name']);
            // check duplicate cat_name
            $sql = "SELECT * FROM category WHERE cat_name = '$cat_name' AND cat_id != $cat_id";
            $query = mysqli_query($connect, $sql);
            if(mysqli_num_rows($query) > 0){
                $_SESSION['error'] = "Tên danh mục đã tồn tại.";
            }else{
                $cat_slug = to_slug($cat_name);
                $sql = "UPDATE category SET cat_name = '$cat_name', cat_slug = '$cat_slug' WHERE cat_id = $cat_id";
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
        <div class="form-group">
            <label class="font-weight-bold" for="cat_name">Tên danh mục</label>
            <input required class="form-control" id="cat_name" name="cat_name" placeholder="Tên danh mục" value="<?php if(isset($data['cat_name'])){echo $data['cat_name'];} ?>">
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</main>