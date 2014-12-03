<?php
    class Index_Ban_Tra_Loi extends CWidget{
    	public $model;
        public function init(){
            $this->render('index_ban_tra_loi',array('model'=>$this->model));
        }
    }
?>