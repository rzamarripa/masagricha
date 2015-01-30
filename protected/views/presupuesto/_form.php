
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'presupuesto-form',
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
		<?php echo $form->labelEx($model,'grupoCostos_did',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Selec</span>
								<?php echo $form->dropDownList($model,'grupoCostos_did',CHtml::listData(GrupoCostos::model()->findAll(), "id", "nombre")); ?>			<?php echo $form->error($model,'grupoCostos_did'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'semana',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'semana'); ?>
			<?php echo $form->error($model,'semana'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'codigo',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'codigo',array('size'=>5,'maxlength'=>5)); ?>
			<?php echo $form->error($model,'codigo'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'importe',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'importe'); ?>
			<?php echo $form->error($model,'importe'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'cantidad',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'cantidad',array('size'=>4,'maxlength'=>4)); ?>
			<?php echo $form->error($model,'cantidad'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'descripcion',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'descripcion'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'unidad',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'unidad',array('size'=>5,'maxlength'=>5)); ?>
			<?php echo $form->error($model,'unidad'); ?>
			</div>
		</div>
	</div>
	<div class="<?php echo 'control-group'; ?>">
		<?php echo $form->labelEx($model,'familia',array('class'=>'control-label')); ?>
		<div class="controls">
			<div class="input-prepend">
			<span class="add-on">Texto</span><?php echo $form->textField($model,'familia',array('size'=>3,'maxlength'=>3)); ?>
			<?php echo $form->error($model,'familia'); ?>
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
