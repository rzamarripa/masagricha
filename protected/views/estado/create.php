<?php
    $this->pageCaption='Estados';
    $this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
    $this->pageDescription='Crear';

    $this->breadcrumbs=array(
		'Estados'=>array('index'),
		'Crear',
	);

    $this->menu=array(
	    array('label'=>'Listar Estados','url'=>array('index')),
	    array('label'=>'Administrar Estados','url'=>array('admin')),
);

    echo $this->renderPartial('_form', array('model'=>$model)); 
?>