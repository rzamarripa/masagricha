<?php
    $this->pageCaption='Estados';
    $this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
    $this->pageDescription=$model->nombre;
    
    $this->breadcrumbs=array(
	    'Estados'=>array('index'),
	    $model->id=>array('view','id'=>$model->id),
	    'Actualizar',
    );

    $this->menu=array(
	    array('label'=>'Listar Estados','url'=>array('index')),
	    array('label'=>'Crear Estado','url'=>array('create')),
	    array('label'=>'Ver Estado','url'=>array('view','id'=>$model->id)),
	    array('label'=>'Administrar Estados','url'=>array('admin')),
    );

    echo $this->renderPartial('_form',array('model'=>$model)); 

?>