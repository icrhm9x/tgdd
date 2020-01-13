<?php
ob_start();
session_start();
if(isset($_SESSION['cus_id']) && isset($_SESSION['cus_name']) && isset($_SESSION['cus_email'])){
    header('location: index.php');
    exit;
}else{
    if (isset($_COOKIE['remember'])){
        header('location: index.php');
        exit;
    }
}
include_once('config/connect.php');
include_once('config/function.php');
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once DOC_ROOT . '/tgdd/common/php/common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <?php
    insertHeadLink();
    insertCSS('/tgdd/css/header.css');
    insertCSS('/tgdd/css/register.css');
    insertCSS('/tgdd/css/login.css');
    ?>
</head>

<body class="">
    <!----------------  Header  ---------------->
    <?php
    include_once('modules/header/header.php');
    include_once('modules/header/header_sp.php');
    ?>
    <?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$cus_email = xss_clean($_POST['cus_email']);
        $cus_pass = xss_clean(SHA1($_POST['cus_pass']));
        $remember = ((isset($_POST['remember'])!=0)?1:"");
		$sql = "SELECT * FROM customer WHERE cus_email = '$cus_email' AND cus_pass = '$cus_pass'";
		$query = mysqli_query($connect, $sql);
		$num_rows = mysqli_num_rows($query);
		if($num_rows > 0){
            list($cus_id, $cus_name, $cus_email) = mysqli_fetch_array($query, MYSQLI_NUM);
            $_SESSION['cus_id'] = $cus_id;
			$_SESSION['cus_name'] = $cus_name;
            $_SESSION['cus_email'] = $cus_email;
            $cookie_time = 3600*24*7;
            if($remember == 1){
                setcookie ('remember', uniqid(rand(), true), time() + $cookie_time);
            }
			header('location: index.php');
		}else{
            $_SESSION['error'] = "Tài khoản hoặc Mật khẩu không đúng!";
		}
	}
	?>
    <section>
        <p class="Register__txt">Đăng nhập</p>
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
        <aside class="leftcont">
            <form action="" method="post">
                <div class="cvbox">
                    <div class="text">Email:</div>
                    <div class="cvrow">
                        <input required type="email" name="cus_email" placeholder="Email" value="<?php echo isset($cus_email) ? $cus_email : "" ?>">
                    </div>
                    <div class="text">Mật khẩu:</div>
                    <div class="cvrow">
                        <input required type="password" name="cus_pass" id="password">
                    </div>
                    <div class="remember">
                        <input type="checkbox" name="remember" id="remember" value="1">
                        <label for="remember">Nhớ tài khoản</label>
                    </div>
                    <div class="Btn_login">
                        <button type="submit">Đăng nhập</button>
                    </div>
                </div>
            </form>
            <div class="divider">
                <p>Bạn chưa có tài khoản?</p>
            </div>
            <div class="register">
                <a class="register__btn" href="register.php">Đăng ký</a>
            </div>
        </aside>
    </section>
</body>
</html>