<?php
/* @var $this LevelController */
/* @var $data Level */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ten')); ?>:</b>
	<?php echo CHtml::encode($data->ten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tien_toi_thieu')); ?>:</b>
	<?php echo CHtml::encode($data->tien_toi_thieu); ?>
	<br />


</div>