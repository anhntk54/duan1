<div class="panel panel-default">
	<div class="panel-body text-center">
		<?php echo User::model()->getAvatar($model); ?>
		<h2 class="text-center"><?php echo $model->ten_day_du; ?></h2>
		<p><?php 
			if ($model->level != null) {
				echo $model->level->ten;
			}
		?></p>
		<small class="text-color-aaa">
			<span class="margin-right"><i class="fa fa-usd"></i> 5.234.879</span>
			<span class="margin-right"><i class="fa fa-question-circle"></i> 1380</span>
			<span class="margin-right"><i class="fa fa-comment"></i> 3476</span>
		</small>
	</div>
</div>