<?php
$this->pageCaption='Actualizar Meta '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Meta'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Meta','url'=>array('index')),
	array('label'=>'Crear Meta','url'=>array('create')),
	array('label'=>'Ver Meta','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar Meta','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>