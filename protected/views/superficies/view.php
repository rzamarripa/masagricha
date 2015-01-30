<?php
$this->pageCaption='Ver Superficies #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Superficies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Superficies','url'=>array('index')),
	array('label'=>'Crear Superficies','url'=>array('create')),
	array('label'=>'Actualizar Superficies','url'=>array('update','id'=>$model->id)),
	array('label'=>'Eliminar Superficies','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estás seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Superficies','url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'temporada',
		array(	'name'=>'empresa_did',
			        'value'=>$model->empresa->nombre,),
		'lote',
		'cultivo',
		'hectareas',
	),
)); ?>
