<?php
$this->pageCaption='Ver SemanaActual #'.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Semana Actual'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar SemanaActual','url'=>array('index')),
	array('label'=>'Crear SemanaActual','url'=>array('create')),
	array('label'=>'Actualizar SemanaActual','url'=>array('update','id'=>$model->id)),
	array('label'=>'Eliminar SemanaActual','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estás seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar SemanaActual','url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'semana',
	),
)); ?>
