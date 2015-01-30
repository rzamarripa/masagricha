<?php
    $this->pageCaption='Estados';
    $this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
    $this->pageDescription="Filtrar";
    
    $this->breadcrumbs=array(
	    'Estados'=>array('index'),
	    'Administrar',
    );

    $this->menu=array(
	    array('label'=>'Listar Estados','url'=>array('index')),
	    array('label'=>'Crear Estado','url'=>array('create')),
    );

    Yii::app()->clientScript->registerScript('search', "
    $('.search-button').click(function(){
	    $('.search-form').toggle();
	    return false;
    });
    $('.search-form form').submit(function(){
	    $.fn.yiiGridView.update('estado-grid', {
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
	'id'=>'estado-grid',
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
