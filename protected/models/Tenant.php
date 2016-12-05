<?php

/**
 * This is the model class for table "tenant".
 *
 * The followings are the available columns in table 'tenant':
 * @property integer $id
 * @property string $nama_toko
 * @property string $jns_jualan
 * @property string $merk_dagang
 * @property string $lisensi
 * @property string $email_toko
 * @property string $tlpn_toko
 * @property string $wa_toko
 * @property string $fb_toko
 * @property string $instagram_toko
 * @property string $status_toko
 * @property integer $id_lantai
 * @property integer $id_zoning
 * @property integer $id_blok
 * @property integer $id_owner
 *
 * The followings are the available model relations:
 * @property JenisJualan[] $jenisJualans
 * @property Kwitansi[] $kwitansis
 * @property Lisensi[] $lisensis
 * @property MerkDagang[] $merkDagangs
 * @property Floor $idLantai
 * @property Zoning $idZoning
 * @property Block $idBlok
 * @property Owner $idOwner
 */
class Tenant extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tenant';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('nama_toko, jns_jualan, merk_dagang, lisensi, status_toko, id_lantai, id_zoning, id_blok, id_owner', 'required'),
            array('id_lantai, id_zoning, id_blok, id_owner', 'numerical', 'integerOnly' => true),
            array('nama_toko, jns_jualan, merk_dagang, lisensi, email_toko, tlpn_toko, wa_toko, fb_toko, instagram_toko, status_toko', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, nama_toko, jns_jualan, merk_dagang, lisensi, email_toko, tlpn_toko, wa_toko, fb_toko, instagram_toko, status_toko, id_lantai, id_zoning, id_blok, id_owner', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'jenisJualans' => array(self::HAS_MANY, 'JenisJualan', 'id'),
            'kwitansis' => array(self::HAS_MANY, 'Kwitansi', 'id_tenant'),
            'lisensis' => array(self::HAS_MANY, 'Lisensi', 'id'),
            'merkDagangs' => array(self::HAS_MANY, 'MerkDagang', 'id'),
            'idLantai' => array(self::BELONGS_TO, 'Floor', 'id_lantai'),
            'idZoning' => array(self::BELONGS_TO, 'Zoning', 'id_zoning'),
            'idBlok' => array(self::BELONGS_TO, 'Block', 'id_blok'),
            'idOwner' => array(self::BELONGS_TO, 'Owner', 'id_owner'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'nama_toko' => 'Nama Toko',
            'jns_jualan' => 'Jns Jualan',
            'merk_dagang' => 'Merk Dagang',
            'lisensi' => 'Lisensi',
            'email_toko' => 'Email Toko',
            'tlpn_toko' => 'Tlpn Toko',
            'wa_toko' => 'Wa Toko',
            'fb_toko' => 'Fb Toko',
            'instagram_toko' => 'Instagram Toko',
            'status_toko' => 'Status Toko',
            'id_lantai' => 'Id Lantai',
            'id_zoning' => 'Id Zoning',
            'id_blok' => 'Id Blok',
            'id_owner' => 'Id Owner',
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
        $criteria->compare('nama_toko', $this->nama_toko, true);
        $criteria->compare('jns_jualan', $this->jns_jualan, true);
        $criteria->compare('merk_dagang', $this->merk_dagang, true);
        $criteria->compare('lisensi', $this->lisensi, true);
        $criteria->compare('email_toko', $this->email_toko, true);
        $criteria->compare('tlpn_toko', $this->tlpn_toko, true);
        $criteria->compare('wa_toko', $this->wa_toko, true);
        $criteria->compare('fb_toko', $this->fb_toko, true);
        $criteria->compare('instagram_toko', $this->instagram_toko, true);
        $criteria->compare('status_toko', $this->status_toko, true);
        $criteria->compare('id_lantai', $this->id_lantai);
        $criteria->compare('id_zoning', $this->id_zoning);
        $criteria->compare('id_blok', $this->id_blok);
        $criteria->compare('id_owner', $this->id_owner);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Tenant the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
