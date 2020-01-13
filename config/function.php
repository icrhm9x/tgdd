<?php
// ****************** function query ******************

//ham query insert
function insert($table, array $data){
    global $connect;
    $sql = "INSERT INTO {$table} ";
    $columns = implode(',', array_keys($data));
    $values = "";
    $sql .= "(" . $columns . ")";
    foreach ($data as $value) {
        if(is_string($value)) {
            $values .= "'". mysqli_real_escape_string($connect, xss_clean($value)) ."',";
        }else{
            $values .= mysqli_real_escape_string($connect, xss_clean($value)) .",";
        }
    }
    // xoa dau phay cuoi cau
    $values = substr($values, 0, -1);
    $sql .= " VALUES (" . $values . ")";
    $query = mysqli_query($connect, $sql);
    return mysqli_insert_id($connect);
}
//ham update
function update($table, array $data, array $conditions) {
    global $connect;
        $sql = "UPDATE {$table}";
        $set = " SET ";
        $where = " WHERE ";
        foreach($data as $field => $value) {
            if(is_string($value)) {
                $set .= $field .'='.'\''. mysqli_real_escape_string($connect, xss_clean($value)) .'\',';
            } else {
                $set .= $field .'='. mysqli_real_escape_string($connect, xss_clean($value)) . ',';
            }
        }
        // xoa dau phay cuoi cau
        $set = substr($set, 0, -1);

        foreach($conditions as $field => $value) {
            if(is_string($value)) {
                $where .= $field .'='.'\''. mysqli_real_escape_string($connect, xss_clean($value)) .'\' AND ';
            } else {
                $where .= $field .'='. mysqli_real_escape_string($connect, xss_clean($value)) . ' AND ';
            }
        }
        // xóa chữ AND và 2 khoảng trắng = 5 kí tự
        $where = substr($where, 0, -5);

        $sql .= $set . $where;
        $query = mysqli_query($connect, $sql);

        return mysqli_affected_rows($connect);
}

// ham slug bang php
function to_slug($str)
{
    $str = trim(mb_strtolower($str));
    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
    $str = preg_replace('/(đ)/', 'd', $str);
    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
    $str = preg_replace('/([\s]+)/', '-', $str);
    return $str;
}

// clean input
function xss_clean($data)
    {
        // Fix &entity\n;
        $data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
        $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
        $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
        $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

        // Remove any attribute starting with "on" or xmlns
        $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

        // Remove javascript: and vbscript: protocols
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

        // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

        // Remove namespaced elements (we do not need them)
        $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

        do
        {
            // Remove really unwanted tags
            $old_data = $data;
            $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
        }
        while ($old_data !== $data);

        // we are done...
        return $data;
    }

// xóa tất cả các file trong 1 thư mục
function recursiveDelete($str) {
    if (is_file($str)) {
        return @unlink($str);
    }
    elseif (is_dir($str)) {
        $scan = glob(rtrim($str,'/').'/*');
        foreach($scan as $index=>$path) {
            recursiveDelete($path);
        }
    }
}

// phân trang
function pagination($sql,$rows_per_page,$currentPage,$conn)
{
    // lấy URL hiện tại và xóa biến page
    $currentUrl=str_replace('&page='.$currentPage,'',$_SERVER['REQUEST_URI']);
    
    // Lấy tổng bản ghi của cả bảng
    $total_rows=mysqli_num_rows(mysqli_query($conn,$sql));
    $total_pages= ceil($total_rows/$rows_per_page);
    $paginate='<ul class="pagination">';
    if($currentPage<=1)
    {
        $paginate.='
        <li class="page-item disabled">
        <a class="page-link">&laquo;</a>
        </li>';
    }
    else
    {
        $paginate.='
        <li class="page-item">
        <a class="page-link" href="'.$currentUrl.'&page='.($currentPage-1).'">&laquo;</a>
        </li>';
    }
   
    //đường dẫn trang
    for ($i=1; $i <= $total_pages; $i++) { 
        if($currentPage==$i) 
        {
            $active='active';
        }
        else
        {
            $active='';
        }
        $paginate.='
        <li class="page-item '.$active.'"><a class="page-link" href="'.$currentUrl.'&page='.$i.'">'.$i.'</a></li>
        ';
    }
    if($currentPage>=$total_pages)
    {
        $paginate.='<li class="page-item disabled"><a class="page-link" >&raquo;</a></li>';
    }
    else
    {
        $paginate.='<li class="page-item"><a class="page-link" href="'.$currentUrl.'&page='.($currentPage+1).'">&raquo;</a></li>';
    }
   
    $paginate.='</ul>';
    return $paginate;
}
//
function postInput($str){
    return isset($_POST[$str]) ? xss_clean($_POST[$str]) : '';
}