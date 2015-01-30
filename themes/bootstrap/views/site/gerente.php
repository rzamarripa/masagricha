<?php
	$this->breadcrumbs=array(
		'Gerente',
	);
	$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
	$reportes = Reporte::model()->count('estatus_did != 5 && usuario_did = ' . $usuarioActual->id . ' || estatus_did != 5 && usuario_did = ' . $usuarioActual->id);
	
	$reportesPanel = '
		<div class="alert">
			<h3>Reportes</h3>
		</div>
		<ul>
			<li class="plan-feature">' . $reportes .' Enviados</li>
		</ul>
	';
?>
<div class="row">
	<div class="span6">
		<?php if(!Yii::app()->user->isGuest == true){ ?>
		<div class="container">
			<div class="row">
				<div class="span4 offset4 well">
		            <div class="row">
		        		<div class="span1"><?php 
		        			if(!$usuarioActual->foto)
			        			echo CHtml::link('<img class="thumbnail" src="http://critterapp.pagodabox.com/img/user.jpg" alt="">',array('usuario/view', 'id' => $usuarioActual->id));
			        		else
			        			echo CHtml::link('<img class="thumbnail" src="' . Yii::app()->baseUrl . '/fotos/' . $usuarioActual->foto . '" alt="">',array('usuario/view', 'id' => $usuarioActual->id));
			        			 ?>
			        	</div>
		        		<div class="span3">
		                  	<p><?php echo $usuarioActual->usuario; ?></p>
		                  	<p><strong><?php echo $usuarioActual->nombre;  ?></strong></p>
		                  	<p><strong><?php echo $usuarioActual->puesto;  ?></strong></p>
		                  	<p><strong><?php echo $usuarioActual->puntoVenta;  ?></strong></p>
						  	<p><strong><?php echo $usuarioActual->ciudad;  ?></strong></p>
						  	<p><strong><?php echo $usuarioActual->compania;  ?></strong></p>
		        			<?php echo CHtml::link('<span class="label label-warning">' . $reportes . ' reportes</span>',array('reporte/index')); ?>
		        			<?php echo CHtml::link('<span class="label label-success">Crear</span>',array('reporte/create')); ?>
		        			
		        		</div>
		        	</div>
		        </div>
			</div>
		</div>
<?php	} ?>
	</div>	
</div>