<?php
$this->pageCaption='Grupo Costos';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar grupo costos';
$this->breadcrumbs=array(
	'Grupo Costos',
);

$this->menu=array(
	array('label'=>'Crear GrupoCostos','url'=>array('create')),
	array('label'=>'Administrar GrupoCostos','url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
