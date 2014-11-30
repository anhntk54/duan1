<?php
    class List_Cau_Tra_Loi extends CWidget{
    	public $model;
        public function init(){
            $this->render('list_cau_tra_loi',array('model'=>$this->model));
        }
    }
?>