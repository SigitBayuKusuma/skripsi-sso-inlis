<?php
/**
 * Users
 * version: 0.0.1
 *
 * @author Sigit Bayu Kusuma <sigitbayukusuma@gmail.com>
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 15 May 2017, 18:22 WIB
 * @link http://opensource.ommu.co
 * @contact (+62)83869898725
 *
 * This is the template for generating the model class of a specified table.
 * - $this: the ModelCode object
 * - $tableName: the table name for this class (prefix is already removed if necessary)
 * - $modelClass: the model class name
 * - $columns: list of table columns (name=>CDbColumnSchema)
 * - $labels: list of attribute labels (name=>label)
 * - $rules: list of validation rules
 * - $relations: list of relations (name=>relation declaration)
 *
 * --------------------------------------------------------------------------------------
 *
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property string $user_id
 * @property integer $publish
 * @property integer $level_id
 * @property string $member_id
 * @property string $email
 * @property string $password
 * @property string $creation_date
 *
 * The followings are the available model relations:
 * @property UserLevel $level
 */
class Users extends CActiveRecord
{
	public $defaultColumns = array();
	public $password_input;
	public $confirm_password_input;
	
	// Variable Search
	public $level_search;

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('level_id, email,
				password_input, confirm_password_input', 'required'),
			array('publish, level_id', 'numerical', 'integerOnly'=>true),
			array('member_id', 'length', 'max'=>11),
			array('email, password,
				password_input, confirm_password_input', 'length', 'max'=>32),
			array('member_id, password', 'safe'),
			array('
				password_input', 'compare', 'compareAttribute' => 'confirm_password_input', 'message' => 'Kedua password tidak sama.'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, publish, level_id, member_id, email, password, creation_date,
				level_search', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'level' => array(self::BELONGS_TO, 'UserLevel', 'level_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => Yii::t('attribute', 'User'),
			'publish' => Yii::t('attribute', 'Publish'),
			'level_id' => Yii::t('attribute', 'Level'),
			'member_id' => Yii::t('attribute', 'Member'),
			'email' => Yii::t('attribute', 'Email'),
			'password' => Yii::t('attribute', 'Password'),
			'creation_date' => Yii::t('attribute', 'Creation Date'),
			'password_input' => Yii::t('attribute', 'Password'),
			'confirm_password_input' => Yii::t('attribute', 'Confirm Password'),
			'level_search' => Yii::t('attribute', 'Level'),
		);
		/*
			'User' => 'User',
			'Publish' => 'Publish',
			'Level' => 'Level',
			'Member' => 'Member',
			'Email' => 'Email',
			'Password' => 'Password',
			'Creation Date' => 'Creation Date',
		
		*/
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		if(isset($_GET['user']))
			$criteria->compare('t.user_id',$_GET['user']);
		else
			$criteria->compare('t.user_id',$this->user_id);
		if(isset($_GET['type']) && $_GET['type'] == 'publish')
			$criteria->compare('t.publish',1);
		elseif(isset($_GET['type']) && $_GET['type'] == 'unpublish')
			$criteria->compare('t.publish',0);
		elseif(isset($_GET['type']) && $_GET['type'] == 'trash')
			$criteria->compare('t.publish',2);
		else {
			$criteria->addInCondition('t.publish',array(0,1));
			$criteria->compare('t.publish',$this->publish);
		}
		if(isset($_GET['level']))
			$criteria->compare('t.level_id',$_GET['level']);
		else
			$criteria->compare('t.level_id',$this->level_id);
		$criteria->compare('t.member_id',strtolower($this->member_id),true);
		$criteria->compare('t.email',strtolower($this->email),true);
		$criteria->compare('t.password',strtolower($this->password),true);
		if($this->creation_date != null && !in_array($this->creation_date, array('0000-00-00 00:00:00', '0000-00-00')))
			$criteria->compare('date(t.creation_date)',date('Y-m-d', strtotime($this->creation_date)));

		if(!isset($_GET['Users_sort']))
			$criteria->order = 't.user_id DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>30,
			),
		));
	}


	/**
	 * Get column for CGrid View
	 */
	public function getGridColumn($columns=null) {
		if($columns !== null) {
			foreach($columns as $val) {
				/*
				if(trim($val) == 'enabled') {
					$this->defaultColumns[] = array(
						'name'  => 'enabled',
						'value' => '$data->enabled == 1? "Ya": "Tidak"',
					);
				}
				*/
				$this->defaultColumns[] = $val;
			}
		} else {
			//$this->defaultColumns[] = 'user_id';
			$this->defaultColumns[] = 'publish';
			$this->defaultColumns[] = 'level_id';
			$this->defaultColumns[] = 'member_id';
			$this->defaultColumns[] = 'email';
			$this->defaultColumns[] = 'password';
			$this->defaultColumns[] = 'creation_date';
		}

		return $this->defaultColumns;
	}

	/**
	 * Set default columns to display
	 */
	protected function afterConstruct() {
		if(count($this->defaultColumns) == 0) {
			/*
			$this->defaultColumns[] = array(
				'class' => 'CCheckBoxColumn',
				'name' => 'id',
				'selectableRows' => 2,
				'checkBoxHtmlOptions' => array('name' => 'trash_id[]')
			);
			*/
			$this->defaultColumns[] = array(
				'header' => 'No',
				'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
			);
			$this->defaultColumns[] = array(
				'name' => 'level_id',
				'value' => '$data->level->level_name'
			);
			$this->defaultColumns[] = array(
				'name' => 'member_id',
				'value' => '$data->member_id ? $data->member_id : \'-\''
			);
			$this->defaultColumns[] = array(
				'name' => 'email',
				'value' => '$data->email'
			);
			/*
			$this->defaultColumns[] = array(
				'name' => 'password',
				'value' => '$data->password'
			);
			*/
			$this->defaultColumns[] = array(
				'name' => 'creation_date',
				'value' => 'Utility::dateFormat($data->creation_date)',
				'htmlOptions' => array(
					'class' => 'center',
				),
				'filter' => Yii::app()->controller->widget('application.components.system.CJuiDatePicker', array(
					'model'=>$this,
					'attribute'=>'creation_date',
					'language' => 'en',
					'i18nScriptFile' => 'jquery-ui-i18n.min.js',
					//'mode'=>'datetime',
					'htmlOptions' => array(
						'id' => 'creation_date_filter',
					),
					'options'=>array(
						'showOn' => 'focus',
						'dateFormat' => 'dd-mm-yy',
						'showOtherMonths' => true,
						'selectOtherMonths' => true,
						'changeMonth' => true,
						'changeYear' => true,
						'showButtonPanel' => true,
					),
				), true),
			);
			if(!isset($_GET['type'])) {
				$this->defaultColumns[] = array(
					'name' => 'publish',
					'value' => 'Utility::getPublish(Yii::app()->controller->createUrl("publish",array("id"=>$data->user_id)), $data->publish, 1)',
					'htmlOptions' => array(
						'class' => 'center',
					),
					'filter'=>array(
						1=>Yii::t('phrase', 'Yes'),
						0=>Yii::t('phrase', 'No'),
					),
					'type' => 'raw',
				);
			}
		}
		parent::afterConstruct();
	}

	/**
	 * User get information
	 */
	public static function getInfo($id, $column=null)
	{
		if($column != null) {
			$model = self::model()->findByPk($id,array(
				'select' => $column
			));
			return $model->$column;
			
		} else {
			$model = self::model()->findByPk($id);
			return $model;			
		}
	}
	
	/**
	 * before save attributes
	 */
	protected function beforeSave() {
		if(parent::beforeSave()) {
			$this->email = strtolower($this->email);
			if($this->password_input != '')
				$this->password = md5($this->password_input);
		}
		return true;	
	}

}