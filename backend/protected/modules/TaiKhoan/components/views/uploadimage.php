<div class="row">
		<?php echo $this->form->labelEx($this->model,$this->name); ?>
		<?php echo CHtml::activeFileField($this->model,$this->name,array('id'=>'upload_image')); ?></br>
		<?php if($this->model->isNewRecord != 1){?>
            <?php echo CHtml::image($this->image,'',array('style'=>'width:100px','id'=>'image')); ?>
        <?php }else{
        ?>
            <img id="image" src="" style="width: 300px;"/>
        <?php };?>
		<?php echo $this->form->error($this->model,$this->name); ?>
</div>
<script>
function fileSelect(evt) {
    if (window.File && window.FileReader && window.FileList && window.Blob) {
        var files = evt.target.files;
        var result = '';
        var file;
        for (var i = 0; file = files[i]; i++) {
            // if the file is not an image, continue
            if (!file.type.match('image.*')) {
                continue;
            }
 
            reader = new FileReader();
            reader.onload = (function (tFile) {
                return function (evt) {
                    //console.log(evt.target.result);
                    $('#image').attr('src',evt.target.result);
                };
            }(file));
            reader.readAsDataURL(file);
            
        }
    } else {
        alert('The File APIs are not fully supported in this browser.');
    }
}
document.getElementById('upload_image').addEventListener('change', fileSelect, false);
</script>