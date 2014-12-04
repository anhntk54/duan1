<?php
    class Index_One_Ban_Tra_Loi extends CWidget{
    	public $model;
        public function init(){
            $this->render('index_one_ban_tra_loi',array('model'=>$this->model));
        }
    }
?>