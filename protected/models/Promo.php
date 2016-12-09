<?php

/**
 * This is the model class for table "promo".
 *
 * The followings are the available columns in table 'promo':
 * @property integer $id
 * @property string $start_periode
 * @property string $end_periode
 * @property string $apply_in
 * @property string $status
 * @property string $date_expired
 */
class Promo extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'promo';
    }

    public function getPromo() {
        return $this->start_periode . ' - ' . $this->end_periode . ' / ' . $this->status;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('start_periode, end_periode, apply_in, status, date_expired', 'required'),
            array('apply_in, status', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, start_periode, end_periode, apply_in, status, date_expired', 'safe', 'on' => 'search'),
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
            'start_periode' => 'Start Periode',
            'end_periode' => 'End Periode',
            'apply_in' => 'Apply In',
            'status' => 'Status',
            'date_expired' => 'Date Expired',
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
        $criteria->compare('start_periode', $this->start_periode, true);
        $criteria->compare('end_periode', $this->end_periode, true);
        $criteria->compare('apply_in', $this->apply_in, true);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('date_expired', $this->date_expired, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Promo the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
