<?php
$this->pageCaption='Actualizar TipoAnalisis '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Tipo Analisis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar TipoAnalisis','url'=>array('index')),
	array('label'=>'Crear TipoAnalisis','url'=>array('create')),
	array('label'=>'Ver TipoAnalisis','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar TipoAnalisis','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>