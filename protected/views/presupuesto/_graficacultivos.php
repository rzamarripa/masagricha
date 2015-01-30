<?php
	if(!empty($valores["grupoCostos"])){
		$grupoCostos = GrupoCostos::model()->find("id = ". $valores["grupoCostos"]);
	}

	if($valores["empresa"] != ""){
		$empresa = Empresa::model()->find("id = ". $valores["empresa"]);
	}
	
	
	$valoresFormateados = array();	

	if(!isset($presupuesto["Anterior"])){
		$presupuesto["Anterior"][] = array();
	}
	
	if(!isset($presupuesto["Actual"])){
		$presupuesto["Actual"][] = array();
	}
	
	$presupuesto = array();
	$anterior = array();
	$actual = array();
	$presupuesto = $presupuestos["Presupuesto"];
	$anterior = $presupuestos["Anterior"];
	$actual = $presupuestos["Actual"];
	
	$presupuestoFormateado = array();
	$anteriorFormateado = array();
	$actualFormateado = array();
	
	//Obtengo la primer y última semana
	$primerSemana = $semanas[0]["menor"];
	$ultimaSemana = $semanas[0]["mayor"];	

	// Pregunto si la semana es mayor que 0 para iniciar desde la semana 1, de lo contrario iniciaría con la menor semana
	
		
	$contPresupuesto = 0;
	$contAnterior = 0;
	$contActual = 0;

	foreach($presupuesto as $p){
		$semanaPresupuesto = ($primerSemana + $contPresupuesto);
		if($p["semana"] == $semanaPresupuesto){
			$presupuestoFormateado["Presupuesto"][] = $p;
		}else{
			for($d = $semanaPresupuesto; $d < $p["semana"]; $d++){
				$presupuestoFormateado["Presupuesto"][] = array(
																	"bultos" => 0,
																	"cultivo" => $p["cultivo"],
																	"temporada" => $p["temporada"],
																	"semana" => ($primerSemana + $contPresupuesto),
																);														
																$contPresupuesto++;
			}				
			$presupuestoFormateado["Presupuesto"][] = $p;
		}
		$contPresupuesto++;
	}


	if(count($anterior)>1){
		foreach($anterior as $a){
			$semanaAnterior = ($primerSemana + $contAnterior);
			if($a["semana"] == $semanaAnterior){
				$presupuestoFormateado["Anterior"][] = $a;
				$contAnterior++;
			}else{
				for($d = $semanaAnterior; $d <= $a["semana"]; $d++){
					$presupuestoFormateado["Anterior"][] = array(
																		"bultos" => 0,
																		"cultivo" => $a["cultivo"],
																		"temporada" => $a["temporada"],
																		"semana" => ($primerSemana + $contAnterior),
																	);
																	$contAnterior++;
				}
			}			
		}
	}
	
	if(count($actual)>1){
		foreach($actual as $ac){
			$semanaActual = ($primerSemana + $contActual);
			if($ac["semana"] == $semanaActual){
				$presupuestoFormateado["Actual"][] = $ac;
				$contActual++;
			}else{
				for($d = $semanaActual; $d <= $ac["semana"]; $d++){
					$presupuestoFormateado["Actual"][] = array(
																		"bultos" => 0,
																		"cultivo" => $ac["cultivo"],
																		"temporada" => $ac["temporada"],
																		"semana" => ($primerSemana + $contActual),
																	);
																	$contActual++;
				}
			}			
		}
	}
	
	// Pregunto si la semana es mayor que 0 para iniciar desde la semana 1, de lo contrario iniciaría con la menor semana
	/*
	if($primerSemana > 0){
		for($i = 0; $i < count($presupuesto); $i++){
			
		}
	}else{
		for($i = 0; $i < count($presupuesto); $i++){
			if($presupuesto[(int)$i]["semana"] == $primerSemana + $i){
				$presupuestoFormateado[] = $datos[$i];
			}else{
				$presupuestoFormateado[] =	[
																			"importe" => 0,
																			"lote" => $datos[$i]["lote"],
																			"temporada" => $datos[$i]["temporada"],
																			"semana" => ($i - $primerSemana)
																		];
			}
		}
	}*/
	
?>
<script type="text/javascript">
	$(function () {
		$('#costos').hide();
    $('#grafica').highcharts({
        title: {
          text: "<?php echo ($valores["empresa"] != "") ? $empresa->nombre : "Gráfica General"; ?>" ,
          x: -20
        },
        subtitle: {
          text: "<?php echo (isset($valores["cultivo"])) ? $valores["descripcion"] : 'Todos los Cultivos'; ?>",
          x: -20
        },
        xAxis: {
          categories: [<?php for($i=$primerSemana; $i<=$ultimaSemana; $i++){ echo $i . ","; }  ?>]
        },
        yAxis: {
            title: {
                text: 'Bultos'
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
            pointFormat: '<span style="color:{series.color}">\u25CF</span> Bultos: {point.y:,.2f}',
            headerFormat: '<span style="color:{series.color}">\u25CF</span> Semana: <b>{point.x}</b><br/>'
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
		        				<?php foreach($presupuestoFormateado["Presupuesto"] as $p){
		        									echo $p['bultos'] .",";
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
		        									echo $p['bultos'] .",";
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
		        									echo $p['bultos'] .",";
													}
												}
	        					?>

	        	],
        	},
        ]
    });
});
</script>