<?php
$this->pageCaption='Reporte';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar reporte';
$this->breadcrumbs=array(
	'Reporte',
);
$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
if($usuarioActual->tipoUsuario_did == 1){
	$this->menu=array(	
		array('label'=>'Administrar Reporte','url'=>array('admin')),
	);	
}
else{
	$this->menu=array(
	array('label'=>'Crear Reporte','url'=>array('create')),
	//array('label'=>'Administrar Reporte','url'=>array('admin')),
);
}

$reportes = Reporte::model()->findAll("usuario_did = " . $usuarioActual->id);

?>
<div class="row">
	<div class="span12">
		<div class="tabbable"> <!-- Only required for left/right tabs -->
		  	<ul class="nav nav-tabs">
		    	<li><?php echo CHtml::link("<i class='icon-hand-left'></i> Volver",array('site/index')); ?></li>
		    	<li class="active"><a href="#tab1" data-toggle="tab"><i class='icon-warning-sign'></i> Pendientes</a></li>
				<li><a href="#tab2" data-toggle="tab"><i class='icon-cog'></i> Enviados</a></li>		
				<li><a href="#tab3" data-toggle="tab"><i class='icon-cog'></i> Revisados</a></li>		
				<li><a href="#tab4" data-toggle="tab"><i class='icon-trash'></i> Papelera reciclaje</a></li>
			</ul>
			<div class="tab-content">
		    	<div class="tab-pane active" id="tab1">
					<?php $this->renderPartial("_reportesPendientes",array('reportes'=>$reportes)); ?>
				</div>
				<div class="tab-pane" id="tab2">
					<?php $this->renderPartial("_reportesEnviados",array('reportes'=>$reportes)); ?>
				</div>
				<div class="tab-pane" id="tab3">
					<?php $this->renderPartial("_reportesRevisados",array('reportes'=>$reportes)); ?>
				</div>
				<div class="tab-pane" id="tab4">
					<?php $this->renderPartial("_reportesPapelera",array('reportes'=>$reportes)); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(function() 
	{ 
		$('a[data-toggle="tab"]').on('shown', function (e) { //save the latest tab; use cookies if you like 'em better: 
				localStorage.setItem('ultimoContenidoReporte', $(e.target).attr('href')); 
		}); //go to the latest tab, if it exists: 
		 
		var ultimoContenidoReporte = localStorage.getItem('ultimoContenidoReporte'); 
		if (ultimoContenidoReporte) { 
			$('ul.nav-tabs').children().removeClass('active');
			$('a[href="' + ultimoContenidoReporte +'"]').tab('show');
			$('div.tab-content').children().removeClass('active');
			$(ultimoContenidoReporte).addClass('active');
		} 
	});
</script>