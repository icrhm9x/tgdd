<?php
$query = mysqli_query($connect, "SELECT * FROM customer ORDER BY cus_id DESC");
?>
<script>
function delCus(name)
{
return confirm('bạn muốn xóa khách hàng: '+name+' ?');
}
</script>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang tổng quan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Khách hàng</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Danh sách khách hàng</h1>
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
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Email</th>
                <th scope="col">Sđt</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_assoc($query)){ ?>
            <tr>
                <th scope="row"><?php echo $data['cus_id'] ?></th>
                <td><?php echo $data['cus_name'] ?></td>
                <td><?php echo $data['cus_email'] ?></td>
                <td><?php echo $data['cus_phone'] ?></td>
                <td><?php echo $data['cus_address'] ?></td>
                <td>                    
                    <a onclick="return delCus('<?php echo $data['cus_name'];?>')" href="index.php?page_layout=del_customer&cus_id=<?php echo $data['cus_id'] ?>">
                    <button type="button" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i>xóa</button></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</main>