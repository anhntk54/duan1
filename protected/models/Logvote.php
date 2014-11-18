<?php

/**
 * This is the model class for table "tbl_logvote".
 *
 * The followings are the available columns in table 'tbl_logvote':
 * @property integer $id
 * @property integer $cauhoi_id
 * @property integer $user_id
 * @property integer $vote
 * @property string $thoigian_vote
 */
class Logvote extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_logvote';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cauhoi_id, user_id, vote, thoigian_vote', 'required'),
			array('cauhoi_id, user_id, vote', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cauhoi_id, user_id, vote, thoigian_vote', 'safe', 'on'=>'search'),
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
			'vote' => 'Vote',
			'thoigian_vote' => 'Thoigian Vote',
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
		$criteria->compare('vote',$this->vote);
		$criteria->compare('thoigian_vote',$this->thoigian_vote,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Logvote the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
