<?php
/* @var $this CauhoiController */
/* @var $model Cauhoi */

$this->breadcrumbs=array(
	'Cauhois'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cauhoi', 'url'=>array('index')),
	array('label'=>'Create Cauhoi', 'url'=>array('create')),
	array('label'=>'Update Cauhoi', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cauhoi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cauhoi', 'url'=>array('admin')),
);
?>

<h1>View Cauhoi #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'noi_dung',
		'anh_minhhoa',
		'tra_loi',
		'anh_traloi',
		'tien_cuoc',
		'hen_gio',
		'thoigian_traloi',
		'luot_thich',
		'luot_xem',
		'trang_thai',
		'thoigian_tao',
		'tongtien_mat',
		'tongtien_duoc',
		'tongtien_khieunai',
	),
)); ?>
