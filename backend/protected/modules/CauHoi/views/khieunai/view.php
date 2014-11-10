<?php
/* @var $this KhieunaiController */
/* @var $model Khieunai */

$this->breadcrumbs=array(
	'Khieunais'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Khieunai', 'url'=>array('index')),
	array('label'=>'Create Khieunai', 'url'=>array('create')),
	array('label'=>'Update Khieunai', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Khieunai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Khieunai', 'url'=>array('admin')),
);
?>

<h1>View Khieunai #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cauhoi_id',
		'user_id',
		'thoigian_khieunai',
		'thoigian_ketthuc',
		'trangthai_nguoithang',
		'trangthai_xuly',
	),
)); ?>
