<?php
/* @var $this LevelController */
/* @var $model Level */

$this->breadcrumbs=array(
	'Levels'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Level', 'url'=>array('admin')),
);
?>

<h1>Tạo tiền cho level <?php echo $model->ten; ?></h1>
<?php
/* @var $this LevelController */
/* @var $model Level */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'level-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="row add_tien">
		<label>Tiền</label>
		<input size="10" maxlength="50" name="tien[]" type="text"><br>
	</div>
	<a id="add_tien">Thêm tiền</a>
	<div class="row">
		<input type="submit" value="Tạo tiền">
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
	$("#add_tien").click(function(event) {
		var s = '<input size="10" maxlength="50" name="tien[]" type="text"><br>';
		$('.add_tien').append(s);
	});
</script>