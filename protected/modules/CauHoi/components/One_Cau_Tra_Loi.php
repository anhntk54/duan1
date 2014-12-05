<?php
    class One_Cau_Tra_Loi extends CWidget{
    	public $value;
        public function init(){
        	if (Traloi::model()->KiemTraCoDcXemCauTraLoiKhong($this->value)) {
        		$this->render('one_cau_tra_loi',array('value'=>$this->value));
        	}
        }
    }
?>