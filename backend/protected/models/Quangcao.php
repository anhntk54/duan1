<?php

/**
 * This is the model class for table "tbl_quangcao".
 *
 * The followings are the available columns in table 'tbl_quangcao':
 * @property integer $id
 * @property string $ten
 * @property string $hinh_anh
 * @property integer $loai
 * @property integer $kieu_bat
 * @property string $link_den
 * @property integer $vi_tri
 * @property string $ngay_tao
 * @property integer $luot_click
 */
class Quangcao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_quangcao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ten, hinh_anh, loai, kieu_bat, link_den, vi_tri, ngay_tao, luot_click', 'required'),
			array('loai, kieu_bat, vi_tri, luot_click', 'numerical', 'integerOnly'=>true),
			array('ten', 'length', 'max'=>500),
			array('hinh_anh', 'length', 'max'=>300),
			array('link_den', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ten, hinh_anh, loai, kieu_bat, link_den, vi_tri, ngay_tao, luot_click', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ten' => 'Ten',
			'hinh_anh' => 'Hinh Anh',
			'loai' => 'Loai',
			'kieu_bat' => 'Kieu Bat',
			'link_den' => 'Link Den',
			'vi_tri' => 'Vi Tri',
			'ngay_tao' => 'Ngay Tao',
			'luot_click' => 'Luot Click',
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
		$criteria->compare('ten',$this->ten,true);
		$criteria->compare('hinh_anh',$this->hinh_anh,true);
		$criteria->compare('loai',$this->loai);
		$criteria->compare('kieu_bat',$this->kieu_bat);
		$criteria->compare('link_den',$this->link_den,true);
		$criteria->compare('vi_tri',$this->vi_tri);
		$criteria->compare('ngay_tao',$this->ngay_tao,true);
		$criteria->compare('luot_click',$this->luot_click);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Quangcao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
