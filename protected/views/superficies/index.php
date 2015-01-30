<?php
$this->pageCaption='Superficies';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar superficies';
$this->breadcrumbs=array(
	'Superficies',
);

$this->menu=array(
	array('label'=>'Crear Superficies','url'=>array('create')),
	array('label'=>'Administrar Superficies','url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
