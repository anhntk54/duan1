<div class="panel panel-default">
	<div class="panel-body">
		<div class="media form-group">
			<img class="pull-left media-object img-40" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/people/avatar_002.jpg" alt="">
			<div class="media-body">
				<a href="#">
					<b>Triệu Nhữ</b>
				</a>
				<small>
					<span><i class="fa fa-clock-o"></i> 12:12:03</span>
				</small>
			</div>
			<a href="#" class="pull-right media-object text-color-666 angle-down">
				<i class="fa fa-angle-down"></i>
			</a>
		</div>
		<p><?php echo $value->noi_dung;?></p>
        <p><img src="<?php echo Yii::app()->baseUrl."/".$value->anh_minhhoa;?>" class="img-responsive"></p>
		<small>
			<a href="#" class="margin-right">Thích</a>
			<a href="#" class="margin-right">Trả lời</a>
			<a href="#">Chia sẻ</a>
		</small>
	</div>
	<div class="panel-footer">
		<div class="form-group border-bottom">
			<small class="text-color-666">
				<a href="#">
					<span class="margin-right"><i class="fa fa-comments"></i> 14</span>
					<span class="margin-right"><i class="fa fa-thumbs-o-up"></i> 123</span>
					<span class="margin-right"><i class="fa fa-share"></i> 3</span>
				</a>
			</small>
		</div>
		<?php $this->widget("CauHoi.components.List_Cau_Tra_Loi"); ?>
	</div>
</div>