<?php
    class Index_Thach_Do_Chua_Tra_Loi extends CWidget{
    	public $model;
        public function init(){
            $this->render('index_thach_do_chua_tra_loi',array('model'=>$this->model));
        }
    }
?>