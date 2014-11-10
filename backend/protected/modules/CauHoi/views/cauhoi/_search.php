<?php
/* @var $this CauhoiController */
/* @var $model Cauhoi */
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
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'noi_dung'); ?>
		<?php echo $form->textArea($model,'noi_dung',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anh_minhhoa'); ?>
		<?php echo $form->textField($model,'anh_minhhoa',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tra_loi'); ?>
		<?php echo $form->textArea($model,'tra_loi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anh_traloi'); ?>
		<?php echo $form->textField($model,'anh_traloi',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tien_cuoc'); ?>
		<?php echo $form->textField($model,'tien_cuoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hen_gio'); ?>
		<?php echo $form->textField($model,'hen_gio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thoigian_traloi'); ?>
		<?php echo $form->textField($model,'thoigian_traloi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luot_thich'); ?>
		<?php echo $form->textField($model,'luot_thich'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luot_xem'); ?>
		<?php echo $form->textField($model,'luot_xem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trang_thai'); ?>
		<?php echo $form->textField($model,'trang_thai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thoigian_tao'); ?>
		<?php echo $form->textField($model,'thoigian_tao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tongtien_mat'); ?>
		<?php echo $form->textField($model,'tongtien_mat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tongtien_duoc'); ?>
		<?php echo $form->textField($model,'tongtien_duoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tongtien_khieunai'); ?>
		<?php echo $form->textField($model,'tongtien_khieunai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->