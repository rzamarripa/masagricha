<?php

class ReporteController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('autocompletesearch'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','create','update','admin','delete','cambiarestatus','indexgerente','imprimir','duplicar'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{		
		$model=new Reporte;		
				
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		$usuarioActual = Usuario::model()->find("usuario = :x", array(':x' => Yii::app()->user->name));
		if(isset($_POST['Reporte']))
		{			
			$meta = Meta::model()->find("YEAR(fecha_f) = YEAR(curdate()) && month(fecha_f) = month(curdate()) && usuario_did = " . $usuarioActual->id);
			$model->attributes=$_POST['Reporte'];
			$model->fecha_f = date("Y-m-d");
			$model->compania = $usuarioActual->compania;
			$model->plaza = $usuarioActual->ciudad;
			$model->centroVenta = $usuarioActual->puntoVenta;
			$model->nombre = $usuarioActual->nombre;
			
			$model->ventaTotalMeta = $meta->ventaTotalMeta;
			$model->ventaM2Meta = $meta->ventaM2Meta;
			$model->pnpvMeta = $meta->pnpvMeta;
			$model->porcentajeAvisaMeta = $meta->porcentajeAvisaMeta;
			$model->descPorcentajeMeta = $meta->descPorcentajeMeta;
			
			$model->usuario_did = $usuarioActual->id;
			$model->estatus_did = 1;
			if($model->save())
				$this->redirect(array('index'));
		}
		elseif(isset($_GET['rep']))
        {
            $tmp=$this->loadModel($_GET['rep']);
            $tmp->id=null;
            $tmp->estatus_did = 1;
            $model->attributes=$tmp->attributes;
        } 
		
		if($this->establecioMetas() == 0)
		{
			Yii::app()->user->setFlash('notice', "Por favor, escribe las metas del mes actual y luego intenta hacer el reporte.");
			$this->redirect(array('meta/create'));	
		}
		else
		{
			$meta = Meta::model()->find("YEAR(fecha_f) = YEAR(curdate()) && month(fecha_f) = month(curdate()) && usuario_did = " . $usuarioActual->id);
			
			$cantidadReportes = Reporte::model()->count("YEAR(fecha_f) = YEAR(curdate()) && month(fecha_f) = month(curdate()) && usuario_did = " . $usuarioActual->id);
			
			if($cantidadReportes < 10){
				$model->ventaTotalMeta = $meta->ventaTotalMeta;
				$model->ventaM2Meta = $meta->ventaM2Meta;
				$model->pnpvMeta = $meta->pnpvMeta;
				$model->porcentajeAvisaMeta = $meta->porcentajeAvisaMeta;
				$model->descPorcentajeMeta = $meta->descPorcentajeMeta;
				
				$this->render('create',array(
					'model'=>$model,
					'meta' => $meta,
				));
			}
			else
			{
				Yii::app()->user->setFlash('success', "Ya ha realizado los reportes de este mes. <br/>Gracias");
				$this->redirect(array('site/index'));
			}
		}
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Reporte']))
		{			
			$usuarioActual = Usuario::model()->find("usuario = :x", array(':x' => Yii::app()->user->name));
			$meta = Meta::model()->find("YEAR(fecha_f) = YEAR(curdate()) && month(fecha_f) = month(curdate()) && usuario_did = " . $usuarioActual->id);
			
			$model->attributes=$_POST['Reporte'];
			$model->fecha_f = date("Y-m-d");
			$model->compania = $usuarioActual->compania;
			$model->plaza = $usuarioActual->ciudad;
			$model->centroVenta = $usuarioActual->puntoVenta;
			$model->nombre = $usuarioActual->nombre;
			$model->ventaTotalMeta = $meta->ventaTotalMeta;
			$model->ventaM2Meta = $meta->ventaM2Meta;
			$model->pnpvMeta = $meta->pnpvMeta;
			$model->porcentajeAvisaMeta = $meta->porcentajeAvisaMeta;
			$model->descPorcentajeMeta = $meta->descPorcentajeMeta;
			
			$model->usuario_did = $usuarioActual->id;
			$model->estatus_did = 1;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	
	public function actionImprimir($id)
	{
		$this->layout = "pdf";
		$this->render('imprimir',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$usuarioActual = Usuario::model()->find("usuario = :x", array(':x' => Yii::app()->user->name));
		if($usuarioActual->tipoUsuario->nombre != "Administrador"){
			$criteria = new CDbCriteria(
			array(
                'condition'=>'usuario_did='.$usuarioActual->id,
                'order' => 'id desc',
			));
		}
		else
		{
			$criteria = new CDbCriteria(
			array(
                'condition'=>'',
                'order' => 'id desc',
			));
		}
		
			
		$dataProvider=new CActiveDataProvider('Reporte', array(
		'criteria' => $criteria));
			
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Reporte('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Reporte']))
			$model->attributes=$_GET['Reporte'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Reporte::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='reporte-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionAutocompletesearch()
	{
	    $q = "%". $_GET['term'] ."%";
	 	$result = array();
	    if (!empty($q))
	    {
			$criteria=new CDbCriteria;
			$criteria->select=array('id', "CONCAT_WS(' ',nombre) as nombre");
			$criteria->condition="lower(CONCAT_WS(' ',nombre)) like lower(:nombre) ";
			$criteria->params=array(':nombre'=>$q);
			$criteria->limit='10';
	       	$cursor = Reporte::model()->findAll($criteria);
			foreach ($cursor as $valor)	
				$result[]=Array('label' => $valor->nombre,  
				                'value' => $valor->nombre,
				                'id' => $valor->id, );
	    }
	    echo json_encode($result);
	    Yii::app()->end();
	}
	
	public function establecioMetas()
	{
		$usuarioActual = Usuario::model()->obtenerUsuarioActual();
		
		$metas = Yii::app()->db->createCommand('SELECT MONTH(fecha_f) as fecha FROM Meta WHERE YEAR(fecha_f) = YEAR(curdate()) && usuario_did = ' . $usuarioActual->id . ';')->queryAll();
		$existe = 0;
		foreach($metas as $meta){
			if($meta["fecha"] == date("n"))
				$existe = 1;
		}
		
		return $existe;
	}
	
	public function actionCambiarestatus($id)
	{
		$model = $this->loadModel($id);
		$model->estatus_did = $_GET['estatus'];
		
		$usuarioActual = Usuario::model()->obtenerUsuarioActual();

		if($model->save())			
			if($usuarioActual->tipoUsuario_did == 1)
			    $this->redirect(array('indexgerente'));
			else
			    $this->redirect(array('index'));
			
    }
    
    public function actionIndexgerente()
	{
	    $this->render('indexgerente');
    }    
}
