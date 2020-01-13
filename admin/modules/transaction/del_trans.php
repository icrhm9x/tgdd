<?php
if(!defined('SECURITY')){
	header('location: ../../index.php');
}
if(isset($_GET['tr_id']) && filter_var($_GET['tr_id'], FILTER_VALIDATE_INT)){
    $tr_id = $_GET['tr_id'];
    $sql = "DELETE FROM transaction WHERE tr_id=$tr_id";
    $query = mysqli_query($connect, $sql);
    if(mysqli_affected_rows($connect) > 0){
        mysqli_query($connect, "DELETE FROM orders WHERE tr_id=$tr_id");
        $_SESSION['success'] = "Xóa thành công";
    }else{
        $_SESSION['error'] = "Dữ liệu không tồn tại";
    }
    header('location: index.php?page_layout=transaction');
}else{
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    header('location: index.php?page_layout=transaction');
}
?>