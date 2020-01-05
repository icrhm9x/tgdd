<?php
    if(isset($_GET['page']) && filter_var($_GET['page'], FILTER_VALIDATE_INT)){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
    //gán số lượng sp cần hiển thị tren 1 trang
    $rows_per_page = 10;
    //công thức
    $per_row = $page * $rows_per_page - $rows_per_page;
    
    $paginate = pagination("SELECT brand_id FROM brand", $rows_per_page, $page, $connect);

    $query = mysqli_query($connect, "SELECT * FROM brand ORDER BY brand_id ASC LIMIT $per_row, $rows_per_page");
?>
<script>
function delBrand(name)
{
return confirm('bạn muốn xóa danh mục: '+name+' ?');
}
</script>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang tổng quan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thương hiệu</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Thương hiệu</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="index.php?page_layout=add_brand">
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
    <table class="table table-hover">
        <thead>
            <tr class="table-active">
                <th scope="col">#</th>
                <th scope="col">Tên thương hiệu</th>
                <th scope="col">Logo</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_assoc($query)){ ?>
            <tr>
                <th scope="row"><?php echo $data['brand_id'] ?></th>
                <td><?php echo $data['brand_name'] ?></td>
                <td><img src="img/brand/<?php echo $data['brand_image'] ?>" class="img-fluid Brand__image"></td>
                <td>
                    <a href="index.php?page_layout=edit_brand&brand_id=<?php echo $data['brand_id'] ?>"><button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-pencil-alt"></i>sửa</button></a>
                    <a onclick="return delBrand('<?php echo $data['brand_name'];?>')" href="index.php?page_layout=del_brand&brand_id=<?php echo $data['brand_id'] ?>"><button type="button" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i>xóa</button></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <?php echo $paginate ?>
    </nav>
</main>