<?php
/**
 * Description of OApi_Tool_Usermanager
 *
 * TOC :
 *	Customer
 *	  get_all_customer
 *	  add_customer
 *	  set_customer
 *	  detail_customer
 *	  delete_customer
 *	  enable_customer
 *	  disable_customer 
 *	Profile
 *	  get_all_profile
 *	  add_profile
 *	  set_profile
 *	  detail_profile
 *	  delete_profile	
 *	User
 *	  get_all_user
 *	  add_user
 *	  set_user
 *	  detail_user
 *	  delete_user
 *	  enable_user
 *	  disable_user 
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2016 Ommu Platform (opensource.ommu.co)
 * @created date 26 May 2016, 15:15 WIB
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 */
 
class OToolUsermanager {
	/**
	 * @access private
	 * @var type array
	 */
	private $talker;
	private $_conn;
	
	function __construct($talker, $conn) {
		$this->talker = $talker;
		$this->_conn = $conn;
	}
	
	/**
	 * This method is used to display all customer
	 * @attr
	 *	URL: -
	 *
	 * @return type array
	 */
	public function get_all_customer() {
		$array = $this->_conn->comm("/tool/user-manager/customer/getall");
		$this->_conn->disconnect();
		if(0 < count($array))
			return $array;
		else
			return array();
	}
	
	/**
	 * This method is used to add customer
	 * @param
	 *	URL: -
	 *
	 * @return type array
	 */
	public function add_customer($param) {
		$this->_conn->comm("/tool/user-manager/customer/add", $param);
		$this->_conn->disconnect();
		return array('success'=>1);
	}
	
	/**
	 * This method is used to change customer
	 * @param
	 *	URL: -
	 *
	 * @return type array
	 */
	public function set_customer($param) {
		$this->_conn->comm("/tool/user-manager/customer/set", $param);
		$this->_conn->disconnect();
		return array('success'=>1);
	}
	
	/**
	 * This method is used to display one customer in detail
	 * @attr
	 *	URL: -
	 *
	 * @return type array
	 */
	public function detail_customer($param) {
		$array = $this->_conn->comm("/tool/user-manager/customer/print", $param);
		$this->_conn->disconnect();
		if(0 < count($array))
			return $array;
		else
			return array();
	}
	
	/**
	 * This method is used to deleted customer
	 * @param
	 *	URL: -
	 *
	 * @return type array
	 */
	public function delete_customer($param) {
		$this->_conn->comm("/tool/user-manager/customer/remove", $param);
		$this->_conn->disconnect();
		return array('success'=>1);
	}
	
	/**
	 * This method is used to activate customer
	 * @param
	 *	URL: -
	 *
	 * @return type array
	 */
	public function enable_customer($param) {
		$this->_conn->comm("/tool/user-manager/customer/enable", $param);
		$this->_conn->disconnect();
		return array('success'=>1);
	}
	
	/**
	 * This method is used to disable customer
	 * @param
	 *	URL: -
	 *
	 * @return type array
	 */
	public function disable_customer($param) {
		$this->_conn->comm("/tool/user-manager/customer/disable", $param);
		$this->_conn->disconnect();
		return array('success'=>1);
	}
	
	/**
	 * This method is used to display all profile
	 * @attr
	 *	URL: -
	 *
	 * @return type array
	 */
	public function get_all_profile() {
		$array = $this->_conn->comm("/tool/user-manager/profile/getall");
		$this->_conn->disconnect();
		if(0 < count($array))
			return $array;
		else
			return array();
	}
	
	/**
	 * This method is used to add profile
	 * @param
	 *	URL: -
	 *
	 * @return type array
	 */
	public function add_profile($param) {
		$this->_conn->comm("/tool/user-manager/profile/add", $param);
		$this->_conn->disconnect();
		return array('success'=>1);
	}
	
	/**
	 * This method is used to change profile
	 * @param
	 *	URL: -
	 *
	 * @return type array
	 */
	public function set_profile($param) {
		$this->_conn->comm("/tool/user-manager/profile/set", $param);
		$this->_conn->disconnect();
		return array('success'=>1);
	}
	
	/**
	 * This method is used to display one profile in detail
	 * @attr
	 *	URL: -
	 *
	 * @return type array
	 */
	public function detail_profile($param) {
		$array = $this->_conn->comm("/tool/user-manager/profile/print", $param);
		$this->_conn->disconnect();
		if(0 < count($array))
			return $array;
		else
			return array();
	}
	
	/**
	 * This method is used to remove the profile
	 * @param
	 *	URL: -
	 *
	 * @return type array
	 */
	public function delete_profile($param) {
		$this->_conn->comm("/tool/user-manager/profile/remove", $param);
		$this->_conn->disconnect();
		return array('success'=>1);
	}
	
	/**
	 * This method is used to display all user
	 * @attr
	 *	URL: -
	 *
	 * @return type array
	 */
	public function get_all_user() {
		$array = $this->_conn->comm("/tool/user-manager/user/getall");
		$this->_conn->disconnect();
		if(0 < count($array))
			return $array;
		else
			return array();
	}
	
	/**
	 * This method is used to add user
	 * @param
	 *	URL: -
	 *
	 * @return type array
	 */
	public function add_user($param) {
		$this->_conn->comm("/tool/user-manager/user/add", $param);
		$this->_conn->disconnect();
		return array('success'=>1);
	}
	
	/**
	 * This method is used to change user
	 * @param
	 *	URL: -
	 *
	 * @return type array
	 */
	public function set_user($param) {
		$this->_conn->comm("/tool/user-manager/user/set", $param);
		$this->_conn->disconnect();
		return array('success'=>1);
	}
	
	/**
	 * This method is used to display one user in detail
	 * @attr
	 *	URL: -
	 *
	 * @return type array
	 */
	public function detail_user($param) {
		$array = $this->_conn->comm("/tool/user-manager/user/print", $param);
		$this->_conn->disconnect();
		if(0 < count($array))
			return $array;
		else
			return array();
	}
	
	/**
	 * This method is used to remove the user
	 * @param
	 *	URL: -
	 *
	 * @return type array
	 */
	public function delete_user($param) {
		$this->_conn->comm("/tool/user-manager/user/remove", $param);
		$this->_conn->disconnect();
		return array('success'=>1);
	}
	
	/**
	 * This method is used to activate the user
	 * @param
	 *	URL: -
	 *
	 * @return type array
	 */
	public function enable_user($param) {
		$this->_conn->comm("/tool/user-manager/user/enable", $param);
		$this->_conn->disconnect();
		return array('success'=>1);
	}
	
	/**
	 * This method is used to disable the user
	 * @param
	 *	URL: -
	 *
	 * @return type array
	 */
	public function disable_user($param) {
		$this->_conn->comm("/tool/user-manager/user/disable", $param);
		$this->_conn->disconnect();
		return array('success'=>1);
	}	
}