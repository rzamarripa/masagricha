<?php
    $this->pageCaption='Estados';
    $this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
    $this->pageDescription="Listar";

    $this->breadcrumbs=array(
	    'Estados',
    );

    $this->menu=array(
	    array('label'=>'Crear Estado','url'=>array('create')),
	    array('label'=>'Administrar Estados','url'=>array('admin')),
    );

    $this->widget('bootstrap.widgets.TbListView',array(
	    'dataProvider'=>$dataProvider,
	    'headersview' =>'_headersview',
	    'footersview' => '_footersview',
	    'itemView'=>'_view',
    ));
?>
