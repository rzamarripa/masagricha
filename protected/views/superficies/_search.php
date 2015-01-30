<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="clearfix">
		<?php echo $form->label($model,'id'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'id',array('size'=>11,'maxlength'=>11)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'temporada'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'temporada',array('size'=>4,'maxlength'=>4)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'empresa_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,"empresa_did",CHtml::listData(Empresa::model()->findAll(), 'id', 'nombre')); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'lote'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'lote',array('size'=>2,'maxlength'=>2)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cultivo'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cultivo',array('size'=>2,'maxlength'=>2)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'hectareas'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'hectareas'); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
