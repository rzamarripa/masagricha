<?php

/**
 * This is the model class for table "Reporte".
 *
 * The followings are the available columns in table 'Reporte':
 * @property string $id
 * @property string $fecha_f
 * @property string $fechaReporteInicio_f
 * @property string $fechaReporteFin_f
 * @property string $compania
 * @property string $plaza
 * @property string $centroVenta
 * @property string $nombre
 * @property double $ventaTotalSemana
 * @property double $ventaTotalMes
 * @property double $ventaTotalMeta
 * @property double $ventaM2Semana
 * @property double $ventaM2Mes
 * @property double $ventaM2Meta
 * @property double $pnpvSemana
 * @property double $pnpvMes
 * @property double $pnpvMeta
 * @property double $porcentajeAbisaSemana
 * @property double $porcentajeAbisaMes
 * @property double $porcentajeAvisaMeta
 * @property double $descPorcentajeSemana
 * @property double $descPorcentajeMes
 * @property double $descPorcentajeMeta
 * @property double $porFacturarVentaTotal
 * @property double $porFacturarVentaM2
 * @property string $oportunidad1
 * @property string $cliente1
 * @property string $folioObra1
 * @property string $importeVenta1
 * @property string $fechaCierre1_f
 * @property string $oportunidad2
 * @property string $cliente2
 * @property string $folioObra2
 * @property string $importeVenta2
 * @property string $fechaCierre2_f
 * @property string $oportunidad3
 * @property string $cliente3
 * @property string $folioObra3
 * @property string $importeVenta3
 * @property string $fechaCierre3_f
 * @property string $oportunidad4
 * @property string $cliente4
 * @property string $folioObra4
 * @property string $importeVenta4
 * @property string $fechaCierre4_f
 * @property string $oportunidad5
 * @property string $cliente5
 * @property string $folioObra5
 * @property string $importeVenta5
 * @property string $fechaCierre5_f
 * @property string $oportunidad6
 * @property string $cliente6
 * @property string $folioObra6
 * @property string $importeVenta6
 * @property string $fechaCierre6_f
 * @property string $oportunidad7
 * @property string $cliente7
 * @property string $folioObra7
 * @property string $importeVenta7
 * @property string $fechaCierre7_f
 * @property string $oportunidad8
 * @property string $cliente8
 * @property string $folioObra8
 * @property string $importeVenta8
 * @property string $fechaCierre8_f
 * @property string $oportunidad9
 * @property string $cliente9
 * @property string $folioObra9
 * @property double $importeVenta9
 * @property string $fechaCierre9_f
 * @property string $oportunidad10
 * @property string $cliente10
 * @property string $folioObra10
 * @property string $importeVenta10
 * @property string $fechaCierre10_f
 * @property string $numeroSinter1
 * @property string $descripcionObra1
 * @property double $importeFactura1
 * @property string $numeroSinter2
 * @property string $descripcionObra2
 * @property double $importeFactura2
 * @property string $numeroSinter3
 * @property string $descripcionObra3
 * @property double $importeFactura3
 * @property string $numeroSinter4
 * @property string $descripcionObra4
 * @property double $importeFactura4
 * @property string $numeroSinter5
 * @property string $descripcionObra5
 * @property double $importeFactura5
 * @property string $numeroSinter6
 * @property string $descripcionObra6
 * @property double $importeFactura6
 * @property string $numeroSinter7
 * @property string $descripcionObra7
 * @property double $importeFactura7
 * @property string $numeroSinter8
 * @property string $descripcionObra8
 * @property double $importeFactura8
 * @property string $numeroSinter9
 * @property string $descripcionObra9
 * @property double $importeFactura9
 * @property string $numeroSinter10
 * @property string $descripcionObra10
 * @property double $importeFactura10
 * @property string $nombreClienteVisitado1
 * @property string $contacto1
 * @property string $puesto1
 * @property string $fechaVisita1_f
 * @property string $tipoContacto1
 * @property string $resultado1
 * @property string $fechaProximaVisita1_f
 * @property string $nombreClienteVisitado2
 * @property string $contacto2
 * @property string $puesto2
 * @property string $fechaVisita2_f
 * @property string $tipoContacto2
 * @property string $resultado2
 * @property string $fechaProximaVisita2_f
 * @property string $nombreClienteVisitado3
 * @property string $contacto3
 * @property string $puesto3
 * @property string $fechaVisita3_f
 * @property string $tipoContacto3
 * @property string $resultado3
 * @property string $fechaProximaVisita3_f
 * @property string $nombreClienteVisitado4
 * @property string $puesto4
 * @property string $contacto4
 * @property string $fechaVisita4_f
 * @property string $tipoContacto4
 * @property string $resultado4
 * @property string $fechaProximaVisita4_f
 * @property string $nombreClienteVisitado5
 * @property string $puesto5
 * @property string $contacto5
 * @property string $fechaVisita5_f
 * @property string $tipoContacto5
 * @property string $resultado5
 * @property string $fechaProximaVisita5_f
 * @property string $nombreClienteVisitado6
 * @property string $puesto6
 * @property string $contacto6
 * @property string $fechaVisita6_f
 * @property string $tipoContacto6
 * @property string $resultado6
 * @property string $fechaProximaVisita6_f
 * @property string $nombreClienteVisitado7
 * @property string $puesto7
 * @property string $contacto7
 * @property string $fechaVisita7_f
 * @property string $tipoContacto7
 * @property string $resultado7
 * @property string $fechaProximaVisita7_f
 * @property string $nombreClienteVisitado8
 * @property string $puesto8
 * @property string $contacto8
 * @property string $fechaVisita8_f
 * @property string $tipoContacto8
 * @property string $resultado8
 * @property string $fechaProximaVisita8_f
 * @property string $nombreClienteVisitado9
 * @property string $puesto9
 * @property string $contacto9
 * @property string $fechaVisita9_f
 * @property string $tipoContacto9
 * @property string $resultado9
 * @property string $fechaProximaVisita9_f
 * @property string $nombreClienteVisitado10
 * @property string $puesto10
 * @property string $contacto10
 * @property string $fechaVisita10_f
 * @property string $tipoContacto10
 * @property string $resultado10
 * @property string $fechaProximaVisita10_f
 * @property string $nombreProspectoNuevo1
 * @property string $contactoProspectoNuevo1
 * @property string $puestoProspectoNuevo1
 * @property string $fechaVisitaProspectoNuevo1_f
 * @property string $tipoContactoProspectoNuevo1
 * @property string $resultadoProspectoNuevo1
 * @property string $fechaProximaVisitaProspectoNuevo1_f
 * @property string $nombreProspectoNuevo2
 * @property string $contactoProspectoNuevo2
 * @property string $puestoProspectoNuevo2
 * @property string $fechaVisitaProspectoNuevo2_f
 * @property string $tipoContactoProspectoNuevo2
 * @property string $resultadoProspectoNuevo2
 * @property string $fechaProximaVisitaProspectoNuevo2_f
 * @property string $nombreProspectoNuevo3
 * @property string $contactoProspectoNuevo3
 * @property string $puestoProspectoNuevo3
 * @property string $fechaVisitaProspectoNuevo3_f
 * @property string $tipoContactoProspectoNuevo3
 * @property string $resultadoProspectoNuevo3
 * @property string $fechaProximaVisitaProspectoNuevo3_f
 * @property string $nombreProspectoNuevo4
 * @property string $contactoProspectoNuevo4
 * @property string $puestoProspectoNuevo4
 * @property string $fechaVisitaProspectoNuevo4_f
 * @property string $tipoContactoProspectoNuevo4
 * @property string $resultadoProspectoNuevo4
 * @property string $fechaProximaVisitaProspectoNuevo4_f
 * @property string $nombreProspectoNuevo5
 * @property string $contactoProspectoNuevo5
 * @property string $puestoProspectoNuevo5
 * @property string $fechaVisitaProspectoNuevo5_f
 * @property string $tipoContactoProspectoNuevo5
 * @property string $resultadoProspectoNuevo5
 * @property string $fechaProximaVisitaProspectoNuevo5_f
 * @property string $nombreProspectoNuevo6
 * @property string $contactoProspectoNuevo6
 * @property string $puestoProspectoNuevo6
 * @property string $fechaVisitaProspectoNuevo6_f
 * @property string $tipoContactoProspectoNuevo6
 * @property string $resultadoProspectoNuevo6
 * @property string $fechaProximaVisitaProspectoNuevo6_f
 * @property string $nombreProspectoNuevo7
 * @property string $contactoProspectoNuevo7
 * @property string $puestoProspectoNuevo7
 * @property string $fechaVisitaProspectoNuevo7_f
 * @property string $tipoContactoProspectoNuevo7
 * @property string $resultadoProspectoNuevo7
 * @property string $zonaRecorrida2
 * @property string $fechaProximaVisitaProspectoNuevo7_f
 * @property string $nombreProspectoNuevo8
 * @property string $contactoProspectoNuevo8
 * @property string $puestoProspectoNuevo8
 * @property string $fechaVisitaProspectoNuevo8_f
 * @property string $tipoContactoProspectoNuevo8
 * @property string $resultadoProspectoNuevo8
 * @property string $fechaProximaVisitaProspectoNuevo8_f
 * @property string $nombreProspectoNuevo9
 * @property string $contactoProspectoNuevo9
 * @property string $puestoProspectoNuevo9
 * @property string $fechaVisitaProspectoNuevo9_f
 * @property string $tipoContactoProspectoNuevo9
 * @property string $resultadoProspectoNuevo9
 * @property string $fechaProximaVisitaProspectoNuevo9_f
 * @property string $nombreProspectoNuevo10
 * @property string $contactoProspectoNuevo10
 * @property string $puestoProspectoNuevo10
 * @property string $fechaVisitaProspectoNuevo10_f
 * @property string $tipoContactoProspectoNuevo10
 * @property string $resultadoProspectoNuevo10
 * @property string $fechaProximaVisitaProspectoNuevo10_f
 * @property string $zonaRecorrida1
 * @property string $clienteFrecuente1
 * @property integer $cantidadObras1
 * @property string $fechaRecorrido1_f
 * @property string $observacionesObra1
 * @property string $folioSinter1
 * @property string $clienteFrecuente2
 * @property integer $cantidadObras2
 * @property string $fechaRecorrido2_f
 * @property string $observacionesObra2
 * @property string $folioSinter2
 * @property string $zonaRecorrida3
 * @property string $clienteFrecuente3
 * @property integer $cantidadObras3
 * @property string $fechaRecorrido3_f
 * @property string $observacionesObra3
 * @property string $folioSinter3
 * @property string $zonaRecorrida4
 * @property string $clienteFrecuente4
 * @property integer $cantidadObras4
 * @property string $fechaRecorrido4_f
 * @property string $observacionesObra4
 * @property string $folioSinter4
 * @property string $zonaRecorrida5
 * @property string $clienteFrecuente5
 * @property integer $cantidadObras5
 * @property string $fechaRecorrido5_f
 * @property string $observacionesObra5
 * @property string $folioSinter5
 * @property double $presupuestoVigente
 * @property double $presupuestoImporte
 * @property double $presupuestoNuevaSemana
 * @property double $presupuestoNuevaSemanaImporte
 * @property double $presupuestoNuevoMes
 * @property double $presupuestoNuevoMesImporte
 * @property double $obraVigente
 * @property integer $obraPotencialM2
 * @property integer $obraEventoProg
 * @property integer $obraEventoVencido
 * @property integer $obraEventoPorVencer
 * @property string $usuario_did
 * @property string $estatus_did
 *
 * The followings are the available model relations:
 * @property Estatus $estatus
 * @property Usuario $usuario
 */
