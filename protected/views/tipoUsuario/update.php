<?php
$this->breadcrumbs=array(
	'Tipo Usuarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar TipoUsuario','url'=>array('index')),
	array('label'=>'Crear TipoUsuario','url'=>array('create')),
	array('label'=>'Ver TipoUsuario','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar TipoUsuario','url'=>array('admin')),
);
?>

<h1>Actualizar TipoUsuario <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>