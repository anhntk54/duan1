<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionLogin()
	{
		$model = User::model()->findAll();
		$this->render('login',array('model'=>$model));	
	}
	public function actionLinkLogin($id)
	{
		$user = User::model()->findByPk($id);
		if ($user != null) {
			$model = new LoginForm;
			$model->username = $user->username;
			if ($model->login()) {
				$this->redirect(array('/CauHoi/default/index'));
			}
		}		
	}
	public function actionTest()
	{
		$this->render('test');
	}
	public function actionLoad()
	{
		if (isset($_POST['p']) && isset($_POST['str'])) {
			$p = $_POST['p'];
			$str = $_POST['str'];
			$ar ='(';$i=0;
			$model = User::model()->findAll("username like '%$p%' and id not in $str ");
			$arrs = array();$i=0;
			foreach ($model as $key => $value) {
				$arr =array(
					'name'=>$value->username,
					'id' =>$value->id,
					'image'=>Yii::app()->request->baseUrl.$value->avatar,
				);
				$arrs[$i++] = $arr;
			}
			echo json_encode($arrs);
		}
	}
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}