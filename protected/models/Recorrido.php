<?php

/**
 * This is the model class for table "recorrido".
 *
 * The followings are the available columns in table 'recorrido':
 * @property integer $paso
 * @property integer $empresa
 * @property integer $acum
 * @property string $grafica
 * @property integer $grupoCostos
 * @property string $descripcion
 * @property integer $cultivo
 */
class Recorrido extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Recorrido the static model class
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
		return 'recorrido';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('paso', 'required'),
			array('paso, empresa, acum, grupoCostos, cultivo', 'numerical', 'integerOnly'=>true),
			array('grafica', 'length', 'max'=>100),
			array('descripcion', 'length', 'max'=>145),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('paso, empresa, acum, grafica, grupoCostos, descripcion, cultivo', 'safe', 'on'=>'search'),
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
			'paso' => 'Paso',
			'empresa' => 'Empresa',
			'acum' => 'Acum',
			'grafica' => 'Grafica',
			'grupoCostos' => 'Grupo Costos',
			'descripcion' => 'Descripcion',
			'cultivo' => 'Cultivo',
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

		$criteria->compare('paso',$this->paso);
		$criteria->compare('empresa',$this->empresa);
		$criteria->compare('acum',$this->acum);
		$criteria->compare('grafica',$this->grafica,true);
		$criteria->compare('grupoCostos',$this->grupoCostos);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('cultivo',$this->cultivo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}