<?php
$this->pageCaption='Ver Meta #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Meta'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Meta','url'=>array('index')),
	array('label'=>'Crear Meta','url'=>array('create')),
	array('label'=>'Actualizar Meta','url'=>array('update','id'=>$model->id)),
	array('label'=>'Eliminar Meta','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estás seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Meta','url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'ventaTotalMeta',
		'ventaM2Meta',
		'pnpvMeta',
		'porcentajeAvisaMeta',
		'descPorcentajeMeta',
		array(	'name'=>'estatus_did',
			        'value'=>$model->estatus->nombre,),
		array(	'name'=>'usuario_did',
			        'value'=>$model->usuario->nombre,),
	),
)); ?>
