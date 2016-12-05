<?php

/**
 * This is the model class for table "kwitansi".
 *
 * The followings are the available columns in table 'kwitansi':
 * @property integer $no_resi
 * @property string $tanggal
 * @property integer $id_konversi
 * @property integer $id_tenant
 * @property integer $id_customer
 *
 * The followings are the available model relations:
 * @property ItemKwitansi[] $itemKwitansis
 * @property Konversi $idKonversi
 * @property Tenant $idTenant
 * @property Customer $idCustomer
 * @property Point[] $points
 */
class Kwitansi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kwitansi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_resi, tanggal, id_konversi, id_tenant, id_customer', 'required'),
			array('no_resi, id_konversi, id_tenant, id_customer', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('no_resi, tanggal, id_konversi, id_tenant, id_customer', 'safe', 'on'=>'search'),
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
			'itemKwitansis' => array(self::HAS_MANY, 'ItemKwitansi', 'no_resi'),
			'idKonversi' => array(self::BELONGS_TO, 'Konversi', 'id_konversi'),
			'idTenant' => array(self::BELONGS_TO, 'Tenant', 'id_tenant'),
			'idCustomer' => array(self::BELONGS_TO, 'Customer', 'id_customer'),
			'points' => array(self::HAS_MANY, 'Point', 'no_resi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'no_resi' => 'No Resi',
			'tanggal' => 'Tanggal',
			'id_konversi' => 'Id Konversi',
			'id_tenant' => 'Id Tenant',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('no_resi',$this->no_resi);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('id_konversi',$this->id_konversi);
		$criteria->compare('id_tenant',$this->id_tenant);
		$criteria->compare('id_customer',$this->id_customer);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kwitansi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
