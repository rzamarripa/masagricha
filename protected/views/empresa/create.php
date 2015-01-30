<?php
$this->pageCaption='Crear Empresa';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo empresa';
$this->breadcrumbs=array(
	'Empresa'=>array('index'),
	'Crear',
);
$this->menu=array(
	array('label'=>'Listar Empresa','url'=>array('index')),
	array('label'=>'Administrar Empresa','url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>