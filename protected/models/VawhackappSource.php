<?php

/**
 * This is the model class for table "vawhackapp_source".
 *
 * The followings are the available columns in table 'vawhackapp_source':
 * @property integer $id
 * @property string $source_name
 * @property integer $source_type_id
 * @property string $source_date
 * @property string $source_email
 * @property string $source_phone
 *
 * The followings are the available model relations:
 * @property VawhackappIncident[] $vawhackappIncidents
 * @property VawhackappSourcetype $sourceType
 */
class VawhackappSource extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vawhackapp_source';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('source_name, source_type_id, source_date, source_email', 'required'),
			array('source_type_id', 'numerical', 'integerOnly'=>true),
			array('source_name', 'length', 'max'=>100),
			array('source_email', 'length', 'max'=>75),
			array('source_phone', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, source_name, source_type_id, source_date, source_email, source_phone', 'safe', 'on'=>'search'),
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
			'vawhackappIncidents' => array(self::HAS_MANY, 'VawhackappIncident', 'incident_source_id'),
			'sourceType' => array(self::BELONGS_TO, 'VawhackappSourcetype', 'source_type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'source_name' => 'Source Name',
			'source_type_id' => 'Source Type',
			'source_date' => 'Source Date',
			'source_email' => 'Source Email',
			'source_phone' => 'Source Phone',
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
		$criteria->compare('source_name',$this->source_name,true);
		$criteria->compare('source_type_id',$this->source_type_id);
		$criteria->compare('source_date',$this->source_date,true);
		$criteria->compare('source_email',$this->source_email,true);
		$criteria->compare('source_phone',$this->source_phone,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VawhackappSource the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
