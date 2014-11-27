<div class="col-sm-6">
    <select id="tien-cuoc-thach-do">
        <option value="0">Tiền thách đố...</option>
        <?php foreach($model as $row_level):?>
	       <option value="<?php echo $row_level->tien;?>"><?php echo $row_level->tien." xu";?></option>
        <?php endforeach;?>
    </select>
</div>