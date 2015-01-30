<?php
	$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
	$capas = array("Pagadas","Pendientes");
	$ordenesPendientesPorMes = array();
	$ordenesPorMes = array();
	
	for($i = 1; $i <= 12; $i++)
	{
		$ordenesPendientes = Yii::app()->db->createCommand("SELECT SUM(oc.totalFactura) as cantidad 
			FROM DetalleContrarecibo oc WHERE oc.estatus_did = 1 && MONTH(fechaOrdenCompra_f) = " . $i . " && YEAR(fechaOrdenCompra_f) = " . date('Y'))->queryAll();
		$ordenesPagadas = Yii::app()->db->createCommand("SELECT SUM(oc.totalFactura) as cantidad 
			FROM DetalleContrarecibo oc WHERE oc.estatus_did = 2 && MONTH(fechaOrdenCompra_f) = " . $i . " && YEAR(fechaOrdenCompra_f) = " . date('Y'))->queryAll();
		$ordenesAgendadas = Yii::app()->db->createCommand("SELECT SUM(oc.totalFactura) as cantidad 
			FROM DetalleContrarecibo oc WHERE oc.estatus_did = 3 && MONTH(fechaOrdenCompra_f) = " . $i . " && YEAR(fechaOrdenCompra_f) = " . date('Y'))->queryAll();
		$ordenesPorMes[$i]['pagadas'] = $ordenesPagadas[0]['cantidad'];
		$ordenesPorMes[$i]['pendientes'] = $ordenesPendientes[0]['cantidad'];
		//$ordenesPorMes[$i]['agendadas'] = $ordenesAgendadas[0]['cantidad'];
	}		
	
	$deudaProveedores = Yii::app()->db->createCommand("select p.id, p.nombre, month(fecha_f) as mes, sum(total) as cantidad from OrdenCompra oc
inner join Proveedor p on p.id = oc.proveedor_aid
where oc.estatus_did = 1
group by oc.proveedor_aid, month(fecha_f)
order by oc.proveedor_aid;")->queryAll();
	//Para mostrar la tabla de proveedores que les debemos
	$deudaPorProveedor = Yii::app()->db->createCommand("select p.id, p.nombre, month(fecha_f) as mes, format(sum(total), 2) as cantidad from OrdenCompra oc
inner join Proveedor p on p.id = oc.proveedor_aid
where oc.estatus_did = 1
group by oc.proveedor_aid
order by oc.proveedor_aid;")->queryAll();
	$totalDeuda[0]["cantidad"] = 0;
	$totalDeuda = Yii::app()->db->createCommand("select format(sum(totalFactura), 2) as cantidad from DetalleContrarecibo oc
where oc.estatus_did = 1;")->queryAll();

	$totalPagado = Yii::app()->db->createCommand("select format(sum(totalFactura), 2) as cantidad from DetalleContrarecibo oc
where oc.estatus_did = 2;")->queryAll();

	$totalOrdenes = Yii::app()->db->createCommand("select format(sum(total), 2) as cantidad from OrdenCompra oc
where oc.estatus_did = 1;")->queryAll();
	

	$cont = 0;
	$primera = 1;
	$mesesDeDeuda = array(0,0,0,0,0,0,0,0,0,0,0,0);
	
	
	/*
if($primera == 1)
		{
			$primera = 0;
			$proveedorAnterior = $deudaProveedor;
			$meses[$deudaProveedor["mes"]] = $deudaProveedor["cantidad"];
		}
		else if($proveedorAnterior["id"] == $deudaProveedor["id"])
		{
			$meses[$deudaProveedor["mes"]] = $deudaProveedor["cantidad"];
		}
		else if($proveedorAnterior["id"] != $deudaProveedor["id"])
		{
			echo "{name:'" . $deudaProveedor["nombre"]. "',";
			echo "data:[";
			foreach($meses	as $key => $value)
			{
				echo $value . ",";
			}
			echo "]},";
		}
*/
	$proveedorAnterior = array();
	
	/*
echo '<pre>';print_r($deudaProveedores); echo "</pre>";
	exit;
*/
	echo "
	<script>
		$(function () {
	        $('#container').highcharts({
	            chart: {
	                type: 'column'
	            },
	            title: {
	                text: 'Órdenes de Compra'
	            },
	            subtitle: {
	                text: 'Pendientes y Pagadas por mes'
	            },
	            xAxis: {
	                categories: [ ";
                	 foreach($meses as $mes)
		                {
		                	echo '"' . $mes . '",';
		                }
			            echo "]
	            },
	            yAxis: {
	                min: 0,
	                title: {
	                    text: 'Cantidad ($)'
	                }
	            },
	            tooltip: {
	                headerFormat: '<span>{point.key}</span><table>',
	                pointFormat: '<tr><td>{series.name}: </td>' +
	                    '<td><b>{point.y:.1f} pesos</b></td></tr>',
	                footerFormat: '</table>',
	                shared: true,
	                useHTML: true
	            },
	            plotOptions: {
	                column: {
	                    pointPadding: 0.2,
	                    borderWidth: 0
	                }
	            },
	            series: [";
	                echo '{name: "Pendientes", data: [';		                			                	
			        for($x = 1; $x <= 12; $x++)
					{
			        	echo (empty($ordenesPorMes[$x]['pendientes'])) ? "0,": $ordenesPorMes[$x]['pendientes'] . ", ";		                			                
			        }
			        echo "]},";
			        echo '{name: "Pagadas", data: [';		                			                	
			        for($x = 1; $x <= 12; $x++)
					{
			            echo ($ordenesPorMes[$x]['pagadas'] == "") ? "0,": $ordenesPorMes[$x]['pagadas'] . ", ";
			        }
			        echo "]},";
			        /*
echo '{name: "Remanente", data: [';		                			                	
			        for($x = 1; $x <= 12; $x++)
					{
			        	echo (empty($ordenesPorMes[$x]['agendadas'])) ? "0,": $ordenesPorMes[$x]['agendadas'] . ", ";		                			                
			        }
			        echo "]},";
*/
	            echo "]
	        });
	        
	        $('#deudaProveedor').highcharts({
	            chart: {
	                type: 'line',
	                marginRight: 130,
	                marginBottom: 25
	            },
	            title: {
	                text: 'Deuda mensual por proveedor',
	                x: -20 //center
	            },
	            subtitle: {
	                text: 'Fuente: Órdenes de compra',
	                x: -20
	            },
	            xAxis: {
	                categories: [ ";
                	 foreach($meses as $mes)
		                {
		                	echo '"' . $mes . '",';
		                }
			            echo "]
	            },
	            yAxis: {
	                title: {
	                    text: 'Cantidad ($)'
	                },
	                plotLines: [{
	                    value: 0,
	                    width: 1,
	                    color: '#808080'
	                }]
	            },
	            tooltip: {
	                formatter: function() {
	                    return '<b>'+ this.x +'</b><br/>'+
	                        this.series.name +': '+ formatDollar(this.y);
	                }
	            },
	            legend: {
	                layout: 'vertical',
	                align: 'left',
	                verticalAlign: 'top',
	                x: -10,
	                y: 100,
	                borderWidth: 0
	            },
	            series: [";
	            
	            foreach($deudaProveedores as $proveedorActual)
				{			
					if($primera == 1)
					{
						$primera = 0;
						$proveedorAnterior = $proveedorActual;
						$mesesDeDeuda[$proveedorActual["mes"]-1] = $proveedorActual["cantidad"];
					}
					else if($proveedorAnterior["id"] == $proveedorActual["id"])
					{
						$mesesDeDeuda[$proveedorActual["mes"]-1] = $proveedorActual["cantidad"];
					}
					else if($proveedorAnterior["id"] != $proveedorActual["id"])
					{
						echo "{name:'" . $proveedorAnterior["nombre"]. "',";
						echo "data:[";
						foreach($mesesDeDeuda	as $key => $value)
						{
							echo $value . ",";
						}
						echo "]},";
						$mesesDeDeuda = array(0,0,0,0,0,0,0,0,0,0,0,0);
						$mesesDeDeuda[$proveedorActual["mes"]-1] = $proveedorActual["cantidad"];
						$proveedorAnterior = $proveedorActual;
					}
					$cont++;
					if($cont == count($deudaProveedores))
					{
						echo "{name:'" . $proveedorAnterior["nombre"]. "',";
						echo "data:[";
						foreach($mesesDeDeuda	as $key => $value)
						{
							echo $value . ",";
						}
						echo "]},";
					}
					
				}        
	       echo "]});
	    });
	    
	    function formatDollar(num) {
			num = num / 1000;
		    var p = num.toFixed(3).split('.');
		    return '$' + p;
		}
	</script>
";
?>
<div class="row">
	<div class="span9">
		<div class="row">
			<div class="span3 text-center">
				<h4>Pagado</h4>
				<div class="well" style="height:100px;">			
					<p class="text-success" style="font-size:30pt; margin-top:35px"><?php echo '$' . $totalPagado[0]["cantidad"]; ?></p>
				</div>
			</div>
			<div class="span3 text-center">
				<h4>Pasivo</h4>
				<div class="well" style="height:100px;">			
					<p class="text-error" style="font-size:30pt; margin-top:35px"><?php echo '$' . $totalDeuda[0]["cantidad"]; ?></p>
				</div>
			</div>			
			<div class="span3 text-center">
				<h4>Órdenes</h4>
				<div class="well" style="height:100px;">			
					<p class="text-warning" style="font-size:30pt; margin-top:35px"><?php echo '$' . $totalOrdenes[0]["cantidad"]; ?></p>
				</div>
			</div>	
		</div>
		<div class='row'>
			<div class="span9">
				<div id="container" class="well well-small" style="height: 350px;"></div>
			</div>
		</div> 
		<?php /*<div class='row'>
			<div class="span9">
				<div id="deudaProveedor" class="well well-small" style="height: 350px;"></div>
			</div>
		</div>*/ ?>
	</div>
	<div class="span3 text-center">
		<h4>Proveedores</h4>
		<div class="well" style="height:880px;overflow: auto;">		
			<?php 
				$this->widget('bootstrap.widgets.TbGridView',array(
				'id'=>'proveedorDeudad-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'type'=>'striped bordered condensed',
				'columns'=>array(
					'codigo',
					array(
			            'name'=>'nombre',
						'header'=>'Nombre',
						'type'=>'raw',
						'value'=>'CHtml::link($data["nombre"],Yii::app()->createUrl("proveedor/mostrardocumentos", array("id"=>$data["id"])))',
						'htmlOptions'=>array('class'=>'span10'),                        
			           ),
			           array(
			           			'header' => 'Cantidad',
			           			'name' => 'id',
					   			'type' => 'raw',
						        'value' => '$data->getDeuda($data["id"])',
						),
					/*
					array('name'=>'estatus_did',
					        'value'=>'$data->estatus->nombre',
						    'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre'),),
					'fechaCreacion_f',					
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
					),*/
				),
			)); ?>
		</div>
	</div>
</div>
