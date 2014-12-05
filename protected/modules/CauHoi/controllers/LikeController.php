<?php

class LikeController extends Controller
{
	public function actionCreate()
	{
		if (isset($_POST['cauhoi_id'])) {
			$cauhoi_id = $_POST['cauhoi_id'];
			$model = Cauhoi::model()->findByPk($cauhoi_id);
			if ($model != null && !Yii::app()->user->isGuest) {
				$user = User::model()->findByPk(Yii::app()->user->id);
				if ($user != null) {
					$like = Like::model()->findByAttributes(array('user_id'=>$user->id,'table_id'=>$cauhoi_id,'table_name'=>'C'));
					$str = "Không thích";
					if ($like == null) {
						$like = new Like;
						$like->user_id = $user->id;
						$like->table_name = 'C';
						$like->table_id = $cauhoi_id;
						$like->save();
					}else{
						$str = "Thích";
						$like->delete();
					}
					echo json_encode(array('str'=>$str,'count'=>Cauhoi::model()->TongSoLuotLike($model)));
				}
			}
		}
	}
}