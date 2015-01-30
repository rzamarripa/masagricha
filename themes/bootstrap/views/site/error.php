<title>Error 404</title>

	<div class="row well text-center" style="height:300px;margin-top:50px;">
		<div class="span4 text-center">					
				<img style="margin-top:50px;" src="../../../../images/roto.png" alt="404" />
		</div>
		<div class="span7 text-center">
			<h1 style="margin-top:50px;">:'( Página no encontrada  </h1>
			<br />
			<p>La página que solicitaste no puede ser encontrada. <br/>En tu navegador presiona el botón <strong>Atrás</strong> para navegar a la página anterior.</p>
			<p><b>O podrías presionar este botón:</b></p>			
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'url'=>array('site/index'),
				'label'=>'Llévame al Inicio',
				'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
				'size'=>'large', // null, 'large', 'small' or 'mini'
				'icon'=>'home white',
			)); ?>
		</div>
	</div>
