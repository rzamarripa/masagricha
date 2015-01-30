<?php
$this->pageCaption='Empresa';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar empresa';
$this->breadcrumbs=array(
	'Empresa',
);

$this->menu=array(
	array('label'=>'Crear Empresa','url'=>array('create')),
	array('label'=>'Administrar Empresa','url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
