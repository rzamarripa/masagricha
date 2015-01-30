<?php $clase=""; $entro = false;
	if(!empty($valores["grupoCostos"])){
		$grupoCostos = GrupoCostos::model()->find("id = ". $valores["grupoCostos"]);
	}
	if(!empty($valores["empresa"])){
		$empresa = Empresa::model()->find("id = ". $valores["empresa"]);
	}
?>
<div class="text-center">
		<strong><span style="font-size: 14pt"><?php echo (isset($valores["empresa"])) ? $empresa->nombre : 'General'; ?></span></strong><br/>
		<span style="font-size: 10pt"><?php echo (!empty($valores["grupoCostos"])) ? $grupoCostos->nombre . " | " : 'Todos los Costos | '; ?><?php echo (isset($valores["lote"])) ? 'Lote ' . $valores["lote"] : 'Todos los Lotes'; ?></span><br/>
		<span style="font-size: 10pt"></span>
</div>

<table class="table table-striped table-bordered datatable">
	<thead class="thead">
		<tr>
			<th>Descripción</th>
			<th>Presupuesto</th>
			<th>Real</th>
			<th>Porcentaje</th>
			<th>Diferencia</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$totalReal = 0;
			$totalPresupuesto = 0;
			for($i = 0; $i<count($datos)-1; $i++){								
				$real = 0;
				$presupuesto = 0;
				$porcentaje = 0;
				$diferencia = 0;
				$entro = false;				
				if(isset($datos[$i+1]["codigo"]) &&
															$datos[$i]["codigo"] == $datos[$i+1]["codigo"] &&
															$datos[$i]["importe"]!=0){
					
					$presupuesto = $datos[$i]["importe"];
					$real = $datos[$i+1]["importe"];
					$diferencia = $datos[$i+1]["importe"] - $datos[$i]["importe"];

					$porcentaje = ($diferencia/$datos[$i]["importe"]) * 100;

					if($porcentaje >= -15 && $porcentaje <= 10)
						$clase="success";
					else if($porcentaje <= -16)
						$clase="warning";
					else if($porcentaje >= 11)
						$clase="error";
					else
						$clase="";
					$entro = true;

				}else{
					$clase="";
					$temporada = substr($datos[$i]["temporada"], 0,1);
					if($temporada == "P"){
						$presupuesto = $datos[$i]["importe"];
						$porcentaje = -100;				
					}else{
						$real = $datos[$i]["importe"];						
						$porcentaje = 100;				
					}
					if($porcentaje >= -15 && $porcentaje <= 10)
						$clase="success";
					else if($porcentaje <= -16)
						$clase="warning";
					else if($porcentaje >= 11)
						$clase="error";
					else
						$clase="";
					$diferencia = $real - $presupuesto;
				}
				$totalReal = $totalReal + $real;
				$totalPresupuesto = $totalPresupuesto + $presupuesto;
		?>
		<tr class="<?php echo $clase; ?>">
			<td><?php echo $datos[$i]["descr"];?></td>
			<td style="text-align: right;"><?php echo number_format($presupuesto,2);?></td>
			<td style="text-align: right;"><?php echo number_format($real,2); ?></td>
			<td style="text-align: right;"><?php echo number_format($porcentaje,0) . "%"; ?></td>
			<td style="text-align: right;"><?php echo number_format($diferencia,2); ?></td>
		</tr>		
		<?php if($entro == true) $i++; } ?>
	</tbody>
</table>
<table class="table table-striped table-bordered">
	<tr>
		<td><?php echo "Totales"; ?></td>
		<td style="text-align: right;"><?php echo number_format($totalPresupuesto,2);?></td>
		<td style="text-align: right;"><?php echo number_format($totalReal,2); ?></td>
		<td style="text-align: right;"><?php echo number_format(((($totalReal / $totalPresupuesto)-1)*100),0) . "%"; ?></td>
		<td style="text-align: right;"><?php echo number_format($totalReal - $totalPresupuesto,2); ?></td>
	</tr>
</table>
<script type="text/javascript">
	$(document).ready(function() {
		$('#costos').show();
    $('.datatable').dataTable( {
        "order": [[ 4, "desc" ]],
        "aLengthMenu": [
         [15, 10, 50, 100, 200, -1],
         [15, 10, 50, 100, 200, "Todos"]
     ]
    });
	});
</script>