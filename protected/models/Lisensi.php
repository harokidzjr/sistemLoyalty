<?php

/**
 * This is the model class for table "lisensi".
 *
 * The followings are the available columns in table 'lisensi':
 * @property integer $id
 * @property string $lisensi
 *
 * The followings are the available model relations:
 * @property Tenant $id0
 */
class Lisensi extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'lisensi';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id, lisensi', 'required'),
            array('id', 'numerical', 'integerOnly' => true),
            array('lisensi', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, lisensi', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'id0' => array(self::BELONGS_TO, 'Tenant', 'id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID Tenant',
            'lisensi' => 'Lisensi',
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
        $criteria->compare('lisensi', $this->lisensi, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function ambilSemuaData() {
        $criteria = new CDbCriteria();
        $criteria->group = 'lisensi';
        $tags = $this->findAll($criteria);
        $test = array();
        foreach ($tags as $t) {
            array_push($test, $t->lisensi);
        }
        return $test;
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Lisensi the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
