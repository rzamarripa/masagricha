<?php
$this->pageCaption='Presupuesto';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar presupuesto';
$this->breadcrumbs=array(
	'Presupuesto',
);

$this->menu=array(
	array('label'=>'Crear Presupuesto','url'=>array('create')),
	array('label'=>'Administrar Presupuesto','url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
