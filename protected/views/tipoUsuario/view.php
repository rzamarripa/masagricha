<?php
    $this->pageCaption='Tipo de Usuarios';
    $this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
    $this->pageDescription='';


    $this->breadcrumbs=array(
	    'Tipo Usuarios'=>array('index'),
	    $model->id,
    );

    $this->menu=array(
	    array('label'=>'Listar TipoUsuario','url'=>array('index')),
	    array('label'=>'Crear TipoUsuario','url'=>array('create')),
	    array('label'=>'Actualizar TipoUsuario','url'=>array('update','id'=>$model->id)),
	    array('label'=>'Eliminar TipoUsuario','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estás seguro que quieres eliminar este elemento?')),
	    array('label'=>'Administrar TipoUsuario','url'=>array('admin')),
    );
?>

<?php $this->widget('zii.widgets.CDetailView', array(
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
