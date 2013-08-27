<?php

/**
 * This is the model class for table "vawhackapp_ngo".
 *
 * The followings are the available columns in table 'vawhackapp_ngo':
 * @property integer $id
 * @property string $ngo_name
 * @property string $ngo_description
 * @property integer $ngo_registered_district_id
 * @property string $contact_person
 * @property string $contact_address
 * @property string $contact_phone
 * @property string $contact_email
 * @property string $contact_website
 *
 * The followings are the available model relations:
 * @property VawhackappDistrict $ngoRegisteredDistrict
 * @property VawhackappNgoNgoWorkingDistrict[] $vawhackappNgoNgoWorkingDistricts
 */
class VawhackappNgo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vawhackapp_ngo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ngo_name, ngo_description, contact_person, contact_address, contact_phone, contact_email, contact_website', 'required'),
			array('ngo_registered_district_id', 'numerical', 'integerOnly'=>true),
			array('ngo_name, contact_person, contact_address, contact_phone, contact_website', 'length', 'max'=>200),
			array('contact_email', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ngo_name, ngo_description, ngo_registered_district_id, contact_person, contact_address, contact_phone, contact_email, contact_website', 'safe', 'on'=>'search'),
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
			'ngoRegisteredDistrict' => array(self::BELONGS_TO, 'VawhackappDistrict', 'ngo_registered_district_id'),
			'vawhackappNgoNgoWorkingDistricts' => array(self::HAS_MANY, 'VawhackappNgoNgoWorkingDistrict', 'ngo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ngo_name' => 'Ngo Name',
			'ngo_description' => 'Ngo Description',
			'ngo_registered_district_id' => 'Ngo Registered District',
			'contact_person' => 'Contact Person',
			'contact_address' => 'Contact Address',
			'contact_phone' => 'Contact Phone',
			'contact_email' => 'Contact Email',
			'contact_website' => 'Contact Website',
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
		$criteria->compare('ngo_name',$this->ngo_name,true);
		$criteria->compare('ngo_description',$this->ngo_description,true);
		$criteria->compare('ngo_registered_district_id',$this->ngo_registered_district_id);
		$criteria->compare('contact_person',$this->contact_person,true);
		$criteria->compare('contact_address',$this->contact_address,true);
		$criteria->compare('contact_phone',$this->contact_phone,true);
		$criteria->compare('contact_email',$this->contact_email,true);
		$criteria->compare('contact_website',$this->contact_website,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VawhackappNgo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
