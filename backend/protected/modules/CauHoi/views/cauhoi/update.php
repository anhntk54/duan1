<?php
/* @var $this CauhoiController */
/* @var $model Cauhoi */

$this->breadcrumbs=array(
	'Cauhois'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cauhoi', 'url'=>array('index')),
	array('label'=>'Create Cauhoi', 'url'=>array('create')),
	array('label'=>'View Cauhoi', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cauhoi', 'url'=>array('admin')),
);
?>

<h1>Update Cauhoi <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>