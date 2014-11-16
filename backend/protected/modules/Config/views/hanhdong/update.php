<?php
/* @var $this HanhdongController */
/* @var $model Hanhdong */

$this->breadcrumbs=array(
	'Hanhdongs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hanhdong', 'url'=>array('index')),
	array('label'=>'Create Hanhdong', 'url'=>array('create')),
	array('label'=>'View Hanhdong', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Hanhdong', 'url'=>array('admin')),
);
?>

<h1>Update Hanhdong <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>