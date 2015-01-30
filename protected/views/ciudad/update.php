<?php
    $this->pageCaption='Ciudades';
    $this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
    $this->pageDescription=$model->nombre;

    $this->breadcrumbs=array(
	    'Ciudades'=>array('index'),
	    $model->id=>array('view','id'=>$model->id),
	    'Actualizar',
    );

    $this->menu=array(
	    array('label'=>'Listar Ciudades','url'=>array('index')),
	    array('label'=>'Crear Ciudad','url'=>array('create')),
	    array('label'=>'Ver Ciudad','url'=>array('view','id'=>$model->id)),
	    array('label'=>'Administrar Ciudades','url'=>array('admin')),
    );
?>

<h1>Actualizar Ciudad <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>