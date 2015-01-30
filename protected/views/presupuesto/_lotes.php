<br/>
<?php
	$c= 0;
	$configuracion = Configuracion::model()->find("estatus_did = 1 && descripcion='Actual'");
?>
<div class="text-center">
	<span style="text-align: center; font-size: 14pt;">Lotes</span>
	<table style="font-size: 9pt" class="table table-striped table-bordered table-condensed">		
		<thead class="thead">
			<tr>
				<th style="text-align: center;">
					<a href="#" class="btn btn-primary btn-mini" onclick="cargarlote(datosTodos)">S</a>
					<a href="#" class="btn btn-primary btn-mini" onclick="cargarlote(datosTodosAcum)">A</a></th>
				<th>Lote</th>
				<th>An.</th>
				<th>Ac.</th>
				<th>%</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($lotes as $lote){ $c++; $clase = "";
				if($lote["porcentaje"] < -16){
					$clase = "warning";
				}else if($lote["porcentaje"] >= -15 && $lote["porcentaje"] <= 10){
					$clase = "success";
				}else if($lote["porcentaje"] >= 11){
					$clase = "error";
				}
			?>
				<tr class="<?php echo $clase; ?>">
					<td style="text-align: center;">
						<script type='text/javascript'>
							var datos<?php echo $c; ?> = {
								empresa: $('#presupuesto_empresa').val(),
								p: "<?php echo $configuracion->valor; ?>",
								grupoCostos: $('#presupuesto_grupoCostos').val(),
								semana: $('#presupuesto_semana').val(),
								grafica: $('#tipoGrafica').html(),
								lote: <?php echo $lote["lote"]; ?>,
							};

							var datosAcum<?php echo $c; ?> = {
								empresa: $('#presupuesto_empresa').val(),
								p: "<?php echo $configuracion->valor; ?>",
								grupoCostos: $('#presupuesto_grupoCostos').val(),
								semana: $('#presupuesto_semana').val(),
								grafica: $('#tipoGrafica').html(),
								lote: <?php echo $lote["lote"]; ?>,
								acum:1,
							};

							var datosTodosAcum = {
								empresa: $('#presupuesto_empresa').val(),
								p: "<?php echo $configuracion->valor; ?>",
								grupoCostos: $('#presupuesto_grupoCostos').val(),
								semana: $('#presupuesto_semana').val(),
								grafica: $('#tipoGrafica').html(),
								acum:1,
								semana: "<?php echo Yii::app()->db->createCommand("SELECT semana FROM SemanaActual")->queryScalar(); ?>",
							};

							var datosTodos = {
								empresa: $('#presupuesto_empresa').val(),
								p: "<?php echo $configuracion->valor; ?>",
								grupoCostos: $('#presupuesto_grupoCostos').val(),
								semana: "<?php echo Yii::app()->db->createCommand("SELECT semana FROM SemanaActual")->queryScalar(); ?>",
								grafica: $('#tipoGrafica').html(),
							};

							

						</script>
						<a href="#" class="btn btn-info btn-mini" onclick="cargarlote(datos<?php echo $c; ?>)">S</a>
						<a href="#" class="btn btn-info btn-mini" onclick="cargarlote(datosAcum<?php echo $c; ?>)">A</a>
					</td>
					<td><a href="#" title="<?php echo $lote["descripcion"]; ?>" style="color: white;"><?php echo "Lote " . $lote["lote"];?></a></td>
					<td><?php echo number_format($lote["hectareasAnteriores"],0);?></td>
					<td><?php echo number_format($lote["hectareasActuales"],0);?></td>
					<td><?php echo number_format($lote["porcentaje"],0);?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
