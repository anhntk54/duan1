<?php
class Index_Post_Hen_Gio extends CWidget{
    public function init(){
        $model = Hengio::model()->findAll();
        $this->render("index_post_hen_gio",array("model"=>$model));
    }
}
?>