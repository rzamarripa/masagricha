
	<?php echo "<?php \$form=\$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'".$this->class2id($this->modelClass)."-form',
		'type'=>'horizontal',
		'enableAjaxValidation'=>false,
	)); ?>\n"; ?>

	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<h4>Instrucciones</h4>	
		Los campos con <span class="required">*</span> son requeridos.
   </div>
	
	<?php echo "<?php echo \$form->errorSummary(\$model); ?>\n"; ?>

	<?php
		foreach($this->tableSchema->columns as $column)
		{
			if($column->autoIncrement || $column->name == 'fechaCreacion_f')
				continue;			
	?>
	<div class="<?php echo "<?php echo 'control-group'; ?>"; ?>">
		<?php echo "<?php echo ". $this->generateActiveLabel($this->modelClass,$column) ."; ?>\n"; ?>
		<div class="controls">
			<div class="input-prepend">
			<?php 
				

				$partes = explode('_',$column->name);
				$finalCampo=$partes[count($partes)-1];
				//echo $finalCampo;
				
					if($finalCampo=='did'){					
						$modeloColumna=ucwords($partes[0]);
						echo '<span class="add-on">Selec</span>
								<?php echo $form->dropDownList($model,\''.$column->name.'\',CHtml::listData('.$this->tableSchema->foreignKeys[$column->name][0].'::model()->findAll(), "id", "nombre")); ?>';
					}
					else if($finalCampo=='aid'){
						$modeloColumna=$partes[0];
						
						echo "<span class=\"add-on\">Selec</span>
							<?php \$this->widget('ext.custom.widgets.EJuiAutoCompleteFkField', array(
						      'model'=>\$model, 
						      'attribute'=>'$column->name', 
						      'sourceUrl'=>Yii::app()->createUrl('$modeloColumna/autocompletesearch'), 
						      'showFKField'=>false,
						      'relName'=>'$modeloColumna', // the relation name defined above
						      'displayAttr'=>'nombre',  // attribute or pseudo-attribute to display
	
						      'options'=>array(
						          'minLength'=>1, 
						      ),
						 )); ?>";
					}
					else if($finalCampo=='f'){					
							echo "<span class=\"add-on\">Fecha</span>	
							<?php
							if (\$model->$column->name!='') 
								\$model->$column->name=date('d-m-Y',strtotime(\$model->$column->name));
							\$this->widget('zii.widgets.jui.CJuiDatePicker', array(
							                                       'model'=>\$model,
							                                       'attribute'=>'$column->name',
							                                       'value'=>\$model->$column->name,
							                                       'language' => 'es',
							                                       'htmlOptions' => array('readonly'=>\"\"),
							                                      'options'=> array(
																		'dateFormat'=>'yy-mm-dd', 
																		'altFormat'=>'dd-mm-yy', 
																		'changeMonth'=>'true', 
																		'changeYear'=>'true', 
																		'yearRange'=>'2012:2014', 
																		'showOn'=>'both',
																		'buttonText'=>'<i class=\"icon-calendar\"></i>'
																	),)); ?>";
					}
					else if($finalCampo=='ft'){
												
							echo "<span class=\"add-on\">Fecha</span>	
										<?php
										Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
										if (\$model->$column->name!='') 
											\$model->$column->name=date('d-m-Y',strtotime(\$model->$column->name));
										\$this->widget('CJuiDateTimePicker',array(
											'model'=>\$model,
							                'attribute'=>'$column->name',
							                'mode'=>'datetime',
							                'language' => 'es',
							                'options'=>array('dateFormat'=>'yy/mm/dd'),
							               
								            ));?>";
					}
					
					else{
						echo "<span class=\"add-on\">Texto</span><?php echo ".$this->generateActiveField($this->modelClass,$column)."; ?>\n";
					}
				
				 
			?>
			<?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
			</div>
		</div>
	</div>
<?php
}
?>
	<div class="form-actions">
		<?php echo "<?php \$this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>\$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>\n"; ?>
	</div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>
