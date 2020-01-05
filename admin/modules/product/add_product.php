<?php
if(!defined('SECURITY')){
	header('location: ../../index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data =
        [
            "prd_name"          => postInput('prd_name'),
            "prd_slug"          => to_slug(postInput('prd_name')),
            "brand_id"          => postInput('brand_id'),
            "prd_price"         => postInput('prd_price'),
            "prd_sale"          => postInput('prd_sale'),
            "prd_warranty"      => postInput('prd_warranty'),
            "prd_accessories"   => postInput('prd_accessories'),
            "prd_new"           => postInput('prd_new'),
            "prd_promotion"     => postInput('prd_promotion'),
            "cat_id"            => postInput('cat_id'),
            "prd_status"        => postInput('prd_status'),
            "prd_featured"      => postInput('prd_featured'),
            "prd_details"       => postInput('prd_details')
        ];

    $errors = [];
    if (postInput('prd_promotion') == '') {
        $errors['prd_promotion'] = "Vui lòng nhập khuyến mãi";
    }
    if (postInput('prd_details') == '') {
        $errors['prd_details'] = "Vui lòng mô tả sản phẩm";
    }
    // nổi bật
    if(isset($_POST['prd_featured'])){
        $data['prd_featured'] = $_POST['prd_featured'];
    }else{
        $data['prd_featured'] = 0;
    }
    // img
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    // tao mot array de xem file upload co thuoc dinh dang cho phep
    $allowed = array("jpeg","jpg","png");
    // lấy đuôi file
    $ext = strtolower(end(explode('.',$file_name)));
    if (!in_array($ext, $allowed) || $file_size > 307200) {
        $errors['file'] = "Vui lòng upload file, có phần mở rộng là .jpg .jpeg .png và dung lượng dưới 200mb";
    }

    $rename = uniqid(rand(), true).'.'.$ext;

    $data['prd_image'] = $rename;
    
    if (empty($errors)){
        $affected_rows = insert("product", $data);

        if ($affected_rows > 0) {
            move_uploaded_file($file_tmp, "img/product/".$rename);
            // xóa ảnh trong thư mục tạm
            recursiveDelete("img/temporary");
            $_SESSION['success'] = "Thêm mới thành công";
            header('location: index.php?page_layout=product');

        } else {
            $_SESSION['error'] = "Thêm mới thất bại";
            header('location: index.php?page_layout=product');
        }
    }
}
$query_cat = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id ASC");
$query_bra = mysqli_query($connect, "SELECT * FROM brand ORDER BY brand_id ASC");

?>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang tổng quan</a></li>
            <li class="breadcrumb-item"><a href="index.php?page_layout=category">Danh mục</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thêm danh mục</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2">
        <h1 class="h2">Thêm sản phẩm</h1>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col-md-6 pr-5">
                <div class="form-group">
                    <label>Tên sản phẩm:</label>
                    <input required name="prd_name" type="text" class="form-control" value="<?php if(isset($data['prd_name'])){echo $data['prd_name'];} ?>">
                </div>
                <div class="form-group">
                    <label>Thương hiệu</label>
                    <select name="brand_id" class="form-control">
                    <?php while($row_brand = mysqli_fetch_assoc($query_bra)){ ?>
                        <option value=<?php echo $row_brand['brand_id']; ?> <?php if(isset($data['brand_id']) && $row_brand['brand_id']==$data['brand_id']){echo 'selected';} ?>><?php echo $row_brand['brand_name']; ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Giá sản phẩm:</label>
                    <input required name="prd_price" type="number" min="0" class="form-control" value="<?php if(isset($data['prd_price'])){echo $data['prd_price'];} ?>">
                </div>
                <div class="form-group">
                    <label>Giảm giá:</label>
                    <input required name="prd_sale" type="number" min="0" class="form-control" value="<?php if(isset($data['prd_sale'])){echo $data['prd_sale'];} ?>">
                </div>
                <div class="form-group">
                    <label>Bảo hành:</label>
                    <input required name="prd_warranty" type="text" class="form-control" value="<?php if(isset($data['prd_warranty'])){echo $data['prd_warranty'];} ?>">
                </div>
                <div class="form-group">
                    <label>Phụ kiện:</label>
                    <input required name="prd_accessories" type="text" class="form-control" value="<?php if(isset($data['prd_accessories'])){echo $data['prd_accessories'];} ?>">
                </div>
                <div class="form-group">
                    <label>Tình trạng:</label>
                    <input required name="prd_new" type="text" class="form-control" value="<?php if(isset($data['prd_new'])){echo $data['prd_new'];} ?>">
                </div>
                <div class="form-group">
                    <label>Khuyến mãi:</label>
                    <textarea name="prd_promotion" class="form-control" rows="2"><?php if(isset($data['prd_promotion'])){echo $data['prd_promotion'];} ?></textarea>
                    <small class="form-text text-danger"><?php if(isset($errors['prd_promotion'])){echo $errors['prd_promotion'];} ?></small>
                    <script>
                        CKEDITOR.replace('prd_promotion');
                    </script>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Ảnh sản phẩm</label>
                    <input required name="file" id="file" type="file" class="form-control-file">
                    <br>
                    <div class="Add-product__image">
                        <img src="" class="img-fluid" id="js-img">
                    </div>
                    <input type="button" class="btn btn-primary btn-sm mt-3" value="Upload" id="js-uploadFile">
                    <?php if (isset($errors['file'])) : ?>
                            <p class="text-danger"><?php echo $errors['file'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label>Danh mục</label>
                    <select name="cat_id" class="form-control">
                    <?php while($row_cat = mysqli_fetch_assoc($query_cat)){ ?>
                        <option value=<?php echo $row_cat['cat_id']; ?> <?php if(isset($data['cat_id']) && $row_cat['cat_id']==$data['cat_id']){echo 'selected';} ?>><?php echo $row_cat['cat_name']; ?></option>
                    <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Trạng thái</label>
                    <select name="prd_status" class="form-control">
                        <option value=1 <?php if(isset($data['prd_status']) && $data['prd_status']==1){echo 'selected';} ?>>Còn hàng</option>
                        <option value=2 <?php if(isset($data['prd_status']) && $data['prd_status']==2){echo 'selected';} ?>>Sắp ra mắt</option>
                        <option value=3 <?php if(isset($data['prd_status']) && $data['prd_status']==3){echo 'selected';} ?>>Hết hàng</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Sản phẩm nổi bật</label>
                    <div class="form-check">
                        <input class="form-check-input" name="prd_featured" type="checkbox" value="1" id="prd_featured" <?php if(isset($data['prd_featured']) && $data['prd_featured']==1){echo 'checked';} ?>>
                        <label class="form-check-label font-weight-normal" for="prd_featured">
                            Nổi bật
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Mô tả sản phẩm</label>
                    <textarea name="prd_details" class="form-control" rows="4"><?php if(isset($data['prd_details'])){echo $data['prd_details'];} ?></textarea>
                    <small class="form-text text-danger"><?php if(isset($errors['prd_details'])){echo $errors['prd_details'];} ?></small>
                    <script>
                        CKEDITOR.replace('prd_details');
                    </script>
                </div>
            </div>
            <div class="col-md-12 mb-5">
                <div class="form-group">
                    <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                </div>
            </div>
        </div>
    </form>
</main>