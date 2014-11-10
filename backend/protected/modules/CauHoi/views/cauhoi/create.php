<?php
/* @var $this CauhoiController */
/* @var $model Cauhoi */

$this->breadcrumbs=array(
	'Cauhois'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cauhoi', 'url'=>array('index')),
	array('label'=>'Manage Cauhoi', 'url'=>array('admin')),
);
?>

<h1>Create Cauhoi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>