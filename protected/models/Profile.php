<?php

/**
 * This is the model class for table "tbl_profile".
 *
 * The followings are the available columns in table 'tbl_profile':
 * @property integer $id
 * @property integer $user_id
 * @property string $dien_thoai
 * @property string $cmnd
 * @property string $dia_chi
 * @property string $ngay_sinh
 */
class Profile extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_profile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, dien_thoai, cmnd, dia_chi, ngay_sinh', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('dien_thoai', 'length', 'max'=>20),
			array('cmnd', 'length', 'max'=>50),
			array('dia_chi', 'length', 'max'=>300),
			array('ngay_sinh', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, dien_thoai, cmnd, dia_chi, ngay_sinh', 'safe', 'on'=>'search'),
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
			'dien_thoai' => 'Dien Thoai',
			'cmnd' => 'Cmnd',
			'dia_chi' => 'Dia Chi',
			'ngay_sinh' => 'Ngay Sinh',
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
		$criteria->compare('dien_thoai',$this->dien_thoai,true);
		$criteria->compare('cmnd',$this->cmnd,true);
		$criteria->compare('dia_chi',$this->dia_chi,true);
		$criteria->compare('ngay_sinh',$this->ngay_sinh,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Profile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
