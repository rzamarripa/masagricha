<?php

/**
 * This is the model class for table "Actividad".
 *
 * The followings are the available columns in table 'Actividad':
 * @property string $id
 * @property string $mensaje
 * @property string $usuario
 * @property string $fechaCreacion_f
 */
class Actividad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Actividad the static model class
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
		return 'Actividad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mensaje', 'length', 'max'=>500),
			array('usuario', 'length', 'max'=>50),
			array('fechaCreacion_f', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, mensaje, usuario, fechaCreacion_f', 'safe', 'on'=>'search'),
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
			'mensaje' => 'Mensaje',
			'usuario' => 'Usuario',
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
		$criteria->compare('mensaje',$this->mensaje,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('fechaCreacion_f',$this->fechaCreacion_f,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}