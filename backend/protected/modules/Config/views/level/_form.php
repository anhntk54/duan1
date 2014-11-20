<?php
/* @var $this LevelController */
/* @var $model Level */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'level-form',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
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
		<?php echo $form->labelEx($model,'cap_do'); ?>
		<?php echo $form->textField($model,'cap_do'); ?>
		<?php echo $form->error($model,'cap_do'); ?>
	</div>
	<?php $image = ''; ?>
	<?php if (!$model->isNewRecord && $model->hinh_anh != '') {
		$image = Yii::app()->request->baseUrl.'/../'.IMAGE_LEVEL.$model->hinh_anh;
	} ?>
	<?php $this->widget("TaiKhoan.components.UploadImage",array('name'=>'hinh_anh','form'=>$form,'model'=>$model,'image'=>$image)); ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->