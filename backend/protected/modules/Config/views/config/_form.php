<?php
/* @var $this ConfigController */
/* @var $model Config */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'config-form',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>10,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array(0=>"Giá trị",1=>"Tập tin"),array('id'=>'select')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
	<div class="row value">
		<?php echo $form->labelEx($model,'data_value'); ?>
		<?php echo $form->textField($model,'data_value',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'data_value'); ?>
	</div>
	<div class="row file">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->fileField($model,'value',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'value'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<style type="text/css">
	.file{display: none;}
</style>
<script type="text/javascript">
	$('#select').change(function(event) {
		if ($(this).val()==0) {
			$('.file').fadeOut();
			$('.value').fadeIn();
		}else{
			$('.value').fadeOut();
			$('.file').fadeIn();
		}
	});
	jQuery(document).ready(function($) {
		if ($('#select').val()==0) {
			$('.file').fadeOut();
			$('.value').fadeIn();
		}else{
			$('.value').fadeOut();
			$('.file').fadeIn();
		}
	});
</script>