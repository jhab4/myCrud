<?php
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fullName, age, bio, hairColor, eyeColor', 'required'),
			array('age, worth_of_cat', 'numerical', 'integerOnly'=>true),
			array('fullName, eyeColor', 'length', 'max'=>45),
			array('occupation', 'length', 'max'=>60),
			array('hairColor', 'length', 'max'=>6),
			array('worth_of_cat', 'compare', 'operator'=>'>=', 'compareValue'=>0  ),
			array('worth_of_cat', 'compare', 'operator'=>'<=', 'compareValue'=>100  ),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fullName, age, bio, hairColor, eyeColor', 'safe', 'on'=>'search'),
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
			'cats'=>array(self::HAS_MANY, 'Cat', 'owner_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fullName' => 'Full Name',
			'age' => 'Age',
			'bio' => 'Bio',
			'hairColor' => 'Hair Color',
			'eyeColor' => 'Eye Color',
			'occupation' => 'Occupation',
			'worth_of_cat' => 'Worth of Cat',
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
		$criteria->compare('fullName',$this->fullName,true);
		$criteria->compare('age',$this->age,true);
		$criteria->compare('bio',$this->bio,true);
		$criteria->compare('hairColor',$this->hairColor,true);
		$criteria->compare('eyeColor',$this->eyeColor,true);
		$criteria->compare('occupation',$this->occupation,true);
		$criteria->compare('worth_of_cat',$this->worth_of_cat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
?>