<?php
$this->pageCaption='Actualizar GrupoCostos '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Grupo Costos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar GrupoCostos','url'=>array('index')),
	array('label'=>'Crear GrupoCostos','url'=>array('create')),
	array('label'=>'Ver GrupoCostos','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar GrupoCostos','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>