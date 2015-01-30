<?php
$this->pageCaption='Estatus';
    $this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
    $this->pageDescription=$model->nombre;

$this->breadcrumbs=array(
	'Estatus'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Estatus','url'=>array('index')),
	array('label'=>'Crear Estatus','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('estatus-grid', {
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
	'id'=>'estatus-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'requisicion',
		'cotizacion',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
