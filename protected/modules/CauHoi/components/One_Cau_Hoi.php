<?php
    class One_Cau_Hoi extends CWidget{
    	public $value;
        public function init(){
            $this->render('one_cau_hoi',array('value'=>$this->value));
        }
    }
?>