<?php

class TagUserController extends Controller
{
	public function actionIndex()
	{
		// tìm kiếm theo username, like p
		// str loại bỏ những user đã tìm kiếm 
		if (isset($_POST['p']) && isset($_POST['str'])) {
			$p = $_POST['p'];
			$str = $_POST['str'];
			$ar ='(';$i=0;
			$model = User::model()->findAll("username like '%$p%' and id not in $str ");
			$arrs = array();$i=0;
			foreach ($model as $key => $value) {
				$arr =array(
					'name'=>$value->username,
					'id' =>$value->id,
					'image'=>Yii::app()->request->baseUrl.$value->avatar,
				);
				$arrs[$i++] = $arr;
			}
			echo json_encode($arrs);
		}
	}
}