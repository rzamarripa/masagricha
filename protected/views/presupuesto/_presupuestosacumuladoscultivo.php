<?php
	if(!empty($presupuestosacumulados["Presupuesto"])){

		$diferenciaActual =  $presupuestosacumulados["Actual"] - $presupuestosacumulados["Presupuesto"];
		$diferenciaAnterior = $presupuestosacumulados["Actual"] - $presupuestosacumulados["Anterior"];
		$porcentajeActual = ($diferenciaActual / $presupuestosacumulados["Presupuesto"]) * 100;
		$porcentajeAnterior = ($diferenciaAnterior / $presupuestosacumulados["Presupuesto"]) * 100;
		//((13500) (100)) /12500 = 108 -100
	?>
	<table class="table table-condensed table-bordered table-striped table-hover">
		<!-- <caption><h4>Acumulados Sem. <?php echo $presupuestosacumulados["semana"]; ?></h4></caption> -->
		<tbody>
	
			<tr>
				<td colspan="2"><strong>Bultos Empacados</strong></td>
				<td><?php echo number_format($presupuestosacumulados["Actual"],0);?></td>
			</tr>
			<tr>
				<td>
					<strong>Presupuesto</strong><br/>
					<?php echo number_format($presupuestosacumulados["Presupuesto"],0);?>
				</td>
				<td class="<?php echo ($porcentajeActual < 0)? "text-success" : "text-error"; ?>">
					<strong>Diferencia</strong> <br/>
					<?php echo number_format($diferenciaActual,0); ?></td>
				<td class="<?php echo ($porcentajeActual < 0)? "text-success" : "text-warning"; ?>">
					<strong>Porcentaje</strong> <br/>
					<?php echo number_format($porcentajeActual,0) . "%"; ?></td>
			</tr>
			<tr>
				<td>
					<strong>Anterior</strong> <br/>
					<?php echo number_format($presupuestosacumulados["Anterior"],0);?></td>
				<td class="<?php echo ($porcentajeAnterior < 0)? "text-success" : "text-error"; ?>">
					<strong>Diferencia</strong> <br/>
					<?php echo number_format($diferenciaAnterior,0); ?></td>
				<td class="<?php echo ($porcentajeAnterior < 0)? "text-success" : "text-warning"; ?>">
					<strong>Porcentaje</strong> <br/>
					<?php echo number_format($porcentajeAnterior,0) . "%"; ?></td>
			</tr>
		</tbody>
	</table>
<?php	}else{ ?>
	<br/>
	<div class="text-center">
		<span class="label label-warning">No hay información de esta Semana, <br/>elija una semana con presupuesto mayor a Cero</span>
	</div>
<?php	} ?>
	