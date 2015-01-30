<?php

/**
 * This is the model class for table "TipoUsuario".
 *
 * The followings are the available columns in table 'TipoUsuario':
 * @property string $id
 * @property string $nombre
 * @property string $estatus_did
 * @property string $fechaCreacion_f
 *
 * The followings are the available model relations:
 * @property Estatus $estatus
 * @property Usuario[] $usuarios
 */
class TipoUsuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return TipoUsuario the static model class
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
		return 'TipoUsuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre', 'length', 'max'=>100),
			array('estatus_did', 'length', 'max'=>11),
			array('fechaCreacion_f', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, estatus_did, fechaCreacion_f', 'safe', 'on'=>'search'),
            array('nombre', 'required'),
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
			'estatus' => array(self::BELONGS_TO, 'Estatus', 'estatus_did'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'tipoUsuario_did'),
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('estatus_did',$this->estatus_did,true);
		$criteria->compare('fechaCreacion_f',$this->fechaCreacion_f,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}