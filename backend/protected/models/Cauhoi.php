<?php

/**
 * This is the model class for table "tbl_cauhoi".
 *
 * The followings are the available columns in table 'tbl_cauhoi':
 * @property integer $id
 * @property integer $user_id
 * @property string $noi_dung
 * @property string $anh_minhhoa
 * @property string $tra_loi
 * @property string $anh_traloi
 * @property double $tien_cuoc
 * @property string $hen_gio
 * @property string $thoigian_traloi
 * @property integer $luot_thich
 * @property integer $luot_xem
 * @property integer $trang_thai
 * @property integer $thoigian_tao
 * @property double $tongtien_mat
 * @property double $tongtien_duoc
 * @property double $tongtien_khieunai
 */
class Cauhoi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_cauhoi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, noi_dung, anh_minhhoa, tra_loi, anh_traloi, tien_cuoc, hen_gio, thoigian_traloi, luot_thich, luot_xem, trang_thai, thoigian_tao, tongtien_mat, tongtien_duoc, tongtien_khieunai', 'required'),
			array('user_id, luot_thich, luot_xem, trang_thai, thoigian_tao', 'numerical', 'integerOnly'=>true),
			array('tien_cuoc, tongtien_mat, tongtien_duoc, tongtien_khieunai', 'numerical'),
			array('anh_minhhoa, anh_traloi', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, noi_dung, anh_minhhoa, tra_loi, anh_traloi, tien_cuoc, hen_gio, thoigian_traloi, luot_thich, luot_xem, trang_thai, thoigian_tao, tongtien_mat, tongtien_duoc, tongtien_khieunai', 'safe', 'on'=>'search'),
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
			'noi_dung' => 'Noi Dung',
			'anh_minhhoa' => 'Anh Minhhoa',
			'tra_loi' => 'Tra Loi',
			'anh_traloi' => 'Anh Traloi',
			'tien_cuoc' => 'Tien Cuoc',
			'hen_gio' => 'Hen Gio',
			'thoigian_traloi' => 'Thoigian Traloi',
			'luot_thich' => 'Luot Thich',
			'luot_xem' => 'Luot Xem',
			'trang_thai' => 'Trang Thai',
			'thoigian_tao' => 'Thoigian Tao',
			'tongtien_mat' => 'Tongtien Mat',
			'tongtien_duoc' => 'Tongtien Duoc',
			'tongtien_khieunai' => 'Tongtien Khieunai',
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
		$criteria->compare('noi_dung',$this->noi_dung,true);
		$criteria->compare('anh_minhhoa',$this->anh_minhhoa,true);
		$criteria->compare('tra_loi',$this->tra_loi,true);
		$criteria->compare('anh_traloi',$this->anh_traloi,true);
		$criteria->compare('tien_cuoc',$this->tien_cuoc);
		$criteria->compare('hen_gio',$this->hen_gio,true);
		$criteria->compare('thoigian_traloi',$this->thoigian_traloi,true);
		$criteria->compare('luot_thich',$this->luot_thich);
		$criteria->compare('luot_xem',$this->luot_xem);
		$criteria->compare('trang_thai',$this->trang_thai);
		$criteria->compare('thoigian_tao',$this->thoigian_tao);
		$criteria->compare('tongtien_mat',$this->tongtien_mat);
		$criteria->compare('tongtien_duoc',$this->tongtien_duoc);
		$criteria->compare('tongtien_khieunai',$this->tongtien_khieunai);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cauhoi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
