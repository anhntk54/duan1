<?php

class ConfigController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array(''),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('admin','delete','index','view','create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(''),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Config;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Config']))
		{
			$model->attributes=$_POST['Config'];
			if ($model->status == 0) {
				$model->scenario = 'value';
			}else{
				$model->scenario = 'file';
			}
			$model->value = CUploadedFile::getInstance($model, 'value');
			if ($model->validate()) {
				if ($model->status == 0) {
					if ($model->data_value != '') {
						$model->value = $model->data_value;
					}
				}else{
					if ($model->value != '') {
						$arr = explode('.', $model->value);
						$file =  time()."-".$model->value;
						if (count($arr) > 0) {
							$file =  time()."-".toSlug($model->value).'.'.$arr[count($arr)-1];
						}
						$model->value->saveAs(Yii::app()->basePath.'/../../' .FILE_CONFIG.$file);
						$model->value = $file;
					}
				}
				if($model->save()){
					$this->redirect(array('admin'));	
				}
			}	
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$old_value = $model->value;
		$model->data_value = $model->value;
		if(isset($_POST['Config']))
		{
			$model->attributes=$_POST['Config'];
			if ($model->status == 0) {
				$model->scenario = 'value';
			}else{
				$model->scenario = 'file';
			}
			$model->value = CUploadedFile::getInstance($model, 'value');
			if ($model->validate()) {
				if ($model->status == 0) {
					if ($model->data_value != '') {
						$model->value = $model->data_value;
					}
				}else{
					if ($model->value != '') {
						$arr = explode('.', $model->value);
						$file =  time()."-".$model->value;
						if (count($arr) > 0) {
							$file =  time()."-".toSlug($model->value).'.'.$arr[count($arr)-1];
						}
						$model->value->saveAs(Yii::app()->basePath.'/../../' .FILE_CONFIG.$file);
						$model->value = $file;
						$file = Yii::app()->basePath .'/../../'.FILE_CONFIG.$old_value;
		            	if ($old_value != '' && file_exists($file)) {
		            		unlink($file);
		            	}
					}else{
						$model->value = $old_value;
					}
				}
				if($model->save()){
					$this->redirect(array('admin'));	
				}
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Config');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Config('search');
		// $model->unsetAttributes();  // clear any default values
		if(isset($_GET['Config']))
			$model->attributes=$_GET['Config'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Config the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Config::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Config $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='config-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
