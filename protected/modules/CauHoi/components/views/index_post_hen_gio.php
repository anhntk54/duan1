<div class="col-sm-6">
    <select id="hen-gio-thach-do">
        <option value="0">Thời gian thách đố...</option>
        <?php foreach($model as $row_time):?>
	       <option value="<?php echo $row_time->gia_tri;?>"><?php echo $row_time->ten;?></option>
        <?php endforeach;?>
    </select>
</div>