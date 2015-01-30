<?php
    $this->pageCaption='Estados';
    $this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
    $this->pageDescription=$model->nombre;

    $this->breadcrumbs=array(
	    'Estados'=>array('index'),
	    $model->id,
    );

    $this->menu=array(
	    array('label'=>'Listar Estados','url'=>array('index')),
	    array('label'=>'Crear Estado','url'=>array('create')),
	    array('label'=>'Actualizar Estado','url'=>array('update','id'=>$model->id)),
	    array('label'=>'Eliminar Estado','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estás seguro que quieres eliminar este elemento?')),
	    array('label'=>'Administrar Estados','url'=>array('admin')),
    );

    $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	'attributes'=>array(
		'id',
		'nombre',
		array(	'name'=>'estatus_did',
			        'value'=>$model->estatus->nombre,),
	),
)); ?>
