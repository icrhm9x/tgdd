<?php
// if(!defined('SECURITY')){
// 	die('Bạn không có quyền truy cập vào file này!');
// }

$connect = mysqli_connect('localhost', 'root', '', 'tgdd');

if($connect){
    mysqli_query($connect, "SET NAMES 'utf8'");
}else{
    die('Kết nối thất bại!');
}
?>