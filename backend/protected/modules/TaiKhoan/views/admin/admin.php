<?php
/* @var $this AdminController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'Admins'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Tạo người dùng quản lý', 'url'=>array('create')),
);

?>

<h1>Manage Admins</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'admin-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
