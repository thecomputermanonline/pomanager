<?php

/**
 * This is the model class for table "documents".
 *
 * The followings are the available columns in table 'documents':
 * @property integer $id
 * @property integer $orderid
 * @property string $document_name
 * @property string $document_type
 * @property string $document_filename
 * @property integer $date_created
 * @property string $date_updated
 * @property integer $created_by
 * @property integer $updated_by
 *
 * The followings are the available model relations:
 * @property Users $updatedBy
 * @property Orders $order
 * @property Users $createdBy
 */
class Documents extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'documents';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('orderid, document_name , ', 'required'),
			array('orderid, date_created, created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('document_name', 'length', 'max'=>500),
			array('document_type', 'length', 'max'=>255),
                     array('document_filename', 'file', 'types' => 'jpg, gif, png, pdf, doc, docx,  txt, xlsx, xls, csv, zip', 'allowEmpty' => true, 'maxSize' => 1024 * 1024 * 50, 'tooLarge' => 'The file was larger than 50MB. Please upload a smaller file.'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, orderid, document_name, document_type, document_filename, date_created, date_updated, created_by, updated_by', 'safe', 'on'=>'search'),
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
			'updatedBy' => array(self::BELONGS_TO, 'Users', 'updated_by'),
			'order' => array(self::BELONGS_TO, 'Orders', 'orderid'),
			'createdBy' => array(self::BELONGS_TO, 'User', 'created_by'),
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
			'document_name' => 'Document Name',
			'document_type' => 'Document Type',
			'document_filename' => 'Document Filename',
			'date_created' => 'Date Created',
			'date_updated' => 'Date Updated',
			'created_by' => 'Created By',
			'updated_by' => 'Updated By',
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
		$criteria->compare('document_name',$this->document_name,true);
		$criteria->compare('document_type',$this->document_type,true);
		$criteria->compare('document_filename',$this->document_filename,true);
		$criteria->compare('date_created',$this->date_created);
		$criteria->compare('date_updated',$this->date_updated,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_by',$this->updated_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Documents the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
			{
				$this->date_created=$this->date_updated=time();
				$this->created_by=Yii::app()->user->id;
			}
			else
			$this->date_updated=time();
                        $this->updated_by=Yii::app()->user->id;
			return true;
		}
		else
			return false;
	}
}
