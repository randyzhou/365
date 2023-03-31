<?php

/**
 * This is the model class for table "friend".
 *
 * The followings are the available columns in table 'friend':
 * @property string $id
 * @property string $username
 * @property string $friend
 * @property string $addtime
 * @property integer $mod
 * @property integer $userid
 * @property integer $friendid
 * @property integer $usertel
 * @property integer $friendtel
 * @property integer $useronline
 * @property integer $friendonline
 * @property integer $usersex
 * @property integer $friendsex
 * @property integer $usercert
 * @property integer $F_friendcert
 * @property integer $usermessage
 * @property integer $friendmessage
 * @property integer $usertime
 * @property integer $friendtime
 * @property integer $onlinecertified
 * @property integer $webid
 */
class Friend extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DvFriend the static model class
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
		return 'friend';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mod, userid, friendid, usertel, friendtel, useronline, friendonline, usersex, friendsex, usercert, friendcert, usermessage, friendmessage, usertime, friendtime, onlinecertified, webid', 'numerical', 'integerOnly'=>true),
			array('username, friend', 'length', 'max'=>50),
			array('addtime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, friend, addtime, mod, userid, friendid, usertel, friendtel, useronline, friendonline, usersex, friendsex, usercert, friendcert, usermessage, friendmessage, usertime, friendtime, onlinecertified, webid', 'safe', 'on'=>'search'),
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
			'user_owner' => array(self::BELONGS_TO,'User','userid'),
			'friend_owner' => array(self::BELONGS_TO,'User','friendid')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'friend' => 'Friend',
			'addtime' => 'Addtime',
			'mod' => 'Mod',
			'userid' => 'Userid',
			'friendid' => 'Friendid',
			'usertel' => 'Usertel',
			'friendtel' => 'Friendtel',
			'useronline' => 'Useronline',
			'friendonline' => 'Friendonline',
			'usersex' => 'Usersex',
			'friendsex' => 'Friendsex',
			'usercert' => 'Usercert',
			'friendcert' => 'Friendcert',
			'usermessage' => 'Usermessage',
			'friendmessage' => 'Friendmessage',
			'usertime' => 'Usertime',
			'friendtime' => 'Friendtime',
			'onlinecertified' => 'Onlinecertified',
			'webid' => 'Webid',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('friend',$this->friend,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('mod',$this->mod);
		$criteria->compare('userid',$this->userid);
		$criteria->compare('friendid',$this->friendid);
		$criteria->compare('usertel',$this->usertel);
		$criteria->compare('friendtel',$this->friendtel);
		$criteria->compare('useronline',$this->useronline);
		$criteria->compare('friendonline',$this->friendonline);
		$criteria->compare('usersex',$this->usersex);
		$criteria->compare('friendsex',$this->friendsex);
		$criteria->compare('usercert',$this->usercert);
		$criteria->compare('friendcert',$this->friendcert);
		$criteria->compare('usermessage',$this->usermessage);
		$criteria->compare('friendmessage',$this->friendmessage);
		$criteria->compare('usertime',$this->usertime);
		$criteria->compare('friendtime',$this->friendtime);
		$criteria->compare('onlinecertified',$this->onlinecertified);
		$criteria->compare('webid',$this->webid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
