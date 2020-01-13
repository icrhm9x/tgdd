<?php
if(!defined('SECURITY')){
	header('location: ../../index.php');
}
if(isset($_GET['cus_id']) && filter_var($_GET['cus_id'], FILTER_VALIDATE_INT)){
    $cus_id = $_GET['cus_id'];
    $sql = "DELETE FROM customer WHERE cus_id=$cus_id";
    $query = mysqli_query($connect, $sql);
    if(mysqli_affected_rows($connect) > 0){
        $_SESSION['success'] = "Xóa thành công";
    }else{
        $_SESSION['error'] = "Dữ liệu không tồn tại";
    }
    header('location: index.php?page_layout=customer');
}else{
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    header('location: index.php?page_layout=customer');
}
?>