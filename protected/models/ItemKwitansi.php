<?php

/**
 * This is the model class for table "item_kwitansi".
 *
 * The followings are the available columns in table 'item_kwitansi':
 * @property integer $id
 * @property integer $harga
 * @property string $nama_barang
 * @property integer $jumlah
 * @property string $kode_barang
 * @property integer $no_resi
 *
 * The followings are the available model relations:
 * @property Kwitansi $noResi
 */
class ItemKwitansi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'item_kwitansi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('harga, nama_barang, jumlah, kode_barang, no_resi', 'required'),
			array('harga, jumlah, no_resi', 'numerical', 'integerOnly'=>true),
			array('nama_barang, kode_barang', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, harga, nama_barang, jumlah, kode_barang, no_resi', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'noResi' => array(self::BELONGS_TO, 'Kwitansi', 'no_resi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'harga' => 'Harga',
			'nama_barang' => 'Nama Barang',
			'jumlah' => 'Jumlah',
			'kode_barang' => 'Kode Barang',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('nama_barang',$this->nama_barang,true);
		$criteria->compare('jumlah',$this->jumlah);
		$criteria->compare('kode_barang',$this->kode_barang,true);
		$criteria->compare('no_resi',$this->no_resi);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ItemKwitansi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
