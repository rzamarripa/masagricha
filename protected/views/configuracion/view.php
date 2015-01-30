<?php
$this->pageCaption='Ver Configuracion #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Configuracion'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Configuracion','url'=>array('index')),
	array('label'=>'Crear Configuracion','url'=>array('create')),
	array('label'=>'Actualizar Configuracion','url'=>array('update','id'=>$model->id)),
	array('label'=>'Eliminar Configuracion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estás seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Configuracion','url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'tipografica',
		'descripcion',
		'valor',
	),
)); ?>
