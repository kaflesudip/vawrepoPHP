<?php

/**
 * This is the model class for table "vawHackApp_zone".
 *
 * The followings are the available columns in table 'vawHackApp_zone':
 * @property integer $id
 * @property string $zone_name
 * @property integer $region_id
 *
 * The followings are the available model relations:
 * @property VawHackAppDistrict[] $vawHackAppDistricts
 * @property VawHackAppDevelopmentregion $region
 */
class VawHackAppZone extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vawHackApp_zone';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('zone_name, region_id', 'required'),
			array('region_id', 'numerical', 'integerOnly'=>true),
			array('zone_name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, zone_name, region_id', 'safe', 'on'=>'search'),
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
			'vawHackAppDistricts' => array(self::HAS_MANY, 'VawHackAppDistrict', 'zone_id'),
			'region' => array(self::BELONGS_TO, 'VawHackAppDevelopmentregion', 'region_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'zone_name' => 'Zone Name',
			'region_id' => 'Region',
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
		$criteria->compare('zone_name',$this->zone_name,true);
		$criteria->compare('region_id',$this->region_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VawHackAppZone the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
