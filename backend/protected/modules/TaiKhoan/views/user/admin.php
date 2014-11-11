<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Quản lý người dùng admin', 'url'=>array('/TaiKhoan/admin/admin')),
	array('label'=>'Tạo người dùng mới', 'url'=>array('create')),
);
?>

<h1>Manage Users</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'facebook_id',
		'email',
		'password',
		'ten_day_du',
		/*
		'avatar',
		'level_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
