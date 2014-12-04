<?php
    class Post_Cau_Tra_Loi extends CWidget{
    	public $model;
        public function init(){
        	if (Traloi::model()->KiemTraCoDcDangCauTraLoiKhong($this->model)) {
        		$user = User::model()->findByPk(Yii::app()->user->id);
        		$this->render('post_cau_tra_loi',array('user'=>$user));
        	}
        }
    }
?>