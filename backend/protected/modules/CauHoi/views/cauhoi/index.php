<?php
/* @var $this CauhoiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cauhois',
);

$this->menu=array(
	array('label'=>'Create Cauhoi', 'url'=>array('create')),
	array('label'=>'Manage Cauhoi', 'url'=>array('admin')),
);
?>

<h1>Cauhois</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
