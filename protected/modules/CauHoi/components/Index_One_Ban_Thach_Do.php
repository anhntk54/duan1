<?php
    class Index_One_Ban_Thach_Do extends CWidget{
    	public $value;
        public function init(){
            $this->render('index_one_ban_thach_do',array('value'=>$this->value));
        }
    }
?>