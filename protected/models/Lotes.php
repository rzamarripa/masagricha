<?php

/**
 * This is the model class for table "Lotes".
 *
 * The followings are the available columns in table 'Lotes':
 * @property string $id
 * @property integer $lote
 * @property string $descripcion
 * @property string $empresa_did
 * @property string $cultivo_did
 * @property integer $etapa
 * @property string $tipo_did
 * @property string $estatus_did
 * @property string $fechaCreacion_f
 *
 * The followings are the available model relations:
 * @property Superficies[] $superficies
 */
class Lotes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Lotes the static model class
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
		return 'Lotes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_did', 'required'),
			array('lote, etapa', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>100),
			array('empresa_did, cultivo_did, tipo_did, estatus_did', 'length', 'max'=>11),
			array('fechaCreacion_f', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, lote, descripcion, empresa_did, cultivo_did, etapa, tipo_did, estatus_did, fechaCreacion_f', 'safe', 'on'=>'search'),
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
			'superficies' => array(self::HAS_MANY, 'Superficies', 'lote_did'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'lote' => 'Lote',
			'descripcion' => 'Descripcion',
			'empresa_did' => 'Empresa',
			'cultivo_did' => 'Cultivo',
			'etapa' => 'Etapa',
			'tipo_did' => 'Tipo',
			'estatus_did' => 'Estatus',
			'fechaCreacion_f' => 'Fecha Creacion F',
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
		$criteria->compare('lote',$this->lote);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('empresa_did',$this->empresa_did,true);
		$criteria->compare('cultivo_did',$this->cultivo_did,true);
		$criteria->compare('etapa',$this->etapa);
		$criteria->compare('tipo_did',$this->tipo_did,true);
		$criteria->compare('estatus_did',$this->estatus_did,true);
		$criteria->compare('fechaCreacion_f',$this->fechaCreacion_f,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}