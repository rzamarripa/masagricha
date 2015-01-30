<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Sesión';
$this->breadcrumbs=array(
	'Iniciar Sesión',
);
?>

<h1><?php echo $_GET['tipo']; ?></h1>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
    'type'=>'',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<?php echo $form->textFieldRow($model,'username'); ?>

	<?php echo $form->passwordFieldRow($model,'password',array()); ?>

	<?php echo $form->checkBoxRow($model,'rememberMe'); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'info',
            'icon'=>'off white',
            'label'=>'Iniciar',
        )); ?>
        <span class="pull-right" style="margin-right:20px; margin-top:5px;"><?php echo CHtml::link('Regístrate',array('registro/create')); ?></span>
	</div>
	
	

<?php $this->endWidget(); ?>

</div><!-- form -->
