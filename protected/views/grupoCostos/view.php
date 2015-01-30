<?php
$this->pageCaption='Ver GrupoCostos #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Grupo Costos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar GrupoCostos','url'=>array('index')),
	array('label'=>'Crear GrupoCostos','url'=>array('create')),
	array('label'=>'Actualizar GrupoCostos','url'=>array('update','id'=>$model->id)),
	array('label'=>'Eliminar GrupoCostos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estás seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar GrupoCostos','url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'nombre',
		array(	'name'=>'estatus_did',
			        'value'=>$model->estatus->nombre,),
	),
)); ?>
