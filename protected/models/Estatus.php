<?php

/**
 * This is the model class for table "Estatus".
 *
 * The followings are the available columns in table 'Estatus':
 * @property string $id
 * @property string $nombre
 * @property string $requisicion
 * @property string $cotizacion
 * @property string $fechaCreacion_f
 *
 * The followings are the available model relations:
 * @property Articulo[] $articulos
 * @property Ciudad[] $ciudads
 * @property Cotizacion[] $cotizacions
 * @property Estado[] $estados
 * @property Proveedor[] $proveedors
 * @property ProveedoresPorCotizacion[] $proveedoresPorCotizacions
 * @property Requisicion[] $requisicions
 * @property TipoUsuario[] $tipoUsuarios
 * @property Unidad[] $unidads
 * @property Usuario[] $usuarios
 */
class Estatus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Estatus the static model class
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
		return 'Estatus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, requisicion, cotizacion', 'length', 'max'=>100),
			array('fechaCreacion_f', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, requisicion, cotizacion, fechaCreacion_f', 'safe', 'on'=>'search'),
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
			'articulos' => array(self::HAS_MANY, 'Articulo', 'estatus_did'),
			'ciudads' => array(self::HAS_MANY, 'Ciudad', 'estatus_did'),
			'cotizacions' => array(self::HAS_MANY, 'Cotizacion', 'estatus_did'),
			'estados' => array(self::HAS_MANY, 'Estado', 'estatus_did'),
			'proveedors' => array(self::HAS_MANY, 'Proveedor', 'estatus_did'),
			'proveedoresPorCotizacions' => array(self::HAS_MANY, 'ProveedoresPorCotizacion', 'estatus_did'),
			'requisicions' => array(self::HAS_MANY, 'Requisicion', 'estatus_did'),
			'tipoUsuarios' => array(self::HAS_MANY, 'TipoUsuario', 'estatus_did'),
			'unidads' => array(self::HAS_MANY, 'Unidad', 'estatus_did'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'estatus_did'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'requisicion' => 'Requisición',
			'cotizacion' => 'Cotización',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('requisicion',$this->requisicion,true);
		$criteria->compare('cotizacion',$this->cotizacion,true);
		$criteria->compare('fechaCreacion_f',$this->fechaCreacion_f,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}