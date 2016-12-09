<?php

/**
 * This is the model class for table "voucher_customer".
 *
 * The followings are the available columns in table 'voucher_customer':
 * @property integer $id
 * @property integer $kode_voucher
 * @property integer $id_tukar_point_voucher
 * @property integer $id_customer
 *
 * The followings are the available model relations:
 * @property TukarPointVoucher $idTukarPointVoucher
 * @property Customer $idCustomer
 */
class VoucherCustomer extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'voucher_customer';
    }

    public function beforeSave() {
        $md5Kode = md5($this->id_tukar_point_voucher + $this->id_customer + date('Y-m-d')) ;
        $this->kode_voucher = $md5Kode;
        return TRUE;
    }
    
    public function afterFind() {
        $this->id_tukar_point_voucher = $this->idTukarPointVoucher->voucherPoint;
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
            array('id_tukar_point_voucher, id_customer', 'required'),
            array('id_tukar_point_voucher, id_customer', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, kode_voucher, id_tukar_point_voucher, id_customer', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idTukarPointVoucher' => array(self::BELONGS_TO, 'TukarPointVoucher', 'id_tukar_point_voucher'),
            'idCustomer' => array(self::BELONGS_TO, 'Customer', 'id_customer'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'kode_voucher' => 'Kode Voucher',
            'id_tukar_point_voucher' => 'Id Tukar Point Voucher',
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
        $criteria->compare('kode_voucher', $this->kode_voucher);
        $criteria->compare('id_tukar_point_voucher', $this->id_tukar_point_voucher);
        $criteria->compare('id_customer', $this->id_customer);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return VoucherCustomer the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
