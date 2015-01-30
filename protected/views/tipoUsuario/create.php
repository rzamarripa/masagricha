<?php
    $this->pageCaption='Tipos de Usuarios';
    $this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
    $this->pageDescription="Crear";

    $this->breadcrumbs=array(
		'Tipo Usuarios'=>array('index'),
		'Crear',
	);

$this->menu=array(
	array('label'=>'Listar Tipo de Usuarios','url'=>array('index')),
	array('label'=>'Administrar Tipo de Usuarios','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>