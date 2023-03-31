<?php

/**
 * This is the model class for table "enroll".
 *
 * The followings are the available columns in table 'enroll':
 * @property string $id
 * @property integer $userid
 * @property string $username
 * @property integer $usersex
 * @property integer $certified
 * @property integer $ownerid
 * @property string $usertel
 * @property integer $money
 * @property integer $moneyleft
 * @property string $baomingtime
 * @property string $homeresidence
 * @property string $duty
 * @property string $marry
 */
class Enroll extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'enroll';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userid, usersex, certified, ownerid, money, moneyleft', 'numerical', 'integerOnly'=>true),
			array('username, usertel', 'length', 'max'=>50),
			array('homeresidence, duty, marry', 'length', 'max'=>150),
			array('baomingtime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, userid, username, usersex, certified, ownerid, usertel, money, moneyleft, baomingtime, homeresidence, duty, marry', 'safe', 'on'=>'search'),
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
			"owner"=>array(self::BELONGS_TO,'Shop','ownerid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'userid' => 'Userid',
			'username' => 'Username',
			'usersex' => 'Usersex',
			'certified' => 'Certified',
			'Ownerid' => 'Ownerid',
			'usertel' => 'Usertel',
			'money' => 'Money',
			'moneyleft' => 'Moneyleft',
			'baomingtime' => 'Baomingtime',
			'homeresidence' => 'Homeresidence',
			'duty' => 'Duty',
			'marry' => 'Marry',
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
		$criteria->compare('userid',$this->userid);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('usersex',$this->usersex);
		$criteria->compare('certified',$this->certified);
		$criteria->compare('ownerid',$this->ownerid);
		$criteria->compare('usertel',$this->usertel,true);
		$criteria->compare('money',$this->money);
		$criteria->compare('moneyleft',$this->moneyleft);
		$criteria->compare('baomingtime',$this->baomingtime,true);
		$criteria->compare('homeresidence',$this->homeresidence,true);
		$criteria->compare('duty',$this->duty,true);
		$criteria->compare('marry',$this->marry,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GroupBaoming the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
