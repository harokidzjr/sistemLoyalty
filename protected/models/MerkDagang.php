<?php

/**
 * This is the model class for table "merk_dagang".
 *
 * The followings are the available columns in table 'merk_dagang':
 * @property integer $id
 * @property string $merk_dagang
 *
 * The followings are the available model relations:
 * @property Tenant $id0
 */
class MerkDagang extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'merk_dagang';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id, merk_dagang', 'required'),
            array('id', 'numerical', 'integerOnly' => true),
            array('merk_dagang', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, merk_dagang', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idTenant' => array(self::BELONGS_TO, 'Tenant', 'id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID Tenant',
            'merk_dagang' => 'Merk Dagang',
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
        $criteria->compare('merk_dagang', $this->merk_dagang, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function ambilSemuaData() {
        $criteria = new CDbCriteria();
        $criteria->group = 'merk_dagang';
        $tags = $this->findAll($criteria);
        $test = array();
        foreach ($tags as $t) {
            array_push($test, $t->merk_dagang);
        }
        return $test;
    }
    public function getNamaToko(){
        $t = Tenant::model()->findByPk($this->id);
//        return $t->nama_toko;
        echo $t->nama_toko;
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return MerkDagang the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
