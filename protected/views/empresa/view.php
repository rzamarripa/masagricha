<?php
$this->pageCaption='Ver Empresa #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Empresa'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Empresa','url'=>array('index')),
	array('label'=>'Crear Empresa','url'=>array('create')),
	array('label'=>'Actualizar Empresa','url'=>array('update','id'=>$model->id)),
	array('label'=>'Eliminar Empresa','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estás seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Empresa','url'=>array('admin')),
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
		'grupo',
		array(	'name'=>'estatus_did',
			        'value'=>$model->estatus->nombre,),
	),
)); ?>
