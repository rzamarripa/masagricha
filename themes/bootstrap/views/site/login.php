<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Sesión';
$this->breadcrumbs=array(
	'Iniciar Sesión',
);
?>


<div class="row">
	<div class="span4 offset4 well">
	<legend>Inicia Sesión</legend>
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
					'id'=>'login-form',
				    'type'=>'',
					'enableClientValidation'=>true,
					'clientOptions'=>array(
						'validateOnSubmit'=>true,
					),
				));  
				echo $form->errorSummary($model);				
				echo $form->textField($model,'username',array('placeholder'=>'Usuario','class'=>'span4'));					
				echo $form->passwordField($model,'password',array('placeholder'=>'Contraseña','class'=>'span4')); 
	?>
		<label class="checkbox">
		<?php echo $form->checkBox($model,'rememberMe'); ?> <label>Recuérdame</label>
		</label>
		<button type="submit" name="submit" class="btn btn-info btn-block">Iniciar Sesión</button>
	
	<?php $this->endWidget(); ?>
	
	</div>
</div>