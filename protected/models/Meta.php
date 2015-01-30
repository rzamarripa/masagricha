<?php

/**
 * This is the model class for table "Meta".
 *
 * The followings are the available columns in table 'Meta':
 * @property string $id
 * @property string $fecha_f
 * @property double $ventaTotalMeta
 * @property double $ventaM2Meta
 * @property double $pnpvMeta
 * @property double $porcentajeAvisaMeta
 * @property double $descPorcentajeMeta
 * @property string $estatus_did
 * @property string $usuario_did
 * @property string $fechaCreacion_f
 *
 * The followings are the available model relations:
 * @property Estatus $estatus
 * @property Usuario $usuario
 */
class Meta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Meta the static model class
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
		return 'Meta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ventaTotalMeta, ventaM2Meta, pnpvMeta, porcentajeAvisaMeta, descPorcentajeMeta', 'required'),
			array('ventaTotalMeta, ventaM2Meta, pnpvMeta, porcentajeAvisaMeta, descPorcentajeMeta', 'numerical'),
			array('estatus_did, usuario_did', 'length', 'max'=>11),
			array('fecha_f, fechaCreacion_f', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fecha_f, ventaTotalMeta, ventaM2Meta, pnpvMeta, porcentajeAvisaMeta, descPorcentajeMeta, estatus_did, usuario_did, fechaCreacion_f', 'safe', 'on'=>'search'),
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
			'usuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_did'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha_f' => 'Fecha F',
			'ventaTotalMeta' => 'Venta Total Meta',
			'ventaM2Meta' => 'Venta M2 Meta',
			'pnpvMeta' => 'Pnpv Meta',
			'porcentajeAvisaMeta' => 'Porcentaje Avisa Meta',
			'descPorcentajeMeta' => 'Desc Porcentaje Meta',
			'estatus_did' => 'Estatus',
			'usuario_did' => 'Usuario',
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
		$criteria->compare('fecha_f',$this->fecha_f,true);
		$criteria->compare('ventaTotalMeta',$this->ventaTotalMeta);
		$criteria->compare('ventaM2Meta',$this->ventaM2Meta);
		$criteria->compare('pnpvMeta',$this->pnpvMeta);
		$criteria->compare('porcentajeAvisaMeta',$this->porcentajeAvisaMeta);
		$criteria->compare('descPorcentajeMeta',$this->descPorcentajeMeta);
		$criteria->compare('estatus_did',$this->estatus_did,true);
		$criteria->compare('usuario_did',$this->usuario_did,false);
		$criteria->compare('fechaCreacion_f',$this->fechaCreacion_f,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}