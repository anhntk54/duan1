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
									'count'=>Cauhoi::model()->TongSoLuotTraLoi($model),
									));
							}
						}
					}
				}
			}
		}
	}
	public function actionChapNhan()
	{
		// cap nhat bang tag tuong ung voi user dang nhap
		// 1 la tu choi, 2 la chap nhan
		if (isset($_POST['cauhoi_id']) && isset($_POST['chapnhan'])) {
			$cauhoi_id = $_POST['cauhoi_id'];
			$chapnhan = $_POST['chapnhan'];
			if (!Yii::app()->user->isGuest) {
				$user = User::model()->findByPk(Yii::app()->user->id);
				if ($user != null) {
					$model = Cauhoi::model()->findByPk($cauhoi_id);
					if ($model != null) {
						$tag = Tag::model()->findByAttributes(array('cauhoi_id'=>$cauhoi_id,'user_id'=>$user->id));
						if ($tag != null) {
							$tag->trangthai_chapnhan = $chapnhan;
							$tag->save(false);
							echo "ok";
						}
					}
				}
			}
		}
	}
}