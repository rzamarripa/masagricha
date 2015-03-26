<?php
	$semanaActual = Yii::app()->db->createCommand("SELECT semana FROM SemanaActual")->queryScalar();
	$semanaInicial = Yii::app()->db->createCommand("SELECT fechaInicial_f FROM Periodos where semana = " . $semanaActual)->queryScalar();
	$semanaFin = Yii::app()->db->createCommand("SELECT fechaFinal_f FROM Periodos where semana = " . $semanaActual)->queryScalar();
	$this->pageTitle="Presupuestos";
	$this->pageCaption='Presupuesto';
	$this->pageDescription='Semana Actual : ' . $semanaActual . " del " . date("d-m-Y", strtotime($semanaInicial)) . ' al ' . date("d-m-Y", strtotime($semanaFin));
	$this->breadcrumbs=array(
		'Presupuestos'
	);

	$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'presupuesto-form',
		'type'=>'horizontal',
		'enableAjaxValidation'=>false,
	));
?>
	<div class="row">
		<div class="span4">
			<div class="row">
				<div id="tipoGrafica" style="display: none;">graficageneral</div>
				<div class="span1 text-right">Empresa</div>
				<div class="span3">
					<?php echo CHtml::dropDownList("presupuesto[empresa]", '',
              CHtml::listData(Empresa::model()->findAll(), 'id', 'nombre'),
                    array("class"=>'span2',
                    'ajax' => array(
                    'type'=>'POST', //request type
                    'dataType' => 'json',
                    'url'=>CController::createUrl('presupuesto/actualizalotes'), //url to call.
                    //'update'=>'#lotes', //selector to update
                    'data'=>array('presupuesto[empresa]'=>"js:$('#presupuesto_empresa').val()",
                    							'presupuesto[p]'=>$configuracion->valor,
                    							'presupuesto[grupoCostos]'=>"js:$('#presupuesto_grupoCostos').val()",
                    							'presupuesto[semana]'=>"js:$('#presupuesto_semana').val()",
                    							'presupuesto[grafica]'=>"js:$('#tipoGrafica').html()"),
                    'beforeSend'=>'function() {
																		$("#myModal").modal("show");
																	}',
                    'success'=>'js:function(val){
	                    						console.log("hola");
	                    						console.log(val);
                    							$("#lotes").html(val.lotes);
                    							$("#presupuestoAcumulado").html(val.acum);
                    							$("#grafica").html(val.grafica);
																}',
										'complete'=>'function() {
																	$("#myModal").modal("hide");
																}',
                    ),'prompt'=>'Todas')); ?>
				</div>
			</div>
			<div id="costos" class="row">
				<div class="span1 text-right">
					Costos
				</div>
				<div class="span3">
					<?php echo CHtml::dropDownList("presupuesto[grupoCostos]", '',
              CHtml::listData(GrupoCostos::model()->findAll(), 'id', 'nombre'),
              array("class"=>'span2',
                    'ajax' => array(
                    'type'=>'POST', //request type
                    'dataType' => 'json',
                    'url'=>CController::createUrl('presupuesto/actualizalotes'), //url to call.
                    //'update'=>'#lotes', //selector to update
                    'data'=>array('presupuesto[empresa]'=>"js:$('#presupuesto_empresa').val()",
                    							'presupuesto[p]'=>$configuracion->valor,
                    							'presupuesto[grupoCostos]'=>"js:$('#presupuesto_grupoCostos').val()",
                    							'presupuesto[semana]'=>"js:$('#presupuesto_semana').val()",
                    							'presupuesto[grafica]'=>"js:$('#tipoGrafica').html()"),
                    'beforeSend'=>'function() {
																		$("#myModal").modal("show");
																	}',
                    'complete'=>'js:function(xhr, opts){
																	if(!localStorage.getItem("anterior"))
									                  localStorage.setItem("anterior", $("#presupuesto_grupoCostos").val());
									                localStorage.setItem("actual", $("#presupuesto_grupoCostos").val());
																	if(	(localStorage.getItem("actual") == 6 && localStorage.getItem("anterior") != 6) ||
																			(localStorage.getItem("actual") != 6 && localStorage.getItem("anterior") == 6)){
																		localStorage.setItem("anterior", $("#presupuesto_grupoCostos").val());
																  }else{
																		xhr.abort();
																		localStorage.setItem("anterior", $("#presupuesto_grupoCostos").val());
																	}
																	$("#myModal").modal("hide");
																}',
                    'success'=>'js:function(val){
                    							$("#lotes").html(val.lotes);
                    							$("#presupuestoAcumulado").html(val.acum);
                    							$("#grafica").html(val.grafica);
																}',
                    ),'prompt'=>'Todos')); ?>
				</div>
			</div>
			<?php /*
			<div class="row">
				<div class="span1 text-right">
					Tipo Análisis
				</div>
				<div class="span3">
					<?php echo CHtml::dropDownList("presupuesto[tipoAnalisis]",'',CHtml::listData(TipoAnalisis::model()->findAll(), "id", "nombre"),array("class"=>"span2",'prompt'=>'Ninguno')); ?>
				</div>
			</div>
			<div class="row">
				<div class="span1 text-right">
					<label class="text-right">Superficie</label>
				</div>
				<div class="span2">
					<label id="totalHectareas" class="text-right"></label>
				</div>
			</div>
			*/ ?>
			
			<div class="row">
				<div class="span1 text-right">
					Semana
				</div>
				<div class="span3">
					<?php echo CHtml::dropDownList("presupuesto[semana]", '',
              CHtml::listData(Periodos::model()->findAll(), 'id', 'semana'),
              			array("class"=>'span2',
              			'ajax' => array(
                    'type'=>'POST', //request type
                    'url'=>CController::createUrl('presupuesto/actualizalotes'), //url to call.
                    //'update'=>'#presupuestoAcumulado', //selector to update
										'data'=>array('presupuesto[empresa]'=>"js:$('#presupuesto_empresa').val()",
																													'presupuesto[p]'=>$configuracion->valor,
																													'presupuesto[grupoCostos]'=>"js:$('#presupuesto_grupoCostos').val()",
																													'presupuesto[semana]'=>"js:$('#presupuesto_semana').val()",
																													'presupuesto[grafica]'=>"js:$('#tipoGrafica').html()",),
										'beforeSend'=>'function() {
																		$("#myModal").modal("show");
																	}',
										'success'=>'js:function(val){
        							$("#lotes").html(val.lotes);
        							$("#presupuestoAcumulado").html(val.acum);
        							$("#grafica").html(val.grafica);
										}',
										'complete'=>'function() {
																		$("#myModal").modal("hide");
																	}',
										'type'=>'POST',
										'dataType' => 'json',),'prompt'=>'Todas')); ?>
				</div>
				<div class="span1">
					<label id="costoAcumulado"></label>
				</div>
			</div>
			<div class="row">
				<div class="span4">
					<div id="presupuestoAcumulado">
						<?php $this->renderPartial("_presupuestosacumulados",array('presupuestosacumulados' => $presupuestos),false); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span4">
					<div id="lotes"></div>
				</div>
			</div>
		</div>
		<div class="span8">
			<div id="menugrafica">
				<ul class="nav nav-pills">
				  <li id="gg" class="active"><?php echo CHtml::ajaxLink('Costos de Producción', array('presupuesto/actualizalotes'),
			  																array(
						  																'beforeSend'=>'js:function(xhr, opts){
							  																$("#tipoGrafica").html("graficageneral");
							  																$("#myModal").modal("show");
							  																$("#nombreGrafica").html("Gráfica General");
							  																$("li").removeClass("active");
																								$("#gg").addClass("active");
																							}',
																							'data'=>array('presupuesto[empresa]'=>"js:$('#presupuesto_empresa').val()",
																													'presupuesto[p]'=>$configuracion->valor,
																													'presupuesto[grupoCostos]'=>"js:$('#presupuesto_grupoCostos').val()",
																													'presupuesto[semana]'=>"js:$('#presupuesto_semana').val()",
																													'presupuesto[grafica]'=>"graficageneral",),
																							'success'=>'js:function(val){
							                    							$("#lotes").html(val.lotes);
							                    							$("#presupuestoAcumulado").html(val.acum);
							                    							$("#grafica").html(val.grafica);
																							}',
																							'complete'=>'function() {
																								$("#myModal").modal("hide");
																							}',
			  																			'type'=>'POST',
			  																			'dataType' => 'json',), array('id'=>"d1"));?></li>
				  <li id="barrasemanal"><?php echo CHtml::ajaxLink('Barra Semanal', array('presupuesto/actualizalotes'),
					  														array(
						  																'beforeSend'=>'js:function(xhr, opts){
							  																$("#tipoGrafica").html("barrasemanal");
							  																$("#myModal").modal("show");
																								$("#nombreGrafica").html("Barra Semanal");
																								$("li").removeClass("active");
																								$("#barrasemanal").addClass("active");
																							}',
																							'data'=>array('presupuesto[empresa]'=>"js:$('#presupuesto_empresa').val()",
																													'presupuesto[p]'=>$configuracion->valor,
																													'presupuesto[grupoCostos]'=>"js:$('#presupuesto_grupoCostos').val()",
																													'presupuesto[semana]'=>"js:$('#presupuesto_semana').val()",
																													'presupuesto[grafica]'=>"barrasemanal",),
																							'success'=>'js:function(val){
							                    							$("#lotes").html(val.lotes);
							                    							$("#presupuestoAcumulado").html(val.acum);
							                    							$("#grafica").html(val.grafica);
																							}',
																							'complete'=>'function() {
																								$("#myModal").modal("hide");
																							}',
																							'type'=>'POST',
																							'dataType' => 'json',), array('id'=>"d2"));?></li>
					<?php /* <li id="manoobra"><?php echo CHtml::ajaxLink('Costos de Producción', array('presupuesto/actualizalotes'),
																				array(
								  														'beforeSend'=>'js:function(xhr, opts){
									  														$("#tipoGrafica").html("produccion");
									  														$("#myModal").modal("show");
																								$("#nombreGrafica").html("Costos de Producción");
																							}',
																							'data'=>array('presupuesto[empresa]'=>"js:$('#presupuesto_empresa').val()",
																													'presupuesto[p]'=>$configuracion->valor,
																													'presupuesto[grupoCostos]'=>"js:$('#presupuesto_grupoCostos').val()",
																													'presupuesto[semana]'=>"js:$('#presupuesto_semana').val()",
																													'presupuesto[grafica]'=>"produccion",),
																							'success'=>'js:function(val){
							                    							$("#lotes").html(val.lotes);
							                    							$("#presupuestoAcumulado").html(val.acum);
							                    							$("#grafica").html(val.grafica);
																							}',
																							'complete'=>'function() {
																								$("#myModal").modal("hide");
																							}',
																							'type'=>'POST',
																							'dataType' => 'json',), array('id'=>"d3"));?></li> */ ?>
