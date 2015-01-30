<?php
    $this->pageCaption='Tipos de Usuarios';
    $this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
    $this->pageDescription="Filtrar";

    $this->breadcrumbs=array(
	    'Tipo Usuarios'=>array('index'),
	    'Administrar',
    );

    $this->menu=array(
	    array('label'=>'Listar Tipo de Usuarios','url'=>array('index')),
	    array('label'=>'Crear Tipo de Usuario','url'=>array('create')),
    );

    Yii::app()->clientScript->registerScript('search', "
    $('.search-button').click(function(){
	    $('.search-form').toggle();
	    return false;
    });
    $('.search-form form').submit(function(){
	    $.fn.yiiGridView.update('tipo-usuario-grid', {
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
	'id'=>'tipo-usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		array('name'=>'estatus_did',
		        'value'=>'$data->estatus->nombre',
			    'filter'=>CHtml::listData(Estatus::model()->findAll('nombre IS NOT NULL'), 'id', 'nombre'),),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
