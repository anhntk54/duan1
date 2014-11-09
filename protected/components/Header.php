<?php
class Header extends CWidget{
	public $pageTitle;
    public function init(){
        $this->render('header');
    }
}
?>