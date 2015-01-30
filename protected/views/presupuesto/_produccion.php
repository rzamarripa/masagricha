<?php
	if(!empty($valores["empresa"])){
		$empresa = Empresa::model()->find("id = ". $valores["empresa"]);
	}


?>
<script type="text/javascript">
	$( "li" ).removeClass("active");
	$( "#manoobra" ).addClass("active");
	$(function () {
    $('#grafica').highcharts({
        title: {
            text: '<?php echo $empresa->nombre; ?>',
            x: -20
        },
        subtitle: {
            text: "Mano de Obra, Fertilizantes y Agroquímicos | <?php echo (isset($valores["lote"])) ? 'Lote ' . $valores["lote"] : 'Todos los Lotes'; ?>",
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
        series: [

        	{
	        	name:'Presupuesto',
	        	data: [
		        				<?php
			        				if(isset($presupuestoFormateado["Presupuesto"])){
			        					foreach($presupuestoFormateado["Presupuesto"] as $p){
	        									echo $p['importe'] .",";
												}
											}
	        					?>

	        	],
        	},
        	{
	        	name:'Anterior',
	        	data: [
		        				<?php
			        				if(isset($presupuestoFormateado["Anterior"])){
				        				foreach($presupuestoFormateado["Anterior"] as $p){
		        									echo $p['importe'] .",";
													}
			        				}

	        					?>

	        	],
        	},
        	{
	        	name:'Actual',
	        	data: [
		        				<?php
			        				if(isset($presupuestoFormateado["Actual"])){
			        					foreach($presupuestoFormateado["Actual"] as $p){
	        									echo $p['importe'] .",";
												}
											}
	        					?>

	        	],
        	},
        ]
    });
});
</script>