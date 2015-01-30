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
		<?php echo $form->label($model,'fecha_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fecha_f!='') 
						$fecha_f=date('d-m-Y',strtotime($fecha_f));
					else
						$fecha_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fecha_f',
					                                       'value'=>$fecha_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fecha_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaReporteInicio_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaReporteInicio_f!='') 
						$fechaReporteInicio_f=date('d-m-Y',strtotime($fechaReporteInicio_f));
					else
						$fechaReporteInicio_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaReporteInicio_f',
					                                       'value'=>$fechaReporteInicio_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaReporteInicio_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaReporteFin_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaReporteFin_f!='') 
						$fechaReporteFin_f=date('d-m-Y',strtotime($fechaReporteFin_f));
					else
						$fechaReporteFin_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaReporteFin_f',
					                                       'value'=>$fechaReporteFin_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaReporteFin_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'compania'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'compania',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'plaza'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'plaza',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'centroVenta'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'centroVenta',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'nombre'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>200)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'oportunidad1'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'oportunidad1',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cliente1'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cliente1',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'folioObra1'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'folioObra1',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeVenta1'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeVenta1',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaCierre1_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaCierre1_f!='') 
						$fechaCierre1_f=date('d-m-Y',strtotime($fechaCierre1_f));
					else
						$fechaCierre1_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaCierre1_f',
					                                       'value'=>$fechaCierre1_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaCierre1_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'oportunidad2'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'oportunidad2',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cliente2'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cliente2',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'folioObra2'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'folioObra2',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeVenta2'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeVenta2',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaCierre2_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaCierre2_f!='') 
						$fechaCierre2_f=date('d-m-Y',strtotime($fechaCierre2_f));
					else
						$fechaCierre2_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaCierre2_f',
					                                       'value'=>$fechaCierre2_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaCierre2_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'oportunidad3'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'oportunidad3',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cliente3'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cliente3',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'folioObra3'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'folioObra3',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeVenta3'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeVenta3',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaCierre3_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaCierre3_f!='') 
						$fechaCierre3_f=date('d-m-Y',strtotime($fechaCierre3_f));
					else
						$fechaCierre3_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaCierre3_f',
					                                       'value'=>$fechaCierre3_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaCierre3_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'oportunidad4'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'oportunidad4',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cliente4'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cliente4',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'folioObra4'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'folioObra4',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeVenta4'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeVenta4',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaCierre4_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaCierre4_f!='') 
						$fechaCierre4_f=date('d-m-Y',strtotime($fechaCierre4_f));
					else
						$fechaCierre4_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaCierre4_f',
					                                       'value'=>$fechaCierre4_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaCierre4_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'oportunidad5'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'oportunidad5',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cliente5'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cliente5',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'folioObra5'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'folioObra5',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeVenta5'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeVenta5',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaCierre5_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaCierre5_f!='') 
						$fechaCierre5_f=date('d-m-Y',strtotime($fechaCierre5_f));
					else
						$fechaCierre5_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaCierre5_f',
					                                       'value'=>$fechaCierre5_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaCierre5_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'oportunidad6'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'oportunidad6',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cliente6'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cliente6',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'folioObra6'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'folioObra6',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeVenta6'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeVenta6',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaCierre6_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaCierre6_f!='') 
						$fechaCierre6_f=date('d-m-Y',strtotime($fechaCierre6_f));
					else
						$fechaCierre6_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaCierre6_f',
					                                       'value'=>$fechaCierre6_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaCierre6_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'oportunidad7'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'oportunidad7',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cliente7'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cliente7',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'folioObra7'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'folioObra7',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeVenta7'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeVenta7',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaCierre7_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaCierre7_f!='') 
						$fechaCierre7_f=date('d-m-Y',strtotime($fechaCierre7_f));
					else
						$fechaCierre7_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaCierre7_f',
					                                       'value'=>$fechaCierre7_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaCierre7_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'oportunidad8'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'oportunidad8',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cliente8'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cliente8',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'folioObra8'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'folioObra8',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeVenta8'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeVenta8',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaCierre8_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaCierre8_f!='') 
						$fechaCierre8_f=date('d-m-Y',strtotime($fechaCierre8_f));
					else
						$fechaCierre8_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaCierre8_f',
					                                       'value'=>$fechaCierre8_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaCierre8_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'oportunidad9'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'oportunidad9',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cliente9'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cliente9',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'folioObra9'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'folioObra9',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeVenta9'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeVenta9'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaCierre9_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaCierre9_f!='') 
						$fechaCierre9_f=date('d-m-Y',strtotime($fechaCierre9_f));
					else
						$fechaCierre9_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaCierre9_f',
					                                       'value'=>$fechaCierre9_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaCierre9_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'oportunidad10'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'oportunidad10',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cliente10'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cliente10',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'folioObra10'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'folioObra10',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeVenta10'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeVenta10',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaCierre10_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaCierre10_f!='') 
						$fechaCierre10_f=date('d-m-Y',strtotime($fechaCierre10_f));
					else
						$fechaCierre10_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaCierre10_f',
					                                       'value'=>$fechaCierre10_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaCierre10_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'numeroSinter1'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroSinter1',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'descripcionObra1'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'descripcionObra1',array('size'=>60,'maxlength'=>200)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeFactura1'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeFactura1'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'numeroSinter2'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroSinter2',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'descripcionObra2'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'descripcionObra2',array('size'=>60,'maxlength'=>200)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeFactura2'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeFactura2'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'numeroSinter3'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroSinter3',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'descripcionObra3'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'descripcionObra3',array('size'=>60,'maxlength'=>200)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeFactura3'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeFactura3'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'numeroSinter4'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroSinter4',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'descripcionObra4'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'descripcionObra4',array('size'=>60,'maxlength'=>200)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeFactura4'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeFactura4'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'numeroSinter5'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroSinter5',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'descripcionObra5'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'descripcionObra5',array('size'=>60,'maxlength'=>200)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeFactura5'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeFactura5'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'numeroSinter6'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroSinter6',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'descripcionObra6'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'descripcionObra6',array('size'=>60,'maxlength'=>200)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeFactura6'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeFactura6'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'numeroSinter7'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroSinter7',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'descripcionObra7'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'descripcionObra7',array('size'=>60,'maxlength'=>200)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeFactura7'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeFactura7'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'numeroSinter8'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroSinter8',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'descripcionObra8'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'descripcionObra8',array('size'=>60,'maxlength'=>200)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeFactura8'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeFactura8'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'numeroSinter9'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroSinter9',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'descripcionObra9'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'descripcionObra9',array('size'=>60,'maxlength'=>200)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeFactura9'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeFactura9'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'numeroSinter10'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'numeroSinter10',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'descripcionObra10'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'descripcionObra10',array('size'=>60,'maxlength'=>200)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'importeFactura10'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'importeFactura10'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'nombreClienteVisitado1'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreClienteVisitado1',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'puesto1'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'puesto1',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'empresa1'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'empresa1',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaVisita1_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaVisita1_f!='') 
						$fechaVisita1_f=date('d-m-Y',strtotime($fechaVisita1_f));
					else
						$fechaVisita1_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaVisita1_f',
					                                       'value'=>$fechaVisita1_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaVisita1_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'resultado1'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'resultado1',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaProximaVisita1_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaProximaVisita1_f!='') 
						$fechaProximaVisita1_f=date('d-m-Y',strtotime($fechaProximaVisita1_f));
					else
						$fechaProximaVisita1_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaProximaVisita1_f',
					                                       'value'=>$fechaProximaVisita1_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaProximaVisita1_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'nombreClienteVisitado2'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreClienteVisitado2',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'puesto2'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'puesto2',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'empresa2'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'empresa2',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaVisita2_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaVisita2_f!='') 
						$fechaVisita2_f=date('d-m-Y',strtotime($fechaVisita2_f));
					else
						$fechaVisita2_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaVisita2_f',
					                                       'value'=>$fechaVisita2_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaVisita2_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'resultado2'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'resultado2',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaProximaVisita2_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaProximaVisita2_f!='') 
						$fechaProximaVisita2_f=date('d-m-Y',strtotime($fechaProximaVisita2_f));
					else
						$fechaProximaVisita2_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaProximaVisita2_f',
					                                       'value'=>$fechaProximaVisita2_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaProximaVisita2_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'nombreClienteVisitado3'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreClienteVisitado3',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'puesto3'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'puesto3',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'empresa3'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'empresa3',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaVisita3_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaVisita3_f!='') 
						$fechaVisita3_f=date('d-m-Y',strtotime($fechaVisita3_f));
					else
						$fechaVisita3_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaVisita3_f',
					                                       'value'=>$fechaVisita3_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaVisita3_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'resultado3'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'resultado3',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaProximaVisita3_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaProximaVisita3_f!='') 
						$fechaProximaVisita3_f=date('d-m-Y',strtotime($fechaProximaVisita3_f));
					else
						$fechaProximaVisita3_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaProximaVisita3_f',
					                                       'value'=>$fechaProximaVisita3_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaProximaVisita3_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'nombreClienteVisitado4'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreClienteVisitado4',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'puesto4'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'puesto4',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'empresa4'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'empresa4',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaVisita4_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaVisita4_f!='') 
						$fechaVisita4_f=date('d-m-Y',strtotime($fechaVisita4_f));
					else
						$fechaVisita4_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaVisita4_f',
					                                       'value'=>$fechaVisita4_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaVisita4_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'resultado4'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'resultado4',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaProximaVisita4_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaProximaVisita4_f!='') 
						$fechaProximaVisita4_f=date('d-m-Y',strtotime($fechaProximaVisita4_f));
					else
						$fechaProximaVisita4_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaProximaVisita4_f',
					                                       'value'=>$fechaProximaVisita4_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaProximaVisita4_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'nombreClienteVisitado5'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreClienteVisitado5',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'puesto5'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'puesto5',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'empresa5'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'empresa5',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaVisita5_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaVisita5_f!='') 
						$fechaVisita5_f=date('d-m-Y',strtotime($fechaVisita5_f));
					else
						$fechaVisita5_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaVisita5_f',
					                                       'value'=>$fechaVisita5_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaVisita5_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'resultado5'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'resultado5',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaProximaVisita5_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaProximaVisita5_f!='') 
						$fechaProximaVisita5_f=date('d-m-Y',strtotime($fechaProximaVisita5_f));
					else
						$fechaProximaVisita5_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaProximaVisita5_f',
					                                       'value'=>$fechaProximaVisita5_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaProximaVisita5_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'nombreClienteVisitado6'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreClienteVisitado6',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'puesto6'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'puesto6',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'empresa6'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'empresa6',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaVisita6_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaVisita6_f!='') 
						$fechaVisita6_f=date('d-m-Y',strtotime($fechaVisita6_f));
					else
						$fechaVisita6_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaVisita6_f',
					                                       'value'=>$fechaVisita6_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaVisita6_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'resultado6'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'resultado6',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaProximaVisita6_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaProximaVisita6_f!='') 
						$fechaProximaVisita6_f=date('d-m-Y',strtotime($fechaProximaVisita6_f));
					else
						$fechaProximaVisita6_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaProximaVisita6_f',
					                                       'value'=>$fechaProximaVisita6_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaProximaVisita6_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'nombreClienteVisitado7'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreClienteVisitado7',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'puesto7'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'puesto7',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'empresa7'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'empresa7',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaVisita7_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaVisita7_f!='') 
						$fechaVisita7_f=date('d-m-Y',strtotime($fechaVisita7_f));
					else
						$fechaVisita7_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaVisita7_f',
					                                       'value'=>$fechaVisita7_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaVisita7_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'resultado7'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'resultado7',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaProximaVisita7_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaProximaVisita7_f!='') 
						$fechaProximaVisita7_f=date('d-m-Y',strtotime($fechaProximaVisita7_f));
					else
						$fechaProximaVisita7_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaProximaVisita7_f',
					                                       'value'=>$fechaProximaVisita7_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaProximaVisita7_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'nombreClienteVisitado8'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreClienteVisitado8',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'puesto8'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'puesto8',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'empresa8'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'empresa8',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaVisita8_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaVisita8_f!='') 
						$fechaVisita8_f=date('d-m-Y',strtotime($fechaVisita8_f));
					else
						$fechaVisita8_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaVisita8_f',
					                                       'value'=>$fechaVisita8_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaVisita8_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'resultado8'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'resultado8',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaProximaVisita8_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaProximaVisita8_f!='') 
						$fechaProximaVisita8_f=date('d-m-Y',strtotime($fechaProximaVisita8_f));
					else
						$fechaProximaVisita8_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaProximaVisita8_f',
					                                       'value'=>$fechaProximaVisita8_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaProximaVisita8_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'nombreClienteVisitado9'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreClienteVisitado9',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'puesto9'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'puesto9',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'empresa9'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'empresa9',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaVisita9_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaVisita9_f!='') 
						$fechaVisita9_f=date('d-m-Y',strtotime($fechaVisita9_f));
					else
						$fechaVisita9_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaVisita9_f',
					                                       'value'=>$fechaVisita9_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaVisita9_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'resultado9'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'resultado9',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaProximaVisita9_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaProximaVisita9_f!='') 
						$fechaProximaVisita9_f=date('d-m-Y',strtotime($fechaProximaVisita9_f));
					else
						$fechaProximaVisita9_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaProximaVisita9_f',
					                                       'value'=>$fechaProximaVisita9_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaProximaVisita9_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'nombreClienteVisitado10'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombreClienteVisitado10',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'puesto10'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'puesto10',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'empresa10'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'empresa10',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaVisita10_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaVisita10_f!='') 
						$fechaVisita10_f=date('d-m-Y',strtotime($fechaVisita10_f));
					else
						$fechaVisita10_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaVisita10_f',
					                                       'value'=>$fechaVisita10_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaVisita10_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'resultado10'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'resultado10',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaProximaVisita10_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaProximaVisita10_f!='') 
						$fechaProximaVisita10_f=date('d-m-Y',strtotime($fechaProximaVisita10_f));
					else
						$fechaProximaVisita10_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaProximaVisita10_f',
					                                       'value'=>$fechaProximaVisita10_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaProximaVisita10_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'zonaRecorrida1'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'zonaRecorrida1',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cantidadObras1'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cantidadObras1'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaRecorrido1_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaRecorrido1_f!='') 
						$fechaRecorrido1_f=date('d-m-Y',strtotime($fechaRecorrido1_f));
					else
						$fechaRecorrido1_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaRecorrido1_f',
					                                       'value'=>$fechaRecorrido1_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaRecorrido1_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'observacionesObra1'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'observacionesObra1',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'zonaRecorrida2'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'zonaRecorrida2',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cantidadObras2'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cantidadObras2'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaRecorrido2_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaRecorrido2_f!='') 
						$fechaRecorrido2_f=date('d-m-Y',strtotime($fechaRecorrido2_f));
					else
						$fechaRecorrido2_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaRecorrido2_f',
					                                       'value'=>$fechaRecorrido2_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaRecorrido2_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'observacionesObra2'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'observacionesObra2',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'zonaRecorrida3'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'zonaRecorrida3',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cantidadObras3'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cantidadObras3'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaRecorrido3_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaRecorrido3_f!='') 
						$fechaRecorrido3_f=date('d-m-Y',strtotime($fechaRecorrido3_f));
					else
						$fechaRecorrido3_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaRecorrido3_f',
					                                       'value'=>$fechaRecorrido3_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaRecorrido3_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'observacionesObra3'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'observacionesObra3',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'zonaRecorrida4'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'zonaRecorrida4',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cantidadObras4'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cantidadObras4'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaRecorrido4_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaRecorrido4_f!='') 
						$fechaRecorrido4_f=date('d-m-Y',strtotime($fechaRecorrido4_f));
					else
						$fechaRecorrido4_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaRecorrido4_f',
					                                       'value'=>$fechaRecorrido4_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaRecorrido4_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'observacionesObra4'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'observacionesObra4',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'zonaRecorrida5'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'zonaRecorrida5',array('size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'cantidadObras5'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cantidadObras5'); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'fechaRecorrido5_f'); ?>
		<div class="input">
			
			<?php
					if ($model->fechaRecorrido5_f!='') 
						$fechaRecorrido5_f=date('d-m-Y',strtotime($fechaRecorrido5_f));
					else
						$fechaRecorrido5_f=date('d-m-Y');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>$model,
					                                       'attribute'=>'fechaRecorrido5_f',
					                                       'value'=>$fechaRecorrido5_f,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>"readonly"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>$fechaRecorrido5_f,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>"-70Y", //fecha minima
					                                               'maxDate'=> "+10Y", //fecha maxima
					                                       ),)); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'observacionesObra5'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'observacionesObra5',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'usuario_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,"usuario_did",CHtml::listData(Usuario::model()->findAll(), 'id', 'nombre')); ?>		</div>
	</div>


	<div class="clearfix">
		<?php echo $form->label($model,'estatus_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,"estatus_did",CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>		</div>
	</div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
