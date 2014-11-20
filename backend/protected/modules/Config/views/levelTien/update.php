<?php
/* @var $this LevelTienController */
/* @var $model LevelTien */

$this->breadcrumbs=array(
	'Level Tiens'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LevelTien', 'url'=>array('index')),
	array('label'=>'Create LevelTien', 'url'=>array('create')),
	array('label'=>'View LevelTien', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LevelTien', 'url'=>array('admin')),
);
?>

<h1>Update LevelTien <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>