
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'configuracion-form',
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
		<?php echo $form->labelEx($model,'tipografica',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'tipografica',array('size'=>20,'maxlength'=>20)); ?>
			<?php echo $form->error($model,'tipografica'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'descripcion',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'descripcion',array('size'=>20,'maxlength'=>20)); ?>
			<?php echo $form->error($model,'descripcion'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'valor',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'valor',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'valor'); ?>
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
