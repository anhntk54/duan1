<?php
/* @var $this HanhdongController */
/* @var $model Hanhdong */

$this->breadcrumbs=array(
	'Hanhdongs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hanhdong', 'url'=>array('index')),
	array('label'=>'Manage Hanhdong', 'url'=>array('admin')),
);
?>

<h1>Create Hanhdong</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>