<?php
class Sidebar_Left_TopDaiGia extends CWidget{
    public function init(){
        $criteria = new CDbCriteria;
        $criteria->order = "tai_khoan DESC";
        $criteria->limit= 5;
        $model = Taikhoan::model()->findAll($criteria);
        $this->render("sidebar_left_topdaigia",array("model"=>$model));
    }
}
?>