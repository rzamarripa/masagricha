<?php
$this->pageCaption='Semana Actual';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar semana actual';
$this->breadcrumbs=array(
	'Semana Actual',
);

$this->menu=array(
	array('label'=>'Crear SemanaActual','url'=>array('create')),
	array('label'=>'Administrar SemanaActual','url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
