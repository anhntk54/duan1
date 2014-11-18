<?php
/* @var $this DefaultController */
/* @var $model SeoTools */

$this->breadcrumbs=array(
	'Seo'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Tạo seo mới', 'url'=>array('create')),
	array('label'=>'Quản lý seo', 'url'=>array('admin')),
);
?>

<h1>Update SeoTools <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>