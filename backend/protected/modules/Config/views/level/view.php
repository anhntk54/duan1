<?php
/* @var $this LevelController */
/* @var $model Level */

$this->breadcrumbs=array(
	'Levels'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Tạo Level', 'url'=>array('create')),
	array('label'=>'Cập nhật Level', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Tạo tiền cho Level', 'url'=>array('/Config/levelTien/create', 'id'=>$model->id)),
	array('label'=>'Xóa Level', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Quản lý Level', 'url'=>array('admin')),
);
?>

<h1>View Level #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ten',
		'hinh_anh',
	),
)); ?>
