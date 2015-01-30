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
		<?php echo $form->label($model,'tipografica'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'tipografica',array('size'=>20,'maxlength'=>20)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'descripcion'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'descripcion',array('size'=>20,'maxlength'=>20)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'valor'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'valor',array('size'=>10,'maxlength'=>10)); ?>
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
