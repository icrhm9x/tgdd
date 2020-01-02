<?php
if(isset($_GET['prd_id']) && filter_var($_GET['prd_id'], FILTER_VALIDATE_INT, array('min_range' => 1))){
    $prd_id = $_GET['prd_id'];
    $query = mysqli_query($connect, "SELECT * FROM product WHERE prd_id = $prd_id");
    if(mysqli_num_rows($query) > 0){
        $prd_data = mysqli_fetch_assoc($query);

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
            if($_FILES['file']['name']==''){
                $data['prd_image'] = $prd_data['prd_image'];
            }else{
                $file_name = $_FILES['file']['name'];
                $file_tmp = $_FILES['file']['tmp_name'];
                $ext = strtolower(end(explode('.',$file_name)));
                $rename = uniqid(rand(), true).'.'.$ext;
            
                $data['prd_image'] = $rename;
                // xóa ảnh sản phẩm cũ
                if (file_exists('img/product/'.$prd_data['prd_image'])){
                    unlink('img/product/'.$prd_data['prd_image']);
                }

            }
            
            if (empty($errors)){
                $conditions['prd_id'] = $prd_id;
                $affected_rows = update("product", $data, $conditions);

                if ($affected_rows > 0) {
                    move_uploaded_file($file_tmp, "img/product/".$rename);
                    recursiveDelete("img/temporary");
                    $_SESSION['success'] = "Cập nhật thành công";
                    header('location: index.php?page_layout=product');
        
                } else {
                    $_SESSION['success'] = "Dữ liệu sản phẩm không thay đổi";
                    header('location: index.php?page_layout=product');
                }
            }
        }
    }else{
        $_SESSION['error'] = "Sản phẩm không tồn tại";
        header('location: index.php?page_layout=product');
    }
}else{
    $_SESSION['error'] = "Sản phẩm không tồn tại";
    header('location: index.php?page_layout=product');
}
$query_cat = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id ASC");
$query_bra = mysqli_query($connect, "SELECT * FROM brand ORDER BY brand_id ASC");
?>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang tổng quan</a></li>
            <li class="breadcrumb-item"><a href="index.php?page_layout=product">Sản phẩm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cập nhật sản phẩm</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2">
        <h1 class="h2">Cập nhật sản phẩm</h1>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col-md-6 pr-5">
                <div class="form-group">
                    <label>Tên sản phẩm:</label>
                    <input required name="prd_name" type="text" class="form-control" value="<?php if(isset($prd_data['prd_name'])){echo $prd_data['prd_name'];} ?>">
                </div>
                <div class="form-group">
                    <label>Thương hiệu</label>
                    <select name="brand_id" class="form-control">
                    <?php while($brand_row = mysqli_fetch_assoc($query_bra)){ ?>
                        <option value=<?php echo $brand_row['brand_id']; ?> <?php if(isset($prd_data['brand_id']) && $brand_row['brand_id']==$prd_data['brand_id']){echo 'selected';} ?>><?php echo $brand_row['brand_name']; ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Giá sản phẩm:</label>
                    <input required name="prd_price" type="number" min="0" class="form-control" value="<?php if(isset($prd_data['prd_price'])){echo $prd_data['prd_price'];} ?>">
                </div>
                <div class="form-group">
                    <label>Giảm giá:</label>
                    <input required name="prd_sale" type="number" min="0" class="form-control" value="<?php if(isset($prd_data['prd_sale'])){echo $prd_data['prd_sale'];} ?>">
                </div>
                <div class="form-group">
                    <label>Bảo hành:</label>
                    <input required name="prd_warranty" type="text" class="form-control" value="<?php if(isset($prd_data['prd_warranty'])){echo $prd_data['prd_warranty'];} ?>">
                </div>
                <div class="form-group">
                    <label>Phụ kiện:</label>
                    <input required name="prd_accessories" type="text" class="form-control" value="<?php if(isset($prd_data['prd_accessories'])){echo $prd_data['prd_accessories'];} ?>">
                </div>
                <div class="form-group">
                    <label>Tình trạng:</label>
                    <input required name="prd_new" type="text" class="form-control" value="<?php if(isset($prd_data['prd_new'])){echo $prd_data['prd_new'];} ?>">
                </div>
                <div class="form-group">
                    <label>Khuyến mãi:</label>
                    <textarea name="prd_promotion" class="form-control" rows="2"><?php if(isset($prd_data['prd_promotion'])){echo $prd_data['prd_promotion'];} ?></textarea>
                    <small class="form-text text-danger"><?php if(isset($errors['prd_promotion'])){echo $errors['prd_promotion'];} ?></small>
                    <script>
                        CKEDITOR.replace('prd_promotion');
                    </script>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Ảnh sản phẩm</label>
                    <input name="file" id="file" type="file" class="form-control-file">
                    <br>
                    <div class="Add-product__image">
                        <img src="img/product/<?php if(isset($prd_data['prd_image'])){echo $prd_data['prd_image'];} ?>" class="img-fluid" id="js-img">
                    </div>
                    <input type="button" class="btn btn-primary btn-sm mt-3" value="Upload" id="js-uploadFile">
                </div>
                <div class="form-group">
                    <label>Danh mục</label>
                    <select name="cat_id" class="form-control">
                    <?php while($cat_row = mysqli_fetch_assoc($query_cat)){ ?>
                        <option value=<?php echo $cat_row['cat_id']; ?> <?php if(isset($prd_data['cat_id']) && $cat_row['cat_id']==$prd_data['cat_id']){echo 'selected';} ?>><?php echo $cat_row['cat_name']; ?></option>
                    <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Trạng thái</label>
                    <select name="prd_status" class="form-control">
                        <option value=1 <?php if(isset($prd_data['prd_status']) && $prd_data['prd_status']==1){echo 'selected';} ?>>Còn hàng</option>
                        <option value=2 <?php if(isset($prd_data['prd_status']) && $prd_data['prd_status']==2){echo 'selected';} ?>>Sắp ra mắt</option>
                        <option value=3 <?php if(isset($prd_data['prd_status']) && $prd_data['prd_status']==3){echo 'selected';} ?>>Hết hàng</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Sản phẩm nổi bật</label>
                    <div class="form-check">
                        <input class="form-check-input" name="prd_featured" type="checkbox" value="1" id="prd_featured" <?php if(isset($prd_data['prd_featured']) && $prd_data['prd_featured']==1){echo 'checked';} ?>>
                        <label class="form-check-label font-weight-normal" for="prd_featured">
                            Nổi bật
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Mô tả sản phẩm</label>
                    <textarea name="prd_details" class="form-control" rows="4"><?php if(isset($prd_data['prd_details'])){echo $prd_data['prd_details'];} ?></textarea>
                    <small class="form-text text-danger"><?php if(isset($errors['prd_details'])){echo $errors['prd_details'];} ?></small>
                    <script>
                        CKEDITOR.replace('prd_details');
                    </script>
                </div>
            </div>
            <div class="col-md-12 mb-5">
                <div class="form-group">
                    <button name="sbm" type="submit" class="btn btn-success">Lưu</button>
                </div>
            </div>
        </div>
    </form>
</main>