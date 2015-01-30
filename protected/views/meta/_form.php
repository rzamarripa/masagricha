
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'meta-form',
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
		<?php echo $form->labelEx($model,'ventaTotalMeta',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Cant.</span><?php echo $form->textField($model,'ventaTotalMeta'); ?>
			<?php echo $form->error($model,'ventaTotalMeta'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'ventaM2Meta',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Cant.</span><?php echo $form->textField($model,'ventaM2Meta'); ?>
			<?php echo $form->error($model,'ventaM2Meta'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'pnpvMeta',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Cant.</span><?php echo $form->textField($model,'pnpvMeta'); ?>
			<?php echo $form->error($model,'pnpvMeta'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'porcentajeAvisaMeta',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Cant.</span><?php echo $form->textField($model,'porcentajeAvisaMeta'); ?>
			<?php echo $form->error($model,'porcentajeAvisaMeta'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'descPorcentajeMeta',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Cant.</span><?php echo $form->textField($model,'descPorcentajeMeta'); ?>
			<?php echo $form->error($model,'descPorcentajeMeta'); ?>
			</div>
		</div>
	</div>	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'icon'=>'ok white',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
