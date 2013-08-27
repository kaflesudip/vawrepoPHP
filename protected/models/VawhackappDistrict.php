<?php

/**
 * This is the model class for table "vawhackapp_district".
 *
 * The followings are the available columns in table 'vawhackapp_district':
 * @property integer $id
 * @property string $district_name
 * @property integer $zone_id
 * @property double $latitude
 * @property double $longitude
 *
 * The followings are the available model relations:
 * @property VawhackappZone $zone
 * @property VawhackappIncident[] $vawhackappIncidents
 * @property VawhackappLocation[] $vawhackappLocations
 * @property VawhackappNgo[] $vawhackappNgos
 * @property VawhackappNgoNgoWorkingDistrict[] $vawhackappNgoNgoWorkingDistricts
 */
class VawhackappDistrict extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vawhackapp_district';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('district_name, zone_id', 'required'),
			array('zone_id', 'numerical', 'integerOnly'=>true),
			array('latitude, longitude', 'numerical'),
			array('district_name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, district_name, zone_id, latitude, longitude', 'safe', 'on'=>'search'),
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
			'zone' => array(self::BELONGS_TO, 'VawhackappZone', 'zone_id'),
			'vawhackappIncidents' => array(self::HAS_MANY, 'VawhackappIncident', 'incident_district_id'),
			'vawhackappLocations' => array(self::HAS_MANY, 'VawhackappLocation', 'district_id'),
			'vawhackappNgos' => array(self::HAS_MANY, 'VawhackappNgo', 'ngo_registered_district_id'),
			'vawhackappNgoNgoWorkingDistricts' => array(self::HAS_MANY, 'VawhackappNgoNgoWorkingDistrict', 'district_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'district_name' => 'District Name',
			'zone_id' => 'Zone',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
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
		$criteria->compare('district_name',$this->district_name,true);
		$criteria->compare('zone_id',$this->zone_id);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('longitude',$this->longitude);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VawhackappDistrict the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
