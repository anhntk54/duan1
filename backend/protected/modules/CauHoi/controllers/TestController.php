<?php
class TestController extends Controller{
    
    public function actionIndex()
	{
        $this->render("index");	   
	}
    
    public function actionCreate(){
        $model = new Cauhoi;
        if(isset($_POST['noidung'])){
            
            
            $noidung = $_POST['noidung'];
            $file = "";
            if(isset($_POST['image']) && isset($_POST['loai'])){
                $type_image = $_POST['loai'];
                $img = $_POST['image'];
                
                if($type_image == 'jpg' || $type_image == 'jpeg'){
    				$img = str_replace('data:image/jpeg;base64', '', $img);
    			}
    			if($type_image == 'png' || $type_image == 'PNG'){
    				$img = str_replace('data:image/png;base64', '', $img);
    			}
    			if($type_image == 'gif' || $type_image == 'GIF'){
    				$img = str_replace('data:image/gif;base64', '', $img);
    			}
                
                $img = str_replace(' ', '+', $img);
                $_data = base64_decode($img);
                $name_image =  'cau-hoi-thach-do-'.uniqid() . '.png';
                checkdirectory(TEST_IMAGE);
                $file = TEST_IMAGE . $name_image;
                $success = file_put_contents($file, $_data);
                
                
                
                
            }
            
            $model->user_id = Yii::app()->user->id;
            $model->noi_dung = $noidung;
            $model->anh_minhhoa = $file;
            $model->save(false);
            
            
            $this->renderPartial("_view_append",array("model"=>$model),false,true);
        }
        
        
        
    }
}
?>