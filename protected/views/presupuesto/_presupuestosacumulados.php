<?php
	$diferenciaActual =  $presupuestosacumulados["Actual"] - $presupuestosacumulados["Presupuesto"];
	$diferenciaAnterior = $presupuestosacumulados["Actual"] - $presupuestosacumulados["Anterior"];
	$porcentajeActual = (($presupuestosacumulados["Actual"] / $presupuestosacumulados["Presupuesto"]) - 1) * 100;
	$porcentajeAnterior = (($presupuestosacumulados["Actual"] / $presupuestosacumulados["Anterior"]) - 1) * 100;
	//((13500) (100)) /12500 = 108 -100
	if($porcentajeActual < -16){
		$claseActual = "text-warning";
	}else if($porcentajeActual >= -15 && $porcentajeActual < 11){
		$claseActual = "text-success";
	}else if($porcentajeActual >= 11){
		$claseActual = "text-error";
	}

	if($porcentajeAnterior <= -16){
		$claseAnterior = "text-warning";
	}else if($porcentajeAnterior >= -15 && $porcentajeAnterior < 11){
		$claseAnterior = "text-success";
	}else if($porcentajeAnterior >= 11){
		$claseAnterior = "text-error";
	}
?>
<table class="table table-condensed table-bordered table-striped table-hover">
	<caption>
		<span class="lead">Acumulados <?php echo (!empty($_POST["presupuesto"]["semana"])) ? 'Semana ' . $_POST["presupuesto"]["semana"] : " Totales"; ?></span>
	</caption>
	<thead>
		<tr>
			<td style="text-align: center;" colspan="2"><strong>Costo Actual</strong></td>
			<td style="text-align: right;"><?php echo "$" . number_format($presupuestosacumulados["Actual"],2);?></td>
		</tr>
	</thead>
	<tbody>
		
		<tr>
			<td style="text-align: center;">
				<strong>Presupuesto</strong><br/>
				<?php echo "$" . number_format($presupuestosacumulados["Presupuesto"],2);?>
			</td>
			<td style="text-align: center;" class="<?php echo $claseActual; ?>">
				<strong>Diferencia</strong> <br/>
				<?php echo '$' . number_format($diferenciaActual,2); ?></td>
			<td style="text-align: center;" class="<?php echo $claseActual; ?>">
				<strong>Porcentaje</strong> <br/>
				<?php echo number_format($porcentajeActual,0) . "%"; ?></td>
		</tr>
		<tr>
			<td style="text-align: center;">
				<strong>Anterior</strong> <br/>
				<?php echo "$" . number_format($presupuestosacumulados["Anterior"],2);?></td>
			<td style="text-align: center;" class="<?php echo $claseAnterior; ?>">
				<strong>Diferencia</strong> <br/>
				<?php echo '$' . number_format($diferenciaAnterior,2); ?></td>
			<td style="text-align: center;" class="<?php echo $claseAnterior; ?>">
				<strong>Porcentaje</strong> <br/>
				<?php echo number_format($porcentajeAnterior,0) . "%"; ?></td>
		</tr>
	</tbody>
</table>
