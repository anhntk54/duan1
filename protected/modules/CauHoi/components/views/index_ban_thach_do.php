<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Bạn thách đố 
			<?php if($count > 0): ?>
				<span class="badge badge-danger pull-right"><?php echo $count; ?></span>
			<?php endif; ?>
		</h3>
	</div>
	<div class="panel-body">
		<ul class="media-list media-list-scroll">
			<?php 
				foreach ($model as $value) {
					$this->widget("CauHoi.components.Index_One_Ban_Thach_Do",array('value'=>$value));
				}
			 ?>
			
		</ul>
	</div>
	<div class="panel-footer text-center">
		<div class="text-color-aaa small"><b><a href="#">Xem tất cả <i class="fa fa-angle-right"></i></a></b></div>
	</div>
</div>