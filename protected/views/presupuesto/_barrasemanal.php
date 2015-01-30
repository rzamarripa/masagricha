<?php

	if(!empty($valores["grupoCostos"])){
		$grupoCostos = GrupoCostos::model()->find("id = ". $valores["grupoCostos"]);
	}

	$lotes = array();
	foreach($presupuesto as $p){
		$lotes[] = $p["lote"];
	}

	foreach($actual as $a){
		$lotes[] = $a["lote"];
	}
	$lotes = array_unique($lotes);
	sort($lotes);

	$valor = 0;
	$empresa = Empresa::model()->find("id = " . $valores["empresa"]);
?>

<script>
$(function () {
	$('#costos').show();
    $('#grafica').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: '<?php echo $empresa->nombre; ?>'
        },
        subtitle: {
            text: '<?php echo (!empty($valores["grupoCostos"])) ? $grupoCostos->nombre . " | " : 'Todos los Costos | '; ?><?php echo (!empty($valores["semana"])) ? "Semana " . $valores["semana"]: "Todas las Semanas"; ?>'
        },
        xAxis: {
            categories: [<?php foreach($lotes as $l) { echo $l . ", "; } ?>]
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Pesos ($)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: 		'<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                						'<td style="padding:0"><b>$ {point.y:,.2f}</b></td></tr>',
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
        series: [{
            name: 'Presupuesto',
            data: [<?php foreach($lotes as $l) {
	            							foreach($presupuesto as $p){
		            							if($l == $p["lote"]){
			            							$valor = $p["importe"];
		            							}
		            						}
		            						echo $valor . ", ";
		            						$valor = 0;
	            						}?>]
        }, {
            name: 'Actual',
            data: [<?php foreach($lotes as $l) {
	            							foreach($actual as $a){
		            							if($l == $a["lote"]){
			            							$valor = $a["importe"];
		            							}
		            						}
		            						echo $valor . ", ";
		            						$valor = 0;

	            						}?>]

        }]
    });
});
</script>