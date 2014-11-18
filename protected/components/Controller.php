<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/main';
	public $pageTitle;
	public $keywords;
	public $robotsIndex;

	public $face_title;
    public $face_des;
    public $face_image;
    public $face_url;
    public $face_status = 1;
	public $statusLogin = 2;
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
    public function init(){
		/*if (Yii::app()->detectMobileBrowser->showMobile) {
            echo "<script>window.location.href = 'http://aegame.vn/m';</script>";
		}*/
		$this->login();
	}
	public function login()
	{
		$str = "statusLogin";
		$i = -strlen($str);
		if (Yii::app()->user->isGuest) {
			if (!session_id()) {
				session_start();		
			}	
			if (isset($_SESSION)) {
				$name = '';
				$id  = 0;
				$status = 'no';
				foreach ($_SESSION as $key => $value) {
					$arr = explode("_",$key);
					if (count($arr) > 2) {
						if ($arr[2] == "id") {
							$id = $value;
						}
						if ($arr[2] == "name") {
							$name = $value;
						}
					}
					if (substr($key, $i)==$str) {
						if ($value == $this->statusLogin) {
							$status = "ok";
							break;
						}
					}
				}
				if ($status == "ok") {
					$member = Members::model()->findByAttributes(array('id'=>$id,'username'=>$name));
					if ($member != null) {
						if($member->validate() && $member->login()){ 
							
						} 
					}
				}
			}
		}
	}
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	public function setPageSeo($title,$desc,$keywords ='',$robots = '')
	{
		$this->pageTitle = $title;
		$this->keywords = $keywords;
		$this->robotsIndex = $robots;
		Yii::app()->clientScript->registerMetaTag($desc, 'Description');
	}
	public function setOpenGraph($title,$des,$image,$url){
		$this->face_status = 2;
        $this->face_title = $title;
        $this->face_des = $des;
        $this->face_image = $image;
        $this->face_url = $url;
    }
}