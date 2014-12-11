<?php
    class Index_Ban_Thach_Do extends CWidget{
    	public $model;
        public function init(){
        	if (!Yii::app()->user->isGuest) {
                $now = date("Y-m-d H:i:s");
        		$criteria = new CDbCriteria;
		        $criteria->limit = 10;
		        $criteria->order ="id DESC";
		        $criteria->condition = "t.hen_gio > '{$now}' and t.user_id = ".Yii::app()->user->id;
		        $model = Cauhoi::model()->findAll($criteria);
                $count = count($model);
	            $this->render('index_ban_thach_do',array('model'=>$model,'count'=>$count));
        	}
        }
    }
?>