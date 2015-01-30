<?php 
	$this->breadcrumbs=array(
		'Súper Administrador',
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
<h1>Bienvenido Súper Administrador</h1>
