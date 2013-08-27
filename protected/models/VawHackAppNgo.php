<?php

/**
 * This is the model class for table "vawHackApp_ngo".
 *
 * The followings are the available columns in table 'vawHackApp_ngo':
 * @property integer $id
 * @property string $ngo_name
 * @property integer $ngo_location_id
 * @property string $ngo_contact_person
 * @property string $ngo_contact
 *
 * The followings are the available model relations:
 * @property VawHackAppDistrict $ngoLocation
 */
class VawHackAppNgo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vawHackApp_ngo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ngo_name, ngo_contact_person, ngo_contact', 'required'),
			array('ngo_location_id', 'numerical', 'integerOnly'=>true),
			array('ngo_name, ngo_contact_person, ngo_contact', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ngo_name, ngo_location_id, ngo_contact_person, ngo_contact', 'safe', 'on'=>'search'),
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
			'ngoLocation' => array(self::BELONGS_TO, 'VawHackAppDistrict', 'ngo_location_id'),
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
			'ngo_location_id' => 'Ngo Location',
			'ngo_contact_person' => 'Ngo Contact Person',
			'ngo_contact' => 'Ngo Contact',
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
		$criteria->compare('ngo_location_id',$this->ngo_location_id);
		$criteria->compare('ngo_contact_person',$this->ngo_contact_person,true);
		$criteria->compare('ngo_contact',$this->ngo_contact,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VawHackAppNgo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
