
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'estatus-form',
		'type'=>'horizontal',
		'enableAjaxValidation'=>false,
	)); ?>

	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<h4>Instrucciones</h4>	
		Los campos con <span class="required">*</span> son requeridos.
   </div>
	
	<?php echo $form->errorSummary($model); ?>

		<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'nombre',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nombre'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'requisicion',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'requisicion',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'requisicion'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'cotizacion',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'cotizacion',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'cotizacion'); ?>
			</div>
		</div>
	</div>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
