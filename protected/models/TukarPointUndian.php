<?php

/**
 * This is the model class for table "tukar_point_undian".
 *
 * The followings are the available columns in table 'tukar_point_undian':
 * @property integer $id
 * @property string $nama_undian
 * @property string $keterangan
 * @property string $periode_awal
 * @property string $periode_akhir
 * @property integer $harga_tukar
 *
 * The followings are the available model relations:
 * @property UndianCustomer[] $undianCustomers
 */
class TukarPointUndian extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tukar_point_undian';
    }

    public function getUndianPoint() {
        return $this->nama_undian . ' / ' . $this->harga_tukar;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('nama_undian, keterangan, periode_awal, periode_akhir, harga_tukar', 'required'),
            array('harga_tukar', 'numerical', 'integerOnly' => true),
            array('nama_undian, keterangan', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, nama_undian, keterangan, periode_awal, periode_akhir, harga_tukar', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'undianCustomers' => array(self::HAS_MANY, 'UndianCustomer', 'id_tukar_point_undian'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'nama_undian' => 'Nama Undian',
            'keterangan' => 'Keterangan',
            'periode_awal' => 'Periode Awal',
            'periode_akhir' => 'Periode Akhir',
            'harga_tukar' => 'Harga Tukar',
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
        $criteria->compare('nama_undian', $this->nama_undian, true);
        $criteria->compare('keterangan', $this->keterangan, true);
        $criteria->compare('periode_awal', $this->periode_awal, true);
        $criteria->compare('periode_akhir', $this->periode_akhir, true);
        $criteria->compare('harga_tukar', $this->harga_tukar);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return TukarPointUndian the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
