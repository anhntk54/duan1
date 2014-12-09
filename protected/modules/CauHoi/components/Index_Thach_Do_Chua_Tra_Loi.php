<?php
    class Index_Thach_Do_Chua_Tra_Loi extends CWidget{
    	public $model;
        public function init(){
        	if (!Yii::app()->user->isGuest) {
                $now = date("Y-m-d H:i:s");
        		$criteria = new CDbCriteria;
		        $criteria->limit = 10;
		        $criteria->order ="id DESC";
		        $criteria->join = "inner join tbl_tag a on a.cauhoi_id = t.id";
		        $criteria->condition = "t.hen_gio > '{$now}' and a.trangthai_chapnhan = 0 and a.user_id =".Yii::app()->user->id;
		        $model = Cauhoi::model()->findAll($criteria);
                $count = count($model);
	            $this->render('index_thach_do_chua_tra_loi',array('model'=>$model,'count'=>$count));
        	}
        }
    }
?>