<?php
/* @var $this LevelController */
/* @var $model Level */

$this->breadcrumbs=array(
	'Levels'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Tạo level mới', 'url'=>array('create')),
);
?>

<h1>Quản lý level người dùng</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'level-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'ten',
		'tien_toi_thieu',
		'hinh_anh',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
