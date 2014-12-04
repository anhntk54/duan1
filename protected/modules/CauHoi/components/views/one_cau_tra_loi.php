<li class="media">
	<?php 
		if ($value->user != null) {
			echo User::model()->getAvatar($value->user,'pull-left media-object img-32');
		}
	?>
	<div class="media-body">
		<?php echo User::model()->getTenDayDu($value->user)." "; 
			echo $value->noi_dung;
		?>
		<div class="text-color-aaa">
			<span><?php echo Traloi::model()->ThoiGianTraLoi($value->thoigian_traloi); ?></span> <br />
		</div>
	</div>
</li>