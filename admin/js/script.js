$(function () {
    // Handler for .ready() called.

    // ajax upload ảnh
    $("#js-uploadFile").click(function (event) {
        event.preventDefault();
        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file', files);

        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response == 0) {
                    alert('Vui lòng upload file, có phần mở rộng là .jpg .jpeg .png và dung lượng dưới 200mb');
                } else {
                    $("#js-img").attr("src", response);
                }
            }
        });
    });
});