<?php /*					<li id="lote"><?php
						echo CHtml::ajaxLink('Costos de Producción', array('presupuesto/actualizalotes'),
																				array(
						  																'beforeSend'=>'js:function(xhr, opts){
							  																$("#tipoGrafica").html("lote");
							  																$("#myModal").modal("show");
							  																$("#nombreGrafica").html("Lote");
							  																$("li").removeClass("active");
																								$("#lote").addClass("active");
																							}',
																							'data'=>array('presupuesto[empresa]'=>"js:$('#presupuesto_empresa').val()",
																													'presupuesto[p]'=>$configuracion->valor,
																													'presupuesto[grupoCostos]'=>"js:$('#presupuesto_grupoCostos').val()",
																													'presupuesto[semana]'=>"js:$('#presupuesto_semana').val()",
																													'presupuesto[grafica]'=>"lote",
																													'presupuesto[lote]'=>"js:$('input[name=presupuesto_lote]:checked').val()",
																											),
																							'success'=>'js:function(val){
							                    							$("#lotes").html(val.lotes);
							                    							$("#presupuestoAcumulado").html(val.acum);
							                    							$("#grafica").html(val.grafica);
																							}',
																							'complete'=>'function() {
																								$("#myModal").modal("hide");
																							}',
																							'type'=>'POST',
																							'dataType' => 'json',), array('id'=>"d4"));?></li> */ ?>
					<li id="lotetotal"><?php echo CHtml::ajaxLink('Lote Tabular', array('presupuesto/actualizalotes'),
																				array(
						  																'beforeSend'=>'js:function(xhr, opts){
							  																$("#tipoGrafica").html("lotetabular");
							  																$("#myModal").modal("show");
																								$("#nombreGrafica").html("Lote Tabular");
																								$("li").removeClass("active");
																								$("#lotetotal").addClass("active");
																							}',
																							'data'=>array('presupuesto[empresa]'=>"js:$('#presupuesto_empresa').val()",
																													'presupuesto[p]'=>$configuracion->valor,
																													'presupuesto[grupoCostos]'=>"js:$('#presupuesto_grupoCostos').val()",
																													'presupuesto[semana]'=>"js:$('#presupuesto_semana').val()",
																													'presupuesto[grafica]'=>"lotetabular"),
																							'success'=>'js:function(val){
							                    							$("#lotes").html(val.lotes);
							                    							$("#presupuestoAcumulado").html(val.acum);
							                    							$("#grafica").html(val.grafica);
																							}',
																							'complete'=>'function() {
																								$("#myModal").modal("hide");
																							}',
																							'type'=>'POST',
																							'dataType' => 'json',), array('id'=>"d5"));?></li>
					<li id="cultivos"><?php echo CHtml::ajaxLink('Empaque/Bultos', array('presupuesto/actualizacultivos'),
																				array(
						  																'beforeSend'=>'js:function(xhr, opts){
							  																$("#tipoGrafica").html("cultivos");
							  																$("#myModal").modal("show");
																								$("#nombreGrafica").html("Empaque / Bultos");
																								$("li").removeClass("active");
																								$("#cultivos").addClass("active");
																							}',
																							'data'=>array('presupuesto[empresa]'=>"js:$('#presupuesto_empresa').val()",
																														'presupuesto[grafica]'=>"cultivos",
																														'presupuesto[semana]'=>"js:$('#presupuesto_semana').val()",),
																							'success'=>'js:function(val){
							                    							$("#lotes").html(val.lotes);
							                    							$("#grafica").html(val.grafica);
							                    							$("#presupuestoAcumulado").html(val.acum);
																							}',
																							'complete'=>'function() {
																								$("#myModal").modal("hide");
																							}',
																							'type'=>'POST',
																							'dataType' => 'json',), array('id'=>"d6"));?></li>
				</ul>
			</div>
			<div id="grafica">
					<?php $this->renderPartial("_graficageneral",array("presupuestoFormateado"=>$presupuestoFormateado, 'datos'=>$datos, 'valores'=>array("empresa" => "",
																																																																								"grupoCostos" => ""))); ?>
			</div>
			<div style="text-align: right;">
				<a id="atras_boton" href="#" class="btn btn-info btn-mini" onclick="atras()">&#60;&#60;Anterior</a>
				<a id="adelante_boton" href="#" class="btn btn-info btn-mini" onclick="siguiente()">Siguiente >></a>

			</div>

			

		</div>
	</div>
