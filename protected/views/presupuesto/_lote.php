<?php
	if(!empty($valores["grupoCostos"])){
		$grupoCostos = GrupoCostos::model()->find("id = ". $valores["grupoCostos"]);
	}

	if($valores["empresa"] != ""){
		$empresa = Empresa::model()->find("id = ". $valores["empresa"]);
	}
	
	$valoresFormateados = array();	

	//Separo el arreglo por concepto (Presupuesto, Real, Anterior)
	$presFormateado = array();
	foreach($configuraciones as $config){
		foreach($datos as $dato){
			if($config->valor == $dato["temporada"]){
				$presFormateado[$config->descripcion][] = $dato;
			}
		}
	}
	if(!isset($presFormateado["Anterior"])){
		$presFormateado["Anterior"][] = array();
	}
	
	$presupuesto = array();
	$anterior = array();
	$actual = array();
	$presupuesto = $presFormateado["Presupuesto"];
	$anterior = $presFormateado["Anterior"];
	$actual = $presFormateado["Actual"];
	
	$presupuestoFormateado = array();
	$anteriorFormateado = array();
	$actualFormateado = array();
	
	//Obtengo la primer y última semana
	$primerSemana = $datos[1]["semana"];
	$ultimaSemana = $datos[1]["semana"];

	foreach($datos as $dato){
		if($dato["semana"] < $primerSemana){
			$primerSemana = $dato["semana"];
		}
		if($dato["semana"] > $ultimaSemana){
			$ultimaSemana = $dato["semana"];
		}
	}
	
	

	// Pregunto si la semana es mayor que 0 para iniciar desde la semana 1, de lo contrario iniciaría con la menor semana
	if($primerSemana < 0){
		
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
																		"importe" => 0,
																		"lote" => $p["lote"],
																		"temporada" => $p["temporada"],
																		"semana" => ($primerSemana + $contPresupuesto),
																	);
				}				
			}
			$contPresupuesto++;
		}
		
		for($i = 0; $i<=count($presFormateado); $i++){
			
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
																			"importe" => 0,
																			"lote" => $a["lote"],
																			"temporada" => $a["temporada"],
																			"semana" => ($primerSemana + $contAnterior),
																		);
																		$contAnterior++;
					}
				}			
			}
		}
		
		
		foreach($actual as $ac){
			$semanaActual = ($primerSemana + $contActual);
			if($ac["semana"] == $semanaActual){
				$presupuestoFormateado["Actual"][] = $ac;
				$contActual++;
			}else{
				for($d = $semanaActual; $d <= $ac["semana"]; $d++){
					$presupuestoFormateado["Actual"][] = array(
																		"importe" => 0,
																		"lote" => $ac["lote"],
																		"temporada" => $ac["temporada"],
																		"semana" => ($primerSemana + $contActual),
																	);
																	$contActual++;
				}
			}			
		}
	}else{ //En caso de iniciar con meses mayores o igual a 0 entra aquí
		/*
		$contPresupuesto = 0;
		$contAnterior = 0;
		$contActual = 0;
		
		foreach($presupuesto as $p){
			$semanaPresupuesto = ($primerSemana + $contPresupuesto);
			if($p["semana"] == $semanaPresupuesto){
				$presupuestoFormateado["Presupuesto"][] = $p;
			}else{
				for($d = $semanaPresupuesto; $d < $p["semana"]; $d++){
					$presupuestoFormateado["Presupuesto"][] = [
																		"importe" => 0,
																		"lote" => $p["lote"],
																		"temporada" => $p["temporada"],
																		"semana" => ($primerSemana + $contPresupuesto),
																	];
				}				
			}
			$contPresupuesto++;
		}
		
		foreach($anterior as $a){
			$semanaAnterior = ($primerSemana + $contAnterior);
			echo $a["semana"] . "==" . $semanaAnterior . "<br/>";
			if($a["semana"] == $semanaAnterior){
				echo "Entró | ";
				$presupuestoFormateado["Anterior"][] = $a;
				$contAnterior++;
			}else{
				echo "No Entró | ";
				for($d = $semanaAnterior; $d < $a["semana"]; $d++){
					echo $d . " | ";
					$presupuestoFormateado["Anterior"][] = [
																		"importe" => 0,
																		"lote" => $a["lote"],
																		"temporada" => $a["temporada"],
																		"semana" => ($primerSemana + $contAnterior),
																	];
																	$contAnterior++;
				}
			}			
		}
		
		foreach($actual as $ac){
			$semanaActual = ($primerSemana + $contActual);
			echo $ac["semana"] . "==" . $semanaActual . "<br/>";
			if($ac["semana"] == $semanaActual){
				echo "Entró | ";
				$presupuestoFormateado["Actual"][] = $ac;
				$contActual++;
			}else{
				echo "No Entró | ";
				for($d = $semanaActual; $d < $ac["semana"]; $d++){
					echo $d . " | ";
					$presupuestoFormateado["Actual"][] = [
																		"importe" => 0,
																		"lote" => $ac["lote"],
																		"temporada" => $ac["temporada"],
																		"semana" => ($primerSemana + $contActual),
																	];
																	$contActual++;
				}
			}			
		}*/
		
		$contPresupuesto = 0;
		$contAnterior = 0;
		$contActual = 0;
		
		foreach($presupuesto as $p){
			$semanaPresupuesto = ($primerSemana + $contPresupuesto);
			if($p["semana"] == $semanaPresupuesto){
				$presupuestoFormateado["Presupuesto"][] = $p;
				$contPresupuesto++;
			}else{
				for($d = $semanaPresupuesto; $d <= $p["semana"]; $d++){
					$presupuestoFormateado["Presupuesto"][] = array(
																		"importe" => 0,
																		"lote" => $p["lote"],
																		"temporada" => $p["temporada"],
																		"semana" => ($primerSemana + $contPresupuesto),
																	);
					$contPresupuesto++;
				}				
			}			
		}
		
		
		for($i = 0; $i<=count($presFormateado); $i++){
			
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
																			"importe" => 0,
																			"lote" => $a["lote"],
																			"temporada" => $a["temporada"],
																			"semana" => ($primerSemana + $contAnterior),
																		);
																		$contAnterior++;
					}
				}			
			}
		}
		
		foreach($actual as $ac){
			$semanaActual = ($primerSemana + $contActual);
			if($ac["semana"] == $semanaActual){
				$presupuestoFormateado["Actual"][] = $ac;
				$contActual++;
			}else{
				for($d = $semanaActual; $d <= $ac["semana"]; $d++){
					$presupuestoFormateado["Actual"][] = array(
																		"importe" => 0,
																		"lote" => $ac["lote"],
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
    $('#grafica').highcharts({
        title: {
          text: "<?php echo ($valores["empresa"] != "") ? $empresa->nombre : "Gráfica General"; ?>" ,
          x: -20
        },
        subtitle: {
          text: "<?php echo (!empty($valores["grupoCostos"])) ? $grupoCostos->nombre . " | " : 'Mano de Obra, Agroquímicos, Fertilizantes | '; ?>
          			 <?php echo (isset($valores["lote"])) ? 'Lote ' . $valores["lote"] : 'Todos los Lotes'; ?>",
          x: -20
        },
        xAxis: {
          categories: [<?php for($i=$primerSemana; $i<=$ultimaSemana; $i++){ echo $i . ","; }  ?>]
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
		        				<?php foreach($presupuestoFormateado["Presupuesto"] as $p){
		        									echo $p['importe'] .",";
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
		        				<?php foreach($presupuestoFormateado["Actual"] as $p){
		        									echo $p['importe'] .",";
													}
	        					?>

	        	],
        	},
        ]
    });
});
</script>