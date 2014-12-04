<?php

class DefaultController extends Controller
{
    public function actionIndex()
    {
       
       $this->render('index');
    }
    
    public function actionCreate(){
        $model = new Cauhoi;
        if(isset($_POST['noidung']) and isset($_POST['hengio'])){
            $noidung = $_POST['noidung'];
            $hengio = $_POST['hengio'];
            $nowdate = date("Y-m-d H:i:s");
            $date_hengio = date('Y-m-d H:i:s', strtotime($nowdate . ' + '.$hengio.' hours'));
            
            $tiencuoc = 0;
            if(isset($_POST['tien'])){
                $tiencuoc = $_POST['tien'];
            }
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
                checkdirectory(CAUHOI_IMAGE);
                $file = CAUHOI_IMAGE . $name_image;
                $success = file_put_contents($file, $_data);
                
                
                
                
            }
            
            $model->user_id = Yii::app()->user->id;
            $model->noi_dung = $noidung;
            $model->anh_minhhoa = $file;
            $model->tien_cuoc = $tiencuoc;
            $model->hen_gio = $date_hengio;
            $model->save(false);
            // by trieu nhu
            if (isset($_POST['users'])) {
                $users = json_decode($_POST['users'],true);
                foreach ($users as $key){
                    $user = User::model()->findByPk($key);
                    if ($user != null) {
                        $tag = Tag::model()->findByAttributes(array('cauhoi_id'=>$model->id,'user_id'=>$key));
                        if ($tag == null) {
                            $tag = new Tag;
                            $tag->cauhoi_id = $model->id;
                            $tag->user_id = $key;
                            $tag->save(false);

                        }
                    }
                }
            }
            
            $this->renderPartial("append_post_cau_hoi",array("model"=>$model),false,true);
        }  
        
    }
}