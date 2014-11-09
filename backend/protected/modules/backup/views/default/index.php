<?php
/* @var $this DefaultController */
/* @var $model Doitac */

$this->breadcrumbs=array(
	'Doitacs'=>array('index'),
	'Manage',
);
?>
<div class="col-md-12">
    <div class="box box-primary">
        <div class="box-header">
            <h1 class="box-title">Quản lý dữ liệu backup</h1>
            <div class="pull-right top5" style="margin: 8px 9px;">
			    <a style="color:#fff;" href="<?php echo Yii::app()->createUrl('/backup/default/create'); ?>" class="btn btn-primary">Tạo backup mới</a>
			 </div>
        </div><!-- /.box-header -->
        <div class="box-body">
           <?php $this->renderPartial('_list', array(
					'dataProvider'=>$dataProvider,
			));
			?>
			
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>
<style type="text/css">
	.box .box-body .table {
		margin-bottom: 27px;
		}
</style>

