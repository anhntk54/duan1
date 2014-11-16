<?php
/* @var $this HanhdongController */
/* @var $model Hanhdong */

$this->breadcrumbs=array(
	'Hanhdongs'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Tạo hành động mới', 'url'=>array('create')),
);
?>

<h1>Quản lý nội dung hành động</h1>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'hanhdong-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'noi_dung',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
		),
	),
)); ?>
