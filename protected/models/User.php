<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $nama
 * @property string $username
 * @property string $password
 */
class User extends CActiveRecord {

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
            array('nama, username, password', 'required'),
            array('nama, username', 'length', 'max' => 30),
            array('password', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, nama, username, password', 'safe', 'on' => 'search'),
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
            'nama' => 'Nama',
            'username' => 'Username',
            'password' => 'Password',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('nama', $this->nama, true);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    public function getFullName() {
        return $this->nama;
    }
    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    public function hashPassword($password) {
        return md5($password);
    }

// password validation
    public function validatePassword($password) {
        return $this->hashPassword($password) === $this->password;
    }

    public function beforeSave() {
        if ($this->isNewRecord) {
            $this->created = new CDbExpression('NOW()');
            $this->password = $this->hashPassword($this->password);
        } else {
            if ($this->password != '') {
                $this->password = $this->temp_password;
            } else {
                $this->password = $this->hashPassword($this->password);
            }
        }

        $this->updated = new CDbExpression('NOW()');
//        $this->role = 'Author';

        return parent::beforeSave();
    }

}
