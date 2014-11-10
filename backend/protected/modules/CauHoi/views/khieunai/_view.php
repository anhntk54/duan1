<?php
/* @var $this KhieunaiController */
/* @var $data Khieunai */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cauhoi_id')); ?>:</b>
	<?php echo CHtml::encode($data->cauhoi_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thoigian_khieunai')); ?>:</b>
	<?php echo CHtml::encode($data->thoigian_khieunai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thoigian_ketthuc')); ?>:</b>
	<?php echo CHtml::encode($data->thoigian_ketthuc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trangthai_nguoithang')); ?>:</b>
	<?php echo CHtml::encode($data->trangthai_nguoithang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trangthai_xuly')); ?>:</b>
	<?php echo CHtml::encode($data->trangthai_xuly); ?>
	<br />


</div>