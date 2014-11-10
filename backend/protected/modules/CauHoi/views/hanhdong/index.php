<?php
/* @var $this HanhdongController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hanhdongs',
);

$this->menu=array(
	array('label'=>'Create Hanhdong', 'url'=>array('create')),
	array('label'=>'Manage Hanhdong', 'url'=>array('admin')),
);
?>

<h1>Hanhdongs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