<?php $this->endWidget(); ?>

<div id="myModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Espere un momento...</h3>
  </div>
  <div class="modal-body" style="text-align: center;">
    <img src="<?php echo Yii::app()->theme->baseUrl . "/img/preloader.gif"; ?>" />
  </div>
  <div class="modal-footer">
		<h4 id="nombreGrafica">Gráfica General</h4>
  </div>
</div>

<?php
	$c= 0;
	$configuracion = Configuracion::model()->find("estatus_did = 1 && descripcion='Actual'");
?>

<script type="text/javascript">

   
$(window).bind("load", function() {
   // code here

   $('#presupuesto_empresa').val(1);
   var datosTodosAcum = {
								empresa: $('#presupuesto_empresa').val(),
								p: "<?php echo $configuracion->valor; ?>",
								grupoCostos: $('#presupuesto_grupoCostos').val(),
								semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
								grafica: $('#tipoGrafica').html(),
								acum:1,
								semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
							};
   cargarlote(datosTodosAcum);
   $('#atras_boton').hide();


});

var estados=[
			{
				empresa: 1,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: "",
				grafica: "graficageneral",
				acum:1,						
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 1,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: "",
				grafica: "graficageneral",
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 1,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 1,
				grafica: "graficageneral",
				acum:1,						
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 1,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 1,
				grafica: "graficageneral",
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 1,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 1,
				grafica: "lotetabular",
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 1,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 4,
				grafica: "graficageneral",
				acum:1,						
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 1,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 4,
				grafica: "graficageneral",
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 1,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 4,
				grafica: "lotetabular",
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 1,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 5,
				grafica: "graficageneral",
				acum:1,						
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 1,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 5,
				grafica: "graficageneral",
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 1,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 5,
				grafica: "lotetabular",
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},



			{
				empresa: 2,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: "",
				grafica: "graficageneral",
				acum:1,						
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 2,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: "",
				grafica: "graficageneral",
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 2,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 1,
				grafica: "graficageneral",
				acum:1,						
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 2,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 1,
				grafica: "graficageneral",
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 2,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 1,
				grafica: "lotetabular",
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 2,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 4,
				grafica: "graficageneral",
				acum:1,						
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 2,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 4,
				grafica: "graficageneral",
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 2,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 4,
				grafica: "lotetabular",
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 2,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 5,
				grafica: "graficageneral",
				acum:1,						
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 2,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 5,
				grafica: "graficageneral",
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			},
			{
				empresa: 2,
				p: "<?php echo $configuracion->valor; ?>",
				grupoCostos: 5,
				grafica: "lotetabular",
				semana: $('#presupuesto_semana').val()!=""? $('#presupuesto_semana').val(): "<?php echo $semanaActual; ?>",
			}

];

var 	estadoid=0;

function actualizar_estado () {
	// body...
	if (estados[estadoid].grafica== 'lotetabular') {
		$('#menugrafica li:eq(2) a').tab('show');	
	}
	else{
		$('#menugrafica li:eq(0) a').tab('show');	

	}
	estados[estadoid].semana=$('#presupuesto_semana').val(); 
	$('#tipoGrafica').html(estados[estadoid].grafica);
	$('#presupuesto_grupoCostos').val(estados[estadoid].grupoCostos);
	cargarlote(estados[estadoid]);
}
function siguiente () {
	if (estadoid<21) {
		estadoid++;
		$('#atras_boton').show();
	}
	if(estadoid==21){
		$('#adelante_boton').hide();
	}
	actualizar_estado ();
	
}
function atras () {
	if (estadoid>0) {
		estadoid--;
		$('#adelante_boton').show();
	}
	if(estadoid==0){
		$('#atras_boton').hide();
	}
	actualizar_estado ();
	
}


 

</script>