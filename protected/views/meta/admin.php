<?php
$this->pageCaption='Adminsitrar ';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='meta';
$this->breadcrumbs=array(
	'Meta'=>array('index'),
	'Adminsitrar',
);

$this->menu=array(
	array('label'=>'Listar Meta','url'=>array('index')),
	array('label'=>'Crear Meta','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('meta-grid', {
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
	'id'=>'meta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fecha_f',
		'ventaTotalMeta',
		'ventaM2Meta',
		'pnpvMeta',
		'porcentajeAvisaMeta',
		'descPorcentajeMeta',
		array('name'=>'estatus_did',
		        'value'=>'$data->estatus->nombre',
			    'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre'),),
		array('name'=>'usuario_did',
		        'value'=>'$data->usuario->nombre',
			    'filter'=>CHtml::listData(Usuario::model()->findAll(), 'id', 'nombre'),),
			    /*
		'fechaCreacion_f',*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
