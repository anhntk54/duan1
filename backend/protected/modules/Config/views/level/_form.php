<?php
/* @var $this LevelController */
/* @var $model Level */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'level-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ten'); ?>
		<?php echo $form->textField($model,'ten',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tien_toi_thieu'); ?>
		<?php echo $form->textField($model,'tien_toi_thieu'); ?>
		<?php echo $form->error($model,'tien_toi_thieu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hinh_anh'); ?>
		<?php echo $form->textField($model,'hinh_anh',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'hinh_anh'); ?>
	</div>
	<?php $image = ''; ?>
	<?php if (!$model->isNewRecord && $model->hinh_anh != '') {
		$image = Yii::app()->request->baseUrl.'/../'.hinh_anh.$model->hinh_anh;
	} ?>
	<?php $this->widget("TaiKhoan.components.UploadImage",array('name'=>'hinh_anh','form'=>$form,'model'=>$model,'image'=>$image)); ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->