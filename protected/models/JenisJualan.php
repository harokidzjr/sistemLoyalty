<?php

/**
 * This is the model class for table "jenis_jualan".
 *
 * The followings are the available columns in table 'jenis_jualan':
 * @property integer $id
 * @property string $jns_jualan
 *
 * The followings are the available model relations:
 * @property Tenant $id0
 */
class JenisJualan extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'jenis_jualan';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id, jns_jualan', 'required'),
            array('id', 'numerical', 'integerOnly' => true),
            array('jns_jualan', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, jns_jualan', 'safe', 'on' => 'search'),
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
            'jns_jualan' => 'Jenis Jualan',
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
    public function ambilSemuaData() {
        $criteria = new CDbCriteria();
        $criteria->group = 'jns_jualan';
        $tags = $this->findAll($criteria);
        $test = array();
        foreach ($tags as $t) {
            array_push($test, $t->jns_jualan);
        }
        return $test;
    }

    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('jns_jualan', $this->jns_jualan, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return JenisJualan the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getNamaToko() {
        $t = Tenant::model()->findByPk($this->id);
        echo $t->nama_toko;
    }

}
