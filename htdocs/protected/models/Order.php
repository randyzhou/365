<?php
class Order extends CActiveRecord
{
	public function tableName()
	{
		return 'orders';
	}

	public function rules()
	{
	}

	public function relations()
	{
	}

	public function attributeLabels()
	{
	}

	public function search()
	{
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
