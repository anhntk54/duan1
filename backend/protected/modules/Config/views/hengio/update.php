<?php
/* @var $this HengioController */
/* @var $model Hengio */

$this->breadcrumbs=array(
	'Hengios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hengio', 'url'=>array('index')),
	array('label'=>'Create Hengio', 'url'=>array('create')),
	array('label'=>'View Hengio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Hengio', 'url'=>array('admin')),
);
?>

<h1>Update Hengio <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>