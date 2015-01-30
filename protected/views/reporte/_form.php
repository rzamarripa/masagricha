	<?php
		
	 $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'reporte-form',
		'type'=>'inline',
		'enableAjaxValidation'=>false,
	)); ?>

	<div class="breadcrumb">
		<h4>I. Generales</h4>
		<?php 
			$res["numero"] = 1;
		  	$res["titulo"] = "Descripción";
		  	$res["descripcion"] = '"Aquí solamente se elige la fecha en la cual se está elaborando el Reporte y el período de tiempo sobre el cual se está hablando o reportando, dado que el reporte es semanal, la fecha de inicio siempre será día Lunes y la fecha termino siempre será Sábado."';
		  	$this->renderPartial("ayuda", array("res" => $res)); 
		 ?>
   </div>
	
	<?php echo $form->errorSummary($model); ?>

	<div class="row">		
		<div class="span12">
			<div class="control-group">				
				<div class="controls">
					<?php echo $form->labelEx($model,'fechaReporteInicio_f',array('class'=>'control-label')); ?>
					<?php
						if ($model->fechaReporteInicio_f!='') 
							$model->fechaReporteInicio_f=date('Y-m-d',strtotime($model->fechaReporteInicio_f));
						$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                       'model'=>$model,
	                       'attribute'=>'fechaReporteInicio_f',
	                       'value'=>$model->fechaReporteInicio_f,
	                       'language' => 'es',
	                       'htmlOptions' => array('readonly'=>"", 'style'=>'width:100px;'),
	                      'options'=> array(
								'dateFormat'=>'yy-mm-dd', 
								'altFormat'=>'yy-mm-dd', 
								'changeMonth'=>'true', 
								'changeYear'=>'true', 
								'yearRange'=>'2012:2014', 
								'showOn'=>'both',
								'buttonText'=>'<i class="icon-calendar"></i>'
							),)); ?>				  
					<?php echo $form->error($model,'fechaReporteInicio_f'); ?>
					al
					<?php
						if ($model->fechaReporteFin_f!='') 
							$model->fechaReporteFin_f=date('Y-m-d',strtotime($model->fechaReporteFin_f));
						$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                       'model'=>$model,
	                       'attribute'=>'fechaReporteFin_f',
	                       'value'=>$model->fechaReporteFin_f,
	                       'language' => 'es',
	                       'htmlOptions' => array('readonly'=>"", 'style'=>'width:100px;'),
	                      'options'=> array(
								'dateFormat'=>'yy-mm-dd', 
								'altFormat'=>'yy-mm-dd', 
								'changeMonth'=>'true', 
								'changeYear'=>'true', 
								'yearRange'=>'2012:2014', 
								'showOn'=>'both',
								'buttonText'=>'<i class="icon-calendar"></i>'
							),)); ?>			
					
					<?php echo $form->error($model,'fechaReporteFin_f'); ?>
				</div>
			</div>			
		</div>
	</div>		
	<hr>
	<div class="row">
		<div class="span12">
			<div class="breadcrumb">
			  <h4>II. Resultados al día</h4>
			  <?php 
			  	$res["numero"] = 2;
			  	$res["titulo"] = "Descripción";
			  	$res["descripcion"] = '"En esta Sección se capturan los datos que arroja KPI´S o en su defecto SINTER con relación a lo logrado en la Semana que previamente transcurrió, así mismo lo que hasta el cierre de dicha Semana se lleva acumulado en el Mes que transcurre." <br/><br/>
"Previamente Usted debió de capturar la Meta Mensual de los 5 Indicadores, con los cuales el Reporte comparará automáticamente arrojando un Porcentaje (%) de alcance sobre la Meta."<br/><br/>
"Venta total $: Expresado en Miles de Pesos. Ejemplos: 1, 200,000=1,200 / 120,000= 120 / 15,000=15"<br/><br/>
"Venta m2: Expresado en Metros Cuadrado sin decimales: 4,332.56= 4,333 / 12,890.34=12,890"<br/><br/>
"PNPV: Expresado en Pesos sin decimales. Ejemplo: 151.67=152 / 132.12=132 / 98.45=98"<br/><br/>
"% Abisa: Expresado en números absolutos sin decimales. Ejemplo: 89%=89 / 112.4%=112 / 75.56=76"<br/><br/>
"Desc %: Expresado en números absolutos con un decimal. Ejemplo: 3.2%= 3.2 / 1.32%=1.3 / 6.4%=6.4"<br/><br/>';
			  	$this->renderPartial("ayuda", array("res" => $res)); 
			  	?>
			</div>
		</div>
		<div class="span12">
			<table class="table table-striped table-condensed table-hover table-bordered">
				<tr>
					<th>Indicadores</th>
					<th>Semana</th>
					<th>Mes</th>
					<th>Meta</th>
				</tr>
				<tr>
					<td>Venta total $</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'ventaTotalSemana',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'ventaTotalSemana'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'ventaTotalMes',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'ventaTotalMes'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'ventaTotalMeta',array('size'=>60,'maxlength'=>100, 'class' => 'input-mini', 'disabled' => 'disabled')); ?>
								<?php echo $form->error($model,'ventaTotalMeta'); ?>
							</div>
						</div>
					</td>					
				</tr>
				<tr>
					<td>Venta M2</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'ventaM2Semana',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'ventaM2Semana'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'ventaM2Mes',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'ventaM2Mes'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'ventaM2Meta',array('size'=>60,'maxlength'=>100, 'class' => 'input-mini', 'disabled' => 'disabled')); ?>
								<?php echo $form->error($model,'ventaM2Meta'); ?>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>PNPV</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'pnpvSemana',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'pnpvSemana'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'pnpvMes',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'pnpvMes'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'pnpvMeta',array('size'=>60,'maxlength'=>100, 'class' => 'input-mini', 'disabled' => 'disabled')); ?>
								<?php echo $form->error($model,'pnpvMeta'); ?>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>% Abisa</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'porcentajeAbisaSemana',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'porcentajeAbisaSemana'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'porcentajeAbisaMes',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'porcentajeAbisaMes'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'porcentajeAvisaMeta',array('size'=>60,'maxlength'=>100, 'class' => 'input-mini', 'disabled' => 'disabled')); ?>
								<?php echo $form->error($model,'porcentajeAvisaMeta'); ?>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>Descuento %</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'descPorcentajeSemana',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'descPorcentajeSemana'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'descPorcentajeMes',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'descPorcentajeMes'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'descPorcentajeMeta',array('size'=>60,'maxlength'=>100, 'class' => 'input-mini', 'disabled' => 'disabled')); ?>
								<?php echo $form->error($model,'descPorcentajeMeta'); ?>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="span12">
			<div class="breadcrumb">
				<h4>III. Potencial de Ventas</h4>	
				<?php 
				$res["numero"] = 3;
			  	$res["titulo"] = "Descripción";
			  	$res["descripcion"] = '"En esta Sección se mostrará una proyección de los resultados futuros a corto (Operaciones por Facturar) y mediano y largo plazo (Oportunidades Top 10” Nota: Una Operación sólo puede estar reportada como Oportunidad Top 10 o como Operación por Facturar, no en ambas." <br/><br/>
