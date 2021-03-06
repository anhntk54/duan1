<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->textField($model,'password',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ten_day_du'); ?>
		<?php echo $form->textField($model,'ten_day_du',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ten_day_du'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'level_id'); ?>
		<?php echo CHtml::dropDownList('level_id','',CHtml::listData(Level::model()->findAll(),'id','ten')); ?>
		<?php echo $form->error($model,'level_id'); ?>
	</div>
	<?php $image = ''; ?>
	<?php if (!$model->isNewRecord && $model->avatar != '') {
		$image = Yii::app()->request->baseUrl.'/../'.$model->avatar;
	} ?>
	<?php $this->widget("TaiKhoan.components.UploadImage",array('name'=>'avatar','form'=>$form,'model'=>$model,'image'=>$image)); ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->