<?php
$this->pageCaption=$model->nombre;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Usuario',
	$model->id,
);

$this->menu=array(
	array('label'=>'Volver','url'=>array('site/index')),
	array('label'=>'Actualizar','url'=>array('update','id'=>$model->id)),
);
?>

<div class="row">
	<div class="span3">
		<?php
			if(isset($model->foto)) 
				echo '<img class="img-polaroid" src="' . Yii::app()->baseUrl . DIRECTORY_SEPARATOR . 'fotos' . DIRECTORY_SEPARATOR . $model->foto . '" alt="' . $model->nombre . '" width=200 height=200/>';
			else if(isset($model->id)){
				echo '<img class="img-polaroid" src="' . Yii::app()->baseUrl . DIRECTORY_SEPARATOR . 'fotos' . DIRECTORY_SEPARATOR . 'desconocido.jpeg' . '" alt="' . $model->nombre . '" width=200 height=200/>';				
			}
			else
			{
				'<div class="alert alert-warning">
					<p><strong>Una vez que se haya registrado podrá subir la foto</strong></p>
				</div>';
			}
			?>	
	</div>
	<div class="span9">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'baseScriptUrl'=>false,
			'cssFile'=>false,
			'htmlOptions'=>array('class'=>'table table-bordered table-striped'),
			'attributes'=>array(
				'id',
				'nombre',
				'puesto',
				'usuario',
				array(	'name'=>'contrasena',
					        'value'=>'**********'),
				array(	'name'=>'tipoUsuario_did',
					        'value'=>$model->tipoUsuario->nombre,),
				array(	'name'=>'estatus_did',
					        'value'=>$model->estatus->nombre,),
			),
		)); ?>
	</div>
</div>

