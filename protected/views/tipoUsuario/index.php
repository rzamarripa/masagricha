<?php
$this->breadcrumbs=array(
	'Tipo Usuarios',
);

$this->menu=array(
	array('label'=>'Crear Tipo de Usuario','url'=>array('create')),
	array('label'=>'Administrar Tipo de Usuarios','url'=>array('admin')),
);
?>

<h1>Tipo Usuarios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
