<?php

/**
 * This is the model class for table "Usuario".
 *
 * The followings are the available columns in table 'Usuario':
 * @property string $id
 * @property string $nombre
 * @property string $puesto
 * @property string $puntoVenta
 * @property string $ciudad
 * @property string $compania
 * @property string $usuario
 * @property string $contrasena
 * @property string $tipoUsuario_did
 * @property string $estatus_did
 * @property string $fechaCreacion_f
 *
 * The followings are the available model relations:
 * @property Meta[] $metas
 * @property Reporte[] $reportes
 * @property Estatus $estatus
 * @property TipoUsuario $tipoUsuario
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Usuario the static model class
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
		return 'Usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, usuario, contrasena, puesto','required'),
			array('nombre, puesto, foto, usuario, contrasena, foto', 'length', 'max'=>100),
			array('tipoUsuario_did, estatus_did', 'length', 'max'=>11),
			array('fechaCreacion_f', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, puesto, usuario, contrasena, tipoUsuario_did, foto, estatus_did, fechaCreacion_f', 'safe', 'on'=>'search'),
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
			'metas' => array(self::HAS_MANY, 'Meta', 'usuario_did'),
			'reportes' => array(self::HAS_MANY, 'Reporte', 'usuario_did'),
			'estatus' => array(self::BELONGS_TO, 'Estatus', 'estatus_did'),
			'tipoUsuario' => array(self::BELONGS_TO, 'TipoUsuario', 'tipoUsuario_did'),
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
			'puesto' => 'Puesto',
			'usuario' => 'Usuario',
			'contrasena' => 'Contraseña',
			'tipoUsuario_did' => 'Tipo de Usuario',
			'estatus_did' => 'Estatus',
			'fechaCreacion_f' => 'Fecha Creacion F',
			'foto' => 'Foto',
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
		$criteria->compare('puesto',$this->puesto,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('contrasena',$this->contrasena,true);
		$criteria->compare('tipoUsuario_did',$this->tipoUsuario_did,true);
		$criteria->compare('estatus_did',$this->estatus_did,true);
		$criteria->compare('fechaCreacion_f',$this->fechaCreacion_f,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function obtenerUsuarioActual()
	{
		$usuarioActual = Usuario::model()->find('usuario = :u',array(':u' => Yii::app()->user->name));
		return $usuarioActual;
	}
}