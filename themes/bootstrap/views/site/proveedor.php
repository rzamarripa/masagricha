<?php
	$this->breadcrumbs=array(
		'Proveedor',
	);

	$ordenesPendientes = OrdenCompra::model()->count('estatus_did = 1 && proveedor_aid = '.$proveedorId);
	$ordenesPagadas = OrdenCompra::model()->count('estatus_did = 2 && proveedor_aid = '.$proveedorId);
    $ordenesAgendadas = OrdenCompra::model()->count('estatus_did = 3 && proveedor_aid = '.$proveedorId);
    
	$ordenes = '
		<div class="alert">
			<h2>Órdenes</h2>
		</div>
		<ul>
			<li class="plan-feature">' . $ordenesPendientes .' Pendientes</li>
			<li class="plan-feature">' . $ordenesPagadas . ' Pagadas</li>
            <li class="plan-feature">' . $ordenesAgendadas . ' Agendadas</li>
		</ul>
	';
	
    $requisicionesPendientes = ProveedoresPorRequisicion::model()->count('estatus_did = 2 && proveedor_aid = '.$proveedorId);
    $cotizacionesCotizadas = Cotizacion::model()->count('estatus_did = 3 && proveedor_aid = '.$proveedorId);
    $cotizacionesAceptadas = Cotizacion::model()->count('estatus_did = 4 && proveedor_aid = '.$proveedorId);
    
	$cotizacion = '
		<div class="alert alert-success">
			<h2>Cotizaciones</h2>
		</div>
		<ul>
			<li class="plan-feature">' . $requisicionesPendientes . ' Pendientes</li>
			<li class="plan-feature">' . $cotizacionesCotizadas . ' Cotizadas</li>
            <li class="plan-feature">' . $cotizacionesAceptadas . ' Aceptadas</li>
		</ul>
	';
?>
<div class="row">
	<div class="span12">
		<div class="row-fluid pricing-table pricing-two-column">			
        	<div class="span12 plan">	
                <?php echo CHtml::link($cotizacion,array('proveedor/dashboard','proveedorId'=>$proveedorId)); ?>
			</div>
			<?php
	        /*
<div class="span6 plan">
				<?php echo CHtml::link($ordenes,array('ordenCompra/dashboard','proveedorId'=>$proveedorId)); ?>
			</div>
*/
			?>
		</div>
	</div>
</div>