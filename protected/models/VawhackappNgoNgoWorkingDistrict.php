<?php

/**
 * This is the model class for table "vawhackapp_ngo_ngo_working_district".
 *
 * The followings are the available columns in table 'vawhackapp_ngo_ngo_working_district':
 * @property integer $id
 * @property integer $ngo_id
 * @property integer $district_id
 *
 * The followings are the available model relations:
 * @property VawhackappNgo $ngo
 * @property VawhackappDistrict $district
 */
class VawhackappNgoNgoWorkingDistrict extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vawhackapp_ngo_ngo_working_district';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ngo_id, district_id', 'required'),
			array('ngo_id, district_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ngo_id, district_id', 'safe', 'on'=>'search'),
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
			'ngo' => array(self::BELONGS_TO, 'VawhackappNgo', 'ngo_id'),
			'district' => array(self::BELONGS_TO, 'VawhackappDistrict', 'district_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ngo_id' => 'Ngo',
			'district_id' => 'District',
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
		$criteria->compare('ngo_id',$this->ngo_id);
		$criteria->compare('district_id',$this->district_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VawhackappNgoNgoWorkingDistrict the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
