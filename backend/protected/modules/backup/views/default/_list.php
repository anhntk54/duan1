<?php $this->widget('ext.GLGridView', array(
	'cssFile' => Yii::app()->theme->baseUrl . '/css/gridView.css',
	'id' => 'install-grid',
	'dataProvider' => $dataProvider,
	'columns' => array(
		array(
			'name'=>'Tên',
			'value'=>'$data["name"]',
		),
		array(
			'name'=>'Dung lượng',
			'value'=>'$data["size"]',
		),
		array(
			'name'=>'Thời gian tạo',
			'value'=>'$data["create_time"]',
		),
		array(
			'class' => 'CButtonColumn',
			'template' => ' {Download} {Restore}',
			  'buttons'=>array
			    (
			        'Download' => array
			        (
			        	'label'=>'Tải về',
			            'url'=>'Yii::app()->createUrl("backup/default/download", array("file"=>$data["name"]))',
			        ),
			        'Restore' => array
			        (
			        	'label'=>'Khôi phục',
			            'url'=>'Yii::app()->createUrl("backup/default/restore", array("file"=>$data["name"]))',
					),
			        'delete' => array
			        (
			            'url'=>'Yii::app()->createUrl("backup/default/delete", array("file"=>$data["name"]))',
			        ),
			    ),		
		),
		array(
			'class' => 'CButtonColumn',
			'template' => '{delete}',
			  'buttons'=>array
			    (

			        'delete' => array
			        (
			            'url'=>'Yii::app()->createUrl("backup/default/delete", array("file"=>$data["name"]))',
			        ),
			    ),		
		),
	),
)); ?>