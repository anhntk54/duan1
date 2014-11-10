<?php
/* @var $this HanhdongController */
/* @var $model Hanhdong */

$this->breadcrumbs=array(
	'Hanhdongs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Hanhdong', 'url'=>array('index')),
	array('label'=>'Create Hanhdong', 'url'=>array('create')),
	array('label'=>'Update Hanhdong', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Hanhdong', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hanhdong', 'url'=>array('admin')),
);
?>

<h1>View Hanhdong #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'noi_dung',
	),
)); ?>
