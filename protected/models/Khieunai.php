<?php

/**
 * This is the model class for table "tbl_khieunai".
 *
 * The followings are the available columns in table 'tbl_khieunai':
 * @property integer $id
 * @property integer $cauhoi_id
 * @property integer $user_id
 * @property string $thoigian_khieunai
 * @property string $thoigian_ketthuc
 * @property integer $trangthai_nguoithang
 * @property integer $trangthai_xuly
 * @property double $tien_khieunai
 */
class Khieunai extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_khieunai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cauhoi_id, user_id, thoigian_khieunai, thoigian_ketthuc, trangthai_nguoithang, trangthai_xuly, tien_khieunai', 'required'),
			array('cauhoi_id, user_id, trangthai_nguoithang, trangthai_xuly', 'numerical', 'integerOnly'=>true),
			array('tien_khieunai', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cauhoi_id, user_id, thoigian_khieunai, thoigian_ketthuc, trangthai_nguoithang, trangthai_xuly, tien_khieunai', 'safe', 'on'=>'search'),
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
			'cauhoi_id' => 'Cauhoi',
			'user_id' => 'User',
			'thoigian_khieunai' => 'Thoigian Khieunai',
			'thoigian_ketthuc' => 'Thoigian Ketthuc',
			'trangthai_nguoithang' => 'Trangthai Nguoithang',
			'trangthai_xuly' => 'Trangthai Xuly',
			'tien_khieunai' => 'Tien Khieunai',
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
		$criteria->compare('cauhoi_id',$this->cauhoi_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('thoigian_khieunai',$this->thoigian_khieunai,true);
		$criteria->compare('thoigian_ketthuc',$this->thoigian_ketthuc,true);
		$criteria->compare('trangthai_nguoithang',$this->trangthai_nguoithang);
		$criteria->compare('trangthai_xuly',$this->trangthai_xuly);
		$criteria->compare('tien_khieunai',$this->tien_khieunai);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Khieunai the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
