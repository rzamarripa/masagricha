<?php
$this->pageCaption='Crear SemanaActual';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo semanaactual';
$this->breadcrumbs=array(
	'Semana Actual'=>array('index'),
	'Crear',
);
$this->menu=array(
	array('label'=>'Listar SemanaActual','url'=>array('index')),
	array('label'=>'Administrar SemanaActual','url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>