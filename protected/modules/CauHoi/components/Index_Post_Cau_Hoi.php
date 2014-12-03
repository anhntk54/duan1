<?php
    class Index_Post_Cau_Hoi extends CWidget{
        public function init(){
            if (!Yii::app()->user->isGuest) {
            	$this->render('index_post_cau_hoi');
            }
        }
    }
?>