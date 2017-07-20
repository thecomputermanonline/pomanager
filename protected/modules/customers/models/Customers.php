<?php

/**
 * This is the model class for table "customers".
 *
 * The followings are the available columns in table 'customers':
 * @property integer $id
 * @property string $company_name
 * @property string $first_name
 * @property string $last_name
 * @property string $billing_address
 * @property string $city
 * @property string $state
 * @property string $zip_code
 * @property string $email
 * @property string $company_website
 * @property string $phone_number
 * @property string $fax_number
 * @property string $ship_address
 * @property string $ship_city
 * @property string $ship_state
 * @property string $ship_zipcode
 * @property string $ship_phone_number
 * @property string $Notes
 *
 * The followings are the available model relations:
 * @property Orders[] $orders
 */
class Customers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company_name, first_name, last_name, billing_address, city, state, zip_code, company_website, phone_number, fax_number, ship_address, ship_city, ship_state, ship_zipcode, ship_phone_number', 'required'),
			array('company_name, last_name, city, ship_city, ship_state', 'length', 'max'=>50),
			array('first_name, phone_number, fax_number, ship_phone_number', 'length', 'max'=>30),
			array('billing_address, ship_address', 'length', 'max'=>255),
			array('state, zip_code, ship_zipcode', 'length', 'max'=>20),
			array('email', 'length', 'max'=>75),
			array('Notes', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, company_name, first_name, last_name, billing_address, city, state, zip_code, email, company_website, phone_number, fax_number, ship_address, ship_city, ship_state, ship_zipcode, ship_phone_number, Notes', 'safe', 'on'=>'search'),
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
			'orders' => array(self::HAS_MANY, 'Orders', 'customerid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'company_name' => 'Company Name',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'billing_address' => 'Billing Address',
			'city' => 'City',
			'state' => 'State',
			'zip_code' => 'Zip Code',
			'email' => 'Email',
			'company_website' => 'Company Website',
			'phone_number' => 'Phone Number',
			'fax_number' => 'Fax Number',
			'ship_address' => 'Ship Address',
			'ship_city' => 'Ship City',
			'ship_state' => 'Ship State',
			'ship_zipcode' => 'Ship Zipcode',
			'ship_phone_number' => 'Ship Phone Number',
			'Notes' => 'Notes',
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
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('billing_address',$this->billing_address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip_code',$this->zip_code,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('company_website',$this->company_website,true);
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('fax_number',$this->fax_number,true);
		$criteria->compare('ship_address',$this->ship_address,true);
		$criteria->compare('ship_city',$this->ship_city,true);
		$criteria->compare('ship_state',$this->ship_state,true);
		$criteria->compare('ship_zipcode',$this->ship_zipcode,true);
		$criteria->compare('ship_phone_number',$this->ship_phone_number,true);
		$criteria->compare('Notes',$this->Notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
