<?php
$this->pageCaption='Actualizar Usuario '.$model->usuario;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	"Usuario",
	'Actualizar',
);
?>

<?php echo $this->renderPartial('_formPerfil', array('model'=>$model)); ?>
