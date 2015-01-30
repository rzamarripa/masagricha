<?php	
	$this->pageTitle=Yii::app()->name;
	$convocatoria = Convocatoria::model()->find('id = :x', array(':x'=>$id));
	$existe = 0;
?>

				
<div class="row">
	<div class="span12">		
		<h1>Dashboard</h1>
		<hr/>
		<?php 
			$info = Yii::app()->db->createCommand('select 
					if((select sum(presupuestoSolicitado) from Solicitud where estatus_did = 1 && convocatoria_did =' . $convocatoria->id . ') IS NULL,0,(select sum(presupuestoSolicitado) from Solicitud where estatus_did =1 && convocatoria_did = 5)) as MontoAceptado,
					if((select sum(presupuestoSolicitado) from Solicitud where estatus_did = 2 && convocatoria_did = ' . $convocatoria->id . ') IS NULL,0,(select sum(presupuestoSolicitado) from Solicitud where estatus_did =2 && convocatoria_did = 5)) as MontoRechazado,
					if((select sum(presupuestoSolicitado) from Solicitud where estatus_did = 4 && convocatoria_did = ' . $convocatoria->id . ') IS NULL,0,(select sum(presupuestoSolicitado) from Solicitud where estatus_did =4 && convocatoria_did = 5)) as MontoPendiente,
					(select count(*) from Solicitud where estatus_did =1 && convocatoria_did = 5) as Aceptadas,
					(select count(*) from Solicitud where estatus_did =2 && convocatoria_did = 5) as Rechazadas,
					(select count(*) from Solicitud where estatus_did =4 && convocatoria_did = 5) as Pendientes
				;')->queryAll();

			$programasInteres = Yii::app()->db->createCommand("select pi.nombre as nombre, sum(s.presupuestoSolicitado) as cantidad from Solicitud s
				inner join ProgramaInteres pi on pi.id = s.programaInteres_did
				where s.programaInteres_did in
				(select id from ProgramaInteres where estatus_did = 1) && s.estatus_did != 3 && s.estatus_did = 1 && s.convocatoria_did = " . $convocatoria->id . "
				group by s.programaInteres_did;")->queryAll();			
			if(isset($programasInteres) && !empty($programasInteres)){ 
				echo "<script>
							$(function () {
								 var chart;
								 
								 $(document).ready(function () {
								 	
								 	 // Build the chart
									 $('#programasInteresPastel').highcharts({
										 chart: {
											 plotBackgroundColor: null,
											 plotBorderWidth: null,
											 plotShadow: true
										 },
										 title: {
											 text: ''
										 },
										 tooltip: {
									 			pointFormat: '<span >{series.name}</span>: <b>{point.percentage}%</b><br/>',
										 	percentageDecimals: 1,												 	
										 },
										 plotOptions: {
											 pie: {
												 allowPointSelect: true,
												 cursor: 'pointer',
												 dataLabels: {
													 enabled: false
												 },
												 showInLegend: true
											 }
										 },
										 series: [{
											 type: 'pie',
											 name: 'Porcentaje',
											 data: [";
											 	foreach($programasInteres as $programa){
											 		echo "['" . $programa['nombre'] . "'," . $programa['cantidad'] . "],";													 										 		
											 	}
											 echo "]
										 }]
									 });
									 $('#programasInteresLinea').highcharts({
							            chart: {
							                type: 'line',
							                marginRight: 0,
							                marginBottom: 25
							            },
							            title: {
							                text: '',
							                x: -20 //center
							            },
							            subtitle: {
							                text: '',
							                x: -20
							            },
							            xAxis: {
							                categories: [ ";
								                foreach($programasInteres as $programa)
								                {
								                	echo "'" . $programa['nombre'] . "',";
								                }
									         echo "]
							            },
							            yAxis: {
							                title: {
							                    text: ''
							                },
							                min: 0,
							                plotLines: [{
							                    value: 0,
							                    width: 1,
							                    color: '#808080'
							                }],							                
							            },
							            tooltip: {
							                valueSuffix: ''
							            },
							            legend: {
							                layout: 'vetical',
							                align: 'right',
							                verticalAlign: 'top',
							                x: -10,
							                y: 100,
							                borderWidth: 0,
							                enabled:false,
							            },
							             series: [{
							             	name: 'Programa',
							             	data: [";
							                foreach($programasInteres as $programa)
							                {
								                echo $programa['cantidad'] . ',';
								            }				    
							            echo "]}]
							        });
								 });								 
							});						
							
							function formatDollar(num) {
								num = num / 1000;
								 var p = num.toFixed(0).split('.');
								 return '$' + p;
							}
						   </script>
						   ";?>
				<div class="row">
					<div class="span12">
						<div class="alert alert-info">
							<h4><?php echo $convocatoria->nombre; ?></h4>
						</div>
						<div class="row">					
							<div class="span3">
								<div id="programasInteresPastel" class="well well-small" style="height: 200px;"></div>
							</div>
							<div class="span3">
								<div id="programasInteresLinea" class="well well-small" style="height: 200px;"></div>
							</div>
							<div class="span3">
								<div class="well well-small" style="height: 200px;">
									<h4 class="text-center">Monto</h4>
									<table class="table">
										<thead>
											<tr>
												<th style="text-align:center">Aceptado</th>
												<th style="text-align:center">Pendiente</th>
												<th style="text-align:center">Rechazado</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center"><span class="label label-success"><?php echo '$' . Solicitud::model()->formatMoney($info[0]['MontoAceptado']); ?></span></td>
												<td style="text-align:center"><span class="label label-warning"><?php echo '$' . Solicitud::model()->formatMoney($info[0]['MontoPendiente']); ?></span></td>
												<td style="text-align:center"><span class="label label-important"><?php echo '$' . Solicitud::model()->formatMoney($info[0]['MontoRechazado']); ?></span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="span3">
								<div class="well well-small" style="height: 200px;">
									<h4 class="text-center">Proyectos</h4>
									<table class="table">
										<thead>
											<tr>
												<th style="text-align:center">Aceptado</th>
												<th style="text-align:center">Pendiente</th>
												<th style="text-align:center">Rechazado</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center">
													<?php echo CHtml::link('<span class="label label-success">'.$info[0]['Aceptadas'].'</span>',
																		array('solicitud/solicitudesestatus','convocatoria'=>$convocatoria->id,'tipoEstatus'=>1)); ?>
												</td>
												<td style="text-align:center"><span class="label label-warning"><?php echo Solicitud::model()->formatMoney($info[0]['Pendientes']); ?></span></td>
												<td style="text-align:center"><span class="label label-important"><?php echo Solicitud::model()->formatMoney($info[0]['Rechazadas']); ?></span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>						
					</div>
<?php 	} else { ?>
			<h3>No hay solicitudes todavía</h3>
<?php }	?>				
	</div>		
</div>