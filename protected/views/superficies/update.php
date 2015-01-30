<?php
$this->pageCaption='Actualizar Superficies '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Superficies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Superficies','url'=>array('index')),
	array('label'=>'Crear Superficies','url'=>array('create')),
	array('label'=>'Ver Superficies','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar Superficies','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>