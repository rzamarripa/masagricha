<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="es"/>

		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/docs.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/select2.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/datatable.css" />
		<link rel="icon" type="image/x-icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico" />
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<?php //Yii::app()->bootstrap->register(); ?>
		<script src="<?php echo Yii::app()->theme->baseUrl . '/js/jquery.js';?>"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl . '/js/highcharts.js';?>"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl . '/js/select2.min.js';?>"></script>

	</head>

	<body>

	<?php
		$items = array();

		$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));

		if(isset($usuarioActual) && $usuarioActual->tipoUsuario->nombre == 'Administrador')
		{
			$items=array(
		        array(
		            'class'=>'bootstrap.widgets.TbMenu',
								'items'=>array(
		                array('label'=>'Inicio','icon'=>'home white', 'url'=>array('site/index')),										
					       )));
		}else if(isset($usuarioActual) && $usuarioActual->tipoUsuario->nombre == 'Super'){
			$items=array(
		        array(
		            'class'=>'bootstrap.widgets.TbMenu',
								'items'=>array(
		                array('label'=>'Inicio','icon'=>'home white', 'url'=>array('site/index')),
										array('label'=>'Usuarios', 'icon'=>'file white', 'url'=>array('usuario/index')),
					          )),
					       );
		}

		$items[]=array(
		  'class'=>'bootstrap.widgets.TbMenu',
		  'htmlOptions'=>array('class'=>'pull-right'),
		  'encodeLabel'=>false,
		  'items'=>array(
		  	array('label'=>$usuarioActual->nombre, 'url'=>array('/perfil/view'), 'visible'=>!Yii::app()->user->isGuest, 'htmlOptions'=>array('class'=>'btn'), 'icon'=>'user white','items'=>array(
			                array('label'=>'Ver Perfil', 'icon'=>'user white','url'=>array('usuario/view', 'id'=>$usuarioActual->id)),
			                array('label'=>'Cambiar Contraseña', 'icon'=>'wrench white','url'=>array('usuario/cambiar', 'id'=>$usuarioActual->id)),
			                array('label'=>'Cerrar Sesión', 'icon'=>'off white', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'htmlOptions'=>array('class'=>'btn'))
			            )),
		  	array('label'=>'Iniciar Sesión', 'icon'=>'off white', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest, 'htmlOptions'=>array('class'=>'btn')),
		  ),
		);

		$this->widget('bootstrap.widgets.TbNavbar', array(
		    'type'=>'',
		    'brand'=>Yii::app()->name,
		    'brandUrl'=>array('site/index'),
		    'brandOptions'=>array('class'=>'left'),
		    'collapse'=>true,
		    'items'=>$items
		));

		$flashMessages = Yii::app()->user->getFlashes();
		if($flashMessages){
			foreach($flashMessages as $key => $message){
				echo '<div class="info alert alert-'.$key.'" style="text-align:center">
							<button type="button" class="close" data-dismiss="alert">&times;</button>';
				echo '<p>' . $message . '</p>';
				echo '</div>';
			}
		}
	?>
		<div class="container" id="page">
				<div class="row">
					<div class="span12" style="margin-top:20px;">
						<?php if(isset($this->breadcrumbs)):?>
							<?php $this->widget('BBreadcrumbs', array(
								'links'=>$this->breadcrumbs,
								'separator'=>' / ',
							)); ?><!-- breadcrumbs -->
						<?php endif?>
					</div>
			</div>
			<?php echo $content; ?>
			<br/>
			<div id="footer" style="text-align:center">
				<strong>Todos los derechos reservados para Chaparral <?php echo date('Y'); ?><br/></strong>
				<br/>
			</div>
		</div>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/datatable.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/main.js"></script>

	</body>
</html>
<?php
	Yii::app()->clientScript->registerScript(
		'myHideEffect',
		'$(".info").animate({opacity:1.0},5000).slideUp("slow");',
		CClientScript::POS_READY
	);