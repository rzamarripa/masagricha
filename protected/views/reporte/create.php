<?php
$this->pageCaption='Reporte Semanal';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='nuevo reporte';
$this->breadcrumbs=array(
	'Reporte'=>array('index'),
	'Crear',
);
?>
<div class="breadcrumb">
	<h2>Reporte Semanal</h2>
	<h4>"El presente reporte busca facilitar el enfoque y el seguimiento de los resultados pero sobre todo a las actividades que a mediano y largo plazo podrán influir de manera determinante en los resultados de ventas de nuestra área de responsabilidad, sea como Asesor de Ventas Corporativas, Gerente de Tienda o de Plaza"</h4>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'meta' => $meta)); ?>