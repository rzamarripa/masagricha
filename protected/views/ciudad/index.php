<?php
    $this->pageCaption='Ciudades';
    $this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
    $this->pageDescription="Listar";

    $this->breadcrumbs=array(
	    'Ciudades',
    );

    $this->menu=array(
	    array('label'=>'Crear Ciudad','url'=>array('create')),
	    array('label'=>'Administrar Ciudades','url'=>array('admin')),
    );

    $this->widget('bootstrap.widgets.TbListView',array(
	    'dataProvider'=>$dataProvider,
	    'headersview' =>'_headersview',
	    'footersview' => '_footersview',
	    'itemView'=>'_view',
    ));
?>
