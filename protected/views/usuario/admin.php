<?php
$this->pageCaption='Adminsitrar ';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='usuario';
$this->breadcrumbs=array(
	'Usuario'=>array('index'),
	'Adminsitrar',
);

$this->menu=array(
	array('label'=>'Listar Usuario','url'=>array('index')),
	array('label'=>'Crear Usuario','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('usuario-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<p>
Opcionalmente puede usar operadores de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada criterio de búsqueda..
</p>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'puesto',
		'puntoVenta',
		'ciudad',
		'compania',
		/*
		'usuario',
		'contrasena',
		array('name'=>'tipoUsuario_did',
		        'value'=>'$data->tipoUsuario->nombre',
			    'filter'=>CHtml::listData(TipoUsuario::model()->findAll(), 'id', 'nombre'),),
		array('name'=>'estatus_did',
		        'value'=>'$data->estatus->nombre',
			    'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre'),),
		'fechaCreacion_f',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
