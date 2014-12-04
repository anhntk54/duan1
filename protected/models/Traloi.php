<?php

/**
 * This is the model class for table "tbl_traloi".
 *
 * The followings are the available columns in table 'tbl_traloi':
 * @property integer $id
 * @property integer $cauhoi_id
 * @property integer $user_id
 * @property integer $languoi_duoctag
 * @property string $noi_dung
 * @property string $hinh_anh
 * @property integer $trangthai_dungsai
 * @property string $thoigian_traloi
 */
class Traloi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_traloi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cauhoi_id, user_id, languoi_duoctag, noi_dung, thoigian_traloi', 'required'),
			array('cauhoi_id, user_id, languoi_duoctag, trangthai_dungsai', 'numerical', 'integerOnly'=>true),
			array('hinh_anh', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cauhoi_id, user_id, languoi_duoctag, noi_dung, hinh_anh, trangthai_dungsai, thoigian_traloi', 'safe', 'on'=>'search'),
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
			'user'=> array(self::BELONGS_TO,'User','user_id'),
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
			'languoi_duoctag' => 'Languoi Duoctag',
			'noi_dung' => 'Noi Dung',
			'hinh_anh' => 'Hinh Anh',
			'trangthai_dungsai' => 'Trangthai Dungsai',
			'thoigian_traloi' => 'Thoigian Traloi',
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
		$criteria->compare('languoi_duoctag',$this->languoi_duoctag);
		$criteria->compare('noi_dung',$this->noi_dung,true);
		$criteria->compare('hinh_anh',$this->hinh_anh,true);
		$criteria->compare('trangthai_dungsai',$this->trangthai_dungsai);
		$criteria->compare('thoigian_traloi',$this->thoigian_traloi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Traloi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public static function KiemTraCoDcXemCauTraLoiKhong($value,$id_user = '')
	{
		if ($id_user == '') {
			if (!Yii::app()->user->isGuest) {
				$id_user = Yii::app()->user->id;
			}
		}
		$user = User::model()->findByPk($id_user);
		if ($user != null) {
			return true;
		}
		return false;
	}
	public static function KiemTraCoDcDangCauTraLoiKhong($value)
	{
		if (!Yii::app()->user->isGuest) {
			$user = User::model()->findByPk(Yii::app()->user->id);
			if ($user != null) {
				$traloi = Traloi::model()->findByAttributes(array('user_id'=>$user->id,'cauhoi_id'=>$value->id));
				if ($traloi == null) {
					return true;
				}
			}
		}
		return false;
	}
	public static function ThoiGianTraLoi($value)
	{
		$str = '';
		if ($value != null) {
			//26 Tháng 10 lúc 15:30
			$str = date('d',strtotime($value))." Tháng ".date('m',strtotime($value))." lúc ".date('H:i',strtotime($value));
		}
		return $str;
	}
}
