<div class="panel panel-default" id="form-post">
	<div class="panel-body padding-bottom-0">
		<div class="border-bottom">
			<span class="small">
				<b><i class="fa fa-pencil-square-o"></i> Thách đố mới</b>
			</span>
		</div>
		<textarea class="textarea" placeholder="Thách đố nào..." id="noidung"></textarea>
        <!-- by trieu nhu -->
		<?php $this->widget("CauHoi.components.Index_Post_Tag_Cau_Hoi");?>
		<div class="row">
			<?php $this->widget("Index_Post_Hen_Gio");?>
            
			<?php $this->widget("Index_Post_Level_Tien");?>
            <div class="col-sm-6">
                <img src="" class="img-responsive" id="image"/>
            </div>
		</div>
        
	</div>
	<div class="panel-footer">
		<a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-user"></i></a>
		<a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-clock-o"></i></a>
		<a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-usd"></i></a>
        
        <a id="a_camera" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            <i class="fa fa-camera"></i>
        </a>
        <input type="file" name="fileToUpload" id="fileToUpload" style="display:none;"/>
        
        <div class="pull-right">
			<button class="btn btn-primary btn-sm" onclick="submit_cauhoi();">Đăng</button>
		</div>
	</div>
</div>

<script>
var type_image;
$('#a_camera').click(function(event) {
    $('#fileToUpload').click();
});
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
                //continue;
                return false;
            }
            if(file.size >= 2000000){
                 alert("Bạn chỉ được upload ảnh nhỏ hơn 2M. Bạn vui lòng chọn ảnh khác!");
                 return false;
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
    var noidung = $("#noidung").val();
    var loai_image = type_image;
    var base_image = $("#image").attr('src');
    if(noidung != ""){
        $.ajax({
            type: 'POST',
            url: '<?php echo Yii::app()->createUrl('/CauHoi/default/create');?>',
            data: {noidung : noidung,users:JSON.stringify(arr_user), loai : loai_image, image : base_image},
            success: function (data) {
                $("#append_cauhoi").prepend(data);
                refest_cauhoi();
            },
            error: function (ex) {
                alert('Failed to retrieve states.' + ex);
            }
        });
    }
}

function refest_cauhoi(){
    $("#noidung").val("");
    $("#image").attr('src','');
    $('#tag_banbe').tokenfield('setTokens', "");
}
</script>

<div id="append_cauhoi">

</div>