<?php
$this->pageCaption='';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Reporte'=>array('index'),
	$model->id,
);

$usuarioActual = Usuario::model()->find("usuario = '" . Yii::app()->user->name . "'");

if($usuarioActual->tipoUsuario_did == 1)
{
	$this->menu=array(
		array('label'=>'Volver','url'=>array('indexgerente')),
		array('label'=>'Imprimir','url'=>array('imprimir', "id" => $_GET["id"])),
	);

}
else
{
	$this->menu=array(
		array('label'=>'Volver','url'=>array('index')),
		array('label'=>'Imprimir','url'=>array('imprimir', "id" => $_GET["id"])),
	);
}
?>

<div class="row">
	<div class="span12">
		<div class="breadcrumb">
			<h4>I. Generales</h4>					
		</div>		
	</div>
	<div class="span6">		
		<table class="table table-striped table-condensed table-bordered">			
			<tbody>
				<tr>
					<td><strong>Fecha Inicial</strong></td>
					<td><?php echo $model->fechaReporteInicio_f; ?></td>
					<td><strong>Fecha Final</strong></td>
					<td><?php echo $model->fechaReporteFin_f; ?></td>
				</tr>
			</tbody>
		</table>		
	</div>
	<div class="span6"></div>
	<div class="span12">
		<table class="table table-striped table-condensed table-bordered">			
			<tbody>
				<tr>
					<td><strong>Nombre</strong></td>
					<td><?php echo $model->usuario->nombre; ?></td>
					<td><strong>Plaza</strong></td>
					<td><?php echo $model->plaza; ?></td>
					<td><strong>Compañía</strong></td>
					<td><?php echo $model->compania; ?></td>
					<td><strong>Punto de Venta</strong></td>
					<td><?php echo $model->centroVenta; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="row">
	<div class="span12">
		<div class="breadcrumb">
		  <h4>II. Resultados al día</h4>
		</div>	
	</div>
	<div class="span12">
		<table class="table table-striped table-condensed table-hover table-bordered">
			<tr>
				<th>Indicadores</th>
				<th>Semana</th>
				<th>Mes</th>
				<th>Meta</th>
				<th>Alcance %</th>
				<th>x facturar (resto mes)</th>
				<th>Proy cierre</th>
				<th>Alcance %</th>
			</tr>
			<tr>
				<td>Venta total $</td>
				<td style="text-align:right">
					<?php echo number_format($model->ventaTotalSemana); ?>
				</td>
				<td style="text-align:right">
					<?php echo number_format($model->ventaTotalMes); ?>
				</td>
				<td style="text-align:right">
					<?php echo number_format($model->ventaTotalMeta); ?>
				</td>	
				<td style="text-align:right">
					<?php $ventaTotalTotal = ($model->ventaTotalMes / $model->ventaTotalMeta) * 100 . ' %'; 
						echo number_format($ventaTotalTotal) . ' %';
					?>
				</td>
				<td style="text-align:right"><?php
						$xFacturarVentaTotal =	$model->importeFactura1 +
												$model->importeFactura2 +
												$model->importeFactura3 +
												$model->importeFactura4 +
												$model->importeFactura5 +
												$model->importeFactura6 +
												$model->importeFactura7 +
												$model->importeFactura8 +
												$model->importeFactura9 +
												$model->importeFactura10; 
						echo number_format($xFacturarVentaTotal);?>
												
				</td>
				<td style="text-align:right">
					<?php $proyCierreTotal = $model->ventaTotalMes + $xFacturarVentaTotal; 
						echo number_format($proyCierreTotal);
					?>
				</td>
				<td style="text-align:right">
					<?php $porcVentaTotal = ($proyCierreTotal / $model->ventaTotalMeta) * 100;
						echo number_format($porcVentaTotal)  . ' %'; ?>
				</td>				
			</tr>
			<tr>
				<td>Venta m2</td>
				<td style="text-align:right">
					<?php echo number_format($model->ventaM2Semana); ?>
				</td>
				<td style="text-align:right">
					<?php echo number_format($model->ventaM2Mes); ?>
				</td>
				<td style="text-align:right">
					<?php echo number_format($model->ventaM2Meta); ?>
				</td>
				<td style="text-align:right">
					<?php $porcVentaM2 = ($model->ventaM2Mes / $model->ventaM2Meta) * 100;
						echo number_format($porcVentaM2)  . ' %'; ?>
				</td>	
				<td colspan="3" rowspan="4">
				</td>			
			</tr>
			<tr>
				<td>PNPV</td>
				<td style="text-align:right">
					<?php echo number_format($model->pnpvSemana); ?>
				</td>
				<td style="text-align:right">
					<?php echo number_format($model->pnpvMes); ?>
				</td>
				<td style="text-align:right">
					<?php echo number_format($model->pnpvMeta); ?>
				</td>
				<td style="text-align:right">
					<?php $porcPnpvMeta = ($model->pnpvMes / $model->pnpvMeta) * 100;
					echo number_format($porcPnpvMeta)  . ' %'; ?>
				</td>
				
			</tr>
			<tr>
				<td>% Abisa</td>
				<td style="text-align:right">
					<?php echo number_format($model->porcentajeAbisaSemana); ?>
				</td>
				<td style="text-align:right">
					<?php echo number_format($model->porcentajeAbisaMes); ?>
				</td>
				<td style="text-align:right">
					<?php echo number_format($model->porcentajeAvisaMeta); ?>
				</td>
				<td style="text-align:right">
					<?php $porcAvisa = ($model->porcentajeAbisaMes / $model->porcentajeAvisaMeta) * 100;
					echo number_format($porcAvisa)  . ' %'; ?>
				</td>
			</tr>
			<tr>
				<td>Desc. %</td>
				<td style="text-align:right">
					<?php echo number_format($model->descPorcentajeSemana); ?>
				</td>
				<td style="text-align:right">
					<?php echo number_format($model->descPorcentajeMes); ?>
				</td>
				<td style="text-align:right">
					<?php echo number_format($model->descPorcentajeMeta); ?>
				</td>
				<td style="text-align:right">
					<?php $porcDesc = ($model->descPorcentajeMes / $model->descPorcentajeMeta) * 100;
					echo number_format($porcDesc)  . ' %'; ?>
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="row">
	<div class="span12">
		<div class="breadcrumb">
			<h4>III. Potencial de Ventas</h4>					
		</div>
	</div>
   <div class="span8">
   		<div class="breadcrumb">
			<h4>Oportunidades Top 10</h4>					
		</div>
	   <table class="table table-condensed table-striped table-hover table-bordered">
		   <tr>
			   <th class="span2">Descripción de la Operación</th>
			   <th class="span3">Cliente</th>
			   <th class="span1">Folio</th>
			   <th class="span1">Importe</th>
			   <th class="span1">Fecha cierre</th>
		   </tr>			   
		   <tr>
			   <td>
					<?php echo $model->oportunidad1; ?>
			   </td>
			   <td>
					<?php echo $model->cliente1; ?>
			   </td>
			   <td>
					<?php echo $model->folioObra1; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->importeVenta1)) ? number_format($model->importeVenta1) : ""; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaCierre1_f) && $model->fechaCierre1_f != '0000-00-00') ? $model->fechaCierre1_f : ''; ?>
			   </td>			   	
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->oportunidad2; ?>
			   </td>
			   <td>
					<?php echo $model->cliente2; ?>
			   </td>
			   <td>
					<?php echo $model->folioObra2; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->importeVenta2)) ? number_format($model->importeVenta2) : ""; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaCierre2_f) && $model->fechaCierre2_f != '0000-00-00') ? $model->fechaCierre2_f : ''; ?>
			   </td>			   	
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->oportunidad3; ?>
			   </td>
			   <td>
					<?php echo $model->cliente3; ?>
			   </td>
			   <td>
					<?php echo $model->folioObra3; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->importeVenta3)) ? number_format($model->importeVenta3) : ""; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaCierre3_f) && $model->fechaCierre3_f != '0000-00-00') ? $model->fechaCierre3_f : ''; ?>
			   </td>			   	
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->oportunidad4; ?>
			   </td>
			   <td>
					<?php echo $model->cliente4; ?>
			   </td>
			   <td>
					<?php echo $model->folioObra4; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->importeVenta4)) ? number_format($model->importeVenta4) : ""; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaCierre4_f) && $model->fechaCierre4_f != '0000-00-00') ? $model->fechaCierre4_f : ''; ?>
			   </td>			   	
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->oportunidad5; ?>
			   </td>
			   <td>
					<?php echo $model->cliente5; ?>
			   </td>
			   <td>
					<?php echo $model->folioObra5; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->importeVenta5)) ? number_format($model->importeVenta5) : ""; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaCierre5_f) && $model->fechaCierre5_f != '0000-00-00') ? $model->fechaCierre5_f : ''; ?>
			   </td>			   	
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->oportunidad6; ?>
			   </td>
			   <td>
					<?php echo $model->cliente6; ?>
			   </td>
			   <td>
					<?php echo $model->folioObra6; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->importeVenta6)) ? number_format($model->importeVenta6) : ""; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaCierre6_f) && $model->fechaCierre6_f != '0000-00-00') ? $model->fechaCierre6_f : ''; ?>
			   </td>			   	
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->oportunidad7; ?>
			   </td>
			   <td>
					<?php echo $model->cliente7; ?>
			   </td>
			   <td>
					<?php echo $model->folioObra7; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->importeVenta7)) ? number_format($model->importeVenta7) : ""; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaCierre7_f) && $model->fechaCierre7_f != '0000-00-00') ? $model->fechaCierre7_f : ''; ?>
			   </td>			   	
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->oportunidad8; ?>
			   </td>
			   <td>
					<?php echo $model->cliente8; ?>
			   </td>
			   <td>
					<?php echo $model->folioObra8; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->importeVenta8)) ? number_format($model->importeVenta8) : ""; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaCierre8_f) && $model->fechaCierre8_f != '0000-00-00') ? $model->fechaCierre8_f : ''; ?>
			   </td>			   	
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->oportunidad9; ?>
			   </td>
			   <td>
					<?php echo $model->cliente9; ?>
			   </td>
			   <td>
					<?php echo $model->folioObra9; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->importeVenta9)) ? number_format($model->importeVenta9) : ""; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaCierre9_f) && $model->fechaCierre9_f != '0000-00-00') ? $model->fechaCierre9_f : ''; ?>
			   </td>			   	
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->oportunidad10; ?>
			   </td>
			   <td>
					<?php echo $model->cliente10; ?>
			   </td>
			   <td>
					<?php echo $model->folioObra10; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->importeVenta10)) ? number_format($model->importeVenta10) : ""; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaCierre10_f) && $model->fechaCierre10_f != '0000-00-00') ? $model->fechaCierre10_f : ''; ?>
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
				<th class="span1">Folio</th>
				<th class="span2">Descripción de la Operación</th>
				<th>Importe</th>
			</tr>
			<tr>
				<td>
					<?php echo $model->numeroSinter1; ?>
				</td>
				<td>
					<?php echo $model->descripcionObra1; ?>
				</td>
				<td style="text-align:right">
					<?php echo (!empty($model->importeFactura1)) ? number_format($model->importeFactura1) : ""; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $model->numeroSinter2; ?>
				</td>
				<td>
					<?php echo $model->descripcionObra2; ?>
				</td>
				<td style="text-align:right">
					<?php echo (!empty($model->importeFactura2)) ? number_format($model->importeFactura2) : ""; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $model->numeroSinter3; ?>
				</td>
				<td>
					<?php echo $model->descripcionObra3; ?>
				</td>
				<td style="text-align:right">
					<?php echo (!empty($model->importeFactura3)) ? number_format($model->importeFactura3) : ""; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $model->numeroSinter4; ?>
				</td>
				<td>
					<?php echo $model->descripcionObra4; ?>
				</td>
				<td style="text-align:right">
					<?php echo (!empty($model->importeFactura4)) ? number_format($model->importeFactura4) : ""; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $model->numeroSinter5; ?>
				</td>
				<td>
					<?php echo $model->descripcionObra5; ?>
				</td>
				<td style="text-align:right">
					<?php echo (!empty($model->importeFactura5)) ? number_format($model->importeFactura5) : ""; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $model->numeroSinter6; ?>
				</td>
				<td>
					<?php echo $model->descripcionObra6; ?>
				</td>
				<td style="text-align:right">
					<?php echo (!empty($model->importeFactura6)) ? number_format($model->importeFactura6) : ""; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $model->numeroSinter7; ?>
				</td>
				<td>
					<?php echo $model->descripcionObra7; ?>
				</td>
				<td style="text-align:right">
					<?php echo (!empty($model->importeFactura7)) ? number_format($model->importeFactura7) : ""; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $model->numeroSinter8; ?>
				</td>
				<td>
					<?php echo $model->descripcionObra8; ?>
				</td>
				<td style="text-align:right">	
					<?php echo (!empty($model->importeFactura8)) ? number_format($model->importeFactura8) : ""; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $model->numeroSinter9; ?>
				</td>
				<td>
					<?php echo $model->descripcionObra9; ?>
				</td>
				<td style="text-align:right">
					<?php echo (!empty($model->importeFactura9)) ? number_format($model->importeFactura9) : ""; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $model->numeroSinter10; ?>
				</td>
				<td>
					<?php echo $model->descripcionObra10; ?>
				</td>
				<td style="text-align:right">
					<?php echo (!empty($model->importeFactura10)) ? number_format($model->importeFactura10) : ""; ?>
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="row">
   <div class="span12">
   		<div class="breadcrumb">
		  <h4>IV. Administración de Clientes</h4>
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
					<?php echo $model->nombreClienteVisitado1; ?>
			   </td>
			   <td>				
					<?php echo $model->contacto1; ?>
			   </td>
			   <td>
					<?php echo $model->puesto1; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisita1_f) && $model->fechaVisita1_f != '0000-00-00') ? $model->fechaVisita1_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContacto1; ?>
			   </td>
			   <td>
					<?php echo $model->resultado1; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisita1_f) && $model->fechaProximaVisita1_f != '0000-00-00') ? $model->fechaProximaVisita1_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreClienteVisitado2; ?>
			   </td>
			   <td>
					<?php echo $model->contacto2; ?>
			   </td>
			   <td>
					<?php echo $model->puesto2; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisita2_f) && $model->fechaVisita2_f != '0000-00-00') ? $model->fechaVisita2_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContacto2; ?>
			   </td>
			   <td>
					<?php echo $model->resultado2; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisita2_f) && $model->fechaProximaVisita2_f != '0000-00-00') ? $model->fechaProximaVisita2_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreClienteVisitado3; ?>
			   </td>
			   <td>
					<?php echo $model->contacto3; ?>
			   </td>
			   <td>				  
					<?php echo $model->puesto3; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisita3_f) && $model->fechaVisita3_f != '0000-00-00') ? $model->fechaVisita3_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContacto3; ?>
			   </td>
			   <td>
					<?php echo $model->resultado3; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisita3_f) && $model->fechaProximaVisita3_f != '0000-00-00') ? $model->fechaProximaVisita3_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreClienteVisitado4; ?>
			   </td>
			   <td>
					<?php echo $model->contacto4; ?>
			   </td>
			   <td>
					<?php echo $model->puesto4; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisita4_f) && $model->fechaVisita4_f != '0000-00-00') ? $model->fechaVisita4_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContacto4; ?>
			   </td>
			   <td>
					<?php echo $model->resultado4; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisita4_f) && $model->fechaProximaVisita4_f != '0000-00-00') ? $model->fechaProximaVisita4_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreClienteVisitado5; ?>
			   </td>
			   <td>
					<?php echo $model->contacto5; ?>
			   </td>
			   <td>
					<?php echo $model->puesto5; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisita5_f) && $model->fechaVisita5_f != '0000-00-00') ? $model->fechaVisita5_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContacto5; ?>
			   </td>
			   <td>
					<?php echo $model->resultado5; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisita5_f) && $model->fechaProximaVisita5_f != '0000-00-00') ? $model->fechaProximaVisita5_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreClienteVisitado6; ?>
			   </td>
			   <td>					</div>
					<?php echo $model->contacto6; ?>
			   </td>
			   <td>
					</div>
					<?php echo $model->puesto6; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisita6_f) && $model->fechaVisita6_f != '0000-00-00') ? $model->fechaVisita6_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContacto6; ?>
			   </td>
			   <td>
					<?php echo $model->resultado6; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisita6_f) && $model->fechaProximaVisita6_f != '0000-00-00') ? $model->fechaProximaVisita6_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreClienteVisitado7; ?>
			   </td>
			   <td>
					<?php echo $model->contacto7; ?>
			   </td>
			   <td>
					<?php echo $model->puesto7; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisita7_f) && $model->fechaVisita7_f != '0000-00-00') ? $model->fechaVisita7_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContacto7; ?>
			   </td>
			   <td>
					<?php echo $model->resultado7; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisita7_f) && $model->fechaProximaVisita7_f != '0000-00-00') ? $model->fechaProximaVisita7_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreClienteVisitado8; ?>
			   </td>
			   <td>
					<?php echo $model->contacto8; ?>
			   </td>
			   <td>
					<?php echo $model->puesto8; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisita8_f) && $model->fechaVisita8_f != '0000-00-00') ? $model->fechaVisita8_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContacto8; ?>
			   </td>
			   <td>
					<?php echo $model->resultado8; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisita8_f) && $model->fechaProximaVisita8_f != '0000-00-00') ? $model->fechaProximaVisita8_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreClienteVisitado9; ?>
			   </td>
			   <td>
					<?php echo $model->contacto9; ?>
			   </td>
			   <td>
					<?php echo $model->puesto9; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisita9_f) && $model->fechaVisita9_f != '0000-00-00') ? $model->fechaVisita9_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContacto9; ?>
			   </td>
			   <td>
					<?php echo $model->resultado9; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisita9_f) && $model->fechaProximaVisita9_f != '0000-00-00') ? $model->fechaProximaVisita9_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreClienteVisitado10; ?>
			   </td>
			   <td>
					<?php echo $model->contacto10; ?>
			   </td>
			   <td>
					<?php echo $model->puesto10; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisita10_f) && $model->fechaVisita10_f != '0000-00-00') ? $model->fechaVisita10_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContacto10; ?>
			   </td>
			   <td>
					<?php echo $model->resultado10; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisita10_f) && $model->fechaProximaVisita10_f != '0000-00-00') ? $model->fechaProximaVisita10_f : ''; ?>
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
					<?php echo $model->nombreProspectoNuevo1; ?>
			   </td>
			   <td>
					<?php echo $model->contactoProspectoNuevo1; ?>
			   </td>
			   <td>
					<?php echo $model->puestoProspectoNuevo1; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisitaProspectoNuevo1_f) && $model->fechaVisitaProspectoNuevo1_f != '0000-00-00') ? $model->fechaVisitaProspectoNuevo1_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContactoProspectoNuevo1; ?>
			   </td>
			   <td>
					<?php echo $model->resultadoProspectoNuevo1; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisitaProspectoNuevo1_f) && $model->fechaProximaVisitaProspectoNuevo1_f != '0000-00-00') ? $model->fechaProximaVisitaProspectoNuevo1_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreProspectoNuevo2; ?>
			   </td>
			   <td>
					<?php echo $model->contactoProspectoNuevo2; ?>
			   </td>
			   <td>
					<?php echo $model->puestoProspectoNuevo2; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisitaProspectoNuevo2_f) && $model->fechaVisitaProspectoNuevo2_f != '0000-00-00') ? $model->fechaVisitaProspectoNuevo2_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContactoProspectoNuevo2; ?>
			   </td>
			   <td>				   
					<?php echo $model->resultadoProspectoNuevo2; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisitaProspectoNuevo2_f) && $model->fechaProximaVisitaProspectoNuevo2_f != '0000-00-00') ? $model->fechaProximaVisitaProspectoNuevo2_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreProspectoNuevo3; ?>
			   </td>
			   <td>
					<?php echo $model->contactoProspectoNuevo3; ?>
			   </td>
			   <td>
					<?php echo $model->puestoProspectoNuevo3; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisitaProspectoNuevo3_f) && $model->fechaVisitaProspectoNuevo3_f != '0000-00-00') ? $model->fechaVisitaProspectoNuevo3_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContactoProspectoNuevo3; ?>
			   </td>
			   <td>
					<?php echo $model->resultadoProspectoNuevo3; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisitaProspectoNuevo3_f) && $model->fechaProximaVisitaProspectoNuevo3_f != '0000-00-00') ? $model->fechaProximaVisitaProspectoNuevo3_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreProspectoNuevo4; ?>
			   </td>
			   <td>
					<?php echo $model->contactoProspectoNuevo4; ?>
			   </td>
			   <td>
					<?php echo $model->puestoProspectoNuevo4; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisitaProspectoNuevo4_f) && $model->fechaVisitaProspectoNuevo4_f != '0000-00-00') ? $model->fechaVisitaProspectoNuevo4_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContactoProspectoNuevo4; ?>
			   </td>
			   <td>
					<?php echo $model->resultadoProspectoNuevo4; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisitaProspectoNuevo4_f) && $model->fechaProximaVisitaProspectoNuevo4_f != '0000-00-00') ? $model->fechaProximaVisitaProspectoNuevo4_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreProspectoNuevo5; ?>
			   </td>
			   <td>
					<?php echo $model->contactoProspectoNuevo5; ?>
			   </td>
			   <td>
					<?php echo $model->puestoProspectoNuevo5; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisitaProspectoNuevo5_f) && $model->fechaVisitaProspectoNuevo5_f != '0000-00-00') ? $model->fechaVisitaProspectoNuevo5_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContactoProspectoNuevo5; ?>
			   </td>
			   <td>
					<?php echo $model->resultadoProspectoNuevo5; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisitaProspectoNuevo5_f) && $model->fechaProximaVisitaProspectoNuevo5_f != '0000-00-00') ? $model->fechaProximaVisitaProspectoNuevo5_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreProspectoNuevo6; ?>
			   </td>
			   <td>
					<?php echo $model->contactoProspectoNuevo6; ?>
			   </td>
			   <td>
					<?php echo $model->puestoProspectoNuevo6; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisitaProspectoNuevo6_f) && $model->fechaVisitaProspectoNuevo6_f != '0000-00-00') ? $model->fechaVisitaProspectoNuevo6_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContactoProspectoNuevo6; ?>
			   </td>
			   <td>
					<?php echo $model->resultadoProspectoNuevo6; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisitaProspectoNuevo6_f) && $model->fechaProximaVisitaProspectoNuevo6_f != '0000-00-00') ? $model->fechaProximaVisitaProspectoNuevo6_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreProspectoNuevo7; ?>
			   </td>
			   <td>
					<?php echo $model->contactoProspectoNuevo7; ?>
			   </td>
			   <td>
					<?php echo $model->puestoProspectoNuevo7; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisitaProspectoNuevo7_f) && $model->fechaVisitaProspectoNuevo7_f != '0000-00-00') ? $model->fechaVisitaProspectoNuevo7_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContactoProspectoNuevo7; ?>
			   </td>
			   <td>
					<?php echo $model->resultadoProspectoNuevo7; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisitaProspectoNuevo7_f) && $model->fechaProximaVisitaProspectoNuevo7_f != '0000-00-00') ? $model->fechaProximaVisitaProspectoNuevo7_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreProspectoNuevo8; ?>
			   </td>
			   <td>
					<?php echo $model->contactoProspectoNuevo8; ?>
			   </td>
			   <td>
					<?php echo $model->puestoProspectoNuevo8; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisitaProspectoNuevo8_f) && $model->fechaVisitaProspectoNuevo8_f != '0000-00-00') ? $model->fechaVisitaProspectoNuevo8_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContactoProspectoNuevo8; ?>
			   </td>
			   <td>
					<?php echo $model->resultadoProspectoNuevo8; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisitaProspectoNuevo8_f) && $model->fechaProximaVisitaProspectoNuevo8_f != '0000-00-00') ? $model->fechaProximaVisitaProspectoNuevo8_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreProspectoNuevo9; ?>
			   </td>
			   <td>
					<?php echo $model->contactoProspectoNuevo9; ?>
			   </td>
			   <td>
					<?php echo $model->puestoProspectoNuevo9; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisitaProspectoNuevo9_f) && $model->fechaVisitaProspectoNuevo9_f != '0000-00-00') ? $model->fechaVisitaProspectoNuevo9_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContactoProspectoNuevo9; ?>
			   </td>
			   <td>
					<?php echo $model->resultadoProspectoNuevo9; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisitaProspectoNuevo9_f) && $model->fechaProximaVisitaProspectoNuevo9_f != '0000-00-00') ? $model->fechaProximaVisitaProspectoNuevo9_f : ''; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->nombreProspectoNuevo10; ?>
			   </td>
			   <td>
					<?php echo $model->contactoProspectoNuevo10; ?>
			   </td>
			   <td>
					<?php echo $model->puestoProspectoNuevo10; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaVisitaProspectoNuevo10_f) && $model->fechaVisitaProspectoNuevo10_f != '0000-00-00') ? $model->fechaVisitaProspectoNuevo10_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->tipoContactoProspectoNuevo10; ?>
			   </td>
			   <td>
					<?php echo $model->resultadoProspectoNuevo10; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaProximaVisitaProspectoNuevo10_f) && $model->fechaProximaVisitaProspectoNuevo10_f != '0000-00-00') ? $model->fechaProximaVisitaProspectoNuevo10_f : ''; ?>
			   </td>
		   </tr>
	   </table>
   </div>	   
