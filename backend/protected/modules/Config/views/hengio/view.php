<?php
/* @var $this HengioController */
/* @var $model Hengio */

$this->breadcrumbs=array(
	'Hengios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Hengio', 'url'=>array('index')),
	array('label'=>'Create Hengio', 'url'=>array('create')),
	array('label'=>'Update Hengio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Hengio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hengio', 'url'=>array('admin')),
);
?>

<h1>View Hengio #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ten',
		'id',
		'gia_tri',
	),
)); ?>
