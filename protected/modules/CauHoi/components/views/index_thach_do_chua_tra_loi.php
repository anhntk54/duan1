<div class="panel panel-default" id="content-right-gluck">
	<div class="panel-heading">
		<h3 class="panel-title">Thách đố chưa trả lời 
			<?php if($count > 0): ?>
				<span class="badge badge-danger pull-right"><?php echo $count; ?></span>
			<?php endif; ?>
		</h3>
	</div>
	<div class="panel-body">
		<ul class="media-list media-list-scroll">
			<?php 
				foreach ($model as $value) {
					$this->widget("CauHoi.components.Index_One_Thach_Do_Chua_Tra_Loi",array('value'=>$value));
				}
			?>
		</ul>
	</div>
	<div class="panel-footer text-center">
		<div class="text-color-aaa small"><b><a href="#">Xem tất cả <i class="fa fa-angle-right"></i></a></b></div>
	</div>
</div>
<script type="text/javascript">
	$('.btn_chap_nhan_thach_do').click(function(event) {
		var t = $(this);
		var cauhoi_id = t.parent().find('.cauhoi_id').val();
		$.ajax({
			url: '<?php echo Yii::app()->createUrl("/CauHoi/traloi/chapnhan"); ?>',
			type: 'POST',
			data: {cauhoi_id:cauhoi_id,chapnhan:2},
			success:function (data) {
				if (data == "ok") {
					t.parent().parent().remove();
				};
			}
		});
	});
	$('.btn_tu_choi_thach_do').click(function(event) {
		var t = $(this);
		var cauhoi_id = t.parent().find('.cauhoi_id').val();
		$.ajax({
			url: '<?php echo Yii::app()->createUrl("/CauHoi/traloi/chapnhan"); ?>',
			type: 'POST',
			data: {cauhoi_id:cauhoi_id,chapnhan:1},
			success:function (data) {
				if (data == "ok") {
					t.parent().parent().remove();
				};
			}
		});
	});
</script>