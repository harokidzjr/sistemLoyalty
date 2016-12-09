<?php

/**
 * This is the model class for table "konversi".
 *
 * The followings are the available columns in table 'konversi':
 * @property integer $id
 * @property integer $nilai_konversi
 * @property integer $id_promo_or_tenant
 * @property string $tipe
 *
 * The followings are the available model relations:
 * @property Kwitansi[] $kwitansis
 */
class Konversi extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'konversi';
    }

    public function getUpdatePromoortenant($tipe) {
        if ($tipe == 'Promo') {
            $promo = CHtml::listData(Promo::model()->findAll(array("condition" => "id =  $this->id_promo_or_tenant")), 'id', 'promo');
            return $promo;
        } else {
            $tenant = CHtml::listData(Tenant::model()->findAll(array("condition" => "id =  $this->id_promo_or_tenant")), 'id', 'nama_toko');
            return $tenant;
        }
    }

    public function getPromoortenant($tipe) {
        if ($tipe == 'Promo') {
            $promo = Promo::model()->findByAttributes(array('id' => $this->id_promo_or_tenant));
            return $promo->promo;
        } else {
            $tenant = Tenant::model()->findByAttributes(array('id' => $this->id_promo_or_tenant));
            return $tenant->nama_toko;
        }
    }

    public function getKonversi() {
        return $this->nilai_konversi . ' | ' . $this->tipe ;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('nilai_konversi, id_promo_or_tenant, tipe', 'required'),
            array('nilai_konversi, id_promo_or_tenant', 'numerical', 'integerOnly' => true),
            array('tipe', 'length', 'max' => 13),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, nilai_konversi, id_promo_or_tenant, tipe', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'kwitansis' => array(self::HAS_MANY, 'Kwitansi', 'id_konversi'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'nilai_konversi' => 'Nilai Konversi',
            'id_promo_or_tenant' => 'Promo Or Tenant',
            'tipe' => 'Tipe Promo Or Tenant',
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
        $criteria->compare('nilai_konversi', $this->nilai_konversi);
        $criteria->compare('id_promo_or_tenant', $this->id_promo_or_tenant);
        $criteria->compare('tipe', $this->tipe, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Konversi the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
