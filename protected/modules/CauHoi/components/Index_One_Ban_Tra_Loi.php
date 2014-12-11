<?php
    class Index_One_Ban_Tra_Loi extends CWidget{
    	public $value;
        public function init(){
        	if ($this->value->traloi != null) {
        		$traloi = $this->value->traloi(array('condition'=>'user_id='.Yii::app()->user->id));
        		$this->render('index_one_ban_tra_loi',array('value'=>$this->value,'traloi'=>$traloi));
        	}
        }
    }
?>