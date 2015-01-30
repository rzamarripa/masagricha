<?php
$this->pageCaption='Ver Presupuesto #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Presupuesto'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Presupuesto','url'=>array('index')),
	array('label'=>'Crear Presupuesto','url'=>array('create')),
	array('label'=>'Actualizar Presupuesto','url'=>array('update','id'=>$model->id)),
	array('label'=>'Eliminar Presupuesto','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estás seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Presupuesto','url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		array(	'name'=>'grupoCostos_did',
			        'value'=>$model->grupoCostos->nombre,),
		'semana',
		'codigo',
		'importe',
		'cantidad',
		'descripcion',
		'unidad',
		'familia',
	),
)); ?>
