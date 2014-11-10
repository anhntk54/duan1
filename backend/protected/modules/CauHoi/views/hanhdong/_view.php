<?php
/* @var $this HanhdongController */
/* @var $data Hanhdong */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noi_dung')); ?>:</b>
	<?php echo CHtml::encode($data->noi_dung); ?>
	<br />


</div>