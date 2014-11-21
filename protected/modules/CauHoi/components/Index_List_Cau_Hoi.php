<?php
class Index_List_Cau_Hoi extends CWidget{
    public function init(){
        $criteria = new CDbCriteria;
        $criteria->limit = 10;
        $criteria->order ="id DESC";
        
        $model = Cauhoi::model()->findAll($criteria);
        
        $this->render("index_list_cau_hoi",array('model'=>$model));
    }
}
?>