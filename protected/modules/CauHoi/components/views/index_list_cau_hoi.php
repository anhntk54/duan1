<?php 
	foreach($model as $value){
		$this->widget("CauHoi.components.One_Cau_Hoi",array('value'=>$value));
	}
?>
<script type="text/javascript">
	$('body').delegate('.post-cau-tra-loi','keypress', function(event) {
		var t = $(this);
		var cauhoi_id = t.parent().parent().parent().parent().parent().find('.cauhoi_id').val();
		if (event.keyCode == 13) {
			var noidung = $(this).val();
			$.ajax({
				url: '<?php echo Yii::app()->createUrl("/CauHoi/traloi/create"); ?>',
				type: 'POST',
				data: {cauhoi_id:cauhoi_id,noidung:noidung},
				success:function (data) {
					data = JSON.parse(data);
					t.parent().parent().parent().parent().find('.list-cau-traloi').append(data.html);
					t.parent().parent().parent().parent().parent().find('.so-luot-tra-loi').html(data.count);
					t.parent().parent().remove();
				}
			});
			
		};
	});
	$('body').delegate('.cau_hoi_like','click', function(event) {
		var t = $(this);
		var cauhoi_id = t.parent().parent().parent().find('.cauhoi_id').val();
		$.ajax({
				url: '<?php echo Yii::app()->createUrl("/CauHoi/like/create"); ?>',
				type: 'POST',
				data: {cauhoi_id:cauhoi_id},
				success:function (data) {
					data = JSON.parse(data);
					t.html(data.str);
					t.parent().parent().parent().find('.so-luot-like').html(data.count);
				}
			});
	});
</script>