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
	 * Initialize admin page theme
	 */
	public function init() 
	{
		Yii::app()->theme = 'xxxxxxxxxxxxxxx';
		$this->layout = 'front_default';
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
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		Yii::app()->theme = 'ommu';
		$this->layout = 'admin_default';
		
		if(!Yii::app()->user->isGuest)
			$this->redirect(Yii::app()->createUrl('admin/index'));

		else {		
			$model=new LoginForm;

			// if it is ajax validation request
			if(isset($_POST['ajax']) && $_POST['ajax']==='login-form') {
				echo CActiveForm::validate($model);
				Yii::app()->end();
			}

			// collect user input data
			if(isset($_POST['LoginForm']))
			{
				$model->attributes=$_POST['LoginForm'];

				$jsonError = CActiveForm::validate($model);
				if(strlen($jsonError) > 2) {
					echo $jsonError;

				} else {
					if(isset($_GET['enablesave']) && $_GET['enablesave'] == 1) {
						// validate user input and redirect to the previous page if valid
						if($model->validate() && $model->login()) {
							echo CJSON::encode(array(
								'redirect' => Yii::app()->user->level == 1 ? Yii::app()->createUrl('admin/index') : Yii::app()->user->returnUrl,
							));
							//$this->redirect(Yii::app()->user->returnUrl);
						} else
							print_r($model->getErrors());
					}
				}
				Yii::app()->end();
			}
			
			// display the login form
			$this->dialogDetail = true;
			$this->dialogWidth = 600;
			
			$this->pageTitle = Yii::t('phrase', 'Login');
			$this->pageDescription = '';
			$this->pageMeta = '';
			$this->render('front_login',array(
				'model'=>$model,
			));
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

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}
}