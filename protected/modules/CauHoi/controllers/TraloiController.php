<?php

class TraloiController extends Controller
{
	public function actionCreate()
	{
		if (isset($_POST['cauhoi_id']) && isset($_POST['noidung'])) {
			$cauhoi_id  = $_POST['cauhoi_id'];
			$noidung = $_POST['noidung'];			
			if (!Yii::app()->user->isGuest) {
				$user = User::model()->findByPk(Yii::app()->user->id);
				if ($user != null) {
					$model = Cauhoi::model()->findByPk($cauhoi_id);
					if (Traloi::KiemTraCoDcDangCauTraLoiKhong($model)) {
						$traloi = Traloi::model()->findByAttributes(array('cauhoi_id'=>$cauhoi_id,'user_id'=>$user->id));
						if ($traloi == null) {
							$traloi = new Traloi;
							$traloi->user_id = $user->id;
							$traloi->cauhoi_id = $cauhoi_id;
							$traloi->noi_dung = $noidung;
							$traloi->thoigian_traloi = date("Y-m-d H:i:s");
							$traloi->languoi_duoctag = 0;
							$tag = Tag::model()->findByAttributes(array('cauhoi_id'=>$cauhoi_id,'user_id'=>$user->id));
							if ($tag != null) {
								$traloi->languoi_duoctag = 1;
							}
							if ($traloi->save()) {
								echo json_encode(array(
									'html'=>$this->renderPartial('create', array('value'=>$traloi),true),
									'count'=>Cauhoi::TongSoLuotTraLoi($model),
									));
							}
						}
					}
				}
			}
		}
	}
}