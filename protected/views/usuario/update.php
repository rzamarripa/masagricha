<?php
$this->pageCaption=$model->nombre;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Usuario',
	$model->id,
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Inicio','url'=>array('site/index')),
);
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>