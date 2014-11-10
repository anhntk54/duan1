<?php
/* @var $this KhieunaiController */
/* @var $model Khieunai */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cauhoi_id'); ?>
		<?php echo $form->textField($model,'cauhoi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thoigian_khieunai'); ?>
		<?php echo $form->textField($model,'thoigian_khieunai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thoigian_ketthuc'); ?>
		<?php echo $form->textField($model,'thoigian_ketthuc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trangthai_nguoithang'); ?>
		<?php echo $form->textField($model,'trangthai_nguoithang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trangthai_xuly'); ?>
		<?php echo $form->textField($model,'trangthai_xuly'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->