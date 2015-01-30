<?php 
	$this->breadcrumbs=array(
		'Administrador',
	);
	$configuraciones = Configuracion::model()->findAll("tipografica = 'General'");
	$presupuestoFormateado = array();
	foreach($configuraciones as $config){
		
		$criteria = new CDbCriteria();	
		$criteria->select = 'sum(importe) as importe, semana, temporada';
		$criteria->condition = 'temporada = :temp';
		$criteria->group = 'semana';
		$criteria->order = 'semana ASC';
		$criteria->params = array(':temp' => $config->valor);
		
		$presupuestos = Presupuesto::model()->findAll($criteria);
		
		foreach($presupuestos as $p){
			$presupuestoFormateado[$config->descripcion][] = array('importe' => $p->importe, 'semana'=> $p->semana, 'temporada' => $p->temporada);			
		}		
	}	
?>
<script type="text/javascript">
	$(function () {
    $('#graficageneral').highcharts({
        title: {
            text: 'Gráfica General',
            x: -20
        },
        subtitle: {
            text: 'Costos Totales',
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
		        				<?php foreach($presupuestoFormateado["Presupuesto"] as $p){	        									
		        									echo $p['importe'] .","; 
													}
	        					?>
		        	
	        	],      	
        	},
        	{
	        	name:'Anterior',
	        	data: [
		        				<?php foreach($presupuestoFormateado["Anterior"] as $p){	        									
		        									echo $p['importe'] .","; 
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

<div class="row">
  <div class="span12">
  	<div id="graficageneral"></div>
  </div>
</div>
