<br/>
<?php
	$c= 0;
	$configuracion = Configuracion::model()->find("estatus_did = 1 && descripcion='Actual'");

?>
<div id="cultivos">
	<table style="font-size: 9pt" class="table table-striped table-bordered table-condensed">
		<caption>Cultivos</caption>
		<thead class="thead">
			<tr>
				<th style="text-align: center;">
					<a href="#" class="btn btn-primary btn-mini" onclick="cargarcultivo(datosTodos)">S</a>
					<a href="#" class="btn btn-primary btn-mini" onclick="cargarcultivo(datosTodosAcum)">A</a></th>
				<th style="text-align: center;">Cultivo</th>
				<th style="text-align: center;">Descripción</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($cultivos as $cultivo){ $c++; ?>
				<tr>
					<td style="text-align: center;">
						<script type='text/javascript'>
							var datos<?php echo $c; ?> = {
								empresa: $('#presupuesto_empresa').val(),
								p: "<?php echo $configuracion->valor; ?>",
								grafica: $('#tipoGrafica').html(),
								cultivo: <?php echo $cultivo["cultivo"]; ?>,
								descripcion: "<?php echo $cultivo["descripcion"]; ?>",
								semana: "<?php echo $semana; ?>",
							};

							var datosAcum<?php echo $c; ?> = {
								empresa: $('#presupuesto_empresa').val(),
								p: "<?php echo $configuracion->valor; ?>",
								grafica: $('#tipoGrafica').html(),
								cultivo: <?php echo $cultivo["cultivo"]; ?>,
								descripcion: "<?php echo $cultivo["descripcion"]; ?>",
								acum:1
							};

							var datosTodosAcum = {
								empresa: $('#presupuesto_empresa').val(),
								p: "<?php echo $configuracion->valor; ?>",
								grafica: $('#tipoGrafica').html(),
								acum:1,
								semana: "",
							};

							var datosTodos = {
								empresa: $('#presupuesto_empresa').val(),
								p: "<?php echo $configuracion->valor; ?>",
								grafica: $('#tipoGrafica').html(),
								semana: "<?php echo Yii::app()->db->createCommand("SELECT semana FROM SemanaActual")->queryScalar(); ?>",
							};


						</script>
						<a href="#" class="btn btn-warning btn-mini" onclick="cargarcultivo(datos<?php echo $c; ?>)">S</a>
						<a href="#" class="btn btn-info btn-mini" 	 onclick="cargarcultivo(datosAcum<?php echo $c; ?>)">A</a>
					</td>
					<td style="text-align: center;"><?php echo $cultivo["cultivo"];?></td>
					<td style="text-align: center;"><?php echo $cultivo["descripcion"];?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
