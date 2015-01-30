<?php

/**
 * This is the model class for table "Presupuesto".
 *
 * The followings are the available columns in table 'Presupuesto':
 * @property string $id
 * @property string $grupoCostos_did
 * @property integer $semana
 * @property string $codigo
 * @property double $importe
 * @property string $cantidad
 * @property string $descripcion
 * @property string $unidad
 * @property string $familia
 *
 * The followings are the available model relations:
 * @property GrupoCostos $grupoCostos
 */
class Presupuesto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Presupuesto the static model class
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
		return 'Presupuesto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('semana', 'numerical', 'integerOnly'=>true),
			array('importe', 'numerical'),
			array('grupoCostos_did', 'length', 'max'=>11),
			array('codigo, unidad', 'length', 'max'=>5),
			array('cantidad', 'length', 'max'=>4),
			array('descripcion', 'length', 'max'=>100),
			array('familia', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, grupoCostos_did, semana, codigo, importe, cantidad, descripcion, unidad, familia', 'safe', 'on'=>'search'),
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
			'grupoCostos' => array(self::BELONGS_TO, 'GrupoCostos', 'grupoCostos_did'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'grupoCostos_did' => 'Costos',
			'semana' => 'Semana',
			'codigo' => 'Codigo',
			'importe' => 'Importe',
			'cantidad' => 'Cantidad',
			'descripcion' => 'Descripcion',
			'unidad' => 'Unidad',
			'familia' => 'Familia',
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
		$criteria->compare('grupoCostos_did',$this->grupoCostos_did,true);
		$criteria->compare('semana',$this->semana);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('importe',$this->importe);
		$criteria->compare('cantidad',$this->cantidad,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('unidad',$this->unidad,true);
		$criteria->compare('familia',$this->familia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}