<?php

/**
 * This is the model class for table "orders".
 *
 * The followings are the available columns in table 'orders':
 * @property integer $id
 * @property integer $customerid
 * @property integer $employeeid
 * @property string $order_date
 * @property string $purchase_order_number
 * @property string $ship_date
 * @property integer $shipping_methodid
 * @property double $freight_charge
 * @property double $taxes
 * @property string $payment_received
 * @property string $comment
 *
 * The followings are the available model relations:
 * @property Documents[] $documents
 * @property OrderDetails[] $orderDetails
 * @property Customers $customer
 * @property Employees $employee
 * @property ShippingMethods $shippingMethod
 */
class Orders extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orders';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('purchase_order_number', 'required'),
			array('customerid, employeeid, shipping_methodid', 'numerical', 'integerOnly'=>true),
			array('freight_charge, taxes', 'numerical'),
			array('purchase_order_number', 'length', 'max'=>30),
			array('payment_received', 'length', 'max'=>1),
			array('order_date, ship_date, comment', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, customerid, employeeid, order_date, purchase_order_number, ship_date, shipping_methodid, freight_charge, taxes, payment_received, comment', 'safe', 'on'=>'search'),
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
			'documents' => array(self::HAS_MANY, 'Documents', 'orderid'),
                    'documentCount' => array(self::STAT, 'Documents', 'orderid'),
		
			'orderDetails' => array(self::HAS_MANY, 'OrderDetails', 'orderid'),
			'customer' => array(self::BELONGS_TO, 'Customers', 'customerid'),
			'employee' => array(self::BELONGS_TO, 'Employees', 'employeeid'),
			'shippingMethod' => array(self::BELONGS_TO, 'ShippingMethods', 'shipping_methodid'),
                    'comments' => array(self::HAS_MANY, 'Comment', 'orderid', 'condition'=>'comments.status='.Comment::STATUS_APPROVED, 'order'=>'comments.create_time DESC'),
			'commentCount' => array(self::STAT, 'Comment', 'orderid', 'condition'=>'status='.Comment::STATUS_APPROVED),
		
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'customerid' => 'Customerid',
			'employeeid' => 'Employeeid',
			'order_date' => 'Order Date',
			'purchase_order_number' => 'Purchase Order Number',
			'ship_date' => 'Ship Date',
			'shipping_methodid' => 'Shipping Methodid',
			'freight_charge' => 'Freight Charge',
			'taxes' => 'Taxes',
			'payment_received' => 'Payment Received',
			'comment' => 'Comment',
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
		$criteria->compare('customerid',$this->customerid);
		$criteria->compare('employeeid',$this->employeeid);
		$criteria->compare('order_date',$this->order_date,true);
		$criteria->compare('purchase_order_number',$this->purchase_order_number,true);
		$criteria->compare('ship_date',$this->ship_date,true);
		$criteria->compare('shipping_methodid',$this->shipping_methodid);
		$criteria->compare('freight_charge',$this->freight_charge);
		$criteria->compare('taxes',$this->taxes);
		$criteria->compare('payment_received',$this->payment_received,true);
		$criteria->compare('comment',$this->comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Orders the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public static function getAdapterForInbox($cId) {
		$c = new CDbCriteria();
		$c->addCondition('t.customerid = :cId');
		//$c->addCondition('t.deleted_by <> :deleted_by_receiver OR t.deleted_by IS NULL');
		$c->order = 't.order_date DESC';
		$c->params = array(
			'cId' => $cId,
			//'deleted_by_receiver' => Message::DELETED_BY_RECEIVER,
		);
		$messagesProvider = new CActiveDataProvider('Orders', array('criteria' => $c));
		return $messagesProvider;
	}
        
        public function addComment($comment)
	{
		if(Yii::app()->params['commentNeedApproval'])
			$comment->status=Comment::STATUS_PENDING;
		else
			$comment->status=Comment::STATUS_APPROVED;
		$comment->orderid=$this->id;
                $comment->author=yii::app()->user->data()->username;
		return $comment->save();
	}
        public function addDocument($document)
	{
		//if(Yii::app()->params['commentNeedApproval'])
			//$comment->status=Comment::STATUS_PENDING;
		//else
			//$comment->status=Comment::STATUS_APPROVED;
		$document->orderid=$this->id;
    
        
        
		return $document->save();
	}
}
