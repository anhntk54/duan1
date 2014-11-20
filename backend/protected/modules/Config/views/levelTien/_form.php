<?php
/* @var $this LevelTienController */
/* @var $model LevelTien */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'level-tien-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'level_id'); ?>
		<?php echo CHtml::dropDownList('level_id','',CHtml::listData(Level::model()->findAll(),'id','ten')); ?>
		<?php echo $form->error($model,'level_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tien'); ?>
		<?php echo $form->textField($model,'tien'); ?>
		<?php echo $form->error($model,'tien'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->