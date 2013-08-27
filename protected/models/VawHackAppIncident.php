<?php

/**
 * This is the model class for table "vawHackApp_incident".
 *
 * The followings are the available columns in table 'vawHackApp_incident':
 * @property integer $id
 * @property string $incident_title
 * @property string $incident_date
 * @property string $incident_time
 * @property integer $incident_district_id
 * @property integer $incident_source_id
 * @property string $incident_source_url
 * @property string $death_number
 * @property string $injured_number
 * @property integer $verified
 * @property string $description
 *
 * The followings are the available model relations:
 * @property VawHackAppSource $incidentSource
 * @property VawHackAppDistrict $incidentDistrict
 * @property VawHackAppIncidentIncidentCategory[] $vawHackAppIncidentIncidentCategories
 */
class VawHackAppIncident extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vawHackApp_incident';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('incident_title, incident_date, incident_time, incident_district_id, incident_source_url, description', 'required'),
			array('incident_district_id, incident_source_id, verified', 'numerical', 'integerOnly'=>true),
			array('incident_title', 'length', 'max'=>100),
			array('incident_source_url', 'length', 'max'=>200),
			array('death_number, injured_number', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, incident_title, incident_date, incident_time, incident_district_id, incident_source_id, incident_source_url, death_number, injured_number, verified, description', 'safe', 'on'=>'search'),
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
			'incidentSource' => array(self::BELONGS_TO, 'VawHackAppSource', 'incident_source_id'),
			'incidentDistrict' => array(self::BELONGS_TO, 'VawHackAppDistrict', 'incident_district_id'),
			'vawHackAppIncidentIncidentCategories' => array(self::HAS_MANY, 'VawHackAppIncidentIncidentCategory', 'incident_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'incident_title' => 'Incident Title',
			'incident_date' => 'Incident Date',
			'incident_time' => 'Incident Time',
			'incident_district_id' => 'Incident District',
			'incident_source_id' => 'Incident Source',
			'incident_source_url' => 'Incident Source Url',
			'death_number' => 'Death Number',
			'injured_number' => 'Injured Number',
			'verified' => 'Verified',
			'description' => 'Description',
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
		$criteria->compare('incident_title',$this->incident_title,true);
		$criteria->compare('incident_date',$this->incident_date,true);
		$criteria->compare('incident_time',$this->incident_time,true);
		$criteria->compare('incident_district_id',$this->incident_district_id);
		$criteria->compare('incident_source_id',$this->incident_source_id);
		$criteria->compare('incident_source_url',$this->incident_source_url,true);
		$criteria->compare('death_number',$this->death_number,true);
		$criteria->compare('injured_number',$this->injured_number,true);
		$criteria->compare('verified',$this->verified);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VawHackAppIncident the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
