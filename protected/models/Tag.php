<?php

/**
 * This is the model class for table "tbl_tag".
 *
 * The followings are the available columns in table 'tbl_tag':
 * @property integer $id
 * @property integer $cauhoi_id
 * @property integer $user_id
 * @property integer $trangthai_chapnhan
 * @property string $thoigian_chapnhan
 */
class Tag extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_tag';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cauhoi_id, user_id', 'required'),
			array('cauhoi_id, user_id, trangthai_chapnhan', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cauhoi_id, user_id, trangthai_chapnhan, thoigian_chapnhan', 'safe', 'on'=>'search'),
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
			'trangthai_chapnhan' => 'Trangthai Chapnhan',
			'thoigian_chapnhan' => 'Thoigian Chapnhan',
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
		$criteria->compare('trangthai_chapnhan',$this->trangthai_chapnhan);
		$criteria->compare('thoigian_chapnhan',$this->thoigian_chapnhan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tag the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
