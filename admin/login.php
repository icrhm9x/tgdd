
<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$admin_mail = $_POST['admin_mail'];
		$admin_pass = md5($_POST['admin_pass']);
		$sql = "SELECT * FROM admin WHERE admin_mail = '$admin_mail' AND admin_pass = '$admin_pass'";
		$query = mysqli_query($connect, $sql);
        $num_rows = mysqli_num_rows($query);
        
		if($num_rows > 0){
			$_SESSION['mail'] = $admin_mail;
			$_SESSION['pass'] = $admin_pass;
			header('location: index.php');
		}else{
			$error = '<div class="alert alert-danger">Tài khoản hoặc Mật khẩu không đúng!</div>';
		}
	}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TGDD - login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
</head>

<body>
    <form class="form-signin" action="" method="POST">
        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">TGDD - Administrator</h1>
        </div>

        <div class="form-label-group">
            <input name="admin_mail" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputEmail">Email address</label>
        </div>

        <div class="form-label-group">
            <input name="admin_pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputPassword">Mật khẩu</label>
        </div>
        <?php if(isset($error)){echo $error;} ?>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Nhớ tài khoản
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2020</p>
    </form>
</body>

</html>