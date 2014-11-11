<?php
class UploadImage extends CWidget{
	public $form;
	public $model;
	public $name;
	public $image;
    public function init(){
        $this->render('uploadimage');
    }
}
?>