F: "Se pide relacionar únicamente las 10 Obras o Proyectos más importantes desde el punto de vista Potencial de Venta en Pesos o M2, y en los cuales tenemos oportunidad de Vender; siendo relevante contar con los datos que pide el Reporte."<br/><br/>
Oportunidades por Facturar: "Se pide relacionar únicamente las Obras o Proyectos que estemos por facturar en el Mes que transcurre, es muy importante llenar todos los datos que se piden, particularmente con el importe el mismo Reporte realizará una Proyección de Cierre sumando los importes de las Oportunidades por Facturar a lo Reportado en la Sección II como Venta Total $"<br/><br/>
Importe: Expresado en Miles de Pesos. Ejemplos: 1, 200,000=1,200 / 120,000= 120 / 15,000=15';
			  	$this->renderPartial("ayuda", array("res" => $res)); 
			  	?>				
			</div>
		</div>
	   <div class="span8">
	   		<div class="breadcrumb">	   			
				  <h4>Oportunidades Top 10 </h4>
				
			</div>
		   <table class="table table-condensed table-striped table-hover table-bordered">
			   <tr>
				   <th>Descripción de la Operación</th>
				   <th>Cliente</th>
				   <th>Folio obra <br/><br/>| Ppto</th>
				   <th>Importe</th>
				   <th>Fecha cierre</th>
			   </tr>			   
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'oportunidad1',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'oportunidad1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'cliente1',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'cliente1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'folioObra1',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'folioObra1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeVenta1',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeVenta1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaCierre1_f!='') 
									$model->fechaCierre1_f=date('Y-m-d',strtotime($model->fechaCierre1_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaCierre1_f',
                               'value'=>$model->fechaCierre1_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaCierre1_f'); ?>
							</div>
						</div>
				   </td>			   	
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'oportunidad2',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'oportunidad2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'cliente2',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'cliente2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'folioObra2',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'folioObra2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeVenta2',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeVenta2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaCierre2_f!='') 
									$model->fechaCierre2_f=date('Y-m-d',strtotime($model->fechaCierre2_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaCierre2_f',
                               'value'=>$model->fechaCierre2_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaCierre2_f'); ?>
							</div>
						</div>
				   </td>			   	
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'oportunidad3',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'oportunidad3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'cliente3',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'cliente3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'folioObra3',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'folioObra3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeVenta3',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeVenta3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaCierre3_f!='') 
									$model->fechaCierre3_f=date('Y-m-d',strtotime($model->fechaCierre3_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaCierre3_f',
                               'value'=>$model->fechaCierre3_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaCierre3_f'); ?>
							</div>
						</div>
				   </td>			   	
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'oportunidad4',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'oportunidad4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'cliente4',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'cliente4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'folioObra4',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'folioObra4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeVenta4',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeVenta4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaCierre4_f!='') 
									$model->fechaCierre4_f=date('Y-m-d',strtotime($model->fechaCierre4_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaCierre4_f',
                               'value'=>$model->fechaCierre4_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaCierre4_f'); ?>
							</div>
						</div>
				   </td>			   	
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'oportunidad5',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'oportunidad5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'cliente5',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'cliente5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'folioObra5',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'folioObra5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeVenta5',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeVenta5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaCierre5_f!='') 
									$model->fechaCierre5_f=date('Y-m-d',strtotime($model->fechaCierre5_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaCierre5_f',
                               'value'=>$model->fechaCierre5_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaCierre5_f'); ?>
							</div>
						</div>
				   </td>			   	
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'oportunidad6',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'oportunidad6'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'cliente6',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'cliente6'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'folioObra6',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'folioObra6'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeVenta6',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeVenta6'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaCierre6_f!='') 
									$model->fechaCierre6_f=date('Y-m-d',strtotime($model->fechaCierre6_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaCierre6_f',
                               'value'=>$model->fechaCierre6_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaCierre6_f'); ?>
							</div>
						</div>
				   </td>			   	
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'oportunidad7',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'oportunidad7'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'cliente7',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'cliente7'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'folioObra7',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'folioObra7'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeVenta7',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeVenta7'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaCierre7_f!='') 
									$model->fechaCierre7_f=date('Y-m-d',strtotime($model->fechaCierre7_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaCierre7_f',
                               'value'=>$model->fechaCierre7_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaCierre7_f'); ?>
							</div>
						</div>
				   </td>			   	
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'oportunidad8',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'oportunidad8'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'cliente8',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'cliente8'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'folioObra8',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'folioObra8'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeVenta8',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeVenta8'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaCierre8_f!='') 
									$model->fechaCierre8_f=date('Y-m-d',strtotime($model->fechaCierre8_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaCierre8_f',
                               'value'=>$model->fechaCierre8_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaCierre8_f'); ?>
							</div>
						</div>
				   </td>			   	
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'oportunidad9',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'oportunidad9'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'cliente9',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'cliente9'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'folioObra9',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'folioObra9'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeVenta9',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeVenta9'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaCierre9_f!='') 
									$model->fechaCierre9_f=date('Y-m-d',strtotime($model->fechaCierre9_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaCierre9_f',
                               'value'=>$model->fechaCierre9_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaCierre9_f'); ?>
							</div>
						</div>
				   </td>			   	
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'oportunidad10',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'oportunidad10'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'cliente10',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'cliente10'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'folioObra10',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'folioObra10'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeVenta10',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeVenta10'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaCierre10_f!='') 
									$model->fechaCierre10_f=date('Y-m-d',strtotime($model->fechaCierre10_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaCierre10_f',
                               'value'=>$model->fechaCierre10_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
							   'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaCierre10_f'); ?>
							</div>
						</div>
				   </td>			   	
			   </tr>
		   </table>
	   </div>
	   <div class="span4">
	   		<div class="breadcrumb">
				<h4>Operaciones por Facturar</h4>
			</div>
			<table class="table table-striped table-condensed table-hover table-bordered">
				<tr>
					<th class="span1">Folio Obra | Ppto</th>
					<th>Descripción de la Operación</th>
					<th>Importe</th>
				</tr>
				<tr>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'numeroSinter1',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'numeroSinter1'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'descripcionObra1',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'descripcionObra1'); ?>
							</div>
						</div>
					</td>
					<td>						
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeFactura1',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeFactura1'); ?>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'numeroSinter2',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'numeroSinter2'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'descripcionObra2',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'descripcionObra2'); ?>
							</div>
						</div>
					</td>
					<td>						
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeFactura2',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeFactura2'); ?>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'numeroSinter3',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'numeroSinter3'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'descripcionObra3',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'descripcionObra3'); ?>
							</div>
						</div>
					</td>
					<td>						
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeFactura3',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeFactura3'); ?>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'numeroSinter4',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'numeroSinter4'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'descripcionObra4',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'descripcionObra4'); ?>
							</div>
						</div>
					</td>
					<td>						
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeFactura4',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeFactura4'); ?>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'numeroSinter5',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'numeroSinter5'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'descripcionObra5',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'descripcionObra5'); ?>
							</div>
						</div>
					</td>
					<td>						
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeFactura5',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeFactura5'); ?>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'numeroSinter6',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'numeroSinter6'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'descripcionObra6',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'descripcionObra6'); ?>
							</div>
						</div>
					</td>
					<td>						
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeFactura6',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeFactura6'); ?>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'numeroSinter7',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'numeroSinter7'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'descripcionObra7',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'descripcionObra7'); ?>
							</div>
						</div>
					</td>
					<td>						
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeFactura7',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeFactura7'); ?>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'numeroSinter8',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'numeroSinter8'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'descripcionObra8',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'descripcionObra8'); ?>
							</div>
						</div>
					</td>
					<td>						
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeFactura8',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeFactura8'); ?>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'numeroSinter9',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'numeroSinter9'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'descripcionObra9',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'descripcionObra9'); ?>
							</div>
						</div>
					</td>
					<td>						
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeFactura9',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeFactura9'); ?>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'numeroSinter10',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'numeroSinter10'); ?>
							</div>
						</div>
					</td>
					<td>
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'descripcionObra10',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'descripcionObra10'); ?>
							</div>
						</div>
					</td>
					<td>						
						<div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'importeFactura10',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'importeFactura10'); ?>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<hr>	
	<div class="row">
	   <div class="span12">
	   		<div class="breadcrumb">
			  <h4>IV. Administración de Clientes</h4>
			  <?php 
				$res["numero"] = 4;
			  	$res["titulo"] = "Descripción";
			  	$res["descripcion"] = '"En esta Sección se presenta un recuento de lo realizado en una de las Actividades más importantes en Ventas, la atención a Clientes actuales o frecuentes y el de la búsqueda de nuevos Clientes o la llamada Prospección de Clientes."<br/><br/>
	Frecuentes: "Se pide relacionar a las personas que son o que representan a la Empresa que consideramos nuestro Cliente Frecuente y a las cuales visitamos en su Oficina, Obra o lugar de trabajo, describiendo la fecha en la cual interactuamos, el resultado de valor de la Visita y la fecha de la siguiente Visita."<br/><br/>
	Prospectos (Nuevos): "Se pide relacionar a las personas que son o que representan a la Empresa que consideramos puede llegar a ser un Cliente importante ($) y frecuente, y a los cuales visitamos en su Oficina, Obra o lugar de trabajo, describiendo la fecha en la cual interactuamos, el resultado de valor de la Visita y la fecha de la siguiente Visita"';
			  	$this->renderPartial("ayuda", array("res" => $res)); 
		  	?>
			</div>
			<div class="breadcrumb">
			  <h4>Frecuentes (Asignados)</h4>
			</div>	
		   <table class="table table-condensed table-striped table-hover table-bordered">
			   <tr>
				   <th>Nombre o RS</th>
				   <th>Contacto</th>
				   <th>Puesto</th>
				   <th>Fecha Contacto</th>
				   <th>Tipo Contacto</th>
				   <th>Resultado</th>
				   <th>Fecha Sig. contacto</th>
			   </tr>			   
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreClienteVisitado1',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreClienteVisitado1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contacto1',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contacto1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puesto1',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puesto1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisita1_f!='') 
									$model->fechaVisita1_f=date('Y-m-d',strtotime($model->fechaVisita1_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisita1_f',
                               'value'=>$model->fechaVisita1_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisita1_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContacto1',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContacto1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultado1',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultado1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisita1_f!='') 
									$model->fechaProximaVisita1_f=date('Y-m-d',strtotime($model->fechaProximaVisita1_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisita1_f',
                               'value'=>$model->fechaProximaVisita1_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisita1_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreClienteVisitado2',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreClienteVisitado2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contacto2',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contacto2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puesto2',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puesto2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisita2_f!='') 
									$model->fechaVisita2_f=date('Y-m-d',strtotime($model->fechaVisita2_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisita2_f',
                               'value'=>$model->fechaVisita2_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisita2_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContacto2',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContacto2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultado2',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultado2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisita2_f!='') 
									$model->fechaProximaVisita2_f=date('Y-m-d',strtotime($model->fechaProximaVisita2_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisita2_f',
                               'value'=>$model->fechaProximaVisita2_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisita2_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreClienteVisitado3',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreClienteVisitado3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contacto3',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contacto3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puesto3',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puesto3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisita3_f!='') 
									$model->fechaVisita3_f=date('Y-m-d',strtotime($model->fechaVisita3_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisita3_f',
                               'value'=>$model->fechaVisita3_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisita3_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContacto3',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContacto3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultado3',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultado3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisita3_f!='') 
									$model->fechaProximaVisita3_f=date('Y-m-d',strtotime($model->fechaProximaVisita3_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisita3_f',
                               'value'=>$model->fechaProximaVisita3_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisita3_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreClienteVisitado4',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreClienteVisitado4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contacto4',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contacto4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puesto4',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puesto4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisita4_f!='') 
									$model->fechaVisita4_f=date('Y-m-d',strtotime($model->fechaVisita4_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisita4_f',
                               'value'=>$model->fechaVisita4_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisita4_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContacto4',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContacto4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultado4',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultado4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisita4_f!='') 
									$model->fechaProximaVisita4_f=date('Y-m-d',strtotime($model->fechaProximaVisita4_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisita4_f',
                               'value'=>$model->fechaProximaVisita4_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisita4_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreClienteVisitado5',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreClienteVisitado5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contacto5',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contacto5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puesto5',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puesto5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisita5_f!='') 
									$model->fechaVisita5_f=date('Y-m-d',strtotime($model->fechaVisita5_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisita5_f',
                               'value'=>$model->fechaVisita5_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisita5_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContacto5',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContacto5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultado5',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultado5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisita5_f!='') 
									$model->fechaProximaVisita5_f=date('Y-m-d',strtotime($model->fechaProximaVisita5_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisita5_f',
                               'value'=>$model->fechaProximaVisita5_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisita5_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreClienteVisitado6',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreClienteVisitado6'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contacto6',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contacto6'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puesto6',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puesto6'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisita6_f!='') 
									$model->fechaVisita6_f=date('Y-m-d',strtotime($model->fechaVisita6_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisita6_f',
                               'value'=>$model->fechaVisita6_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisita6_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContacto6',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContacto6'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultado6',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultado6'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisita6_f!='') 
									$model->fechaProximaVisita6_f=date('Y-m-d',strtotime($model->fechaProximaVisita6_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisita6_f',
                               'value'=>$model->fechaProximaVisita6_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisita6_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreClienteVisitado7',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreClienteVisitado7'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contacto7',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contacto7'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puesto7',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puesto7'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisita7_f!='') 
									$model->fechaVisita7_f=date('Y-m-d',strtotime($model->fechaVisita7_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisita7_f',
                               'value'=>$model->fechaVisita7_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisita7_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContacto7',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContacto7'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultado7',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultado7'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisita7_f!='') 
									$model->fechaProximaVisita7_f=date('Y-m-d',strtotime($model->fechaProximaVisita7_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisita7_f',
                               'value'=>$model->fechaProximaVisita7_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisita7_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreClienteVisitado8',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreClienteVisitado8'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contacto8',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contacto8'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puesto8',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puesto8'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisita8_f!='') 
									$model->fechaVisita8_f=date('Y-m-d',strtotime($model->fechaVisita8_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisita8_f',
                               'value'=>$model->fechaVisita8_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisita8_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContacto8',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContacto8'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultado8',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultado8'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisita8_f!='') 
									$model->fechaProximaVisita8_f=date('Y-m-d',strtotime($model->fechaProximaVisita8_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisita8_f',
                               'value'=>$model->fechaProximaVisita8_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisita8_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreClienteVisitado9',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreClienteVisitado9'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contacto9',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contacto9'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puesto9',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puesto9'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisita9_f!='') 
									$model->fechaVisita9_f=date('Y-m-d',strtotime($model->fechaVisita9_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisita9_f',
                               'value'=>$model->fechaVisita9_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisita9_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContacto9',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContacto9'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultado9',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultado9'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisita9_f!='') 
									$model->fechaProximaVisita9_f=date('Y-m-d',strtotime($model->fechaProximaVisita9_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisita9_f',
                               'value'=>$model->fechaProximaVisita9_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisita9_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreClienteVisitado10',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreClienteVisitado10'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contacto10',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contacto10'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puesto10',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puesto10'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisita10_f!='') 
									$model->fechaVisita10_f=date('Y-m-d',strtotime($model->fechaVisita10_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisita10_f',
                               'value'=>$model->fechaVisita10_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisita10_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContacto10',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContacto10'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultado10',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultado10'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisita10_f!='') 
									$model->fechaProximaVisita10_f=date('Y-m-d',strtotime($model->fechaProximaVisita10_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisita10_f',
                               'value'=>$model->fechaProximaVisita10_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisita10_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
		   </table>
		   <div class="breadcrumb">
			  <h4>Prospectos (Nuevos)</h4>
			</div>	
		   <table class="table table-condensed table-striped table-hover table-bordered">
			   <tr>
				   <th>Nombre o RS</th>
				   <th>Contacto</th>
				   <th>Puesto</th>
				   <th>Fecha Contacto</th>
				   <th>Tipo Contacto</th>
				   <th>Resultado</th>
				   <th>Fecha Sig. contacto</th>
			   </tr>			   
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreProspectoNuevo1',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreProspectoNuevo1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contactoProspectoNuevo1',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contactoProspectoNuevo1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puestoProspectoNuevo1',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puestoProspectoNuevo1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisitaProspectoNuevo1_f!='') 
									$model->fechaVisitaProspectoNuevo1_f=date('Y-m-d',strtotime($model->fechaVisitaProspectoNuevo1_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisitaProspectoNuevo1_f',
                               'value'=>$model->fechaVisitaProspectoNuevo1_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisitaProspectoNuevo1_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContactoProspectoNuevo1',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContactoProspectoNuevo1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultadoProspectoNuevo1',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultadoProspectoNuevo1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisitaProspectoNuevo1_f!='') 
									$model->fechaProximaVisitaProspectoNuevo1_f=date('Y-m-d',strtotime($model->fechaProximaVisitaProspectoNuevo1_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisitaProspectoNuevo1_f',
                               'value'=>$model->fechaProximaVisitaProspectoNuevo1_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisitaProspectoNuevo1_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreProspectoNuevo2',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreProspectoNuevo2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contactoProspectoNuevo2',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contactoProspectoNuevo2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puestoProspectoNuevo2',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puestoProspectoNuevo2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisitaProspectoNuevo2_f!='') 
									$model->fechaVisitaProspectoNuevo2_f=date('Y-m-d',strtotime($model->fechaVisitaProspectoNuevo2_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisitaProspectoNuevo2_f',
                               'value'=>$model->fechaVisitaProspectoNuevo2_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisitaProspectoNuevo2_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContactoProspectoNuevo2',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContactoProspectoNuevo2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultadoProspectoNuevo2',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultadoProspectoNuevo2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisitaProspectoNuevo2_f!='') 
									$model->fechaProximaVisitaProspectoNuevo2_f=date('Y-m-d',strtotime($model->fechaProximaVisitaProspectoNuevo2_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisitaProspectoNuevo2_f',
                               'value'=>$model->fechaProximaVisitaProspectoNuevo2_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisitaProspectoNuevo2_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreProspectoNuevo3',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreProspectoNuevo3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contactoProspectoNuevo3',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contactoProspectoNuevo3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puestoProspectoNuevo3',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puestoProspectoNuevo3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisitaProspectoNuevo3_f!='') 
									$model->fechaVisitaProspectoNuevo3_f=date('Y-m-d',strtotime($model->fechaVisitaProspectoNuevo3_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisitaProspectoNuevo3_f',
                               'value'=>$model->fechaVisitaProspectoNuevo3_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisitaProspectoNuevo3_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContactoProspectoNuevo3',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContactoProspectoNuevo3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultadoProspectoNuevo3',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultadoProspectoNuevo3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisitaProspectoNuevo3_f!='') 
									$model->fechaProximaVisitaProspectoNuevo3_f=date('Y-m-d',strtotime($model->fechaProximaVisitaProspectoNuevo3_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisitaProspectoNuevo3_f',
                               'value'=>$model->fechaProximaVisitaProspectoNuevo3_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisitaProspectoNuevo3_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreProspectoNuevo4',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreProspectoNuevo4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contactoProspectoNuevo4',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contactoProspectoNuevo4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puestoProspectoNuevo4',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puestoProspectoNuevo4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisitaProspectoNuevo4_f!='') 
									$model->fechaVisitaProspectoNuevo4_f=date('Y-m-d',strtotime($model->fechaVisitaProspectoNuevo4_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisitaProspectoNuevo4_f',
                               'value'=>$model->fechaVisitaProspectoNuevo4_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisitaProspectoNuevo4_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContactoProspectoNuevo4',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContactoProspectoNuevo4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultadoProspectoNuevo4',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultadoProspectoNuevo4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisitaProspectoNuevo4_f!='') 
									$model->fechaProximaVisitaProspectoNuevo4_f=date('Y-m-d',strtotime($model->fechaProximaVisitaProspectoNuevo4_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisitaProspectoNuevo4_f',
                               'value'=>$model->fechaProximaVisitaProspectoNuevo4_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisitaProspectoNuevo4_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreProspectoNuevo5',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreProspectoNuevo5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contactoProspectoNuevo5',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contactoProspectoNuevo5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puestoProspectoNuevo5',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puestoProspectoNuevo5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisitaProspectoNuevo5_f!='') 
									$model->fechaVisitaProspectoNuevo5_f=date('Y-m-d',strtotime($model->fechaVisitaProspectoNuevo5_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisitaProspectoNuevo5_f',
                               'value'=>$model->fechaVisitaProspectoNuevo5_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisitaProspectoNuevo5_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContactoProspectoNuevo5',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContactoProspectoNuevo5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultadoProspectoNuevo5',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultadoProspectoNuevo5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisitaProspectoNuevo5_f!='') 
									$model->fechaProximaVisitaProspectoNuevo5_f=date('Y-m-d',strtotime($model->fechaProximaVisitaProspectoNuevo5_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisitaProspectoNuevo5_f',
                               'value'=>$model->fechaProximaVisitaProspectoNuevo5_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisitaProspectoNuevo5_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreProspectoNuevo6',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreProspectoNuevo6'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contactoProspectoNuevo6',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contactoProspectoNuevo6'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puestoProspectoNuevo6',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puestoProspectoNuevo6'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisitaProspectoNuevo6_f!='') 
									$model->fechaVisitaProspectoNuevo6_f=date('Y-m-d',strtotime($model->fechaVisitaProspectoNuevo6_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisitaProspectoNuevo6_f',
                               'value'=>$model->fechaVisitaProspectoNuevo6_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisitaProspectoNuevo6_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContactoProspectoNuevo6',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContactoProspectoNuevo6'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultadoProspectoNuevo6',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultadoProspectoNuevo6'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisitaProspectoNuevo6_f!='') 
									$model->fechaProximaVisitaProspectoNuevo6_f=date('Y-m-d',strtotime($model->fechaProximaVisitaProspectoNuevo6_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisitaProspectoNuevo6_f',
                               'value'=>$model->fechaProximaVisitaProspectoNuevo6_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisitaProspectoNuevo6_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreProspectoNuevo7',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreProspectoNuevo7'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contactoProspectoNuevo7',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contactoProspectoNuevo7'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puestoProspectoNuevo7',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puestoProspectoNuevo7'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisitaProspectoNuevo7_f!='') 
									$model->fechaVisitaProspectoNuevo7_f=date('Y-m-d',strtotime($model->fechaVisitaProspectoNuevo7_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisitaProspectoNuevo7_f',
                               'value'=>$model->fechaVisitaProspectoNuevo7_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisitaProspectoNuevo7_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContactoProspectoNuevo7',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContactoProspectoNuevo7'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultadoProspectoNuevo7',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultadoProspectoNuevo7'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisitaProspectoNuevo7_f!='') 
									$model->fechaProximaVisitaProspectoNuevo7_f=date('Y-m-d',strtotime($model->fechaProximaVisitaProspectoNuevo7_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisitaProspectoNuevo7_f',
                               'value'=>$model->fechaProximaVisitaProspectoNuevo7_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisitaProspectoNuevo10_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreProspectoNuevo8',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreProspectoNuevo8'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contactoProspectoNuevo8',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contactoProspectoNuevo8'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puestoProspectoNuevo8',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puestoProspectoNuevo8'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisitaProspectoNuevo8_f!='') 
									$model->fechaVisitaProspectoNuevo8_f=date('Y-m-d',strtotime($model->fechaVisitaProspectoNuevo8_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisitaProspectoNuevo8_f',
                               'value'=>$model->fechaVisitaProspectoNuevo8_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisitaProspectoNuevo8_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContactoProspectoNuevo8',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContactoProspectoNuevo8'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultadoProspectoNuevo8',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultadoProspectoNuevo8'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisitaProspectoNuevo8_f!='') 
									$model->fechaProximaVisitaProspectoNuevo8_f=date('Y-m-d',strtotime($model->fechaProximaVisitaProspectoNuevo8_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisitaProspectoNuevo8_f',
                               'value'=>$model->fechaProximaVisitaProspectoNuevo8_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisitaProspectoNuevo8_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreProspectoNuevo9',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreProspectoNuevo9'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contactoProspectoNuevo9',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contactoProspectoNuevo9'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puestoProspectoNuevo9',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puestoProspectoNuevo9'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisitaProspectoNuevo9_f!='') 
									$model->fechaVisitaProspectoNuevo9_f=date('Y-m-d',strtotime($model->fechaVisitaProspectoNuevo9_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisitaProspectoNuevo9_f',
                               'value'=>$model->fechaVisitaProspectoNuevo9_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisitaProspectoNuevo9_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContactoProspectoNuevo9',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContactoProspectoNuevo9'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultadoProspectoNuevo9',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultadoProspectoNuevo9'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisitaProspectoNuevo9_f!='') 
									$model->fechaProximaVisitaProspectoNuevo9_f=date('Y-m-d',strtotime($model->fechaProximaVisitaProspectoNuevo9_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisitaProspectoNuevo9_f',
                               'value'=>$model->fechaProximaVisitaProspectoNuevo9_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisitaProspectoNuevo9_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'nombreProspectoNuevo10',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'nombreProspectoNuevo10'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'contactoProspectoNuevo10',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'contactoProspectoNuevo10'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'puestoProspectoNuevo10',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'puestoProspectoNuevo10'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaVisitaProspectoNuevo10_f!='') 
									$model->fechaVisitaProspectoNuevo10_f=date('Y-m-d',strtotime($model->fechaVisitaProspectoNuevo10_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaVisitaProspectoNuevo10_f',
                               'value'=>$model->fechaVisitaProspectoNuevo10_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaVisitaProspectoNuevo10_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'tipoContactoProspectoNuevo10',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'tipoContactoProspectoNuevo10'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'resultadoProspectoNuevo10',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'resultadoProspectoNuevo10'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaProximaVisitaProspectoNuevo10_f!='') 
									$model->fechaProximaVisitaProspectoNuevo10_f=date('Y-m-d',strtotime($model->fechaProximaVisitaProspectoNuevo10_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaProximaVisitaProspectoNuevo10_f',
                               'value'=>$model->fechaProximaVisitaProspectoNuevo10_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaProximaVisitaProspectoNuevo10_f'); ?>
							</div>
						</div>
				   </td>
			   </tr>
		   </table>
	   </div>	   
	</div>
	<hr>
	<div class="row">
	   <div class="span12">
	   		<div class="breadcrumb">
			  <h4>V. Administración de Obras</h4>
			  <?php 
				$res["numero"] = 5;
			  	$res["titulo"] = "Descripción";
			  	$res["descripcion"] = '"En esta Sección se presenta un recuento de lo realizado en otra de las Actividades más importantes en Ventas para nuestro giro, la detección de Obras o Proyectos en proceso en nuestra Ciudad o área geográfica bajo nuestra responsabilidad."<br/><br/>
"Aquí se pide relacionar las Avenidas, Colonias o Zonas que recorrimos durante la Semana o caso contrario se pide relacionar a los Clientes Frecuentes o Prospectos a través de los cuales detectamos una o más Oportunidades de Venta (Obras o Proyectos), se pide registrar en SINTER dichas obras por lo que se solicita el Folio de la Obra"."<br/><br/> 
Observaciones y Comentarios: “Aquí se plasma información relevante que clarifique o brinde mayor información a la zona u Obras identificadas” Ejemplo de Observaciones y Comentarios: “Esta zona esta recorrida al 100%” “En esta Avenida existen más de 4 Plazas Comerciales” “Este Cliente tiene 5 Proyectos en proceso” “La obra VCCU710 es un Proyecto de 5 mil m2"';
			  	$this->renderPartial("ayuda", array("res" => $res)); 
		  	?>
			</div>	
		   <table class="table table-condensed table-striped table-hover table-bordered">
			   <tr>
				   <th>Avenida, Colonia o Zona Recorrida</th>
				   <th>Cliente Frecuente</th>
				   <th>Cantidad de Obras Identif.</th>
				   <th>Fecha de Recorrido o Identif.</th>
				   <th>Observaciones y Comentarios</th>
				   <th>Folios Sinter</th>
			   </tr>			   
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'zonaRecorrida1',array('size'=>60,'maxlength'=>100, 'class' => 'span3')); ?>
								<?php echo $form->error($model,'zonaRecorrida1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'clienteFrecuente1',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'clienteFrecuente1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'cantidadObras1',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'cantidadObras1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaRecorrido1_f!='') 
									$model->fechaRecorrido1_f=date('Y-m-d',strtotime($model->fechaRecorrido1_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaRecorrido1_f',
                               'value'=>$model->fechaRecorrido1_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaRecorrido1_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'observacionesObra1',array('size'=>60,'maxlength'=>100, 'class' => 'span4')); ?>
								<?php echo $form->error($model,'observacionesObra1'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'folioSinter1',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'folioSinter1'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'zonaRecorrida2',array('size'=>60,'maxlength'=>100, 'class' => 'span3')); ?>
								<?php echo $form->error($model,'zonaRecorrida2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'clienteFrecuente2',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'clienteFrecuente2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'cantidadObras2',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'cantidadObras2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaRecorrido2_f!='') 
									$model->fechaRecorrido2_f=date('Y-m-d',strtotime($model->fechaRecorrido2_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaRecorrido2_f',
                               'value'=>$model->fechaRecorrido2_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaRecorrido2_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'observacionesObra2',array('size'=>60,'maxlength'=>100, 'class' => 'span4')); ?>
								<?php echo $form->error($model,'observacionesObra2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'folioSinter2',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'folioSinter2'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'zonaRecorrida3',array('size'=>60,'maxlength'=>100, 'class' => 'span3')); ?>
								<?php echo $form->error($model,'zonaRecorrida3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'clienteFrecuente3',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'clienteFrecuente3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'cantidadObras3',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'cantidadObras3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaRecorrido3_f!='') 
									$model->fechaRecorrido3_f=date('Y-m-d',strtotime($model->fechaRecorrido3_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaRecorrido3_f',
                               'value'=>$model->fechaRecorrido3_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaRecorrido3_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'observacionesObra3',array('size'=>60,'maxlength'=>100, 'class' => 'span4')); ?>
								<?php echo $form->error($model,'observacionesObra3'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'folioSinter3',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'folioSinter3'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'zonaRecorrida4',array('size'=>60,'maxlength'=>100, 'class' => 'span3')); ?>
								<?php echo $form->error($model,'zonaRecorrida4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'clienteFrecuente4',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'clienteFrecuente4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'cantidadObras4',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'cantidadObras4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaRecorrido4_f!='') 
									$model->fechaRecorrido4_f=date('Y-m-d',strtotime($model->fechaRecorrido4_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaRecorrido4_f',
                               'value'=>$model->fechaRecorrido4_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaRecorrido4_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'observacionesObra4',array('size'=>60,'maxlength'=>100, 'class' => 'span4')); ?>
								<?php echo $form->error($model,'observacionesObra4'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'folioSinter4',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'folioSinter4'); ?>
							</div>
						</div>
				   </td>
			   </tr>
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'zonaRecorrida5',array('size'=>60,'maxlength'=>100, 'class' => 'span3')); ?>
								<?php echo $form->error($model,'zonaRecorrida5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'clienteFrecuente5',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'clienteFrecuente5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'cantidadObras5',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'cantidadObras5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php
								if ($model->fechaRecorrido5_f!='') 
									$model->fechaRecorrido5_f=date('Y-m-d',strtotime($model->fechaRecorrido5_f));
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                               'model'=>$model,
                               'attribute'=>'fechaRecorrido5_f',
                               'value'=>$model->fechaRecorrido5_f,
                               'language' => 'es',
                               'htmlOptions' => array('readonly'=>"", 'class' => 'span1'),
                              'options'=> array(
									'dateFormat'=>'yy-mm-dd', 
									'altFormat'=>'yy-mm-dd', 
									'changeMonth'=>'true', 
									'changeYear'=>'true', 
									'yearRange'=>'2012:2014', 
									'showOn'=>'both',
									'buttonText'=>'<i class="icon-calendar"></i>'
																		),)); ?>			
							<?php echo $form->error($model,'fechaRecorrido5_f'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'observacionesObra5',array('size'=>60,'maxlength'=>100, 'class' => 'span4')); ?>
								<?php echo $form->error($model,'observacionesObra5'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'folioSinter5',array('size'=>60,'maxlength'=>100, 'class' => 'span1')); ?>
								<?php echo $form->error($model,'folioSinter5'); ?>
							</div>
						</div>
				   </td>
			   </tr>
		   </table>
	   </div>	   
	</div>	
	<hr>
	<div class="row">
		<div class="span12">
			<div class="breadcrumb">
			  <h4>VI. Obras, Presupuestos, Potenciales y Seguimiento en Sinter</h4>
			  <?php 
			  	$res["numero"] = 6;
			  	$res["titulo"] = "Descripción";
			  	$res["descripcion"] = '"En esta sección se visualiza el potencial de venta futuro que tiene el Asesor, la Tienda o la Plaza, a través de la cantidad de Presupuestos elaborados o de Obras registradas."<br/><br/>
Presupuestos: "Aquí se pide: 1) capturar la cantidad y valor en Pesos de los Presupuestos elaborados en los últimos 3 meses incluyendo lo transcurrido del mes actual considerándolo como Mes completo; 2) la información anterior pero solo de la Semana transcurrida y 3) capturar la cantidad y valor en Pesos de los pedidos pendientes de facturar a la fecha."<br/><br/>
Obras: "Aquí se pide: Capturar la cantidad y potencial en M2 de las Obras registradas en Sinter (sólo vigentes), el número total de eventos de seguimiento programados, la cantidad de los cuales están vencidos y por diferencia los que se encuentran por vencer."<br/><br/>
Regla de Seguimiento a Obras: "Cada Obra registrada en Sinter siempre debe de contar con un Evento de Seguimiento programado hasta su Cierre."<br/><br/>
Importe: Expresado en Miles de Pesos. Ejemplos: 1, 200,000=1,200 / 120,000= 120 / 15,000=15';
			  	$this->renderPartial("ayuda", array("res" => $res)); 
			  	?>
			</div>
		</div>
	   <div class="span12">
	   		<div class="breadcrumb">
			  <h4>Presupuestos</h4>
			</div>	
		   <table class="table table-condensed table-striped table-hover table-bordered">
			   <tr>
				   <th>Pptos Vigentes (U 90 D)</th>
				   <th>Importe</th>
				   <th>Pptos del periodo</th>
				   <th>Importe</th>
				   <th>Pedidos del periodo</th>
				   <th>Importe</th>
			   </tr>			   
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'presupuestoVigente',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'presupuestoVigente'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'presupuestoImporte',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'presupuestoImporte'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'presupuestoNuevaSemana',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'presupuestoNuevaSemana'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'presupuestoNuevaSemanaImporte',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'presupuestoNuevaSemanaImporte'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'presupuestoNuevoMes',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'presupuestoNuevoMes'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'presupuestoNuevoMesImporte', array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'presupuestoNuevoMesImporte'); ?>
							</div>
						</div>
				   </td>
			   </tr>			   
		   </table>
	   </div>	      
	</div>	
	<div class="row">
		<div class="span12">
	   		<div class="breadcrumb">
			  <h4>Obras</h4>
			</div>	
		   <table class="table table-condensed table-striped table-hover table-bordered">
			   <tr>
				   <th>Obras Vigente</th>
				   <th>Potencial M2</th>
				   <th>Eventos Prog.</th>
				   <th>Eventos Vencidos</th>
				   <th>Eventos por Vencer</th>
			   </tr>			   
			   <tr>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'obraVigente',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'obraVigente'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'obraPotencialM2',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'obraPotencialM2'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'obraEventoProg',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'obraEventoProg'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'obraEventoVencido',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'obraEventoVencido'); ?>
							</div>
						</div>
				   </td>
				   <td>
					   <div class="<?php echo 'control-group'; ?>">
							<div class="controls">
								<?php echo $form->textField($model,'obraEventoPorVencer',array('size'=>60,'maxlength'=>100, 'class' => 'span2')); ?>
								<?php echo $form->error($model,'obraEventoPorVencer'); ?>
							</div>
						</div>
				   </td>
			   </tr>			   
		   </table>
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
