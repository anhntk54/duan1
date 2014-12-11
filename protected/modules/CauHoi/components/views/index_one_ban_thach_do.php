<li class="media border-bottom small">
  <?php echo User::model()->getAvatar($value->user,'pull-left media-object img-32'); ?>
  <div class="media-body">
	<a href="#" class="text-color-666">
		<?php echo User::model()->getTenDayDuKhongLink($value->user); ?> <i class="fa fa-caret-right"></i> 
		<?php echo Cauhoi::model()->CauHoiTomTat($value); ?>
	</a>
	<div class="text-color-aaa">
		<span class="margin-right"><i class="fa fa-clock-o"></i> <?php echo Cauhoi::model()->ThoiGianCauHoiTomTat($value); ?></span>
		<span class="margin-right"><i class="fa fa-comments"></i> <?php echo Cauhoi::model()->TyLeTraLoi($value); ?></span>
		<span class="margin-right"><i class="fa fa-comment"></i> <?php echo count($value->tralois); ?></span>
		<span class="margin-right"><i class="fa fa-thumbs-o-up"></i> <?php echo Cauhoi::model()->TongSoLuotLike($value); ?></span>
		<span class="margin-right"><i class="fa fa-share"></i> 3</span>
	</div>
  </div>
</li>