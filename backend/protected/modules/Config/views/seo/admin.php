<?php
/* @var $this DefaultController */
/* @var $model SeoTools */

$this->breadcrumbs=array(
	'Seo Tools'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Tạo seo mới', 'url'=>array('create')),
);
?>

<h1>Manage Seo Tools</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'seo-tools-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'description',
		'keywords',
		'metarobot',
		/*
		'status',
		'create_date',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
