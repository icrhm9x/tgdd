<?php
$countOrder = mysqli_num_rows(mysqli_query($connect, "SELECT tr_id FROM transaction"));
$result = mysqli_query($connect, "SELECT SUM(tr_payment) as total FROM transaction");
$row = mysqli_fetch_assoc($result);
$totalSale = $row['total'];
$countProduct = mysqli_num_rows(mysqli_query($connect, "SELECT prd_id FROM product"));
$countCustomer = mysqli_num_rows(mysqli_query($connect, "SELECT cus_id FROM customer"));
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <h2>Section title</h2>
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="index.php?page_layout=transaction"
                               class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tổng số đơn hàng
                            </a>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $countOrder ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Doanh số (Tháng)
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php echo number_format($totalSale, 0, '', '.') ?>đ
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="index.php?page_layout=product"
                               class="text-xs font-weight-bold text-info text-uppercase mb-1">Sản phẩm</a>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $countProduct ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="index.php?page_layout=customer"
                               class="text-xs font-weight-bold text-warning text-uppercase mb-1">Khách hàng
                            </a>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $countCustomer ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>