<?php
    $this->pageCaption='Ciudades';
    $this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
    $this->pageDescription=$model->nombre;

    $this->breadcrumbs=array(
		    'Ciudades'=>array('index'),
		    'Crear',
	);

    $this->menu=array(
	    array('label'=>'Listar Ciudades','url'=>array('index')),
	    array('label'=>'Administrar Ciudades','url'=>array('admin')),
    );

    echo $this->renderPartial('_form', array('model'=>$model));
?>