<?php
/**
 * Description of OApi_Tool
 *
 * TOC :
 *	ppp_secret
 *	ppp_profile
 *	ppp_active 
 *	ppp_aaa
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2016 Ommu Platform (opensource.ommu.co)
 * @created date 26 May 2016, 15:15 WIB
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 */
 
defined('TOOL_PATH') or define('TOOL_PATH',dirname(__FILE__).DIRECTORY_SEPARATOR);

require_once TOOL_PATH . 'OToolUsermanager.php';
 
class OTool {
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
	 * This method for call class OApi_Ppp_Secret
	 * @return Object of OApi_Ppp_Secret
	 */
	public function usermanager() {
		return new OToolUsermanager($this->talker, $this->_conn);
	}
}