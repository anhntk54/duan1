<?php
class Head extends CWidget{
    public function init(){
    	if (!Yii::app()->user->isGuest) {
    		$user = Taikhoan::model()->findByPk(Yii::app()->user->id);
    		if ($user != null) {
    			$this->render("head",array('user'=>$user));
    		}
    	}
    }
}
?>