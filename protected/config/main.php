<?php
$is_production = false;
if (preg_match('/^\S+\.mx/', $_SERVER['SERVER_NAME'])) $is_production = true;

//if(dirname(__FILE__) == '/Users/isaaczepeda/pro/php/first/content/protected/config')
if ($is_production)
	$dbHost = 'mysql51-036.wc2.dfw1.stabletransit.com';
else
	$dbHost = '174.143.28.27';

//$dbHost = 'localhost';


// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

Yii::setPathOfAlias('bootstrap', dirname(dirname(__FILE__)) . '/extensions/bootstrap-theme');

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Chaparral',
	'theme'=>'bootstrap',
	'preload'=>array('log',),
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.bootstrap-theme.widgets.*',
    	'ext.bootstrap-theme.helpers.*',
    	'ext.bootstrap-theme.behaviors.*',
	),
	'modules'=>array(
    'gii'=>array(
    	'class'=>'system.gii.GiiModule',
			'password'=>'123qwe',
			'ipFilters'=>array('*','::1'),
            'generatorPaths'=>array(
                'bootstrap.gii',
            ),
        ),
    ),
	'language'=>'es',
	// application components
	'components'=>array(
		'cache'=>array(
				'class'=>'CFileCache',
		),
		 'bootstrap' => array(
		    'class' => 'ext.bootstrap-theme.components.Bootstrap',
		),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>true,
			'urlSuffix'=>'',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=chapapresupuestos',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'enableProfiling' => true,
			'charset' => 'utf8',
		),
		/*'db'=>array(
			'connectionString' => 'mysql:host=174.143.28.54;dbname=517226_cotuas',
			'emulatePrepare' => true,
			'username' => '517226_uasegreso',
			'password' => 'Zamarripa83',
			'enableProfiling' => true,
			'charset' => 'utf8',
		),*/
		/*'db'=>array(
			'connectionString' => 'mysql:host=174.143.28.27;dbname=517226_uasegresos',
			'emulatePrepare' => true,
			'username' => '517226_uasegreso',
			'password' => 'Zamarripa83',
			'enableProfiling' => true,
			'charset' => 'utf8',
		),*/
		/*
		 'db_hojas_vida' => array(
            'class'=>'CDbConnection',
            'connectionString' => 'mysql:host=localhost;dbname=hojas_vida',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
        */
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
			'enabled'=>true,
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning, trace, info, profile',
					'enabled'=>false,
					'categories'=>'system.*',
					'filter'=>'CLogFilter',
				),

				array(
					'logFile'=>'miaplicacion.log',
					'class'=>'CFileLogRoute',
					//'levels'=>'error, warning, trace, info, profile',
					'enabled'=>false,
					'categories'=>'application.*',
					'filter'=>'CLogFilter',
				),
				//Mostrar el Trace en la web

				array(
					'class'=>'CWebLogRoute',
					'enabled'=>false,
					'levels'=>'error, warning',//, trace, info, profile',
					'categories'=>'system.*, application.*',
					'filter'=>'CLogFilter',
				),
				//Tabla en la base de datos
				array(
					'class'=>'CDbLogRoute',
					'enabled'=>false,
					'levels'=>'info, error, warning, trace, profile',//, trace, info, profile',
					'connectionID'=>'db',
				),
				//Envía un correo
				array(
					'class'=>'CEmailLogRoute',
					'enabled'=>false,
					'levels'=>'error, warning',//, trace, info, profile
					'emails'=>array(
									'rzamarripa@uss.mx',
					),
					'subject'=>'Problemas en Sistema Donar',
					'sentFrom'=>'Problema Donar',
				),
				array(
					'class'=>'CEmailLogRoute',
					'enabled'=>false,
					'levels'=>'info',//, trace, info, profile
					'categories'=>'application.controllers.SiteController.login',
					'emails'=>array(
									'rzamarripa@uss.mx',
					),
					'subject'=>'Iniciaron sesión',
					'sentFrom'=>'donar@gmail.com',
				),
				//Hace un profile, te hace un resumen de lo que quieres perfilar (demoras)
				array(
					'class'=>'CProfileLogRoute',
					'enabled'=>false,
					'levels'=>'error, warning, trace, profile'// info, profile',
				),
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'rzamarripa@freenternet.com',
	),
);