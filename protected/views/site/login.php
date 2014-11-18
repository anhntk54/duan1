<?php foreach ($model as $value):?>
	<a href="<?php echo Yii::app()->createUrl('/site/linklogin',array('id'=>$value->id)); ?>"><?php echo $value->ten_day_du; ?></a><br>
<?php endforeach; ?>
<?php if(!Yii::app()->user->isGuest): ?>
	<a href="<?php echo Yii::app()->createUrl('/site/logout'); ?>">Logout</a>
	<?php endif; ?>