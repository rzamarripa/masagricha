<?php 
	$usuarioActual = Usuario::model()->find("usuario = '" . Yii::app()->user->name . "'");
?>
<div class="row">
	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<h4>Instrucciones</h4>	
		Los campos con <span class="required">*</span> son requeridos.
   </div>
	<div class="span3 text-center">
		<?php
			if(isset($model->foto)) {
				echo CHtml::link('<img class="img-polaroid" src="' . Yii::app()->baseUrl . DIRECTORY_SEPARATOR . 'fotos' . DIRECTORY_SEPARATOR . $model->foto . '" alt="' . $model->nombre . '" width=200 height=200/>',array('usuario/subir','id' =>$model->id));
				echo '<div class="alert alert-warning">
					<p><strong>Click en la imagen para agregar foto de perfil</strong></p>
				</div>';
			}
			else if(isset($model->id)){
				echo CHtml::link('<img class="img-polaroid" src="' . Yii::app()->baseUrl . DIRECTORY_SEPARATOR . 'fotos' . DIRECTORY_SEPARATOR . 'desconocido.jpeg' . '" alt="' . $model->nombre . '" width=200 height=200/>',array('usuario/subir','id' =>$model->id));	
				echo '<div class="alert alert-warning">
					<p><strong>Click en la imagen para agregar foto de perfil</strong></p>
				</div>';			
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
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'usuario-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>false,
		)); 
		
		echo $form->errorSummary($model); ?>
	
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
			<?php echo $form->labelEx($model,'puesto',array('class'=>'control-label')); ?>
			<div class="controls">
				<div class="input-prepend">
				<span class="add-on">Texto</span><?php echo $form->textField($model,'puesto',array('size'=>60,'maxlength'=>100)); ?>
				<?php echo $form->error($model,'puesto'); ?>
				</div>
			</div>
		</div>		
		<div class="<?php echo 'control-group'; ?>">
			<?php echo $form->labelEx($model,'usuario',array('class'=>'control-label')); ?>
			<div class="controls">
				<div class="input-prepend">
				<span class="add-on">Texto</span><?php echo $form->textField($model,'usuario',array('size'=>60,'maxlength'=>100)); ?>
				<?php echo $form->error($model,'usuario'); ?>
				</div>
			</div>
		</div>
		<div class="<?php echo 'control-group'; ?>">
			<?php echo $form->labelEx($model,'contrasena',array('class'=>'control-label')); ?>
			<div class="controls">
				<div class="input-prepend">
				<span class="add-on">Texto</span><?php echo $form->passwordField($model,'contrasena', array('size'=>60,'maxlength'=>100, )); ?>
				<?php echo $form->error($model,'contrasena'); ?>
				</div>
			</div>
		</div>
		<?php			
			if($usuarioActual->tipoUsuario_did == 1){ ?>
				<div class="<?php echo 'control-group'; ?>">
					<?php echo $form->labelEx($model,'tipoUsuario_did',array('class'=>'control-label')); ?>
					<div class="controls">
						<div class="input-prepend">
						<span class="add-on">Selec</span>
											<?php echo $form->dropDownList($model,'tipoUsuario_did',CHtml::listData(TipoUsuario::model()->findAll(), "id", "nombre")); ?>			<?php echo $form->error($model,'tipoUsuario_did'); ?>
						</div>
					</div>
				</div>
				<div class="<?php echo 'control-group'; ?>">
					<?php echo $form->labelEx($model,'estatus_did',array('class'=>'control-label')); ?>
					<div class="controls">
						<div class="input-prepend">
						<span class="add-on">Selec</span>
											<?php echo $form->dropDownList($model,'estatus_did',CHtml::listData(Estatus::model()->findAll(), "id", "nombre")); ?>			<?php echo $form->error($model,'estatus_did'); ?>
						</div>
					</div>
				</div>
		<?php } ?>
		<div class="form-actions">
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'buttonType'=>'submit',
				'type'=>'primary',
				'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
			)); ?>
		</div>
	
		<?php $this->endWidget(); ?>

	</div>
</div>
	