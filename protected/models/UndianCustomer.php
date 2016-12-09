<?php

/**
 * This is the model class for table "undian_customer".
 *
 * The followings are the available columns in table 'undian_customer':
 * @property integer $id
 * @property string $no_undian
 * @property integer $id_tukar_point_undian
 * @property integer $id_customer
 *
 * The followings are the available model relations:
 * @property TukarPointUndian $idTukarPointUndian
 * @property Customer $idCustomer
 */
class UndianCustomer extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'undian_customer';
    }

    public function beforeSave() {

        $panjang_karakter = $this->id + $this->id_customer + date('n');
        $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $string = '';
        for ($i = 0; $i < $panjang_karakter; $i++) {
            $pos = rand(0, strlen($karakter) - 1);
            $string .= $karakter{$pos};
        }
        $this->no_undian = $string;
        return TRUE;
    }

    public function afterFind() {
        $this->id_tukar_point_undian = $this->idTukarPointUndian->undianPoint;
        $this->id_customer = $this->idCustomer->namaKtp;
        return TRUE;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array(' id_tukar_point_undian, id_customer', 'required'),
            array('id_tukar_point_undian, id_customer', 'numerical', 'integerOnly' => true),
            array('no_undian', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, no_undian, id_tukar_point_undian, id_customer', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idTukarPointUndian' => array(self::BELONGS_TO, 'TukarPointUndian', 'id_tukar_point_undian'),
            'idCustomer' => array(self::BELONGS_TO, 'Customer', 'id_customer'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'no_undian' => 'No Undian',
            'id_tukar_point_undian' => 'Id Tukar Point Undian',
            'id_customer' => 'Id Customer',
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
        $criteria->compare('no_undian', $this->no_undian, true);
        $criteria->compare('id_tukar_point_undian', $this->id_tukar_point_undian);
        $criteria->compare('id_customer', $this->id_customer);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return UndianCustomer the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
