<?php
$query = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id ASC");
?>
<script>
function delCat(name)
{
return confirm('bạn muốn xóa danh mục: '+name+' ?');
}
</script>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang tổng quan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh mục</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Danh mục</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="index.php?page_layout=add_category">
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
                <th scope="col">Tên danh mục</th>
                <th scope="col">Icon</th>
                <th scope="col">Hiển thị</th>
                <th scope="col">Ngày thêm</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_assoc($query)){ ?>
            <tr>
                <th scope="row"><?php echo $data['cat_id'] ?></th>
                <td><?php echo $data['cat_name'] ?></td>
                <td><i class="<?php echo $data['cat_icon'] ?> Cat_icon"></i></td>
                <td><h6><a href="#" class="badge 
                <?php if($data['cat_featured']==1){echo 'badge-success';}else{echo 'badge-secondary';} ?>">
                <?php if($data['cat_featured']==1){echo 'Hiển thị';}else{echo 'Không';} ?></a></h6></td>
                <td><?php echo $data['created_at'] ?></td>
                <td>
                    <a href="index.php?page_layout=edit_category&cat_id=<?php echo $data['cat_id'] ?>">
                        <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-pencil-alt"></i>sửa</button>
                    </a>
                    <a onclick="return delCat('<?php echo $data['cat_name'];?>')" href="index.php?page_layout=del_category&cat_id=<?php echo $data['cat_id'] ?>">
                        <button type="button" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i>xóa</button>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</main>