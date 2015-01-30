<?php
$this->pageCaption='Actualizar SemanaActual '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Semana Actual'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar SemanaActual','url'=>array('index')),
	array('label'=>'Crear SemanaActual','url'=>array('create')),
	array('label'=>'Ver SemanaActual','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar SemanaActual','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>