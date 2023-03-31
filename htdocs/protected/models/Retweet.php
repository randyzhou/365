<?php
class Retweet extends CActiveRecord
{
	public function tableName()
	{
		return 'retweet';
	}

	public function rules()
	{
		return array(
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
		);
	}

	public function search()
	{
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
