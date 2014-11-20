<input type="file" name="fileToUpload" id="fileToUpload">
<img id="image" src="" style="width: 300px;"/>
<input type="submit" value="Create" onclick="submit_cauhoi();"/>
<script>

var type_image;

function TypeFile()
{
    var fup = document.getElementById('fileToUpload');
    var fileName = fup.value;
    var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
    if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "PNG" || ext == "png" )
    {
        return ext;
    }
}

function fileSelect(evt) {
    if (window.File && window.FileReader && window.FileList && window.Blob) {
        var files = evt.target.files;
        var result = '';
        var file;
        for (var i = 0; file = files[i]; i++) {
            // if the file is not an image, continue
            if (!file.type.match('image.*')) {
                alert("Ảnh không đúng định dạng. Bạn vui lòng chọn ảnh khác!");
                continue;
            }
            reader = new FileReader();
            reader.onloadstart = function(e) { console.log("Bắt đầu"); }
            reader.onload = (function (tFile) {
                return function (evt) {
                    type_image = TypeFile();
                    $('#image').attr('src',evt.target.result);
                    
                };
            }(file));
            
            reader.readAsDataURL(file);
            reader.onloadend = function(e) { console.log("Kết thúc"); }
            
        }
    } else {
        alert('The File APIs are not fully supported in this browser.');
    }
}
document.getElementById('fileToUpload').addEventListener('change', fileSelect, false);

function submit_cauhoi(){
    var noidung = "Tôi muốn yêu em trọn đời, mà sao tôi không thể nắm lấy trái tim người";
    var loai_image = type_image;
    var base_image = $("#image").attr('src');
    $.ajax({
        type: 'POST',
        url: '<?php echo Yii::app()->createUrl('/CauHoi/test/create');?>',
        data: {noidung : noidung, loai : loai_image, image : base_image},
        success: function (data) {
            $("#append_cauhoi").append(data);
        },
        error: function (ex) {
            alert('Failed to retrieve states.' + ex);
        }
    });
}

</script>

<div id="append_cauhoi">

</div>


