<?php
/* @var $this CauhoiController */
/* @var $data Cauhoi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noi_dung')); ?>:</b>
	<?php echo CHtml::encode($data->noi_dung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anh_minhhoa')); ?>:</b>
	<?php echo CHtml::encode($data->anh_minhhoa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tra_loi')); ?>:</b>
	<?php echo CHtml::encode($data->tra_loi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anh_traloi')); ?>:</b>
	<?php echo CHtml::encode($data->anh_traloi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tien_cuoc')); ?>:</b>
	<?php echo CHtml::encode($data->tien_cuoc); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('hen_gio')); ?>:</b>
	<?php echo CHtml::encode($data->hen_gio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thoigian_traloi')); ?>:</b>
	<?php echo CHtml::encode($data->thoigian_traloi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luot_thich')); ?>:</b>
	<?php echo CHtml::encode($data->luot_thich); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luot_xem')); ?>:</b>
	<?php echo CHtml::encode($data->luot_xem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trang_thai')); ?>:</b>
	<?php echo CHtml::encode($data->trang_thai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thoigian_tao')); ?>:</b>
	<?php echo CHtml::encode($data->thoigian_tao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tongtien_mat')); ?>:</b>
	<?php echo CHtml::encode($data->tongtien_mat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tongtien_duoc')); ?>:</b>
	<?php echo CHtml::encode($data->tongtien_duoc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tongtien_khieunai')); ?>:</b>
	<?php echo CHtml::encode($data->tongtien_khieunai); ?>
	<br />

	*/ ?>

</div>