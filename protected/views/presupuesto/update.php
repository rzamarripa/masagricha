<?php
$this->pageCaption='Actualizar Presupuesto '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Presupuesto'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Presupuesto','url'=>array('index')),
	array('label'=>'Crear Presupuesto','url'=>array('create')),
	array('label'=>'Ver Presupuesto','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar Presupuesto','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>