class Reporte extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Reporte the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Reporte';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('cantidadObras1, cantidadObras2, cantidadObras3, cantidadObras4, cantidadObras5, obraPotencialM2, obraEventoProg, obraEventoVencido, obraEventoPorVencer', 'numerical', 'integerOnly'=>true),
            array('ventaTotalSemana, ventaTotalMes, ventaTotalMeta, ventaM2Semana, ventaM2Mes, ventaM2Meta, pnpvSemana, pnpvMes, pnpvMeta, porcentajeAbisaSemana, porcentajeAbisaMes, porcentajeAvisaMeta, descPorcentajeSemana, descPorcentajeMes, descPorcentajeMeta, porFacturarVentaTotal, porFacturarVentaM2, importeVenta1, importeVenta2, importeVenta3, importeVenta4, importeVenta5, importeVenta6, importeVenta7, importeVenta8, importeVenta9, importeVenta10, importeFactura1, importeFactura2, importeFactura3, importeFactura4, importeFactura5, importeFactura6, importeFactura7, importeFactura8, importeFactura9, importeFactura10, presupuestoVigente, presupuestoImporte, presupuestoNuevaSemana, presupuestoNuevaSemanaImporte, presupuestoNuevoMes, presupuestoNuevoMesImporte, obraVigente', 'numerical'),
            array('compania, plaza, centroVenta, oportunidad1, cliente1, folioObra1, oportunidad2, cliente2, folioObra2, oportunidad3, cliente3, folioObra3, oportunidad4, cliente4, folioObra4, oportunidad5, cliente5, folioObra5, oportunidad6, cliente6, folioObra6, oportunidad7, cliente7, folioObra7, oportunidad8, cliente8, folioObra8, oportunidad9, cliente9, folioObra9, oportunidad10, cliente10, folioObra10, numeroSinter1, numeroSinter2, numeroSinter3, numeroSinter4, numeroSinter5, numeroSinter6, numeroSinter7, numeroSinter8, numeroSinter9, numeroSinter10, nombreClienteVisitado1, contacto1, puesto1, tipoContacto1, nombreClienteVisitado2, contacto2, puesto2, tipoContacto2, nombreClienteVisitado3, contacto3, puesto3, tipoContacto3, nombreClienteVisitado4, puesto4, contacto4, tipoContacto4, nombreClienteVisitado5, puesto5, contacto5, tipoContacto5, nombreClienteVisitado6, puesto6, contacto6, tipoContacto6, nombreClienteVisitado7, puesto7, contacto7, tipoContacto7, nombreClienteVisitado8, puesto8, contacto8, tipoContacto8, nombreClienteVisitado9, puesto9, contacto9, tipoContacto9, nombreClienteVisitado10, puesto10, contacto10, tipoContacto10, nombreProspectoNuevo1, contactoProspectoNuevo1, puestoProspectoNuevo1, tipoContactoProspectoNuevo1, resultadoProspectoNuevo1, nombreProspectoNuevo2, contactoProspectoNuevo2, puestoProspectoNuevo2, tipoContactoProspectoNuevo2, resultadoProspectoNuevo2, nombreProspectoNuevo3, contactoProspectoNuevo3, puestoProspectoNuevo3, tipoContactoProspectoNuevo3, resultadoProspectoNuevo3, nombreProspectoNuevo4, contactoProspectoNuevo4, puestoProspectoNuevo4, tipoContactoProspectoNuevo4, resultadoProspectoNuevo4, nombreProspectoNuevo5, contactoProspectoNuevo5, puestoProspectoNuevo5, tipoContactoProspectoNuevo5, resultadoProspectoNuevo5, nombreProspectoNuevo6, contactoProspectoNuevo6, puestoProspectoNuevo6, tipoContactoProspectoNuevo6, resultadoProspectoNuevo6, nombreProspectoNuevo7, contactoProspectoNuevo7, puestoProspectoNuevo7, tipoContactoProspectoNuevo7, resultadoProspectoNuevo7, zonaRecorrida2, nombreProspectoNuevo8, contactoProspectoNuevo8, puestoProspectoNuevo8, tipoContactoProspectoNuevo8, resultadoProspectoNuevo8, nombreProspectoNuevo9, contactoProspectoNuevo9, puestoProspectoNuevo9, tipoContactoProspectoNuevo9, resultadoProspectoNuevo9, nombreProspectoNuevo10, contactoProspectoNuevo10, puestoProspectoNuevo10, tipoContactoProspectoNuevo10, resultadoProspectoNuevo10, zonaRecorrida1, clienteFrecuente1, folioSinter1, clienteFrecuente2, folioSinter2, zonaRecorrida3, clienteFrecuente3, folioSinter3, zonaRecorrida4, clienteFrecuente4, folioSinter4, zonaRecorrida5, clienteFrecuente5, folioSinter5', 'length', 'max'=>100),
            array('nombre, descripcionObra1, descripcionObra2, descripcionObra3, descripcionObra4, descripcionObra5, descripcionObra6, descripcionObra7, descripcionObra8, descripcionObra9, descripcionObra10', 'length', 'max'=>200),
            array('usuario_did', 'length', 'max'=>10),
            array('estatus_did', 'length', 'max'=>11),
            array('fecha_f, fechaReporteInicio_f, fechaReporteFin_f, fechaCierre1_f, fechaCierre2_f, fechaCierre3_f, fechaCierre4_f, fechaCierre5_f, fechaCierre6_f, fechaCierre7_f, fechaCierre8_f, fechaCierre9_f, fechaCierre10_f, fechaVisita1_f, resultado1, fechaProximaVisita1_f, fechaVisita2_f, resultado2, fechaProximaVisita2_f, fechaVisita3_f, resultado3, fechaProximaVisita3_f, fechaVisita4_f, resultado4, fechaProximaVisita4_f, fechaVisita5_f, resultado5, fechaProximaVisita5_f, fechaVisita6_f, resultado6, fechaProximaVisita6_f, fechaVisita7_f, resultado7, fechaProximaVisita7_f, fechaVisita8_f, resultado8, fechaProximaVisita8_f, fechaVisita9_f, resultado9, fechaProximaVisita9_f, fechaVisita10_f, resultado10, fechaProximaVisita10_f, fechaVisitaProspectoNuevo1_f, fechaProximaVisitaProspectoNuevo1_f, fechaVisitaProspectoNuevo2_f, fechaProximaVisitaProspectoNuevo2_f, fechaVisitaProspectoNuevo3_f, fechaProximaVisitaProspectoNuevo3_f, fechaVisitaProspectoNuevo4_f, fechaProximaVisitaProspectoNuevo4_f, fechaVisitaProspectoNuevo5_f, fechaProximaVisitaProspectoNuevo5_f, fechaVisitaProspectoNuevo6_f, fechaProximaVisitaProspectoNuevo6_f, fechaVisitaProspectoNuevo7_f, fechaProximaVisitaProspectoNuevo7_f, fechaVisitaProspectoNuevo8_f, fechaProximaVisitaProspectoNuevo8_f, fechaVisitaProspectoNuevo9_f, fechaProximaVisitaProspectoNuevo9_f, fechaVisitaProspectoNuevo10_f, fechaProximaVisitaProspectoNuevo10_f, fechaRecorrido1_f, observacionesObra1, fechaRecorrido2_f, observacionesObra2, fechaRecorrido3_f, observacionesObra3, fechaRecorrido4_f, observacionesObra4, fechaRecorrido5_f, observacionesObra5', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, fecha_f, fechaReporteInicio_f, fechaReporteFin_f, compania, plaza, centroVenta, nombre, ventaTotalSemana, ventaTotalMes, ventaTotalMeta, ventaM2Semana, ventaM2Mes, ventaM2Meta, pnpvSemana, pnpvMes, pnpvMeta, porcentajeAbisaSemana, porcentajeAbisaMes, porcentajeAvisaMeta, descPorcentajeSemana, descPorcentajeMes, descPorcentajeMeta, porFacturarVentaTotal, porFacturarVentaM2, oportunidad1, cliente1, folioObra1, importeVenta1, fechaCierre1_f, oportunidad2, cliente2, folioObra2, importeVenta2, fechaCierre2_f, oportunidad3, cliente3, folioObra3, importeVenta3, fechaCierre3_f, oportunidad4, cliente4, folioObra4, importeVenta4, fechaCierre4_f, oportunidad5, cliente5, folioObra5, importeVenta5, fechaCierre5_f, oportunidad6, cliente6, folioObra6, importeVenta6, fechaCierre6_f, oportunidad7, cliente7, folioObra7, importeVenta7, fechaCierre7_f, oportunidad8, cliente8, folioObra8, importeVenta8, fechaCierre8_f, oportunidad9, cliente9, folioObra9, importeVenta9, fechaCierre9_f, oportunidad10, cliente10, folioObra10, importeVenta10, fechaCierre10_f, numeroSinter1, descripcionObra1, importeFactura1, numeroSinter2, descripcionObra2, importeFactura2, numeroSinter3, descripcionObra3, importeFactura3, numeroSinter4, descripcionObra4, importeFactura4, numeroSinter5, descripcionObra5, importeFactura5, numeroSinter6, descripcionObra6, importeFactura6, numeroSinter7, descripcionObra7, importeFactura7, numeroSinter8, descripcionObra8, importeFactura8, numeroSinter9, descripcionObra9, importeFactura9, numeroSinter10, descripcionObra10, importeFactura10, nombreClienteVisitado1, contacto1, puesto1, fechaVisita1_f, tipoContacto1, resultado1, fechaProximaVisita1_f, nombreClienteVisitado2, contacto2, puesto2, fechaVisita2_f, tipoContacto2, resultado2, fechaProximaVisita2_f, nombreClienteVisitado3, contacto3, puesto3, fechaVisita3_f, tipoContacto3, resultado3, fechaProximaVisita3_f, nombreClienteVisitado4, puesto4, contacto4, fechaVisita4_f, tipoContacto4, resultado4, fechaProximaVisita4_f, nombreClienteVisitado5, puesto5, contacto5, fechaVisita5_f, tipoContacto5, resultado5, fechaProximaVisita5_f, nombreClienteVisitado6, puesto6, contacto6, fechaVisita6_f, tipoContacto6, resultado6, fechaProximaVisita6_f, nombreClienteVisitado7, puesto7, contacto7, fechaVisita7_f, tipoContacto7, resultado7, fechaProximaVisita7_f, nombreClienteVisitado8, puesto8, contacto8, fechaVisita8_f, tipoContacto8, resultado8, fechaProximaVisita8_f, nombreClienteVisitado9, puesto9, contacto9, fechaVisita9_f, tipoContacto9, resultado9, fechaProximaVisita9_f, nombreClienteVisitado10, puesto10, contacto10, fechaVisita10_f, tipoContacto10, resultado10, fechaProximaVisita10_f, nombreProspectoNuevo1, contactoProspectoNuevo1, puestoProspectoNuevo1, fechaVisitaProspectoNuevo1_f, tipoContactoProspectoNuevo1, resultadoProspectoNuevo1, fechaProximaVisitaProspectoNuevo1_f, nombreProspectoNuevo2, contactoProspectoNuevo2, puestoProspectoNuevo2, fechaVisitaProspectoNuevo2_f, tipoContactoProspectoNuevo2, resultadoProspectoNuevo2, fechaProximaVisitaProspectoNuevo2_f, nombreProspectoNuevo3, contactoProspectoNuevo3, puestoProspectoNuevo3, fechaVisitaProspectoNuevo3_f, tipoContactoProspectoNuevo3, resultadoProspectoNuevo3, fechaProximaVisitaProspectoNuevo3_f, nombreProspectoNuevo4, contactoProspectoNuevo4, puestoProspectoNuevo4, fechaVisitaProspectoNuevo4_f, tipoContactoProspectoNuevo4, resultadoProspectoNuevo4, fechaProximaVisitaProspectoNuevo4_f, nombreProspectoNuevo5, contactoProspectoNuevo5, puestoProspectoNuevo5, fechaVisitaProspectoNuevo5_f, tipoContactoProspectoNuevo5, resultadoProspectoNuevo5, fechaProximaVisitaProspectoNuevo5_f, nombreProspectoNuevo6, contactoProspectoNuevo6, puestoProspectoNuevo6, fechaVisitaProspectoNuevo6_f, tipoContactoProspectoNuevo6, resultadoProspectoNuevo6, fechaProximaVisitaProspectoNuevo6_f, nombreProspectoNuevo7, contactoProspectoNuevo7, puestoProspectoNuevo7, fechaVisitaProspectoNuevo7_f, tipoContactoProspectoNuevo7, resultadoProspectoNuevo7, zonaRecorrida2, fechaProximaVisitaProspectoNuevo7_f, nombreProspectoNuevo8, contactoProspectoNuevo8, puestoProspectoNuevo8, fechaVisitaProspectoNuevo8_f, tipoContactoProspectoNuevo8, resultadoProspectoNuevo8, fechaProximaVisitaProspectoNuevo8_f, nombreProspectoNuevo9, contactoProspectoNuevo9, puestoProspectoNuevo9, fechaVisitaProspectoNuevo9_f, tipoContactoProspectoNuevo9, resultadoProspectoNuevo9, fechaProximaVisitaProspectoNuevo9_f, nombreProspectoNuevo10, contactoProspectoNuevo10, puestoProspectoNuevo10, fechaVisitaProspectoNuevo10_f, tipoContactoProspectoNuevo10, resultadoProspectoNuevo10, fechaProximaVisitaProspectoNuevo10_f, zonaRecorrida1, clienteFrecuente1, cantidadObras1, fechaRecorrido1_f, observacionesObra1, folioSinter1, clienteFrecuente2, cantidadObras2, fechaRecorrido2_f, observacionesObra2, folioSinter2, zonaRecorrida3, clienteFrecuente3, cantidadObras3, fechaRecorrido3_f, observacionesObra3, folioSinter3, zonaRecorrida4, clienteFrecuente4, cantidadObras4, fechaRecorrido4_f, observacionesObra4, folioSinter4, zonaRecorrida5, clienteFrecuente5, cantidadObras5, fechaRecorrido5_f, observacionesObra5, folioSinter5, presupuestoVigente, presupuestoImporte, presupuestoNuevaSemana, presupuestoNuevaSemanaImporte, presupuestoNuevoMes, presupuestoNuevoMesImporte, obraVigente, obraPotencialM2, obraEventoProg, obraEventoVencido, obraEventoPorVencer, usuario_did, estatus_did', 'safe', 'on'=>'search'),
        );
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'estatus' => array(self::BELONGS_TO, 'Estatus', 'estatus_did'),
			'usuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_did'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha_f' => 'Fecha del reporte',
			'fechaReporteInicio_f' => 'Fecha de inicio',
			'fechaReporteFin_f' => 'Fecha de fin',
			'compania' => 'Compañia',
			'plaza' => 'Plaza',
			'centroVenta' => 'Centro de Venta',
			'nombre' => 'Nombre',
			'ventaTotalSemana' => 'Venta Total Semana',
			'ventaTotalMes' => 'Venta Total Mes',
			'ventaTotalMeta' => 'Venta Total Meta',
			'ventaM2Semana' => 'Venta M2 Semana',
			'ventaM2Mes' => 'Venta M2 Mes',
			'ventaM2Meta' => 'Venta M2 Meta',
			'pnpvSemana' => 'Pnpv Semana',
			'pnpvMes' => 'Pnpv Mes',
			'pnpvMeta' => 'Pnpv Meta',
			'porcentajeAbisaSemana' => 'Porcentaje Abisa Semana',
			'porcentajeAbisaMes' => 'Porcentaje Abisa Mes',
			'porcentajeAvisaMeta' => 'Porcentaje Avisa Meta',
			'descPorcentajeSemana' => 'Desc Porcentaje Semana',
			'descPorcentajeMes' => 'Desc Porcentaje Mes',
			'descPorcentajeMeta' => 'Desc Porcentaje Meta',
			'porFacturarVentaTotal' => 'Por Facturar Venta Total',
			'porFacturarVentaM2' => 'Por Facturar Venta M2',
			'oportunidad1' => 'Oportunidad1',
			'cliente1' => 'Cliente1',
			'folioObra1' => 'Folio Obra1',
			'importeVenta1' => 'Importe Venta1',
			'fechaCierre1_f' => 'Fecha Cierre1 F',
			'oportunidad2' => 'Oportunidad2',
			'cliente2' => 'Cliente2',
			'folioObra2' => 'Folio Obra2',
			'importeVenta2' => 'Importe Venta2',
			'fechaCierre2_f' => 'Fecha Cierre2 F',
			'oportunidad3' => 'Oportunidad3',
			'cliente3' => 'Cliente3',
			'folioObra3' => 'Folio Obra3',
			'importeVenta3' => 'Importe Venta3',
			'fechaCierre3_f' => 'Fecha Cierre3 F',
			'oportunidad4' => 'Oportunidad4',
			'cliente4' => 'Cliente4',
			'folioObra4' => 'Folio Obra4',
			'importeVenta4' => 'Importe Venta4',
			'fechaCierre4_f' => 'Fecha Cierre4 F',
			'oportunidad5' => 'Oportunidad5',
			'cliente5' => 'Cliente5',
			'folioObra5' => 'Folio Obra5',
			'importeVenta5' => 'Importe Venta5',
			'fechaCierre5_f' => 'Fecha Cierre5 F',
			'oportunidad6' => 'Oportunidad6',
			'cliente6' => 'Cliente6',
			'folioObra6' => 'Folio Obra6',
			'importeVenta6' => 'Importe Venta6',
			'fechaCierre6_f' => 'Fecha Cierre6 F',
			'oportunidad7' => 'Oportunidad7',
			'cliente7' => 'Cliente7',
			'folioObra7' => 'Folio Obra7',
			'importeVenta7' => 'Importe Venta7',
			'fechaCierre7_f' => 'Fecha Cierre7 F',
			'oportunidad8' => 'Oportunidad8',
			'cliente8' => 'Cliente8',
			'folioObra8' => 'Folio Obra8',
			'importeVenta8' => 'Importe Venta8',
			'fechaCierre8_f' => 'Fecha Cierre8 F',
			'oportunidad9' => 'Oportunidad9',
			'cliente9' => 'Cliente9',
			'folioObra9' => 'Folio Obra9',
			'importeVenta9' => 'Importe Venta9',
			'fechaCierre9_f' => 'Fecha Cierre9 F',
			'oportunidad10' => 'Oportunidad10',
			'cliente10' => 'Cliente10',
			'folioObra10' => 'Folio Obra10',
			'importeVenta10' => 'Importe Venta10',
			'fechaCierre10_f' => 'Fecha Cierre10 F',
			'numeroSinter1' => 'Numero Sinter1',
			'descripcionObra1' => 'Descripcion Obra1',
			'importeFactura1' => 'Importe Factura1',
			'numeroSinter2' => 'Numero Sinter2',
			'descripcionObra2' => 'Descripcion Obra2',
			'importeFactura2' => 'Importe Factura2',
			'numeroSinter3' => 'Numero Sinter3',
			'descripcionObra3' => 'Descripcion Obra3',
			'importeFactura3' => 'Importe Factura3',
			'numeroSinter4' => 'Numero Sinter4',
			'descripcionObra4' => 'Descripcion Obra4',
			'importeFactura4' => 'Importe Factura4',
			'numeroSinter5' => 'Numero Sinter5',
			'descripcionObra5' => 'Descripcion Obra5',
			'importeFactura5' => 'Importe Factura5',
			'numeroSinter6' => 'Numero Sinter6',
			'descripcionObra6' => 'Descripcion Obra6',
			'importeFactura6' => 'Importe Factura6',
			'numeroSinter7' => 'Numero Sinter7',
			'descripcionObra7' => 'Descripcion Obra7',
			'importeFactura7' => 'Importe Factura7',
			'numeroSinter8' => 'Numero Sinter8',
			'descripcionObra8' => 'Descripcion Obra8',
			'importeFactura8' => 'Importe Factura8',
			'numeroSinter9' => 'Numero Sinter9',
			'descripcionObra9' => 'Descripcion Obra9',
			'importeFactura9' => 'Importe Factura9',
			'numeroSinter10' => 'Numero Sinter10',
			'descripcionObra10' => 'Descripcion Obra10',
			'importeFactura10' => 'Importe Factura10',
			'nombreClienteVisitado1' => 'Nombre Cliente Visitado1',
			'contacto1' => 'Contacto1',
			'puesto1' => 'Puesto1',
			'fechaVisita1_f' => 'Fecha Visita1 F',
			'tipoContacto1' => 'Tipo Contacto1',
			'resultado1' => 'Resultado1',
			'fechaProximaVisita1_f' => 'Fecha Proxima Visita1 F',
			'nombreClienteVisitado2' => 'Nombre Cliente Visitado2',
			'contacto2' => 'Contacto2',
			'puesto2' => 'Puesto2',
			'fechaVisita2_f' => 'Fecha Visita2 F',
			'tipoContacto2' => 'Tipo Contacto2',
			'resultado2' => 'Resultado2',
			'fechaProximaVisita2_f' => 'Fecha Proxima Visita2 F',
			'nombreClienteVisitado3' => 'Nombre Cliente Visitado3',
			'contacto3' => 'Contacto3',
			'puesto3' => 'Puesto3',
			'fechaVisita3_f' => 'Fecha Visita3 F',
			'tipoContacto3' => 'Tipo Contacto3',
			'resultado3' => 'Resultado3',
			'fechaProximaVisita3_f' => 'Fecha Proxima Visita3 F',
			'nombreClienteVisitado4' => 'Nombre Cliente Visitado4',
			'puesto4' => 'Puesto4',
			'contacto4' => 'Contacto4',
			'fechaVisita4_f' => 'Fecha Visita4 F',
			'tipoContacto4' => 'Tipo Contacto4',
			'resultado4' => 'Resultado4',
			'fechaProximaVisita4_f' => 'Fecha Proxima Visita4 F',
			'nombreClienteVisitado5' => 'Nombre Cliente Visitado5',
			'puesto5' => 'Puesto5',
			'contacto5' => 'Contacto5',
			'fechaVisita5_f' => 'Fecha Visita5 F',
			'tipoContacto5' => 'Tipo Contacto5',
			'resultado5' => 'Resultado5',
			'fechaProximaVisita5_f' => 'Fecha Proxima Visita5 F',
			'nombreClienteVisitado6' => 'Nombre Cliente Visitado6',
			'puesto6' => 'Puesto6',
			'contacto6' => 'Contacto6',
			'fechaVisita6_f' => 'Fecha Visita6 F',
			'tipoContacto6' => 'Tipo Contacto6',
			'resultado6' => 'Resultado6',
			'fechaProximaVisita6_f' => 'Fecha Proxima Visita6 F',
			'nombreClienteVisitado7' => 'Nombre Cliente Visitado7',
			'puesto7' => 'Puesto7',
			'contacto7' => 'Contacto7',
			'fechaVisita7_f' => 'Fecha Visita7 F',
			'tipoContacto7' => 'Tipo Contacto7',
			'resultado7' => 'Resultado7',
			'fechaProximaVisita7_f' => 'Fecha Proxima Visita7 F',
			'nombreClienteVisitado8' => 'Nombre Cliente Visitado8',
			'puesto8' => 'Puesto8',
			'contacto8' => 'Contacto8',
			'fechaVisita8_f' => 'Fecha Visita8 F',
			'tipoContacto8' => 'Tipo Contacto8',
			'resultado8' => 'Resultado8',
			'fechaProximaVisita8_f' => 'Fecha Proxima Visita8 F',
			'nombreClienteVisitado9' => 'Nombre Cliente Visitado9',
			'puesto9' => 'Puesto9',
			'contacto9' => 'Contacto9',
			'fechaVisita9_f' => 'Fecha Visita9 F',
			'tipoContacto9' => 'Tipo Contacto9',
			'resultado9' => 'Resultado9',
			'fechaProximaVisita9_f' => 'Fecha Proxima Visita9 F',
			'nombreClienteVisitado10' => 'Nombre Cliente Visitado10',
			'puesto10' => 'Puesto10',
			'contacto10' => 'Contacto10',
			'fechaVisita10_f' => 'Fecha Visita10 F',
			'tipoContacto10' => 'Tipo Contacto10',
			'resultado10' => 'Resultado10',
			'fechaProximaVisita10_f' => 'Fecha Proxima Visita10 F',
			'nombreProspectoNuevo1' => 'Nombre Prospecto Nuevo1',
			'contactoProspectoNuevo1' => 'Contacto Prospecto Nuevo1',
			'puestoProspectoNuevo1' => 'Puesto Prospecto Nuevo1',
			'fechaVisitaProspectoNuevo1_f' => 'Fecha Visita Prospecto Nuevo1 F',
			'tipoContactoProspectoNuevo1' => 'Tipo Contacto Prospecto Nuevo1',
			'resultadoProspectoNuevo1' => 'Resultado Prospecto Nuevo1',
			'fechaProximaVisitaProspectoNuevo1_f' => 'Fecha Proxima Visita Prospecto Nuevo1 F',
			'nombreProspectoNuevo2' => 'Nombre Prospecto Nuevo2',
			'contactoProspectoNuevo2' => 'Contacto Prospecto Nuevo2',
			'puestoProspectoNuevo2' => 'Puesto Prospecto Nuevo2',
			'fechaVisitaProspectoNuevo2_f' => 'Fecha Visita Prospecto Nuevo2 F',
			'tipoContactoProspectoNuevo2' => 'Tipo Contacto Prospecto Nuevo2',
			'resultadoProspectoNuevo2' => 'Resultado Prospecto Nuevo2',
			'fechaProximaVisitaProspectoNuevo2_f' => 'Fecha Proxima Visita Prospecto Nuevo2 F',
			'nombreProspectoNuevo3' => 'Nombre Prospecto Nuevo3',
			'contactoProspectoNuevo3' => 'Contacto Prospecto Nuevo3',
			'puestoProspectoNuevo3' => 'Puesto Prospecto Nuevo3',
			'fechaVisitaProspectoNuevo3_f' => 'Fecha Visita Prospecto Nuevo3 F',
			'tipoContactoProspectoNuevo3' => 'Tipo Contacto Prospecto Nuevo3',
			'resultadoProspectoNuevo3' => 'Resultado Prospecto Nuevo3',
			'fechaProximaVisitaProspectoNuevo3_f' => 'Fecha Proxima Visita Prospecto Nuevo3 F',
			'nombreProspectoNuevo4' => 'Nombre Prospecto Nuevo4',
			'contactoProspectoNuevo4' => 'Contacto Prospecto Nuevo4',
			'puestoProspectoNuevo4' => 'Puesto Prospecto Nuevo4',
			'fechaVisitaProspectoNuevo4_f' => 'Fecha Visita Prospecto Nuevo4 F',
			'tipoContactoProspectoNuevo4' => 'Tipo Contacto Prospecto Nuevo4',
			'resultadoProspectoNuevo4' => 'Resultado Prospecto Nuevo4',
			'fechaProximaVisitaProspectoNuevo4_f' => 'Fecha Proxima Visita Prospecto Nuevo4 F',
			'nombreProspectoNuevo5' => 'Nombre Prospecto Nuevo5',
			'contactoProspectoNuevo5' => 'Contacto Prospecto Nuevo5',
			'puestoProspectoNuevo5' => 'Puesto Prospecto Nuevo5',
			'fechaVisitaProspectoNuevo5_f' => 'Fecha Visita Prospecto Nuevo5 F',
			'tipoContactoProspectoNuevo5' => 'Tipo Contacto Prospecto Nuevo5',
			'resultadoProspectoNuevo5' => 'Resultado Prospecto Nuevo5',
			'fechaProximaVisitaProspectoNuevo5_f' => 'Fecha Proxima Visita Prospecto Nuevo5 F',
			'nombreProspectoNuevo6' => 'Nombre Prospecto Nuevo6',
			'contactoProspectoNuevo6' => 'Contacto Prospecto Nuevo6',
			'puestoProspectoNuevo6' => 'Puesto Prospecto Nuevo6',
			'fechaVisitaProspectoNuevo6_f' => 'Fecha Visita Prospecto Nuevo6 F',
			'tipoContactoProspectoNuevo6' => 'Tipo Contacto Prospecto Nuevo6',
			'resultadoProspectoNuevo6' => 'Resultado Prospecto Nuevo6',
			'fechaProximaVisitaProspectoNuevo6_f' => 'Fecha Proxima Visita Prospecto Nuevo6 F',
			'nombreProspectoNuevo7' => 'Nombre Prospecto Nuevo7',
			'contactoProspectoNuevo7' => 'Contacto Prospecto Nuevo7',
			'puestoProspectoNuevo7' => 'Puesto Prospecto Nuevo7',
			'fechaVisitaProspectoNuevo7_f' => 'Fecha Visita Prospecto Nuevo7 F',
			'tipoContactoProspectoNuevo7' => 'Tipo Contacto Prospecto Nuevo7',
			'resultadoProspectoNuevo7' => 'Resultado Prospecto Nuevo7',
			'zonaRecorrida2' => 'Zona Recorrida2',
			'fechaProximaVisitaProspectoNuevo7_f' => 'Fecha Proxima Visita Prospecto Nuevo7 F',
			'nombreProspectoNuevo8' => 'Nombre Prospecto Nuevo8',
			'contactoProspectoNuevo8' => 'Contacto Prospecto Nuevo8',
			'puestoProspectoNuevo8' => 'Puesto Prospecto Nuevo8',
			'fechaVisitaProspectoNuevo8_f' => 'Fecha Visita Prospecto Nuevo8 F',
			'tipoContactoProspectoNuevo8' => 'Tipo Contacto Prospecto Nuevo8',
			'resultadoProspectoNuevo8' => 'Resultado Prospecto Nuevo8',
			'fechaProximaVisitaProspectoNuevo8_f' => 'Fecha Proxima Visita Prospecto Nuevo8 F',
			'nombreProspectoNuevo9' => 'Nombre Prospecto Nuevo9',
			'contactoProspectoNuevo9' => 'Contacto Prospecto Nuevo9',
			'puestoProspectoNuevo9' => 'Puesto Prospecto Nuevo9',
			'fechaVisitaProspectoNuevo9_f' => 'Fecha Visita Prospecto Nuevo9 F',
			'tipoContactoProspectoNuevo9' => 'Tipo Contacto Prospecto Nuevo9',
			'resultadoProspectoNuevo9' => 'Resultado Prospecto Nuevo9',
			'fechaProximaVisitaProspectoNuevo9_f' => 'Fecha Proxima Visita Prospecto Nuevo9 F',
			'nombreProspectoNuevo10' => 'Nombre Prospecto Nuevo10',
			'contactoProspectoNuevo10' => 'Contacto Prospecto Nuevo10',
			'puestoProspectoNuevo10' => 'Puesto Prospecto Nuevo10',
			'fechaVisitaProspectoNuevo10_f' => 'Fecha Visita Prospecto Nuevo10 F',
			'tipoContactoProspectoNuevo10' => 'Tipo Contacto Prospecto Nuevo10',
			'resultadoProspectoNuevo10' => 'Resultado Prospecto Nuevo10',
			'fechaProximaVisitaProspectoNuevo10_f' => 'Fecha Proxima Visita Prospecto Nuevo10 F',
			'zonaRecorrida1' => 'Zona Recorrida1',
			'clienteFrecuente1' => 'Cliente Frecuente1',
			'cantidadObras1' => 'Cantidad Obras1',
			'fechaRecorrido1_f' => 'Fecha Recorrido1 F',
			'observacionesObra1' => 'Observaciones Obra1',
			'folioSinter1' => 'Folio Sinter1',
			'clienteFrecuente2' => 'Cliente Frecuente2',
			'cantidadObras2' => 'Cantidad Obras2',
			'fechaRecorrido2_f' => 'Fecha Recorrido2 F',
			'observacionesObra2' => 'Observaciones Obra2',
			'folioSinter2' => 'Folio Sinter2',
			'zonaRecorrida3' => 'Zona Recorrida3',
			'clienteFrecuente3' => 'Cliente Frecuente3',
			'cantidadObras3' => 'Cantidad Obras3',
			'fechaRecorrido3_f' => 'Fecha Recorrido3 F',
			'observacionesObra3' => 'Observaciones Obra3',
			'folioSinter3' => 'Folio Sinter3',
			'zonaRecorrida4' => 'Zona Recorrida4',
			'clienteFrecuente4' => 'Cliente Frecuente4',
			'cantidadObras4' => 'Cantidad Obras4',
			'fechaRecorrido4_f' => 'Fecha Recorrido4 F',
			'observacionesObra4' => 'Observaciones Obra4',
			'folioSinter4' => 'Folio Sinter4',
			'zonaRecorrida5' => 'Zona Recorrida5',
			'clienteFrecuente5' => 'Cliente Frecuente5',
			'cantidadObras5' => 'Cantidad Obras5',
			'fechaRecorrido5_f' => 'Fecha Recorrido5 F',
			'observacionesObra5' => 'Observaciones Obra5',
			'folioSinter5' => 'Folio Sinter5',
			'presupuestoVigente' => 'Presupuesto Vigente',
			'presupuestoImporte' => 'Presupuesto Importe',
			'presupuestoNuevaSemana' => 'Presupuesto Nueva Semana',
			'presupuestoNuevaSemanaImporte' => 'Presupuesto Nueva Semana Importe',
			'presupuestoNuevoMes' => 'Presupuesto Nuevo Mes',
			'presupuestoNuevoMesImporte' => 'Presupuesto Nuevo Mes Importe',
			'obraVigente' => 'Obra Vigente',
			'obraPotencialM2' => 'Obra Potencial M2',
			'obraEventoProg' => 'Obra Evento Prog',
			'obraEventoVencido' => 'Obra Evento Vencido',
			'obraEventoPorVencer' => 'Obra Evento Por Vencer',
			'usuario_did' => 'Usuario',
			'estatus_did' => 'Estatus',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('fecha_f',$this->fecha_f,true);
		$criteria->compare('fechaReporteInicio_f',$this->fechaReporteInicio_f,true);
		$criteria->compare('fechaReporteFin_f',$this->fechaReporteFin_f,true);
		$criteria->compare('compania',$this->compania,true);
		$criteria->compare('plaza',$this->plaza,true);
		$criteria->compare('centroVenta',$this->centroVenta,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('ventaTotalSemana',$this->ventaTotalSemana);
		$criteria->compare('ventaTotalMes',$this->ventaTotalMes);
		$criteria->compare('ventaTotalMeta',$this->ventaTotalMeta);
		$criteria->compare('ventaM2Semana',$this->ventaM2Semana);
		$criteria->compare('ventaM2Mes',$this->ventaM2Mes);
		$criteria->compare('ventaM2Meta',$this->ventaM2Meta);
		$criteria->compare('pnpvSemana',$this->pnpvSemana);
		$criteria->compare('pnpvMes',$this->pnpvMes);
		$criteria->compare('pnpvMeta',$this->pnpvMeta);
		$criteria->compare('porcentajeAbisaSemana',$this->porcentajeAbisaSemana);
		$criteria->compare('porcentajeAbisaMes',$this->porcentajeAbisaMes);
		$criteria->compare('porcentajeAvisaMeta',$this->porcentajeAvisaMeta);
		$criteria->compare('descPorcentajeSemana',$this->descPorcentajeSemana);
		$criteria->compare('descPorcentajeMes',$this->descPorcentajeMes);
		$criteria->compare('descPorcentajeMeta',$this->descPorcentajeMeta);
		$criteria->compare('porFacturarVentaTotal',$this->porFacturarVentaTotal);
		$criteria->compare('porFacturarVentaM2',$this->porFacturarVentaM2);
		$criteria->compare('oportunidad1',$this->oportunidad1,true);
		$criteria->compare('cliente1',$this->cliente1,true);
		$criteria->compare('folioObra1',$this->folioObra1,true);
		$criteria->compare('importeVenta1',$this->importeVenta1,true);
		$criteria->compare('fechaCierre1_f',$this->fechaCierre1_f,true);
		$criteria->compare('oportunidad2',$this->oportunidad2,true);
		$criteria->compare('cliente2',$this->cliente2,true);
		$criteria->compare('folioObra2',$this->folioObra2,true);
		$criteria->compare('importeVenta2',$this->importeVenta2,true);
		$criteria->compare('fechaCierre2_f',$this->fechaCierre2_f,true);
		$criteria->compare('oportunidad3',$this->oportunidad3,true);
		$criteria->compare('cliente3',$this->cliente3,true);
		$criteria->compare('folioObra3',$this->folioObra3,true);
		$criteria->compare('importeVenta3',$this->importeVenta3,true);
		$criteria->compare('fechaCierre3_f',$this->fechaCierre3_f,true);
		$criteria->compare('oportunidad4',$this->oportunidad4,true);
		$criteria->compare('cliente4',$this->cliente4,true);
		$criteria->compare('folioObra4',$this->folioObra4,true);
		$criteria->compare('importeVenta4',$this->importeVenta4,true);
		$criteria->compare('fechaCierre4_f',$this->fechaCierre4_f,true);
		$criteria->compare('oportunidad5',$this->oportunidad5,true);
		$criteria->compare('cliente5',$this->cliente5,true);
		$criteria->compare('folioObra5',$this->folioObra5,true);
		$criteria->compare('importeVenta5',$this->importeVenta5,true);
		$criteria->compare('fechaCierre5_f',$this->fechaCierre5_f,true);
		$criteria->compare('oportunidad6',$this->oportunidad6,true);
		$criteria->compare('cliente6',$this->cliente6,true);
		$criteria->compare('folioObra6',$this->folioObra6,true);
		$criteria->compare('importeVenta6',$this->importeVenta6,true);
		$criteria->compare('fechaCierre6_f',$this->fechaCierre6_f,true);
		$criteria->compare('oportunidad7',$this->oportunidad7,true);
		$criteria->compare('cliente7',$this->cliente7,true);
		$criteria->compare('folioObra7',$this->folioObra7,true);
		$criteria->compare('importeVenta7',$this->importeVenta7,true);
		$criteria->compare('fechaCierre7_f',$this->fechaCierre7_f,true);
		$criteria->compare('oportunidad8',$this->oportunidad8,true);
		$criteria->compare('cliente8',$this->cliente8,true);
		$criteria->compare('folioObra8',$this->folioObra8,true);
		$criteria->compare('importeVenta8',$this->importeVenta8,true);
		$criteria->compare('fechaCierre8_f',$this->fechaCierre8_f,true);
		$criteria->compare('oportunidad9',$this->oportunidad9,true);
		$criteria->compare('cliente9',$this->cliente9,true);
		$criteria->compare('folioObra9',$this->folioObra9,true);
		$criteria->compare('importeVenta9',$this->importeVenta9);
		$criteria->compare('fechaCierre9_f',$this->fechaCierre9_f,true);
		$criteria->compare('oportunidad10',$this->oportunidad10,true);
		$criteria->compare('cliente10',$this->cliente10,true);
		$criteria->compare('folioObra10',$this->folioObra10,true);
		$criteria->compare('importeVenta10',$this->importeVenta10,true);
		$criteria->compare('fechaCierre10_f',$this->fechaCierre10_f,true);
		$criteria->compare('numeroSinter1',$this->numeroSinter1,true);
		$criteria->compare('descripcionObra1',$this->descripcionObra1,true);
		$criteria->compare('importeFactura1',$this->importeFactura1);
		$criteria->compare('numeroSinter2',$this->numeroSinter2,true);
		$criteria->compare('descripcionObra2',$this->descripcionObra2,true);
		$criteria->compare('importeFactura2',$this->importeFactura2);
		$criteria->compare('numeroSinter3',$this->numeroSinter3,true);
		$criteria->compare('descripcionObra3',$this->descripcionObra3,true);
		$criteria->compare('importeFactura3',$this->importeFactura3);
		$criteria->compare('numeroSinter4',$this->numeroSinter4,true);
		$criteria->compare('descripcionObra4',$this->descripcionObra4,true);
		$criteria->compare('importeFactura4',$this->importeFactura4);
		$criteria->compare('numeroSinter5',$this->numeroSinter5,true);
		$criteria->compare('descripcionObra5',$this->descripcionObra5,true);
		$criteria->compare('importeFactura5',$this->importeFactura5);
		$criteria->compare('numeroSinter6',$this->numeroSinter6,true);
		$criteria->compare('descripcionObra6',$this->descripcionObra6,true);
		$criteria->compare('importeFactura6',$this->importeFactura6);
		$criteria->compare('numeroSinter7',$this->numeroSinter7,true);
		$criteria->compare('descripcionObra7',$this->descripcionObra7,true);
		$criteria->compare('importeFactura7',$this->importeFactura7);
		$criteria->compare('numeroSinter8',$this->numeroSinter8,true);
		$criteria->compare('descripcionObra8',$this->descripcionObra8,true);
		$criteria->compare('importeFactura8',$this->importeFactura8);
		$criteria->compare('numeroSinter9',$this->numeroSinter9,true);
		$criteria->compare('descripcionObra9',$this->descripcionObra9,true);
		$criteria->compare('importeFactura9',$this->importeFactura9);
		$criteria->compare('numeroSinter10',$this->numeroSinter10,true);
		$criteria->compare('descripcionObra10',$this->descripcionObra10,true);
		$criteria->compare('importeFactura10',$this->importeFactura10);
		$criteria->compare('nombreClienteVisitado1',$this->nombreClienteVisitado1,true);
		$criteria->compare('contacto1',$this->contacto1,true);
		$criteria->compare('puesto1',$this->puesto1,true);
		$criteria->compare('fechaVisita1_f',$this->fechaVisita1_f,true);
		$criteria->compare('tipoContacto1',$this->tipoContacto1,true);
		$criteria->compare('resultado1',$this->resultado1,true);
		$criteria->compare('fechaProximaVisita1_f',$this->fechaProximaVisita1_f,true);
		$criteria->compare('nombreClienteVisitado2',$this->nombreClienteVisitado2,true);
		$criteria->compare('contacto2',$this->contacto2,true);
		$criteria->compare('puesto2',$this->puesto2,true);
		$criteria->compare('fechaVisita2_f',$this->fechaVisita2_f,true);
		$criteria->compare('tipoContacto2',$this->tipoContacto2,true);
		$criteria->compare('resultado2',$this->resultado2,true);
		$criteria->compare('fechaProximaVisita2_f',$this->fechaProximaVisita2_f,true);
		$criteria->compare('nombreClienteVisitado3',$this->nombreClienteVisitado3,true);
		$criteria->compare('contacto3',$this->contacto3,true);
		$criteria->compare('puesto3',$this->puesto3,true);
		$criteria->compare('fechaVisita3_f',$this->fechaVisita3_f,true);
		$criteria->compare('tipoContacto3',$this->tipoContacto3,true);
		$criteria->compare('resultado3',$this->resultado3,true);
		$criteria->compare('fechaProximaVisita3_f',$this->fechaProximaVisita3_f,true);
		$criteria->compare('nombreClienteVisitado4',$this->nombreClienteVisitado4,true);
		$criteria->compare('puesto4',$this->puesto4,true);
		$criteria->compare('contacto4',$this->contacto4,true);
		$criteria->compare('fechaVisita4_f',$this->fechaVisita4_f,true);
		$criteria->compare('tipoContacto4',$this->tipoContacto4,true);
		$criteria->compare('resultado4',$this->resultado4,true);
		$criteria->compare('fechaProximaVisita4_f',$this->fechaProximaVisita4_f,true);
		$criteria->compare('nombreClienteVisitado5',$this->nombreClienteVisitado5,true);
		$criteria->compare('puesto5',$this->puesto5,true);
		$criteria->compare('contacto5',$this->contacto5,true);
		$criteria->compare('fechaVisita5_f',$this->fechaVisita5_f,true);
		$criteria->compare('tipoContacto5',$this->tipoContacto5,true);
		$criteria->compare('resultado5',$this->resultado5,true);
		$criteria->compare('fechaProximaVisita5_f',$this->fechaProximaVisita5_f,true);
		$criteria->compare('nombreClienteVisitado6',$this->nombreClienteVisitado6,true);
		$criteria->compare('puesto6',$this->puesto6,true);
		$criteria->compare('contacto6',$this->contacto6,true);
		$criteria->compare('fechaVisita6_f',$this->fechaVisita6_f,true);
		$criteria->compare('tipoContacto6',$this->tipoContacto6,true);
		$criteria->compare('resultado6',$this->resultado6,true);
		$criteria->compare('fechaProximaVisita6_f',$this->fechaProximaVisita6_f,true);
		$criteria->compare('nombreClienteVisitado7',$this->nombreClienteVisitado7,true);
		$criteria->compare('puesto7',$this->puesto7,true);
		$criteria->compare('contacto7',$this->contacto7,true);
		$criteria->compare('fechaVisita7_f',$this->fechaVisita7_f,true);
		$criteria->compare('tipoContacto7',$this->tipoContacto7,true);
		$criteria->compare('resultado7',$this->resultado7,true);
		$criteria->compare('fechaProximaVisita7_f',$this->fechaProximaVisita7_f,true);
		$criteria->compare('nombreClienteVisitado8',$this->nombreClienteVisitado8,true);
		$criteria->compare('puesto8',$this->puesto8,true);
		$criteria->compare('contacto8',$this->contacto8,true);
		$criteria->compare('fechaVisita8_f',$this->fechaVisita8_f,true);
		$criteria->compare('tipoContacto8',$this->tipoContacto8,true);
		$criteria->compare('resultado8',$this->resultado8,true);
		$criteria->compare('fechaProximaVisita8_f',$this->fechaProximaVisita8_f,true);
		$criteria->compare('nombreClienteVisitado9',$this->nombreClienteVisitado9,true);
		$criteria->compare('puesto9',$this->puesto9,true);
		$criteria->compare('contacto9',$this->contacto9,true);
		$criteria->compare('fechaVisita9_f',$this->fechaVisita9_f,true);
		$criteria->compare('tipoContacto9',$this->tipoContacto9,true);
		$criteria->compare('resultado9',$this->resultado9,true);
		$criteria->compare('fechaProximaVisita9_f',$this->fechaProximaVisita9_f,true);
		$criteria->compare('nombreClienteVisitado10',$this->nombreClienteVisitado10,true);
		$criteria->compare('puesto10',$this->puesto10,true);
		$criteria->compare('contacto10',$this->contacto10,true);
		$criteria->compare('fechaVisita10_f',$this->fechaVisita10_f,true);
		$criteria->compare('tipoContacto10',$this->tipoContacto10,true);
		$criteria->compare('resultado10',$this->resultado10,true);
		$criteria->compare('fechaProximaVisita10_f',$this->fechaProximaVisita10_f,true);
		$criteria->compare('nombreProspectoNuevo1',$this->nombreProspectoNuevo1,true);
		$criteria->compare('contactoProspectoNuevo1',$this->contactoProspectoNuevo1,true);
		$criteria->compare('puestoProspectoNuevo1',$this->puestoProspectoNuevo1,true);
		$criteria->compare('fechaVisitaProspectoNuevo1_f',$this->fechaVisitaProspectoNuevo1_f,true);
		$criteria->compare('tipoContactoProspectoNuevo1',$this->tipoContactoProspectoNuevo1,true);
		$criteria->compare('resultadoProspectoNuevo1',$this->resultadoProspectoNuevo1,true);
		$criteria->compare('fechaProximaVisitaProspectoNuevo1_f',$this->fechaProximaVisitaProspectoNuevo1_f,true);
		$criteria->compare('nombreProspectoNuevo2',$this->nombreProspectoNuevo2,true);
		$criteria->compare('contactoProspectoNuevo2',$this->contactoProspectoNuevo2,true);
		$criteria->compare('puestoProspectoNuevo2',$this->puestoProspectoNuevo2,true);
		$criteria->compare('fechaVisitaProspectoNuevo2_f',$this->fechaVisitaProspectoNuevo2_f,true);
		$criteria->compare('tipoContactoProspectoNuevo2',$this->tipoContactoProspectoNuevo2,true);
		$criteria->compare('resultadoProspectoNuevo2',$this->resultadoProspectoNuevo2,true);
		$criteria->compare('fechaProximaVisitaProspectoNuevo2_f',$this->fechaProximaVisitaProspectoNuevo2_f,true);
		$criteria->compare('nombreProspectoNuevo3',$this->nombreProspectoNuevo3,true);
		$criteria->compare('contactoProspectoNuevo3',$this->contactoProspectoNuevo3,true);
		$criteria->compare('puestoProspectoNuevo3',$this->puestoProspectoNuevo3,true);
		$criteria->compare('fechaVisitaProspectoNuevo3_f',$this->fechaVisitaProspectoNuevo3_f,true);
		$criteria->compare('tipoContactoProspectoNuevo3',$this->tipoContactoProspectoNuevo3,true);
		$criteria->compare('resultadoProspectoNuevo3',$this->resultadoProspectoNuevo3,true);
		$criteria->compare('fechaProximaVisitaProspectoNuevo3_f',$this->fechaProximaVisitaProspectoNuevo3_f,true);
		$criteria->compare('nombreProspectoNuevo4',$this->nombreProspectoNuevo4,true);
		$criteria->compare('contactoProspectoNuevo4',$this->contactoProspectoNuevo4,true);
		$criteria->compare('puestoProspectoNuevo4',$this->puestoProspectoNuevo4,true);
		$criteria->compare('fechaVisitaProspectoNuevo4_f',$this->fechaVisitaProspectoNuevo4_f,true);
		$criteria->compare('tipoContactoProspectoNuevo4',$this->tipoContactoProspectoNuevo4,true);
		$criteria->compare('resultadoProspectoNuevo4',$this->resultadoProspectoNuevo4,true);
		$criteria->compare('fechaProximaVisitaProspectoNuevo4_f',$this->fechaProximaVisitaProspectoNuevo4_f,true);
		$criteria->compare('nombreProspectoNuevo5',$this->nombreProspectoNuevo5,true);
		$criteria->compare('contactoProspectoNuevo5',$this->contactoProspectoNuevo5,true);
		$criteria->compare('puestoProspectoNuevo5',$this->puestoProspectoNuevo5,true);
		$criteria->compare('fechaVisitaProspectoNuevo5_f',$this->fechaVisitaProspectoNuevo5_f,true);
		$criteria->compare('tipoContactoProspectoNuevo5',$this->tipoContactoProspectoNuevo5,true);
		$criteria->compare('resultadoProspectoNuevo5',$this->resultadoProspectoNuevo5,true);
		$criteria->compare('fechaProximaVisitaProspectoNuevo5_f',$this->fechaProximaVisitaProspectoNuevo5_f,true);
		$criteria->compare('nombreProspectoNuevo6',$this->nombreProspectoNuevo6,true);
		$criteria->compare('contactoProspectoNuevo6',$this->contactoProspectoNuevo6,true);
		$criteria->compare('puestoProspectoNuevo6',$this->puestoProspectoNuevo6,true);
		$criteria->compare('fechaVisitaProspectoNuevo6_f',$this->fechaVisitaProspectoNuevo6_f,true);
		$criteria->compare('tipoContactoProspectoNuevo6',$this->tipoContactoProspectoNuevo6,true);
		$criteria->compare('resultadoProspectoNuevo6',$this->resultadoProspectoNuevo6,true);
		$criteria->compare('fechaProximaVisitaProspectoNuevo6_f',$this->fechaProximaVisitaProspectoNuevo6_f,true);
		$criteria->compare('nombreProspectoNuevo7',$this->nombreProspectoNuevo7,true);
		$criteria->compare('contactoProspectoNuevo7',$this->contactoProspectoNuevo7,true);
		$criteria->compare('puestoProspectoNuevo7',$this->puestoProspectoNuevo7,true);
		$criteria->compare('fechaVisitaProspectoNuevo7_f',$this->fechaVisitaProspectoNuevo7_f,true);
		$criteria->compare('tipoContactoProspectoNuevo7',$this->tipoContactoProspectoNuevo7,true);
		$criteria->compare('resultadoProspectoNuevo7',$this->resultadoProspectoNuevo7,true);
		$criteria->compare('zonaRecorrida2',$this->zonaRecorrida2,true);
		$criteria->compare('fechaProximaVisitaProspectoNuevo7_f',$this->fechaProximaVisitaProspectoNuevo7_f,true);
		$criteria->compare('nombreProspectoNuevo8',$this->nombreProspectoNuevo8,true);
		$criteria->compare('contactoProspectoNuevo8',$this->contactoProspectoNuevo8,true);
		$criteria->compare('puestoProspectoNuevo8',$this->puestoProspectoNuevo8,true);
		$criteria->compare('fechaVisitaProspectoNuevo8_f',$this->fechaVisitaProspectoNuevo8_f,true);
		$criteria->compare('tipoContactoProspectoNuevo8',$this->tipoContactoProspectoNuevo8,true);
		$criteria->compare('resultadoProspectoNuevo8',$this->resultadoProspectoNuevo8,true);
		$criteria->compare('fechaProximaVisitaProspectoNuevo8_f',$this->fechaProximaVisitaProspectoNuevo8_f,true);
		$criteria->compare('nombreProspectoNuevo9',$this->nombreProspectoNuevo9,true);
		$criteria->compare('contactoProspectoNuevo9',$this->contactoProspectoNuevo9,true);
		$criteria->compare('puestoProspectoNuevo9',$this->puestoProspectoNuevo9,true);
		$criteria->compare('fechaVisitaProspectoNuevo9_f',$this->fechaVisitaProspectoNuevo9_f,true);
		$criteria->compare('tipoContactoProspectoNuevo9',$this->tipoContactoProspectoNuevo9,true);
		$criteria->compare('resultadoProspectoNuevo9',$this->resultadoProspectoNuevo9,true);
		$criteria->compare('fechaProximaVisitaProspectoNuevo9_f',$this->fechaProximaVisitaProspectoNuevo9_f,true);
		$criteria->compare('nombreProspectoNuevo10',$this->nombreProspectoNuevo10,true);
		$criteria->compare('contactoProspectoNuevo10',$this->contactoProspectoNuevo10,true);
		$criteria->compare('puestoProspectoNuevo10',$this->puestoProspectoNuevo10,true);
		$criteria->compare('fechaVisitaProspectoNuevo10_f',$this->fechaVisitaProspectoNuevo10_f,true);
		$criteria->compare('tipoContactoProspectoNuevo10',$this->tipoContactoProspectoNuevo10,true);
		$criteria->compare('resultadoProspectoNuevo10',$this->resultadoProspectoNuevo10,true);
		$criteria->compare('fechaProximaVisitaProspectoNuevo10_f',$this->fechaProximaVisitaProspectoNuevo10_f,true);
		$criteria->compare('zonaRecorrida1',$this->zonaRecorrida1,true);
		$criteria->compare('clienteFrecuente1',$this->clienteFrecuente1,true);
		$criteria->compare('cantidadObras1',$this->cantidadObras1);
		$criteria->compare('fechaRecorrido1_f',$this->fechaRecorrido1_f,true);
		$criteria->compare('observacionesObra1',$this->observacionesObra1,true);
		$criteria->compare('folioSinter1',$this->folioSinter1,true);
		$criteria->compare('clienteFrecuente2',$this->clienteFrecuente2,true);
		$criteria->compare('cantidadObras2',$this->cantidadObras2);
		$criteria->compare('fechaRecorrido2_f',$this->fechaRecorrido2_f,true);
		$criteria->compare('observacionesObra2',$this->observacionesObra2,true);
		$criteria->compare('folioSinter2',$this->folioSinter2,true);
		$criteria->compare('zonaRecorrida3',$this->zonaRecorrida3,true);
		$criteria->compare('clienteFrecuente3',$this->clienteFrecuente3,true);
		$criteria->compare('cantidadObras3',$this->cantidadObras3);
		$criteria->compare('fechaRecorrido3_f',$this->fechaRecorrido3_f,true);
		$criteria->compare('observacionesObra3',$this->observacionesObra3,true);
		$criteria->compare('folioSinter3',$this->folioSinter3,true);
		$criteria->compare('zonaRecorrida4',$this->zonaRecorrida4,true);
		$criteria->compare('clienteFrecuente4',$this->clienteFrecuente4,true);
		$criteria->compare('cantidadObras4',$this->cantidadObras4);
		$criteria->compare('fechaRecorrido4_f',$this->fechaRecorrido4_f,true);
		$criteria->compare('observacionesObra4',$this->observacionesObra4,true);
		$criteria->compare('folioSinter4',$this->folioSinter4,true);
		$criteria->compare('zonaRecorrida5',$this->zonaRecorrida5,true);
		$criteria->compare('clienteFrecuente5',$this->clienteFrecuente5,true);
		$criteria->compare('cantidadObras5',$this->cantidadObras5);
		$criteria->compare('fechaRecorrido5_f',$this->fechaRecorrido5_f,true);
		$criteria->compare('observacionesObra5',$this->observacionesObra5,true);
		$criteria->compare('folioSinter5',$this->folioSinter5,true);
		$criteria->compare('presupuestoVigente',$this->presupuestoVigente);
		$criteria->compare('presupuestoImporte',$this->presupuestoImporte);
		$criteria->compare('presupuestoNuevaSemana',$this->presupuestoNuevaSemana);
		$criteria->compare('presupuestoNuevaSemanaImporte',$this->presupuestoNuevaSemanaImporte);
		$criteria->compare('presupuestoNuevoMes',$this->presupuestoNuevoMes);
		$criteria->compare('presupuestoNuevoMesImporte',$this->presupuestoNuevoMesImporte);
		$criteria->compare('obraVigente',$this->obraVigente);
		$criteria->compare('obraPotencialM2',$this->obraPotencialM2);
		$criteria->compare('obraEventoProg',$this->obraEventoProg);
		$criteria->compare('obraEventoVencido',$this->obraEventoVencido);
		$criteria->compare('obraEventoPorVencer',$this->obraEventoPorVencer);
		$criteria->compare('usuario_did',$this->usuario_did,true);
		$criteria->compare('estatus_did',$this->estatus_did,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function calcularAlcance($mes, $meta)
	{
		return ($mes / $meta) * 100;
	}
	
	public function calcularProyeccionCierre($mes, $facturar)
	{
		return ($mes + $facturar);
	}
}