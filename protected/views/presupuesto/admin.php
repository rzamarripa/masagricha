<?php
$this->pageCaption='Adminsitrar ';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='presupuesto';
$this->breadcrumbs=array(
	'Presupuesto'=>array('index'),
	'Adminsitrar',
);

$this->menu=array(
	array('label'=>'Listar Presupuesto','url'=>array('index')),
	array('label'=>'Crear Presupuesto','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('presupuesto-grid', {
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
	'id'=>'presupuesto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array('name'=>'grupoCostos_did',
		        'value'=>'$data->grupoCostos->nombre',
			    'filter'=>CHtml::listData(GrupoCostos::model()->findAll(), 'id', 'nombre'),),
		'semana',
		'codigo',
		'importe',
		'cantidad',
		/*
		'descripcion',
		'unidad',
		'familia',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
