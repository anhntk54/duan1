<li class="media">
	<?php 
		if ($value->user != null) {
			echo User::getAvatar($value->user,'pull-left media-object img-32');
		}
	?>
	<div class="media-body">
		<?php echo User::getTenDayDu($value->user)." "; 
			echo $value->noi_dung;
		?>
		<div class="text-color-aaa">
			<span><?php echo Traloi::ThoiGianTraLoi($value->thoigian_traloi); ?></span> <br />
		</div>
	</div>
</li>