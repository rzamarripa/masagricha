<?php
$this->pageCaption='Adminsitrar ';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='superficies';
$this->breadcrumbs=array(
	'Superficies'=>array('index'),
	'Adminsitrar',
);

$this->menu=array(
	array('label'=>'Listar Superficies','url'=>array('index')),
	array('label'=>'Crear Superficies','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('superficies-grid', {
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
	'id'=>'superficies-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'temporada',
		array('name'=>'empresa_did',
		        'value'=>'$data->empresa->nombre',
			    'filter'=>CHtml::listData(Empresa::model()->findAll(), 'id', 'nombre'),),
		'lote',
		'cultivo',
		'hectareas',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
