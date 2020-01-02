<?php
if(isset($_GET['prd_id']) && filter_var($_GET['prd_id'], FILTER_VALIDATE_INT)){
    $prd_id = $_GET['prd_id'];
    $sql = "DELETE FROM product WHERE prd_id=$prd_id";
    $query = mysqli_query($connect, $sql);
    if(mysqli_affected_rows($connect) > 0){
        // xóa ảnh của sản phẩm
        $query = mysqli_query($connect,"SELECT prd_image FROM product WHERE prd_id = $prd_id");
        $prd_data = mysqli_fetch_assoc($query);
        $url_img = "img/product".$prd_data['prd_image'];
        // if (file_exists($url_img)) {
        //     $filename = glob($url_img);
        //     unlink($filename);
        // }
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