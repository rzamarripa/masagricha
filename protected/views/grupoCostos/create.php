<?php
$this->pageCaption='Crear GrupoCostos';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo grupocostos';
$this->breadcrumbs=array(
	'Grupo Costos'=>array('index'),
	'Crear',
);
$this->menu=array(
	array('label'=>'Listar GrupoCostos','url'=>array('index')),
	array('label'=>'Administrar GrupoCostos','url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>