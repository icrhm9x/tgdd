<?php
    if(isset($_GET['page']) && filter_var($_GET['page'], FILTER_VALIDATE_INT)){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
    //gán số lượng sp cần hiển thị tren 1 trang
    $rows_per_page = 5;
    //công thức
    $per_row = $page * $rows_per_page - $rows_per_page;
    
    $paginate = pagination("SELECT prd_id FROM product", $rows_per_page, $page, $connect);

    $sql = "SELECT p.*, c.cat_name, b.brand_name FROM product AS p INNER JOIN category AS c ON p.cat_id = c.cat_id INNER JOIN brand AS b ON p.brand_id = b.brand_id ORDER BY p.prd_id DESC LIMIT $per_row, $rows_per_page";
    $query = mysqli_query($connect, $sql);
?>
<script>
function delPrd(name)
{
return confirm('bạn muốn xóa sản phẩm: '+name+' ?');
}
</script>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang tổng quan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Sản phẩm</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="index.php?page_layout=add_product">
                <button type="button" class="btn btn-success"><i class="fas fa-plus mr-1"></i>Thêm mới</button>
            </a>
        </div>
    </div>
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="alert alert-success">
            <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
        </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="alert alert-danger">
            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>
    <table class="table">
        <thead>
            <tr class="table-active">
                <th scope="col">#</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá - Giảm giá</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Thương hiệu</th>
                <th scope="col">Ảnh sản phẩm</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Nổi bật</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_assoc($query)){ ?>
            <tr>
                <th scope="row"><?php echo $data['prd_id'] ?></th>
                <td><?php echo $data['prd_name'] ?></td>
                <td>
                    <p><?php echo number_format($data['prd_price'],0,',','.') ?>₫</p>
                    <p>-<?php echo number_format($data['prd_sale'],0,',','.') ?>₫</p>
                </td>
                <td><?php echo $data['cat_name'] ?></td>
                <td><?php echo $data['brand_name'] ?></td>
                <td style="height:125px" ><img src="img/product/<?php echo $data['prd_image'] ?>" class="img-fluid Product__image"></td>
                <td><h6><span class="badge 
                <?php if($data['prd_status']==1){echo 'badge-success';}elseif($data['prd_status']==2){echo 'badge-warning';}else{echo 'badge-secondary';} ?>">
                <?php if($data['prd_status']==1){echo 'Còn hàng';}elseif($data['prd_status']==2){echo 'Sắp ra mắt';}else{echo 'Hết hàng';} ?></span></h6></td>
                <td><h6><a href="#" class="badge 
                <?php if($data['prd_featured']==1){echo 'badge-danger';}else{echo 'badge-secondary';} ?>">
                <?php if($data['prd_featured']==1){echo 'Nổi bật';}else{echo 'Không';} ?></a></h6></td>
                <td>
                    <a href="index.php?page_layout=edit_product&prd_id=<?php echo $data['prd_id'] ?>"><button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-pencil-alt"></i>sửa</button></a>
                    <a onclick="return delPrd('<?php echo $data['prd_name'];?>')" href="index.php?page_layout=del_product&prd_id=<?php echo $data['prd_id'] ?>"><button type="button" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i>xóa</button></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <?php echo $paginate ?>
    </nav>

</main>