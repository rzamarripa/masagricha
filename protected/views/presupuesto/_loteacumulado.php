<?php
	if(!empty($valores["grupoCostos"])){
		$grupoCostos = GrupoCostos::model()->find("id = ". $valores["grupoCostos"]);
	}
?> 
<script type="text/javascript">
	$(function () {
    $('#grafica').highcharts({
        title: {
            text: "<?php echo (isset($valores["lote"])) ? 'Lote ' . $valores["lote"] : 'Todos los Lotes'; ?>" ,
            x: -20
        },
        subtitle: {
            text: "<?php echo (!empty($valores["grupoCostos"])) ? $grupoCostos->nombre : 'Todos los Costos'; ?>",
            x: -20
        },
        xAxis: {
            categories: [<?php for($i=1; $i<=52; $i++){ echo $i . ","; }  ?>]
        },
        yAxis: {
            title: {
                text: 'Pesos($)'
            },
            min:0,
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '$',
            pointFormat: '<span style="color:{series.color}">\u25CF</span> Importe: ${point.y:,.2f}',
            headerFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: <b>{point.x}</b><br/>'
        },
        legend: {
            layout: 'horizontal',
            align: 'bottom',
            verticalAlign: 'bottom',
            borderWidth: 1
        },
        series: [<?php $temporadaActual = $datos[0]["temporada"];
						foreach($configuraciones as $config){
						?>
			        	{
				        	name:'<?php echo $config->valor; ?>',
				        	data: [<?php
					        				foreach($datos as $dato){
					        					if($config->valor == $dato["temporada"]){
															echo number_format($dato["importe"],2,".","") . ", ";
														}
													}
												?>
												],
			        	},
			    <?php } ?>]
    });
});
</script>