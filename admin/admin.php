<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TGDD - Admin</title>
    <link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"></link>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Thế giới di động</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link <?php if(!isset($_GET['page_layout'])){echo 'active';} ?>" href="index.php">
                                <span data-feather="home"></span>
                                Trang tổng quan <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($_GET['page_layout']=='category'){echo 'active';} ?>" href="index.php?page_layout=category">
                                <span data-feather="file-text"></span>
                                Danh mục
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($_GET['page_layout']=='product'){echo 'active';} ?>" href="index.php?page_layout=product">
                                <span data-feather="shopping-cart"></span>
                                Sản phẩm
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($_GET['page_layout']=='order'){echo 'active';} ?>" href="#">
                                <span data-feather="file"></span>
                                Đơn hàng
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($_GET['page_layout']=='user'){echo 'active';} ?>" href="index.php?page_layout=user">
                                <span data-feather="users"></span>
                                Người dùng
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($_GET['page_layout']=='article'){echo 'active';} ?>" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Tin tức
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <?php
            //Master page here!
            if(isset($_GET['page_layout'])){
                switch ($_GET['page_layout']) {
                    //user
                    case 'user': include_once('modules/user/user.php'); break;
                    case 'add_user': include_once('modules/user/add_user.php'); break;
                    case 'edit_user': include_once('modules/user/edit_user.php'); break;
                    //category
                    case 'category': include_once('modules/category/category.php'); break;
                    case 'add_category': include_once('modules/category/add_category.php'); break;
                    case 'edit_category': include_once('modules/category/edit_category.php'); break;
                    case 'del_category': include_once('modules/category/del_category.php'); break;
                    //product
                    case 'product': include_once('modules/product/product.php'); break;
                    case 'add_product': include_once('modules/product/add_product.php'); break;
                    case 'edit_product': include_once('modules/product/edit_product.php'); break;
                    //default
                    default: include_once('sub_admin.php'); break;
                }
            }else{
                include_once('sub_admin.php');
            }
            ?>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/script.js"></script>
</body>

</html>