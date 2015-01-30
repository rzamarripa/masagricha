	<tr>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fecha_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaReporteInicio_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaReporteFin_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->compania); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->plaza); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->centroVenta); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->usuario->usuario); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->estatus->reporte); ?>
		</td>
		<?php /*
		<td>
			<?php echo CHtml::encode($data->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->oportunidad1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cliente1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->folioObra1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeVenta1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaCierre1_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->oportunidad2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cliente2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->folioObra2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeVenta2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaCierre2_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->oportunidad3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cliente3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->folioObra3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeVenta3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaCierre3_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->oportunidad4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cliente4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->folioObra4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeVenta4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaCierre4_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->oportunidad5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cliente5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->folioObra5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeVenta5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaCierre5_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->oportunidad6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cliente6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->folioObra6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeVenta6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaCierre6_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->oportunidad7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cliente7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->folioObra7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeVenta7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaCierre7_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->oportunidad8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cliente8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->folioObra8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeVenta8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaCierre8_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->oportunidad9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cliente9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->folioObra9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeVenta9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaCierre9_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->oportunidad10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cliente10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->folioObra10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeVenta10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaCierre10_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->numeroSinter1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->descripcionObra1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeFactura1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->numeroSinter2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->descripcionObra2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeFactura2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->numeroSinter3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->descripcionObra3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeFactura3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->numeroSinter4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->descripcionObra4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeFactura4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->numeroSinter5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->descripcionObra5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeFactura5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->numeroSinter6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->descripcionObra6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeFactura6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->numeroSinter7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->descripcionObra7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeFactura7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->numeroSinter8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->descripcionObra8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeFactura8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->numeroSinter9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->descripcionObra9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeFactura9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->numeroSinter10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->descripcionObra10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importeFactura10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreClienteVisitado1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contacto1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puesto1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisita1_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContacto1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultado1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisita1_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreClienteVisitado2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contacto2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puesto2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisita2_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContacto2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultado2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisita2_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreClienteVisitado3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contacto3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puesto3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisita3_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContacto3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultado3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisita3_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreClienteVisitado4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puesto4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contacto4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisita4_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContacto4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultado4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisita4_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreClienteVisitado5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puesto5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contacto5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisita5_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContacto5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultado5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisita5_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreClienteVisitado6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puesto6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contacto6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisita6_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContacto6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultado6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisita6_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreClienteVisitado7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puesto7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contacto7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisita7_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContacto7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultado7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisita7_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreClienteVisitado8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puesto8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contacto8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisita8_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContacto8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultado8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisita8_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreClienteVisitado9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puesto9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contacto9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisita9_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContacto9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultado9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisita9_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreClienteVisitado10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puesto10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contacto10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisita10_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContacto10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultado10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisita10_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreProspectoNuevo1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contactoProspectoNuevo1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puestoProspectoNuevo1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisitaProspectoNuevo1_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContactoProspectoNuevo1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultadoProspectoNuevo1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisitaProspectoNuevo1_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreProspectoNuevo2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contactoProspectoNuevo2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puestoProspectoNuevo2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisitaProspectoNuevo2_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContactoProspectoNuevo2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultadoProspectoNuevo2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisitaProspectoNuevo2_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreProspectoNuevo3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contactoProspectoNuevo3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puestoProspectoNuevo3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisitaProspectoNuevo3_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContactoProspectoNuevo3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultadoProspectoNuevo3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisitaProspectoNuevo3_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreProspectoNuevo4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contactoProspectoNuevo4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puestoProspectoNuevo4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisitaProspectoNuevo4_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContactoProspectoNuevo4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultadoProspectoNuevo4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisitaProspectoNuevo4_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreProspectoNuevo5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contactoProspectoNuevo5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puestoProspectoNuevo5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisitaProspectoNuevo5_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContactoProspectoNuevo5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultadoProspectoNuevo5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisitaProspectoNuevo5_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreProspectoNuevo6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contactoProspectoNuevo6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puestoProspectoNuevo6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisitaProspectoNuevo6_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContactoProspectoNuevo6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultadoProspectoNuevo6); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisitaProspectoNuevo6_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreProspectoNuevo7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contactoProspectoNuevo7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puestoProspectoNuevo7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisitaProspectoNuevo7_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContactoProspectoNuevo7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultadoProspectoNuevo7); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->zonaRecorrida2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisitaProspectoNuevo7_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreProspectoNuevo8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contactoProspectoNuevo8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puestoProspectoNuevo8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisitaProspectoNuevo8_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContactoProspectoNuevo8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultadoProspectoNuevo8); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisitaProspectoNuevo8_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreProspectoNuevo9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contactoProspectoNuevo9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puestoProspectoNuevo9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisitaProspectoNuevo9_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContactoProspectoNuevo9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultadoProspectoNuevo9); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisitaProspectoNuevo9_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombreProspectoNuevo10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->contactoProspectoNuevo10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puestoProspectoNuevo10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaVisitaProspectoNuevo10_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoContactoProspectoNuevo10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->resultadoProspectoNuevo10); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaProximaVisitaProspectoNuevo10_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->zonaRecorrida1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->clienteFrecuente1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cantidadObras1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaRecorrido1_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->observacionesObra1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->folioSinter1); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->clienteFrecuente2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cantidadObras2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaRecorrido2_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->observacionesObra2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->folioSinter2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->zonaRecorrida3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->clienteFrecuente3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cantidadObras3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaRecorrido3_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->observacionesObra3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->folioSinter3); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->zonaRecorrida4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->clienteFrecuente4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cantidadObras4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaRecorrido4_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->observacionesObra4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->folioSinter4); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->zonaRecorrida5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->clienteFrecuente5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cantidadObras5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaRecorrido5_f); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->observacionesObra5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->folioSinter5); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->presupuestoVigente); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->presupuestoImporte); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->presupuestoNuevaSemana); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->presupuestoNuevoMes); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->obraVigente); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->obraPotencialM2); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->obraEventoProg); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->obraEventoVencido); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->obraEventoPorVencer); ?>
		</td>		
		*/ ?>
	</tr>