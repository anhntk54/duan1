<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $username
 * @property string $facebook_id
 * @property string $email
 * @property string $password
 * @property string $ten_day_du
 * @property string $avatar
 * @property integer $level_id
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, email, ten_day_du', 'required'),
			array('level_id', 'numerical', 'integerOnly'=>true),
			array('email', 'email', 'message'=>'{attribute} không đúng định dạng'),
	    	array('username, email', 'unique', 'message'=>'{attribute} đã được sử dụng'),
			array('username', 'match', 'not'=>true, 'pattern' => '/[^a-zA-Z0-9]/', 'message' => 'Người dùng chỉ được sử dụng chữ cái không dấu, kí tự hoa, kí tự thường và kí tự số'),
			array('username, facebook_id, password', 'length', 'max'=>100),
			array('email', 'length', 'max'=>150),
			array('ten_day_du, avatar', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, facebook_id, email, password, ten_day_du, avatar, level_id', 'safe', 'on'=>'search'),
		);
	}
	public static function MaHoaMatKhau($value)
	{
		return md5(md5(sha1(base64_encode(md5($value))))."thachdo-!@#$%^&*");
	}
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'level'=> array(self::BELONGS_TO,'Level','level_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'facebook_id' => 'Facebook',
			'email' => 'Email',
			'password' => 'Password',
			'ten_day_du' => 'Ten Day Du',
			'avatar' => 'Avatar',
			'level_id' => 'Level',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('facebook_id',$this->facebook_id,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('ten_day_du',$this->ten_day_du,true);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('level_id',$this->level_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
     
    /**
    Chú ý không dùng statics nhớ. gặp một lỗi bên aegoal cái tác hại của nó mà không tỉnh à
    **/
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
	public function getAvatar($value,$class = 'img-circle img-120 img-responsive margin-auto')
	{
		return '<img src="'.Yii::app()->request->baseUrl.$value->avatar.'" class="'.$class.'" />';
	}
    
	public function getTenDayDu($value,$class = '')
	{
		if ($value != null) {
			return '<a href="#"><b>'.$value->ten_day_du.'</b></a>';
		}
		return '';
	}
    
    public function getModel($id){
        return User::model()->findByPk($id);
    }
    
    public function getLevel($model){
        $level = $model->level_id;
        $model_lv = Level::model()->findByPk($level);
        if ($model_lv != null) {
        	return $model_lv->ten;  
        }
    }
    
}
