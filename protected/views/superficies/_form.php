
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'superficies-form',
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
		<?php echo $form->labelEx($model,'temporada',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'temporada',array('size'=>4,'maxlength'=>4)); ?>
			<?php echo $form->error($model,'temporada'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'empresa_did',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Selec</span>
								<?php echo $form->dropDownList($model,'empresa_did',CHtml::listData(Empresa::model()->findAll(), "id", "nombre")); ?>			<?php echo $form->error($model,'empresa_did'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'lote',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'lote',array('size'=>2,'maxlength'=>2)); ?>
			<?php echo $form->error($model,'lote'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'cultivo',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'cultivo',array('size'=>2,'maxlength'=>2)); ?>
			<?php echo $form->error($model,'cultivo'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'hectareas',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'hectareas'); ?>
			<?php echo $form->error($model,'hectareas'); ?>
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
