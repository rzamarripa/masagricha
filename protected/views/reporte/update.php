<?php
$this->pageCaption='Actualizar Reporte '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Reporte'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Volver','url'=>array('index')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>