<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property integer $companyid
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $create_time
 * @property string $last_visit
 * @property integer $status_id
 */
class User extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, password, email, status_id', 'required', 'on'=>'create'),
            array('username, email', 'required', 'on'=>'preferences'),
            array('status_id', 'numerical', 'integerOnly' => true),
            array('password', 'length', 'min'=>6, 'max'=>40),
            array('email', 'email'),
              array('companyid',  'integerOnly'=>true),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, username, password, email, create_time, last_visit, status_id', 'safe'),
            array('id, username, password, email, create_time, last_visit, status_id', 'safe', 'on' => 'search'),
        );
    }
    

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'create_time' => 'Create Time',
            'last_visit' => 'Last Visit',
            'status_id' => 'Status',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('create_time', $this->create_time, true);
        $criteria->compare('last_visit', $this->last_visit, true);
        $criteria->compare('status_id', $this->status_id);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}