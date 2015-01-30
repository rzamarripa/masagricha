<?php
$this->pageCaption='Meta';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar meta';
$this->breadcrumbs=array(
	'Meta',
);

$this->menu=array(
	array('label'=>'Crear Meta','url'=>array('create')),
	array('label'=>'Administrar Meta','url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
