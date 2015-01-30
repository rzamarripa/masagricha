<?php 
	$this->pageCaption=$model->nombre;
	$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
	$this->pageDescription='';
	$this->breadcrumbs=array(
		'Actualizar foto',
		$model->id,
	);
?>
<div class="form">

	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'usuario-form',
		'type'=>'horizontal',
		'enableAjaxValidation'=>true,
		'enableClientValidation'=>true,		
		'htmlOptions' => array('enctype' => 'multipart/form-data'),
	)); ?>
		
		<div class="<?php echo 'control-group'; ?>">
			<?php echo $form->labelEx($up,'foto',array('class'=>'control-label')); ?>
			<div class="controls">
				<div class="input-prepend">
				<?php echo $form->FileField($up,'foto'); ?>
				<?php echo $form->error($up,'foto'); ?>
				</div>
			</div>
		</div>
		
		<div class="form-actions">
			<?php echo CHtml::link($model->isNewRecord ? 'Crear' : 'Guardar',"#", array("submit"=>array($model->isNewRecord ? 'subir' : 'subir', 'id'=>$model->id), 'confirm' => 'Está seguro de cambiar la foto de perfil', 'class' => 'btn btn-primary')); ?>
		</div>

	<?php $this->endWidget(); ?>
</div>