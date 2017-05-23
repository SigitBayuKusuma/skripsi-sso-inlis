<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$record = Users::model()->findByAttributes(array('email' => $this->username));
		
		if($record === null)
			$this->errorCode = self::ERROR_USERNAME_INVALID;		
		else if($record->password !== md5($this->password))
			$this->errorCode = self::ERROR_PASSWORD_INVALID;		
		else {
			$this->_id = $record->user_id;
			$this->setState('publish', $record->publish);
			$this->setState('level', $record->level_id);
			$this->setState('member', $record->member_id);
			$this->setState('email', $record->email);
			$this->setState('creation_date', $record->creation_date);
			$this->errorCode = self::ERROR_NONE;
		}
		
		return !$this->errorCode;
	}

	public function getId() {
		return $this->_id;
	}
}