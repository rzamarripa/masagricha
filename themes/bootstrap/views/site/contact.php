<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form TbActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contáctame';
$this->breadcrumbs=array(
	'Contacto',
);
?>

<h1>Contáctanos</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('contact'),
    )); ?>

<?php else: ?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'contact-form',
    'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	<div class="row">
		<div class="form well span8">
			<div class="row">
				<div class="span8">
						<?php echo $form->errorSummary($model);?>
				</div>
			</div>
			<div class="row">
				<div class="span3">					
					<?php 
						echo CHtml::activeLabelEx($model,'name');				    	
						echo $form->textField($model,'name'); 
						echo CHtml::activeLabelEx($model,'email');
				    	echo $form->textField($model,'email'); 
						echo CHtml::activeLabelEx($model,'subject');
						echo $form->dropDownList($model,'subject',array('pregunta'=>'Pregunta','sugerencia'=>'Sugerencia','soporte'=>'Soporte'),array('empty'=>'Seleccione una')); ?>
				</div>
				<div class="span5">					
					<?php 
						echo CHtml::activeLabelEx($model,'body');
						echo $form->textArea($model,'body',array('rows'=>6, 'class'=>"input-xlarge span5"));
						echo CHtml::activeLabelEx($model,'verifyCode');
						echo '<div>'; $this->widget('CCaptcha'); echo '</div>';
						echo CHtml::activeTextField($model,'verifyCode');						
					?>
				</div>
		
				<button type="submit" class="btn btn-info pull-right"><i class="icon-white icon-plane"></i> Enviar</button>
			</div>
		</div>
	</div>
<?php $this->endWidget(); ?>
	

<?php endif; ?>