<?php

/**
 * This is the model class for table "store".
 *
 * The followings are the available columns in table 'store':
 * @property string $id
 * @property string $name
 * @property string $type
 * @property string $intro
 * @property integer $certified
 * @property string $userid
 */
class Shop extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'shop';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('certified', 'numerical', 'integerOnly'=>true),
			array('id, userid', 'length', 'max'=>11),
			array('name', 'length', 'max'=>50),
			array('type', 'length', 'max'=>100),
			array('intro', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, type, certified, openid', 'safe', 'on'=>'search'),
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
			"user_owner"=>array(self::BELONGS_TO,'User','userid'),
			"login"=>array(self::BELONGS_TO,'Login','userid'),
			"store"=>array(self::BELONGS_TO,'Shop','ownerid'),
			"groups"=>array(self::HAS_MANY,'Shop','ownerid'),
			"products"=>array(self::HAS_MANY,'Product','ownerid'),
			"members"=>array(self::HAS_MANY,'Member','ownerid'),
			"enrolls"=>array(self::HAS_MANY,'Enroll','ownerid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Store Name',
			'type' => 'Store Type',
			'intro' => 'Store Intro',
			'certified' => 'Certified',
			'userid' => 'Store Userid',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('intro',$this->intro,true);
		$criteria->compare('certified',$this->certified);
		$criteria->compare('userid',$this->userid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Store the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
