<?php
/* @var $this KhieunaiController */
/* @var $model Khieunai */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'khieunai-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cauhoi_id'); ?>
		<?php echo $form->textField($model,'cauhoi_id'); ?>
		<?php echo $form->error($model,'cauhoi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thoigian_khieunai'); ?>
		<?php echo $form->textField($model,'thoigian_khieunai'); ?>
		<?php echo $form->error($model,'thoigian_khieunai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thoigian_ketthuc'); ?>
		<?php echo $form->textField($model,'thoigian_ketthuc'); ?>
		<?php echo $form->error($model,'thoigian_ketthuc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trangthai_nguoithang'); ?>
		<?php echo $form->textField($model,'trangthai_nguoithang'); ?>
		<?php echo $form->error($model,'trangthai_nguoithang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trangthai_xuly'); ?>
		<?php echo $form->textField($model,'trangthai_xuly'); ?>
		<?php echo $form->error($model,'trangthai_xuly'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->