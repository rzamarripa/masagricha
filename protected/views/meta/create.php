<?php
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$this->pageCaption='Meta';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='del mes de ' . $meses[date("n") - 1];
$this->breadcrumbs=array(
	'Meta'=>array('index'),
	'Crear',
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>