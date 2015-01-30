<?php
$this->pageCaption='Ver TipoAnalisis #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Tipo Analisis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar TipoAnalisis','url'=>array('index')),
	array('label'=>'Crear TipoAnalisis','url'=>array('create')),
	array('label'=>'Actualizar TipoAnalisis','url'=>array('update','id'=>$model->id)),
	array('label'=>'Eliminar TipoAnalisis','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estás seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar TipoAnalisis','url'=>array('admin')),
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
