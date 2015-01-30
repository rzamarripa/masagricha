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
		<?php echo $form->label($model,'grupoCostos_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,"grupoCostos_did",CHtml::listData(GrupoCostos::model()->findAll(), 'id', 'nombre')); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'semana'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'semana'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'codigo'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'codigo',array('size'=>5,'maxlength'=>5)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importe'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importe'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cantidad'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cantidad',array('size'=>4,'maxlength'=>4)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'descripcion'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'unidad'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'unidad',array('size'=>5,'maxlength'=>5)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'familia'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'familia',array('size'=>3,'maxlength'=>3)); ?>
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
