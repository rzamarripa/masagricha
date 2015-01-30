<?php

/**
 * This is the model class for table "Superficies".
 *
 * The followings are the available columns in table 'Superficies':
 * @property string $id
 * @property string $temporada
 * @property string $empresa_did
 * @property string $lote
 * @property string $cultivo
 * @property double $hectareas
 *
 * The followings are the available model relations:
 * @property Empresa $empresa
 */
class Superficies extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Superficies the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Superficies';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hectareas', 'numerical'),
			array('temporada', 'length', 'max'=>4),
			array('empresa_did', 'length', 'max'=>11),
			array('lote, cultivo', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, temporada, empresa_did, lote, cultivo, hectareas', 'safe', 'on'=>'search'),
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
			'empresa' => array(self::BELONGS_TO, 'Empresa', 'empresa_did'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'temporada' => 'Temporada',
			'empresa_did' => 'Empresa',
			'lote' => 'Lote',
			'cultivo' => 'Cultivo',
			'hectareas' => 'Hectareas',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('temporada',$this->temporada,true);
		$criteria->compare('empresa_did',$this->empresa_did,true);
		$criteria->compare('lote',$this->lote,true);
		$criteria->compare('cultivo',$this->cultivo,true);
		$criteria->compare('hectareas',$this->hectareas);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}