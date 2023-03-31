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
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate1()
	{
		$user=DvUser::model()->find('LOWER(username)=?',array(strtolower($this->username)));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$user->userid;
			$this->setState('id', $user->userid);
			$this->setState('usersex', $user->usersex);
			$this->setState('cert', $user->cert);
			$this->setState('sitemember', '');
			$this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode==self::ERROR_NONE;
	}

	public function authenticate($type=0)
	{
		$user=DvUser::model()->find('LOWER(username)=?',array(strtolower($this->username)));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password,$type))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->setState('id', $user->userid);
			$this->_id=$user->userid;
			$this->username=$user->username;
			$this->setState('usersex', $user->usersex);
			$this->setState('cert', $user->cert);
			$this->setState('sitemember', '');
			$this->errorCode=self::ERROR_NONE;
		}

		return $this->errorCode==self::ERROR_NONE;
	}

	public function authenticate3()
	{
		//$user=DvUser::model()->find('LOWER(username)=?',array(strtolower($this->username)));

		if(!isset($_SESSION["openid"]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else
		{
			$this->setState('id', $_SESSION["openid"]);
			$this->_id=$user->userid;
//			$this->username=$user->username;
			$this->errorCode=self::ERROR_NONE;
		}

		return $this->errorCode==self::ERROR_NONE;
	}

	/**
	 * @return integer the ID of the user record
	 */
	public function getId()
	{
		return $this->_id;
	}
}
