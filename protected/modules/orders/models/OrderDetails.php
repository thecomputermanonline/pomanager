<?php

/**
 * This is the model class for table "order_details".
 *
 * The followings are the available columns in table 'order_details':
 * @property integer $id
 * @property integer $orderid
 * @property integer $productid
 * @property double $quantity
 * @property double $unitprice
 * @property double $discount
 *
 * The followings are the available model relations:
 * @property Orders $order
 * @property Products $product
 */
class OrderDetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order_details';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('orderid, productid', 'numerical', 'integerOnly'=>true),
			array('quantity, unitprice, discount', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, orderid, productid, quantity, unitprice, discount', 'safe', 'on'=>'search'),
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
			'order' => array(self::BELONGS_TO, 'Orders', 'orderid'),
			'product' => array(self::HAS_ONE, 'Products', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'orderid' => 'Orderid',
			'productid' => 'Productid',
			'quantity' => 'Quantity',
			'unitprice' => 'Unitprice',
			'discount' => 'Discount',
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
		$criteria->compare('orderid',$this->orderid);
		$criteria->compare('productid',$this->productid);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('unitprice',$this->unitprice);
		$criteria->compare('discount',$this->discount);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrderDetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public static function getAdapterForInbox($cId) {
		$c = new CDbCriteria();
		$c->addCondition('t.orderid = :cId');
		//$c->addCondition('t.deleted_by <> :deleted_by_receiver OR t.deleted_by IS NULL');
		$c->order = 't.unitprice DESC';
		$c->params = array(
			'cId' => $cId,
			//'deleted_by_receiver' => Message::DELETED_BY_RECEIVER,
		);
		$messagesProvider = new CActiveDataProvider('OrderDetails', array('criteria' => $c));
		return $messagesProvider;
	}
}
