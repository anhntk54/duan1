<li class="media border-bottom small">
  <?php echo User::model()->getAvatar($traloi->user,'pull-left media-object img-32'); ?>
  <div class="media-body">
	<a href="#" class="text-color-666">
		<?php echo User::model()->getTenDayDuKhongLink($traloi->user); ?> <i class="fa fa-caret-right"></i> 
		<?php echo Traloi::model()->TraLoiTomTat($traloi); ?>
	</a>
	<div class="text-color-aaa">
		<span><?php echo Traloi::model()->ThoiGianTraLoi($traloi->thoigian_traloi); ?></span> <br />
		<span class="margin-right"><i class="fa fa-clock-o"></i> <?php echo Cauhoi::model()->ThoiGianCauHoiTomTat($value); ?></span>
		<span class="margin-right"><i class="fa fa-comments"></i> <?php echo Cauhoi::model()->TyLeTraLoi($value); ?></span>
		<span class="margin-right"><i class="fa fa-comment"></i> <?php echo count($value->tralois); ?></span>
		<span class="margin-right"><i class="fa fa-share"></i> 3</span>
	</div>
  </div>
</li>