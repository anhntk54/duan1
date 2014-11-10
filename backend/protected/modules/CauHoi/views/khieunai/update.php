<?php
/* @var $this KhieunaiController */
/* @var $model Khieunai */

$this->breadcrumbs=array(
	'Khieunais'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Khieunai', 'url'=>array('index')),
	array('label'=>'Create Khieunai', 'url'=>array('create')),
	array('label'=>'View Khieunai', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Khieunai', 'url'=>array('admin')),
);
?>

<h1>Update Khieunai <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>