</div>
<div class="row">
   <div class="span12">
   		<div class="breadcrumb">
		  <h4>V. Administración de Obras</h4>		  
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
					<?php echo $model->zonaRecorrida1; ?>
			   </td>
			   <td>
					<?php echo $model->clienteFrecuente1; ?>
			   </td>
			   <td>
					<?php echo $model->cantidadObras1; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaRecorrido1_f) && $model->fechaRecorrido1_f != '0000-00-00') ? $model->fechaRecorrido1_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->observacionesObra1; ?>
			   </td>
			   <td>
					<?php echo $model->folioSinter1; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->zonaRecorrida2; ?>
			   </td>
			   <td>
					<?php echo $model->clienteFrecuente2; ?>
			   </td>
			   <td>
					<?php echo $model->cantidadObras2; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaRecorrido2_f) && $model->fechaRecorrido2_f != '0000-00-00') ? $model->fechaRecorrido2_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->observacionesObra2; ?>
			   </td>
			   <td>
					<?php echo $model->folioSinter2; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->zonaRecorrida3; ?>
			   </td>
			   <td>
					<?php echo $model->clienteFrecuente3; ?>
			   </td>
			   <td>
					<?php echo $model->cantidadObras3; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaRecorrido3_f) && $model->fechaRecorrido3_f != '0000-00-00') ? $model->fechaRecorrido3_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->observacionesObra3; ?>
			   </td>
			   <td>
					<?php echo $model->folioSinter3; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->zonaRecorrida4; ?>
			   </td>
			   <td>
					<?php echo $model->clienteFrecuente4; ?>
			   </td>
			   <td>
					<?php echo $model->cantidadObras4; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaRecorrido4_f) && $model->fechaRecorrido4_f != '0000-00-00') ? $model->fechaRecorrido4_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->observacionesObra4; ?>
			   </td>
			   <td>
					<?php echo $model->folioSinter4; ?>
			   </td>
		   </tr>
		   <tr>
			   <td>
					<?php echo $model->zonaRecorrida5; ?>
			   </td>
			   <td>
					<?php echo $model->clienteFrecuente5; ?>
			   </td>
			   <td>
					<?php echo $model->cantidadObras5; ?>
			   </td>
			   <td>
					<?php echo (isset($model->fechaRecorrido5_f) && $model->fechaRecorrido5_f != '0000-00-00') ? $model->fechaRecorrido5_f : ''; ?>
			   </td>
			   <td>
					<?php echo $model->observacionesObra5; ?>
			   </td>
			   <td>
					<?php echo $model->folioSinter5; ?>
			   </td>
		   </tr>
	   </table>
   </div>	   
