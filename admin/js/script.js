$(function() {
    // Handler for .ready() called.
    
    // ajax upload ảnh
    $("#js-uploadFilePrd").click(function(){

        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file',files);

        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response == 0){
                    alert('Vui lòng upload file ảnh dưới 100mb');
                }else{
                    $("#js-imgProduct").attr("src",response);
                }
            }
        });
    });
});