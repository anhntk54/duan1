<?php

/**
 * This is the model class for table "tbl_taikhoan".
 *
 * The followings are the available columns in table 'tbl_taikhoan':
 * @property integer $id
 * @property integer $user_id
 * @property double $tien_thang
 * @property double $tien_thua
 * @property double $tien_nap
 * @property double $tai_khoan
 */
class Taikhoan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_taikhoan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, tien_thang, tien_thua, tien_nap, tai_khoan', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('tien_thang, tien_thua, tien_nap, tai_khoan', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, tien_thang, tien_thua, tien_nap, tai_khoan', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'tien_thang' => 'Tien Thang',
			'tien_thua' => 'Tien Thua',
			'tien_nap' => 'Tien Nap',
			'tai_khoan' => 'Tai Khoan',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('tien_thang',$this->tien_thang);
		$criteria->compare('tien_thua',$this->tien_thua);
		$criteria->compare('tien_nap',$this->tien_nap);
		$criteria->compare('tai_khoan',$this->tai_khoan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Taikhoan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
