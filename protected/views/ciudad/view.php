<?php
    $this->pageCaption='Ciudades';
    $this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
    $this->pageDescription=$model->nombre;

    $this->breadcrumbs=array(
	    'Ciudades'=>array('index'),
	    $model->id,
    );

    $this->menu=array(
	    array('label'=>'Listar Ciudades','url'=>array('index')),
	    array('label'=>'Crear Ciudad','url'=>array('create')),
	    array('label'=>'Actualizar Ciudad','url'=>array('update','id'=>$model->id)),
	    array('label'=>'Eliminar Ciudad','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estás seguro que quieres eliminar este elemento?')),
	    array('label'=>'Administrar Ciudades','url'=>array('admin')),
    );
?>

<h1>Ver Ciudad #<?php echo $model->id; ?></h1>

<?php 
    $this->widget('zii.widgets.CDetailView', array(
	    'data'=>$model,
	    'baseScriptUrl'=>false,
	    'cssFile'=>false,
	    'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
	    'attributes'=>array(
		    'id',
		    'nombre',
		    array(	'name'=>'estado_did',
			            'value'=>$model->estado->nombre,),
		    array(	'name'=>'estatus_did',
			            'value'=>$model->estatus->nombre,),
	    ),
    )); 
?>