</div>	
<div class="row">
	<div class="span12">
		<div class="breadcrumb">
		  <h4>VI. Obras, Presupuestos, Potenciales y Seguimiento en Sinter</h4>		  
		</div>
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
			   <td style="text-align:right">
					<?php echo (!empty($model->presupuestoVigente)) ? number_format($model->presupuestoVigente) : ""; ?>
			   </td>
			   <td style="text-align:right">					
					<?php echo (!empty($model->presupuestoImporte)) ? number_format($model->presupuestoImporte) : ""; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->presupuestoNuevaSemana)) ? number_format($model->presupuestoNuevaSemana) : ""; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->presupuestoNuevaSemanaImporte)) ? number_format($model->presupuestoNuevaSemanaImporte) : ""; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->presupuestoNuevoMes)) ? number_format($model->presupuestoNuevoMes) : ""; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->presupuestoNuevoMesImporte)) ? number_format($model->presupuestoNuevoMesImporte) : ""; ?>
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
			   <td style="text-align:right">
					<?php echo (!empty($model->obraVigente)) ? number_format($model->obraVigente) : ""; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->obraPotencialM2)) ? number_format($model->obraPotencialM2) : ""; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->obraEventoProg)) ? number_format($model->obraEventoProg) : ""; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->obraEventoVencido)) ? number_format($model->obraEventoVencido) : ""; ?>
			   </td>
			   <td style="text-align:right">
					<?php echo (!empty($model->obraEventoPorVencer)) ? number_format($model->obraEventoPorVencer) : ""; ?>
			   </td>
		   </tr>			   
	   </table>
   </div>	
</div>