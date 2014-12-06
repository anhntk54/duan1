<?php
    class Index_One_Thach_Do_Chua_Tra_Loi extends CWidget{
    	public $value;
        public function init(){
            $this->render('index_one_thach_do_chua_tra_loi',array('value'=>$this->value));
        }
    }
?>