<?php
include_once('../../../config/connect.php');
include_once('../../../config/function.php');
if(isset($_GET['tr_id']) && filter_var($_GET['tr_id'], FILTER_VALIDATE_INT)){
    $tr_id = $_GET['tr_id'];
    $query = mysqli_query($connect, "SELECT * FROM orders AS o INNER JOIN product AS p ON o.prd_id = p.prd_id WHERE tr_id = $tr_id");
    $result = array();
    if(mysqli_num_rows($query) > 0){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = array(
                'tr_id' => $row['tr_id'],
                'prd_name' => $row['prd_name'],
                'prd_image' => $row['prd_image'],
                'or_sale' => $row['or_sale'],
                'or_quantity' => $row['or_quantity']
            );
        }
    }
}
die (json_encode($result));
?>