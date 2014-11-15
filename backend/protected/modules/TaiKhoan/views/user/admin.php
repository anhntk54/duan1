<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Quản lý người dùng admin', 'url'=>array('/TaiKhoan/admin/admin')),
	array('label'=>'Tạo người dùng mới', 'url'=>array('create')),
);
?>

<h1>Manage Users</h1>
<div>
	<input type="text" id="date1">
    đến
    <input type="text" id="date2">
    <button id="loc">Lọc</button>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'facebook_id',
		'email',
		'password',
		'ten_day_du',
		/*
		'avatar',
		'level_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<script type="text/javascript">
    $( "#date1" ).datepicker();
    $( "#date2" ).datepicker();
    $('body').on('click', '#loc', function(event) {
        if ($('#date1').val() != '' && $('#date2').val() != '') {
            var date1 = $('#date1').val();
            var date2 = $('#date2').val();
            $.fn.yiiGridView.update('grid',{data: {date1:date1,date2:date2}});
        };
    }); 
</script>