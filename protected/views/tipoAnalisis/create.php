<?php
$this->pageCaption='Crear TipoAnalisis';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo tipoanalisis';
$this->breadcrumbs=array(
	'Tipo Analisis'=>array('index'),
	'Crear',
);
$this->menu=array(
	array('label'=>'Listar TipoAnalisis','url'=>array('index')),
	array('label'=>'Administrar TipoAnalisis','url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>