<?php
$this->pageCaption='Adminsitrar ';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='tipo analisis';
$this->breadcrumbs=array(
	'Tipo Analisis'=>array('index'),
	'Adminsitrar',
);

$this->menu=array(
	array('label'=>'Listar TipoAnalisis','url'=>array('index')),
	array('label'=>'Crear TipoAnalisis','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tipo-analisis-grid', {
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
	'id'=>'tipo-analisis-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		array('name'=>'estatus_did',
		        'value'=>'$data->estatus->nombre',
			    'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre'),),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
