<?php

/**
 * This is the model class for table "msg_private".
 *
 * The followings are the available columns in table 'msg_private':
 * @property string $id
 * @property string $username
 * @property string $tousername
 * @property string $msg
 * @property string $sendtime
 * @property integer $userid
 * @property integer $receiveid
 * @property integer $sendcert
 * @property integer $receivecert
 * @property integer $usersex
 * @property integer $receivesex
 * @property string $userip
 * @property integer $certified
 * @property integer $readState
 * @property string $onmessage
 */
class MsgPrivate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'msg_private';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userid, toid, usercert, tousercert, usersex, tousersex, certified, readState', 'numerical', 'integerOnly'=>true),
			array('username, tousername', 'length', 'max'=>50),
			array('userip', 'length', 'max'=>20),
			array('onmessage', 'length', 'max'=>80),
			array('msg, sendtime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			//array('id, sender, incept, content, sendtime, sendid, receiveid, sendcert, receivecert, sendsex, receivesex, sendip, certified, readcertified, onmessage', 'safe', 'on'=>'search'),
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
			'tousername' => 'Tousername',
			'msg' => 'Msg',
			'sendtime' => 'Sendtime',
			'userid' => 'Userid',
			'toid' => 'Toid',
			'usercert' => 'Usercert',
			'tousercert' => 'Tousercert',
			'usersex' => 'Usersex',
			'tousersex' => 'Tousersex',
			'userip' => 'Userip',
			'certified' => 'Certified',
			'readState' => 'Readstate',
			'onmessage' => 'Onmessage'
		);
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
		//
		// $criteria->compare('id',$this->id,true);
		// $criteria->compare('sender',$this->sender,true);
		// $criteria->compare('incept',$this->incept,true);
		// $criteria->compare('content',$this->content,true);
		// $criteria->compare('sendtime',$this->sendtime,true);
		// $criteria->compare('sendid',$this->sendid);
		// $criteria->compare('receiveid',$this->receiveid);
		// $criteria->compare('sendcert',$this->sendcert);
		// $criteria->compare('receivecert',$this->receivecert);
		// $criteria->compare('sendsex',$this->sendsex);
		// $criteria->compare('receivesex',$this->receivesex);
		// $criteria->compare('sendip',$this->sendip,true);
		// $criteria->compare('certified',$this->certified);
		// $criteria->compare('readcertified',$this->readcertified);
		// $criteria->compare('onmessage',$this->onmessage,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ChatPrivateMsg the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
