<?php
/* @var $this LevelTienController */
/* @var $model LevelTien */

$this->breadcrumbs=array(
	'Level Tiens'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LevelTien', 'url'=>array('index')),
	array('label'=>'Create LevelTien', 'url'=>array('create')),
	array('label'=>'Update LevelTien', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LevelTien', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LevelTien', 'url'=>array('admin')),
);
?>

<h1>View LevelTien #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'level_id',
		'tien',
	),
)); ?>
