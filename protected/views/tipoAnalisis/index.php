<?php
$this->pageCaption='Tipo Analisis';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar tipo analisis';
$this->breadcrumbs=array(
	'Tipo Analisis',
);

$this->menu=array(
	array('label'=>'Crear TipoAnalisis','url'=>array('create')),
	array('label'=>'Administrar TipoAnalisis','url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
