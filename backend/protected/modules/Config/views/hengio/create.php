<?php
/* @var $this HengioController */
/* @var $model Hengio */

$this->breadcrumbs=array(
	'Hengios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hengio', 'url'=>array('index')),
	array('label'=>'Manage Hengio', 'url'=>array('admin')),
);
?>

<h1>Create Hengio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>