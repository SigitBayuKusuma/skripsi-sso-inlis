<?php
/**
 * RegisterController
 * @var $this RegisterController
 * @var $model Users
 * @var $form CActiveForm
 * version: 0.0.1
 * Reference start
 *
 * TOC :
 *	Index
 *	View
 *	Manage
 *	Add
 *	Edit
 *	RunAction
 *	Delete
 *	Publish
 *	Headline
 *
 *	LoadModel
 *	performAjaxValidation
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 17 June 2017, 10:43 WIB
 * @link http://opensource.ommu.co
 * @contact (+62)856-299-4114
 *
 *----------------------------------------------------------------------------------------------------------
 */

class RegisterController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';
	public $defaultAction = 'index';

	/**
	 * Initialize admin page theme
	 */
	public function init() 
	{
		Yii::app()->theme = 'ommu';
		$this->layout = 'admin_default';
	}

	/**
	 * @return array action filters
	 */
	public function filters() 
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array(),
				'users'=>array('@'),
				'expression'=>'isset(Yii::app()->user->level)',
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('manage','add','edit','runaction','delete','publish','headline'),
				'users'=>array('@'),
				'expression'=>'isset(Yii::app()->user->level) && (Yii::app()->user->level == 1)',
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('manage','add','edit','runaction','delete','publish','headline'),
				'users'=>array('@'),
				'expression'=>'isset(Yii::app()->user->level) && (in_array(Yii::app()->user->level, array(1,2)))',
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	/**
	 * Lists all models.
	 */
	public function actionIndex() 
	{
		$this->redirect(array('form'));
	}
	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionForm() 
	{
		$model=new Users;
				
		$member_i = $_GET['member'];
		$session_i = $_GET['session'];
		
		$step = 1;
		if(isset($member_i) && !isset($session_i))
			$step = 2;
		if(isset($member_i) && isset($session_i))			
			$step = 3;
		if($step == 2 || $step == 3)
			$member = InlisMembers::model()->findByPk($member_i);
		
		if(Yii::app()->request->isPostRequest) {			
			if($step == 1) {
				$MemberNo = trim($_POST['MemberNo']);
				if($MemberNo != '') {
					$criteria=new CDbCriteria;
					$criteria->select = "ID, MemberNo";
					$criteria->compare('MemberNo', $MemberNo);
					$member = InlisMembers::model()->find($criteria);
					if($member != null) {
						$memberID = $member->ID;
						if($member->sso_condition == 0)
							$this->redirect(Yii::app()->controller->createUrl('form', array('member'=>$member->ID)));				
						else 
							Yii::app()->user->setFlash('errorMemberNumberNull', 'Member sudah terdaftar silahkan login.');
					} else
						Yii::app()->user->setFlash('errorMemberNumberNull', 'Member number tidak ditemukan.');					
				} else 
					Yii::app()->user->setFlash('errorMemberNumberNull', 'Member number tidak boleh kosong.');	
				
			} else if($step == 2) {
				$DateOfBirth = trim($_POST['DateOfBirth']);
				
				if(date('Y-m-d', strtotime($member->DateOfBirth)) == date('Y-m-d', strtotime($DateOfBirth)))
					$this->redirect(Yii::app()->controller->createUrl('form', array('member'=>$member->ID,'session'=>'signup')));
				else 
					Yii::app()->user->setFlash('errorMemberDateOfBirthNull', 'Tanggal lahir yang Anda inputkan salah');
				
			} else if($step == 3) {
				// Uncomment the following line if AJAX validation is needed
				$this->performAjaxValidation($model);

				if(isset($_POST['Users'])) {
					$model->attributes=$_POST['Users'];
					
					$model->level_id = UserLevel::getDefault();
					
					if($model->save()) {
						$this->redirect(Yii::app()->createUrl('site/index'));
					}
				}
			}
		}
		
		$this->dialogDetail = true;
		$this->dialogGroundUrl = Yii::app()->controller->createUrl('manage');
		$this->dialogWidth = 600;

		$this->pageTitle = Yii::t('phrase', 'Create Users');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('front_from',array(
			'model'=>$model,
			'member'=>$member,
			'step'=>$step,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id) 
	{
		$model = Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404, Yii::t('phrase', 'The requested page does not exist.'));
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model) 
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
