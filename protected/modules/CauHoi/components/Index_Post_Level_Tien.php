<?php
class Index_Post_Level_Tien extends CWidget{
    public function init(){
        $user_id = Yii::app()->user->id;
        $model_user = User::model()->findByPk($user_id); 
        $level = $model_user->level_id;
        
        $criteria = new CDbCriteria;
        $criteria->condition="level_id =".$level;
        $model_level = LevelTien::model()->findAll($criteria);
        
        
        $this->render("index_post_level_tien",array("model"=>$model_level));
        
    }
}
?>