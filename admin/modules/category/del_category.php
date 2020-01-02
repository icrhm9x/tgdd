<?php
if(!defined('SECURITY')){
	header('location: ../../index.php');
}
if(isset($_GET['cat_id']) && filter_var($_GET['cat_id'], FILTER_VALIDATE_INT)){
    $cat_id = $_GET['cat_id'];
    $sql = "DELETE FROM category WHERE cat_id=$cat_id";
    $query = mysqli_query($connect, $sql);
    if(mysqli_affected_rows($connect) > 0){
        $_SESSION['success'] = "Xóa thành công";
    }else{
        $_SESSION['error'] = "Dữ liệu không tồn tại";
    }
    header('location: index.php?page_layout=category');
}else{
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    header('location: index.php?page_layout=category');
}
?>