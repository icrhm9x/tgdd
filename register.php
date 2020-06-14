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
require_once __DIR__ . '\common\php\common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <?php
    insertHeadLink();
    insertCSS('css\header.css');
    insertCSS('css\register.css');
    ?>
</head>

<body class="">
    <!----------------  Header  ---------------->
    <?php
    include_once('modules/header/header.php');
    include_once('modules/header/header_sp.php');
    ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data =
            [
                "cus_name"          => postInput('cus_name'),
                "cus_email"         => postInput('cus_email'),
                "cus_phone"         => postInput('cus_phone'),
                "cus_address"       => postInput('cus_address'),
                "cus_pass"          => SHA1(postInput('cus_pass'))
            ];
        $re_pass = SHA1($_POST['re_pass']);

        if ($data['cus_pass'] != $re_pass){
            $errors = '<span class="txt_danger">Mật khẩu không khớp</span>';
        }
        if (!isset($errors)){
            // check duplicate cat_name
            $sql = "SELECT cus_id FROM customer WHERE cus_email = '{$data['cus_email']}'";
            $query = mysqli_query($connect, $sql);
            if(mysqli_num_rows($query) > 0){
                $_SESSION['error'] = "Email đã tồn tại.";
            }else{
                $cus_id = insert("customer", $data);
        
                if ($cus_id > 0) {
                    $_SESSION['success'] = "Đăng ký tài khoản thành công";
                    header('location: login.php');
        
                } else {
                    $_SESSION['error'] = "Đăng ký tài khoản thất bại";
                }
            }
        }
    }
    ?>
    <section>
        <p class="Register__txt">Đăng ký</p>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>
        <aside class="leftcont">
            <form action="" method="post">
                <div class="cvbox">
                    <div class="title">Vui lòng điền đầy đủ các trường sau</div>
                    <div class="text">Họ và tên:</div>
                    <div class="cvrow">
                        <input required type="text" name="cus_name" placeholder="Họ và Tên" value="<?php echo isset($data['cus_name']) ? $data['cus_name'] : "" ?>">
                    </div>
                    <div class="text">Email:</div>
                    <div class="cvrow">
                        <input required type="email" name="cus_email" placeholder="Email" value="<?php echo isset($data['cus_email']) ? $data['cus_email'] : "" ?>">
                    </div>
                    <div class="text">Số điện thoại:</div>
                    <div class="cvrow">
                        <input required type="text" name="cus_phone" placeholder="Số điện thoại" value="<?php echo isset($data['cus_phone']) ? $data['cus_phone'] : "" ?>">
                    </div>
                    <div class="text">Địa chỉ:</div>
                    <div class="cvrow">
                        <input required type="text" name="cus_address" placeholder="Địa chỉ" value="<?php echo isset($data['cus_address']) ? $data['cus_address'] : "" ?>">
                    </div>
                    <div class="text">Mật khẩu:</div>
                    <div class="cvrow">
                        <input required type="password" name="cus_pass">
                    </div>
                    <div class="text">Nhập lại mật khẩu:</div>
                    <div class="cvrow">
                        <input required type="password" name="re_pass">
                    </div>
                    <?php if(isset($errors)){echo $errors;} ?>
                    <div class="Btn">
                        <button type="submit">Đăng ký</button>
                    </div>
                </div>
            </form>
        </aside>
    </section>
</body>
</html>