<?php
if(isset($_GET['prd_id']) && filter_var($_GET['prd_id'], FILTER_VALIDATE_INT)){
    $prd_id = $_GET['prd_id'];
    // xóa ảnh của sản phẩm
    $prd_data = mysqli_fetch_assoc(mysqli_query($connect,"SELECT prd_image FROM product WHERE prd_id = $prd_id"));
    // xóa sản phẩm trong csdl
    $sql = "DELETE FROM product WHERE prd_id=$prd_id";
    $query = mysqli_query($connect, $sql);
    if(mysqli_affected_rows($connect) > 0){
        if (file_exists('img/product/'.$prd_data['prd_image'])){
            unlink('img/product/'.$prd_data['prd_image']);
        }
        $_SESSION['success'] = "Xóa thành công";
    }else{
        $_SESSION['error'] = "Dữ liệu không tồn tại";
    }
    header('location: index.php?page_layout=product');
}else{
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    header('location: index.php?page_layout=product');
}
?>