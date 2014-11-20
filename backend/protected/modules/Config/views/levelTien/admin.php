<?php
/* @var $this LevelTienController */
/* @var $model LevelTien */

$this->breadcrumbs=array(
	'Level Tiens'=>array('admin'),
	'Manage',
);

?>

<h1>Quản lý tiền level</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'level-tien-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'value'=>'$data->level == null ? "Không có" : $data->level->ten',
			'name'=>'level_id',
		),
		'tien',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
