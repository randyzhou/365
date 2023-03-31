<?php

class UserLife extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'user_life';
	}

	public function rules()
	{
		return array(
			array('userid', 'required'),
		);
	}

	public function relations()
	{
		return array(
		);
	}

	public function attributeLabels()
	{
		return array(
			'userid' => 'Userid'
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('userid',$this->userid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
