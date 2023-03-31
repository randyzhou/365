<?php

/**
 * This is the model class for table "msg_public".
 *
 * The followings are the available columns in table 'msg_public':
 * @property string $id
 * @property string $sender
 * @property string $incept
 * @property string $content
 * @property string $sendtime
 * @property integer $sendid
 * @property integer $receiveid
 * @property integer $sendcert
 * @property integer $receivecert
 * @property integer $sendsex
 * @property integer $receivesex
 * @property string $sendip
 * @property integer $certified
 * @property integer $readcertified
 * @property string $onmessage
 */
class MsgPublic extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'msg_public';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userid, certified, usersex', 'numerical', 'integerOnly'=>true),
			array('username, tousername', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			// array('id, sender, incept, content, sendtime, sendid, receiveid, sendcert, receivecert, sendsex, receivesex, sendip, certified, readcertified, onmessage', 'safe', 'on'=>'search'),
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('msg',$this->content,true);
		$criteria->compare('sendtime',$this->sendtime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ChatPublicMsg the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
