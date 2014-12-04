<div class="module">
	<h3 class="module-title">TOP đại gia</h3>
	  <ul class="media-list">
      <?php foreach($model as $row):?>
        <?php 
            $model_user = User::model()->getModel($row->user_id);
        ?>
		<li class="media border-bottom small">
		  <img class="pull-left media-object img-32" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/people/avatar_002.jpg" alt="">
		  <div class="media-body">
			<a href="#" class="text-color-666"><b><?php echo $model_user->ten_day_du;?></b></a> <br>
			<div class="text-color-aaa">
				<span class="margin-right"><i class="fa fa-usd"></i> <?php echo $row->tai_khoan;?></span>
				<span class="margin-right"><i class="fa fa-star"></i> <?php echo User::model()->getLevel($model_user);?></span>
			</div>
			
		  </div>
		</li>
	   <?php endforeach;?>
	</ul>
</div>