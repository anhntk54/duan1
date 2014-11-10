<?php
/* @var $this CauhoiController */
/* @var $model Cauhoi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cauhoi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'noi_dung'); ?>
		<?php echo $form->textArea($model,'noi_dung',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'noi_dung'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anh_minhhoa'); ?>
		<?php echo $form->textField($model,'anh_minhhoa',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'anh_minhhoa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tra_loi'); ?>
		<?php echo $form->textArea($model,'tra_loi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tra_loi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anh_traloi'); ?>
		<?php echo $form->textField($model,'anh_traloi',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'anh_traloi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tien_cuoc'); ?>
		<?php echo $form->textField($model,'tien_cuoc'); ?>
		<?php echo $form->error($model,'tien_cuoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hen_gio'); ?>
		<?php echo $form->textField($model,'hen_gio'); ?>
		<?php echo $form->error($model,'hen_gio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thoigian_traloi'); ?>
		<?php echo $form->textField($model,'thoigian_traloi'); ?>
		<?php echo $form->error($model,'thoigian_traloi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'luot_thich'); ?>
		<?php echo $form->textField($model,'luot_thich'); ?>
		<?php echo $form->error($model,'luot_thich'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'luot_xem'); ?>
		<?php echo $form->textField($model,'luot_xem'); ?>
		<?php echo $form->error($model,'luot_xem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trang_thai'); ?>
		<?php echo $form->textField($model,'trang_thai'); ?>
		<?php echo $form->error($model,'trang_thai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thoigian_tao'); ?>
		<?php echo $form->textField($model,'thoigian_tao'); ?>
		<?php echo $form->error($model,'thoigian_tao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tongtien_mat'); ?>
		<?php echo $form->textField($model,'tongtien_mat'); ?>
		<?php echo $form->error($model,'tongtien_mat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tongtien_duoc'); ?>
		<?php echo $form->textField($model,'tongtien_duoc'); ?>
		<?php echo $form->error($model,'tongtien_duoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tongtien_khieunai'); ?>
		<?php echo $form->textField($model,'tongtien_khieunai'); ?>
		<?php echo $form->error($model,'tongtien_khieunai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->