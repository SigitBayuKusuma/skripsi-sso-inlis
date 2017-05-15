<?php
/**
 * ORouterosAPI class file.
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2016 Ommu Platform (opensource.ommu.co)
 * @created date 26 May 2016, 15:15 WIB
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 */

defined('MIKROTIK_PATH') or define('MIKROTIK_PATH',dirname(__FILE__).DIRECTORY_SEPARATOR.'mikrotik'.DIRECTORY_SEPARATOR);

require_once MIKROTIK_PATH . 'routeros_api.class.php';

//load child class tool
require_once MIKROTIK_PATH . 'tool/OTool.php';

class ORouterosAPI extends RouterosAPI
{
	private $_obj;
	private $_conn;
	
	public static function getInstance() {
		return new self;		
	}
	
	public function talker() {
		return $this->connect(Yii::app()->params['Mikrotik'][0]['address'], Yii::app()->params['Mikrotik'][0]['username'], Yii::app()->params['Mikrotik'][0]['password']);
	}
	
	/**
	 * This method for call class OApi Interface
	 * @access public
	 * @return Object of OApi_Interface 
	 */
	public function command($path, $param=array()) {
		$this->_conn = $this;
		
		if($this->talker()) {
			if(empty($param)) {
				$array = $this->_conn->comm($path);
				$this->_conn->disconnect();
				if(0 < count($array))
					return $array;
				else
					return array();	
				
			} else {
				$this->_conn->comm($path, $param);
				$this->_conn->disconnect();
				return array('success'=>1);
			}
		} else 
			return array('success'=>0);
	}
	
	/**
	 * This metod used call class OApi_Tool
	 * @return OApi_Tool
	 */
	public function tool() {
		return new OTool($this->talker(), $this);
	}	
	
}