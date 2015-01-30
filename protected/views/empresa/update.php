<?php
$this->pageCaption='Actualizar Empresa '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Empresa'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Empresa','url'=>array('index')),
	array('label'=>'Crear Empresa','url'=>array('create')),
	array('label'=>'Ver Empresa','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar Empresa','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>