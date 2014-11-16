<?php
/* @var $this ConfigController */
/* @var $model Config */

$this->breadcrumbs=array(
	'Configs'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Tạo cấu hình mới', 'url'=>array('create')),
	array('label'=>'Quản lý nội dung hành động', 'url'=>array('/Config/hanhdong/admin')),
	array('label'=>'Quản lý level người dùng', 'url'=>array('/Config/level/admin')),
);
?>

<h1>Quản lý cấu hình</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'config-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'value',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
		),
	),
)); ?>
