<?php
/* @var $this KhieunaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Khieunais',
);

$this->menu=array(
	array('label'=>'Create Khieunai', 'url'=>array('create')),
	array('label'=>'Manage Khieunai', 'url'=>array('admin')),
);
?>

<h1>Khieunais</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
