<?php
$this->pageCaption='Crear Superficies';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo superficies';
$this->breadcrumbs=array(
	'Superficies'=>array('index'),
	'Crear',
);
$this->menu=array(
	array('label'=>'Listar Superficies','url'=>array('index')),
	array('label'=>'Administrar Superficies','url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>