<?php

/**
 * This is the model class for table "owner".
 *
 * The followings are the available columns in table 'owner':
 * @property integer $id
 * @property string $nama
 * @property integer $no_ktp
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $alamat_ktp
 * @property string $alamat_surat
 * @property string $no_hp
 * @property string $pin_bb
 * @property string $no_wa
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Tenant[] $tenants
 */
class Owner extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'owner';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('nama, no_ktp, tempat_lahir, tgl_lahir, alamat_ktp, alamat_surat, no_hp, pin_bb, no_wa, email', 'required'),
//            array('no_ktp', 'numerical', 'integerOnly' => true),
            array('no_ktp,nama, tempat_lahir, alamat_ktp, alamat_surat, no_hp, pin_bb, no_wa, email', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, nama, no_ktp, tempat_lahir, tgl_lahir, alamat_ktp, alamat_surat, no_hp, pin_bb, no_wa, email', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'tenants' => array(self::HAS_MANY, 'Tenant', 'id_owner'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'nama' => 'Nama',
            'no_ktp' => 'No KTP',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'alamat_ktp' => 'Alamat Ktp',
            'alamat_surat' => 'Alamat Surat',
            'no_hp' => 'No Handphone',
            'pin_bb' => 'Pin Blackberry Messengger',
            'no_wa' => 'Nomer Telfon Whatsapp',
            'email' => 'Email',
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
    public function getNamaKtp() {
        return $this->nama.' / '.$this->no_ktp;
    }
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('nama', $this->nama, true);
        $criteria->compare('no_ktp', $this->no_ktp);
        $criteria->compare('tempat_lahir', $this->tempat_lahir, true);
        $criteria->compare('tgl_lahir', $this->tgl_lahir, true);
        $criteria->compare('alamat_ktp', $this->alamat_ktp, true);
        $criteria->compare('alamat_surat', $this->alamat_surat, true);
        $criteria->compare('no_hp', $this->no_hp, true);
        $criteria->compare('pin_bb', $this->pin_bb, true);
        $criteria->compare('no_wa', $this->no_wa, true);
        $criteria->compare('email', $this->email, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Owner the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
