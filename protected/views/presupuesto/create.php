<?php
$this->pageCaption='Crear Presupuesto';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo presupuesto';
$this->breadcrumbs=array(
	'Presupuesto'=>array('index'),
	'Crear',
);
$this->menu=array(
	array('label'=>'Listar Presupuesto','url'=>array('index')),
	array('label'=>'Administrar Presupuesto','url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>