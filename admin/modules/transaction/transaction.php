<?php
$query = mysqli_query($connect, "SELECT * FROM transaction ORDER BY tr_id DESC");
?>
<script>
function delTr(name)
{
return confirm('bạn muốn xóa đơn hàng: #'+name+' ?');
}
</script>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang tổng quan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Đơn hàng</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Quản lý đơn hàng</h1>
    </div>
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="alert alert-success">
            <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
        </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="alert alert-danger">
            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>
    <table class="table table-hover">
        <thead>
            <tr class="table-active">
                <th scope="col">#</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_assoc($query)){ ?>
            <tr>
                <th scope="row"><?php echo $data['tr_id'] ?></th>
                <td><?php echo $data['tr_name'] ?></td>
                <td><?php echo $data['tr_address'] ?></td>
                <td><?php echo $data['tr_phone'] ?></td>
                <td><?php echo number_format($data['tr_payment'],0,',','.') ?>đ</td>
                <td><h6><a href="#" class="badge 
                <?php if($data['tr_status']==1){echo 'badge-secondary';}else{echo 'badge-danger';} ?>">
                <?php if($data['tr_status']==1){echo 'Chờ xử lý';}else{echo 'Đã xử lý';} ?></a></h6></td>
                <td>
                <a href="modules/transaction/order.php?tr_id=<?php echo $data['tr_id'] ?>" type="button" class="btn btn-outline-primary btn-sm js_order_item" data-id="<?php echo $data['tr_id'] ?>" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-eye"></i></a>
                <a onclick="return delTr('<?php echo $data['tr_id'];?>')" href="index.php?page_layout=del_trans&tr_id=<?php echo $data['tr_id'] ?>">
                <button type="button" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i>xóa</button></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</main>
<!-- Modal -->
<div class="modal fade" id="myModalOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng #<b class="tr_id"></b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="md_content">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
<script>
    $(function () {
        $(".js_order_item").click(function (event) {
            event.preventDefault();
            let $this = $(this);
            let url = $this.attr('href');
            $("#md_content").html('');
            $(".tr_id").text('').text($this.attr('data-id'));
            $("#myModalOrder").modal('show');
            $.ajax({
                    url : url,
                    type : 'get',
                    dataType : 'json',
                    success : function (result){
                        var html = '';
                        html += '<table class="table table-hover"><thead><tr class="table-active"><th scope="col">#</th><th scope="col">Tên sản phẩm</th><th scope="col">ảnh</th>';
                        html += '<th scope="col">giá</th><th scope="col">số lượng</th></tr></thead><tbody>';
                        
                        // Kết quả là một object json
                        // Nên ta sẽ loop result
                        $.each (result, function (key, item){
                            html +=  '<tr><th scope="row">';
                            html +=  item['tr_id'];
                            html +=  '</th><td>';
                            html +=  item['prd_name'];
                            html +=  '</td><td style="height:125px"><img src="img/product/';
                            html +=  item['prd_image'];
                            html +=  '" class="img-fluid Product__image"></td><td>';
                            html +=  item['or_sale'];
                            html +=  '</td><td>';
                            html +=  item['or_quantity'];
                            html +=  '</td><td></tr>';
                        });
                         
                        html +=  '</tbody></table>';
                         
                        $('#md_content').html(html);
                    }
                });
        });
    });
</script>