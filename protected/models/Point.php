<?php

/**
 * This is the model class for table "point".
 *
 * The followings are the available columns in table 'point':
 * @property integer $id
 * @property string $tgl_topup
 * @property integer $point
 * @property integer $sudah_dipakai
 * @property string $status
 * @property string $date_expired
 * @property integer $no_resi
 *
 * The followings are the available model relations:
 * @property Kwitansi $noResi
 */
class Point extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'point';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('tgl_topup, point, status, date_expired, no_resi', 'required'),
            array('sudah_dipakai', 'default', 'value' => 0, 'on' => 'insert'),
            array('point, sudah_dipakai, no_resi', 'numerical', 'integerOnly' => true),
            array('status', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, tgl_topup, point, sudah_dipakai, status, date_expired, no_resi', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'noResi' => array(self::BELONGS_TO, 'Kwitansi', 'no_resi'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'tgl_topup' => 'Tgl Topup',
            'point' => 'Point',
            'sudah_dipakai' => 'Sudah Dipakai',
            'status' => 'Status',
            'date_expired' => 'Date Expired',
            'no_resi' => 'No Resi',
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
        $criteria->compare('tgl_topup', $this->tgl_topup, true);
        $criteria->compare('point', $this->point);
        $criteria->compare('sudah_dipakai', $this->sudah_dipakai);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('date_expired', $this->date_expired, true);
        $criteria->compare('no_resi', $this->no_resi);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Point the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
