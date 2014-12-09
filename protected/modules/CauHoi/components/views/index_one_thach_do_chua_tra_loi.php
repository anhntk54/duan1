<li class="media border-bottom small">
  <?php echo User::model()->getAvatar($value->user,'pull-left media-object img-32'); ?>
  <div class="media-body">
  	<input type="hidden" class="cauhoi_id" value="<?php echo $value->id; ?>">
	<a href="#" class="text-color-666">
		<?php echo User::model()->getTenDayDuKhongLink($value->user); ?> <i class="fa fa-caret-right"></i> 
		<?php echo Cauhoi::model()->CauHoiTomTat($value); ?>
	</a>
	<div class="text-color-aaa">
		<span class="margin-right"><i class="fa fa-clock-o"></i> <?php echo Cauhoi::model()->ThoiGianCauHoiTomTat($value); ?></span>
		<span class="margin-right"><i class="fa fa-comments"></i> <?php echo Cauhoi::model()->TyLeTraLoi($value); ?></span>
	</div>
	<a class="btn btn-primary btn-xs btn_chap_nhan_thach_do">Chấp nhận</a>
	<a class="btn btn-default btn-xs btn_tu_choi_thach_do">Từ chối</a>
  </div>
</li>