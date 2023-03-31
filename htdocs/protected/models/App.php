<?php

/**
 * This is the model class for table "photo".
 *
 * The followings are the available columns in table 'photo':
 * @property string $id
 * @property integer $clubid
 * @property string $clubname
 * @property string $photoname
 * @property integer $certified
 * @property string $phototime
 * @property integer $webid
 * @property string $webusername
 * @property string $webname
 * @property string $weburl
 * @property string $area
 */
class Photo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'app';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('groupid, certified', 'numerical', 'integerOnly'=>true),
			array('photoname', 'length', 'max'=>100),
			array('phototime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, groupid, photoname, certified, phototime', 'safe', 'on'=>'search'),
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
			'clubid' => 'Clubid',
			'clubname' => 'Clubname',
			'photoname' => 'Photoname',
			'certified' => 'Certified',
			'phototime' => 'Phototime',
			'webid' => 'Webid',
			'webusername' => 'Webusername',
			'webname' => 'Webname',
			'weburl' => 'Weburl',
			'area' => 'Area',
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
		$criteria->compare('clubid',$this->clubid);
		$criteria->compare('clubname',$this->clubname,true);
		$criteria->compare('photoname',$this->photoname,true);
		$criteria->compare('certified',$this->certified);
		$criteria->compare('phototime',$this->phototime,true);
		$criteria->compare('webid',$this->webid);
		$criteria->compare('webusername',$this->webusername,true);
		$criteria->compare('webname',$this->webname,true);
		$criteria->compare('weburl',$this->weburl,true);
		$criteria->compare('area',$this->area,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GroupPhoto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
