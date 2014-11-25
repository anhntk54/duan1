<?php
class Index_ThongTin_NguoiDung extends CWidget{
    public function init(){
    	if (Yii::app()->user->isGuest) {
    		$this->render("index_thongtin_nguoidung_chua_dangnhap");
    	}else{
    		$model = User::model()->findByPk(Yii::app()->user->id);
    		if ($model != null) {
    			$this->render("index_thongtin_nguoidung_dangnhap",array('model'=>$model));
    		}
    	}
        
    }
}
?>