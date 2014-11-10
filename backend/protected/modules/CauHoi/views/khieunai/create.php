<?php
/* @var $this KhieunaiController */
/* @var $model Khieunai */

$this->breadcrumbs=array(
	'Khieunais'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Khieunai', 'url'=>array('index')),
	array('label'=>'Manage Khieunai', 'url'=>array('admin')),
);
?>

<h1>Create Khieunai</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>