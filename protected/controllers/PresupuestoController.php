<?php

class PresupuestoController extends Controller
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
				'actions'=>array('index','view','create','update','admin','delete','presupuestos','actualizalotes',
				'actualizaPresupuestosAcumulados','graficageneral','barrasemanal','produccion','lote','lotetabular',
				'actionGraficageneralpresupuesto','actualizacultivos','graficacultivos'),
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
		$model=new Presupuesto;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Presupuesto']))
		{
			$model->attributes=$_POST['Presupuesto'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
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

		if(isset($_POST['Presupuesto']))
		{
			$model->attributes=$_POST['Presupuesto'];
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

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Presupuesto');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Presupuesto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Presupuesto']))
			$model->attributes=$_GET['Presupuesto'];

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
		$model=Presupuesto::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='presupuesto-form')
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
	       	$cursor = Presupuesto::model()->findAll($criteria);
			foreach ($cursor as $valor)
				$result[]=Array('label' => $valor->nombre,
				                'value' => $valor->nombre,
				                'id' => $valor->id, );
	    }
	    echo json_encode($result);
	    Yii::app()->end();
	}

	public function actionPresupuestos()
	{
		//Gráfica General
		
		$sql =  'select sum(p.importe) as importe, 
			l.lote as lote,
			p.temporada as temporada, p.semana as semana 
			from Presupuesto as p 
			inner join Superficies as s on s.id = p.superficie_did 
			inner join Lotes as l on l.id = s.lote_did 
			group by p.semana, p.temporada 
			order by p.temporada, p.semana';

		$datos = Yii::app()->db->createCommand($sql)->queryAll();
			
		$configuracion = Configuracion::model()->find("descripcion = 'Actual'");
		$configuracionesGeneral = Configuracion::model()->findAll("tipografica = 'General'");
		$presupuestoFormateado = array();
		foreach($configuracionesGeneral as $config){

			$criteria = new CDbCriteria();
			$criteria->select = 'sum(importe) as importe, semana, temporada';
			$criteria->condition = 'temporada = :temp';
			$criteria->group = 'semana';
			$criteria->order = 'semana ASC';
			$criteria->params = array(':temp' => $config->valor);

			$presupuestos = Presupuesto::model()->findAll($criteria);

			foreach($presupuestos as $p){
				$presupuestoFormateado[$config->descripcion][] = array('importe' => $p->importe, 'semana'=> $p->semana, 'temporada' => $p->temporada);
			}
		}

		//Presupuestos Acumulados
		$empresaRecord = Empresa::model()->find("id = 1");
		$configuracionPA = Configuracion::model()->findAll("estatus_did = 1");
		$presupuestos = array();
		foreach($configuracionPA as $config){
			$presupuestos[$config->descripcion] = Yii::app()->db->createCommand("SELECT sum(p.importe) as importe
											FROM Presupuesto as p
											WHERE temporada = '" . $config->valor . "' && semana <= " . Yii::app()->db->createCommand("SELECT semana FROM SemanaActual")->queryScalar() . " 
														and empresa_did IN
											(
										    SELECT e.id as empresa_did
										    FROM Empresa as e
										    WHERE grupo = " . $empresaRecord->grupo . "
											)")->queryScalar();
		}
		$presupuestos["semana"] = "";
		$this->render("presupuestos",array("configuracion"=>$configuracion, "presupuestoFormateado"=>$presupuestoFormateado, "presupuestos"=>$presupuestos, "datos"=>$datos));
	}

	public function actionActualizalotes(){
		if(isset($_POST["empresa"])){
			$valores = $_POST;
		}else{
			$valores = $_POST["presupuesto"];
		}
		if($valores["grafica"] == "cultivos"){
			$this->actionActualizacultivos($valores);
			exit;
		}
		$lotes = array();
		
		$temporada = substr($valores["p"], 1);
		//Aquí van las consultas para los lotes
		$empresa = $valores["empresa"];
		$importePresupuesto = 0;
		
		//SQL Superficies
		$sqlempresasuperficie = (empty($valores["empresa"])) ? " (s.temporada = '1415' || s.temporada = '1314') " : 
									" s.empresa_did = " . $empresa . " and (s.temporada = '1415' || s.temporada = '1314') ";
		$sqlSuperficies = "Select s.id, s.empresa_did, s.lote_did, 
											sum(if(s.temporada = '1415',s.hectareas,0)) Actuales,
											sum(if(s.temporada = '1314',s.hectareas,0)) Anteriores 
											from Superficies s where " . $sqlempresasuperficie . "
											group by s.lote_did
											order by s.empresa_did, s.lote_did;";
		$lotesSuperficies = Yii::app()->db->createCommand($sqlSuperficies)->queryAll();//Aquí Ordené los lotes
		
		if(empty($valores["empresa"])){
			$sqlempresalotes = "";			
		}else{
			if(empty($valores["semana"])){
				$sqlempresalotes = "empresa_did = " . $empresa. " and ";
			}else{
				$sqlempresalotes = "empresa_did = " . $empresa;
			}			
		}
		$semanaActualLotes = Yii::app()->db->createCommand("SELECT semana FROM SemanaActual")->queryScalar();
		
		if(isset($valores["acum"])){
			if(empty($valores["semana"]) && empty($valores["grupoCostos"])){
				$sqlsemanalotes = "";
			}else if(empty($valores["semana"]) && !empty($valores["grupoCostos"])){
				$sqlsemanalotes = " grupoCostos_did = " . $valores["grupoCostos"] . " and ";
			}else if(empty($valores["empresa"])){
				$sqlsemanalotes = ' semana <= ' . $semanaActualLotes . " and ";
			}else{
				if(empty($valores["grupoCostos"])){
					$sqlsemanalotes = ' and semana <= ' . $semanaActualLotes . " and ";
				}else{
					$sqlsemanalotes = ' and semana <= ' . $semanaActualLotes . " and grupoCostos_did = " . $valores["grupoCostos"] . " and ";
				}			
			}
		}else{
			if(empty($valores["semana"]) && empty($valores["grupoCostos"])){
				$sqlsemanalotes = "";
			}else if(empty($valores["semana"]) && !empty($valores["grupoCostos"])){
				$sqlsemanalotes = " grupoCostos_did = " . $valores["grupoCostos"] . " and ";
			}else if(empty($valores["empresa"])){
				$sqlsemanalotes = ' semana = ' . $valores["semana"] . " and ";
			}else{
				if(empty($valores["grupoCostos"])){
					$sqlsemanalotes = ' and semana = ' . $valores["semana"] . " and ";
				}else{
					$sqlsemanalotes = ' and semana = ' . $valores["semana"] . " and grupoCostos_did = " . $valores["grupoCostos"] . " and ";
				}			
			}
		}
				
		foreach($lotesSuperficies as $superficie){
			$loteActual = Lotes::model()->find("id = " . $superficie["lote_did"]);
			$sup = Superficies::model()->find("temporada = '1415' and lote_did = " . $loteActual->id);
			$sqlimportes = "select temporada, sum(importe) importe from Presupuesto 
																								where " . $sqlempresalotes . $sqlsemanalotes . " superficie_did = " . $sup->id . " 
																								group by temporada order by temporada;";
			
			$importes = Yii::app()->db->createCommand($sqlimportes)->queryAll();
			
			$porcentaje = 0;
			if(isset($importes[0]["importe"]) && isset($importes[1]["importe"])){
				$porcentaje = (($importes[1]["importe"] / $importes[0]["importe"])-1) * 100;
			}else{
				$porcentaje = 0;
			}
			
			if($valores["grupoCostos"] != 6){
				if($loteActual->lote == 60){ // NO queremos el lote 60 porque es de Empaque - Mano de Obra
					continue;
				}else{
					$lotes[] = array(	'lote'=>$loteActual->lote,
														'descripcion'=>$loteActual->descripcion,
														'hectareasActuales'=>$superficie["Actuales"],
														'hectareasAnteriores'=>$superficie["Anteriores"],
														'porcentaje'=>$porcentaje,
													);
				}
			}else{
				if($loteActual->lote != 60){ // Queremos solo el 60 porque seleccionaron el Costo de Empaque - Mano de Obra
					continue;
				}else{
					$lotes[] = array(	'lote'=>$loteActual->lote,
														'descripcion'=>$loteActual->descripcion,
														'hectareasActuales'=>$superficie["Actuales"],
														'hectareasAnteriores'=>$superficie["Anteriores"],
														'porcentaje'=>$porcentaje,
													);
				}
			}
		}
		
		//Aquí inicia presupuestos acumulados
		$configuracion = Configuracion::model()->findAll("estatus_did = 1");
		$presupuestos = array();

		if(isset($valores["acum"])){
			$sqlsemana = (empty($valores["semana"])) ? 'semana <= ' . 
								Yii::app()->db->createCommand("SELECT semana FROM SemanaActual")->queryScalar() . " && " : 'semana <= ' . $valores["semana"] . ' && ';		
		}else{
			$sqlsemana = (empty($valores["semana"])) ? 'semana <= ' . 
								Yii::app()->db->createCommand("SELECT semana FROM SemanaActual")->queryScalar() . " && " : 'semana = ' . $valores["semana"] . ' && ';		
		}
		
		$sqlempresa = (empty($valores["empresa"])) ? '' : ' and empresa_did = ' . $valores["empresa"];
		$grupoCostosActual = "";
		
		//La gráfica de producción es Lote
		if($valores["grupoCostos"] == ""){
			if($valores["grafica"] == "graficageneral"){
				$grupoCostosActual = "";
			}else if($valores["grafica"] == "lote"){
				$grupoCostosActual = ' and (p.grupoCostos_did = 1 || p.grupoCostos_did = 4 || p.grupoCostos_did = 5) ';
			}
		}else{
			$grupoCostosActual = " and grupoCostos_did = " . $valores["grupoCostos"];
		}		
		
		foreach($configuracion as $config){
			$sql = "SELECT SUM(p.importe) as importe FROM Presupuesto as p WHERE " . $sqlsemana . " temporada = '" . $config->valor . "'" . $grupoCostosActual . $sqlempresa;
			$presupuestos[$config->descripcion] = Yii::app()->db->createCommand($sql)->queryScalar();
		}
		$presupuestos["semana"] = $valores["semana"];
		
		//Aquí analizo el valor del arreglo (gráfica) para saber qué gráfica mostrar
		$arreglo = Array();
		if($valores["grafica"] == "barrasemanal")
			$arreglo["grafica"] = $this->actionBarrasemanal();
		else if($valores["grafica"] == "lote")
			$arreglo["grafica"] = $this->actionLote();
		else if($valores["grafica"] == "lotetabular")
			$arreglo["grafica"] = $this->actionLotetabular();
		else if($valores["grafica"] == "graficageneral")
			$arreglo["grafica"] = $this->actionGraficageneral();		


		// Si hay lotes actualizo la tabla, pero si no hay la limpio
		if(count($lotes)<=0){
			$this->renderPartial("_limpiarlotes",array(),false);
			$arreglo["acum"] = $this->renderPartial("_presupuestosacumulados",array('presupuestosacumulados' => $presupuestos),true);
			echo CJSON::encode($arreglo);
		}else {
			$arreglo["lotes"] = $this->renderPartial("_lotes",array("lotes"=>$lotes, "empresa"=>$valores["empresa"], "anterior"=>$valores), true);
			$arreglo["acum"] = $this->renderPartial("_presupuestosacumulados",array('presupuestosacumulados' => $presupuestos),true);

			echo CJSON::encode($arreglo);
		}
	}

	public function actionActualizaPresupuestosAcumulados(){
		if(isset($_POST["empresa"])){
			$valores = $_POST;
		}else{
			$valores = $_POST["presupuesto"];
		}
		$empresaRecord = Empresa::model()->find("id = " . $valores["empresa"]);
		$configuracion = Configuracion::model()->findAll("estatus_did = 1");
		$presupuestos = array();
		
		$sqlsemana = (empty($valores["semana"])) ? 'semana <= ' . Yii::app()->db->createCommand("SELECT semana FROM SemanaActual")->queryScalar() . " && " : 'semana = ' . $valores["semana"] . ' && ';		
		foreach($configuracion as $config){
			$sql = "SELECT sum(p.importe) as importe
											FROM Presupuesto as p
											WHERE " . $sqlsemana . " temporada = '" . $config->valor . "' &&
														empresa_did = " . $valores["empresa"];
														
													
			$presupuestos[$config->descripcion] = Yii::app()->db->createCommand($sql)->queryScalar();
		}
		$presupuestos["semana"] = $valores["semana"];
		
		if($presupuestos["Actual"] > 0){
			$this->renderPartial("_presupuestosacumulados",array('presupuestosacumulados' => $presupuestos),false);
		}else{
			$this->renderPartial("_limpiarpresupuestosacumulados",array(),false);
		}
	}
	// Cargar la última semana de la temporada actual en el combo de semanas.
	public function actionGraficageneral(){
		if(isset($_POST["empresa"])){
			$valores = $_POST;
		}else{
			$valores = $_POST["presupuesto"];
		}

		$datos = array();
		$semanaActual = " = " . $valores["semana"];
		if($valores["semana"]==""){
			$semanaActual = 'in(select semana from Periodos where  fechaFinal_f <= "' .
														date("Y-m-d") . '")';
		}
		$grupoCostosActual = " and grupoCostos_did = " . $valores["grupoCostos"];
		if($valores["grupoCostos"]==""){
			$grupoCostosActual = '';
		}
		$lote = '';
		if(isset($valores["lote"])){
			$lote = "where l.lote = " . $valores["lote"];
		}
		$empresa = '';
		if(isset($valores["lote"])){
			if($valores["empresa"]!= "" || $valores["empresa"]== 3){
				$empresa = " && p.empresa_did = " . $valores["empresa"] ;
			}
		}else{
			if($valores["empresa"]!= "" || $valores["empresa"]== 3){
				$empresa = "where p.empresa_did = " . $valores["empresa"];
			}
		}

		$configuraciones = Configuracion::model()->findAll("estatus_did = 1");
		if(isset($_POST["acum"])){
			$temp = array();
			Yii::app()->db->createCommand()->delete("Presu");
			$insertarTablaSql = 'INSERT INTO Presu (importe, lote, temporada, semana)
				 SELECT sum(p.importe) AS importe,
					l.lote AS lote,
					p.temporada AS temporada, p.semana AS semana
				FROM Presupuesto AS p
				JOIN (SELECT @csum := 0) r
				INNER JOIN Superficies AS s ON s.id = p.superficie_did
				INNER JOIN Lotes AS l ON l.id = s.lote_did ' . $lote . $empresa . '
				GROUP BY p.temporada, p.semana;';
				
			Yii::app()->db->createCommand($insertarTablaSql)->execute();
			foreach($configuraciones as $config){
				$sql =  'SELECT
				 (@csum := @csum + p.importe) AS importe, p.lote, p.temporada, p.semana
				FROM Presu AS p
				JOIN (SELECT @csum := 0) r
				WHERE p.temporada = "' . $config->valor . '"
				GROUP BY p.semana';

				$temp[$config->valor]= Yii::app()->db->createCommand($sql)->queryAll();
			}
			
			foreach($temp as $t){
				foreach($t as $d){
					$datos[] = array(
											"importe"=>$d["importe"],
											"lote"=>$d["lote"],
											"temporada"=>$d["temporada"],
											"semana"=>$d["semana"]
										);
				}
			}
		}else{

			$sql =  'select sum(p.importe) as importe, 
			l.lote as lote,
			p.temporada as temporada, p.semana as semana 
			from Presupuesto as p 
			inner join Superficies as s on s.id = p.superficie_did 
			inner join Lotes as l on l.id = s.lote_did ' . $lote . $empresa . $grupoCostosActual . ' 
			group by p.semana, p.temporada 
			order by p.temporada, p.semana';
			$datos = Yii::app()->db->createCommand($sql)->queryAll();
			
		}
	
		return $this->renderPartial("_graficageneral",array("datos"=>$datos, "configuraciones" => $configuraciones, "valores"=>$valores), true);

		
	}

	// Cargar la última semana de la temporada actual en el combo de semanas.
	public function actionGraficageneralpresupuesto(){
		if(isset($_POST["empresa"])){
			$valores = $_POST;
		}else{
			$valores = $_POST["presupuesto"];
		}
		$configuracionesGeneral = Configuracion::model()->findAll("tipografica = 'General'");
		$presupuestoFormateado = array();
		$empresa = '';
		if($valores["empresa"]!= "" || $valores["empresa"]== 3){
			$empresa = " p.empresa_did = " . $valores["empresa"] . ' && ';
		}
		foreach($configuracionesGeneral as $config){
			$sql = 'select sum(importe) as importe, semana, temporada FROM Presupuesto p WHERE ' . $empresa . ' p.temporada = "' . $config->valor . '" GROUP BY semana;';

			$presupuestos = Yii::app()->db->createCommand($sql)->queryAll();

			foreach($presupuestos as $p){
				$presupuestoFormateado[$config->descripcion][] = array('importe' => $p["importe"], 'semana'=> $p["semana"], 'temporada' => $p["temporada"]);
			}
		}
		if(count($presupuestoFormateado)>0){
			return $this->renderPartial("_graficageneral",array("valores"=>$valores, "presupuestoFormateado"=>$presupuestoFormateado),true);
		}else{
			echo "No se encontraron datos";
			exit;
		}

	}

	public function actionBarrasemanal(){

		if(isset($_POST["empresa"])){
			$valores = $_POST;
		}else{
			$valores = $_POST["presupuesto"];
		}

		$datos = array();
		$semanaActual = " = " . $valores["semana"];
		if($valores["semana"]==""){
			$semanaActual = 'in(select semana from Periodos where  fechaFinal_f <= "' .
														date("Y-m-d") . '")';
		}
		$grupoCostosActual = " && grupoCostos_did = " . $valores["grupoCostos"];
		if($valores["grupoCostos"]==""){
			$grupoCostosActual = ' && grupoCostos_did != 6 ';
		}
		$empresa = '';
		if($valores["empresa"]!= "" || $valores["empresa"]== 3){
			$empresa = " p.empresa_did = " . $valores["empresa"] . ' && ';
		}else{
			return '<span class="label label-warning">Por favor seleccione una empresa</span>';
			exit;
		}
		$configuraciones = Configuracion::model()->findAll("descripcion != 'Anterior'");
		$sql =  'select sum(p.importe) as importe,
			l.lote as lote,
			p.temporada as temporada
			from Presupuesto as p
			inner join Superficies as s on s.id = p.superficie_did
			inner join Lotes as l on l.id = s.lote_did
			where ' . $empresa . '
			(p.temporada = "' . $configuraciones[0]->valor . '"  || p.temporada = "' . $configuraciones[1]->valor . '") &&
			p.semana ' . $semanaActual . $grupoCostosActual . '
			group by s.lote_did, p.temporada
			order by p.temporada, lote_did;';
		$datos = Yii::app()->db->createCommand($sql)->queryAll();
		$presupuesto = $datos[0]["temporada"];
		$presupuestoArray = array();
		$actualArray = array();
		foreach($datos as $dato){
			if($dato["temporada"] == $presupuesto){
				$presupuestoArray[] = $dato;
			}else{
				$actualArray[] = $dato;
			}
		}
		return $this->renderPartial("_barrasemanal",array(
							"presupuesto"=>$presupuestoArray,
							"actual"=>$actualArray,
							'valores'=>$valores),true);
	}

	public function actionProduccion(){

		if(isset($_POST["empresa"])){
			$valores = $_POST;
		}else{
			$valores = $_POST["presupuesto"];
		}
		$configuracionesGeneral = Configuracion::model()->findAll("tipografica = 'General'");
		$presupuestoFormateado = array();
		$lote = '';
		if(isset($valores["lote"])){
			$lote = " l.lote = " . $valores["lote"] . ' && ';
		}
		$empresa = '';
		if($valores["empresa"]!= "" || $valores["empresa"]== 3){
			$empresa = " p.empresa_did = " . $valores["empresa"] . ' && ';
		}
		foreach($configuracionesGeneral as $config){
			$sql = 'SELECT sum(p.importe) AS importe, p.semana, p.temporada
							FROM Presupuesto p
							INNER JOIN Superficies s ON s.id = p.superficie_did
							INNER JOIN Lotes l ON l.id = s.lote_did
							WHERE ' . $lote . $empresa . ' p.temporada = "' . $config->valor .'" &&
										(p.grupoCostos_did = 1 || p.grupoCostos_did = 4 || p.grupoCostos_did = 5)
							GROUP BY p.semana;';
			$presupuestos = Yii::app()->db->createCommand($sql)->queryAll();

			foreach($presupuestos as $p){
				$presupuestoFormateado[$config->descripcion][] = array('importe' => $p["importe"],
																									'semana'=> $p["semana"],
																									'temporada' => $p["temporada"]);
			}
		}
		return $this->renderPartial("_produccion",array("valores" => $valores, "presupuestoFormateado"=>$presupuestoFormateado),true);
	}

	public function actionLote(){
		if(isset($_POST["empresa"])){
			$valores = $_POST;
		}else{
			$valores = $_POST["presupuesto"];
		}

		$datos = array();
		$semanaActual = " = " . $valores["semana"];
		if($valores["semana"]==""){
			$semanaActual = 'in(select semana from Periodos where  fechaFinal_f <= "' .
														date("Y-m-d") . '")';
		}
		$grupoCostosActual = " grupoCostos_did = " . $valores["grupoCostos"];
		if($valores["grupoCostos"]==""){
			$grupoCostosActual = ' (p.grupoCostos_did = 1 || p.grupoCostos_did = 4 || p.grupoCostos_did = 5) ';
		}
		$lote = '';
		if(isset($valores["lote"])){
			$lote = " l.lote = " . $valores["lote"] . ' && ';
		}
		$empresa = '';
		if($valores["empresa"]!= "" || $valores["empresa"]== 3){
			$empresa = " p.empresa_did = " . $valores["empresa"] . ' && ';
		}

		$configuraciones = Configuracion::model()->findAll("estatus_did = 1");
		if(isset($_POST["acum"])){
			$temp = array();
			Yii::app()->db->createCommand()->delete("Presu");
			$insertarTablaSql = 'INSERT INTO Presu (importe, lote, temporada, semana)
				 SELECT sum(p.importe) AS importe,
					l.lote AS lote,
					p.temporada AS temporada, p.semana AS semana
				FROM Presupuesto AS p
				JOIN (SELECT @csum := 0) r
				INNER JOIN Superficies AS s ON s.id = p.superficie_did
				INNER JOIN Lotes AS l ON l.id = s.lote_did
				where ' . $lote . $empresa . $grupoCostosActual . '
				GROUP BY p.temporada, p.semana;';
				
			Yii::app()->db->createCommand($insertarTablaSql)->execute();
			foreach($configuraciones as $config){
				$sql =  'SELECT
				 (@csum := @csum + p.importe) AS importe, p.lote, p.temporada, p.semana
				FROM Presu AS p
				JOIN (SELECT @csum := 0) r
				WHERE p.temporada = "' . $config->valor . '"
				GROUP BY p.semana';

				$temp[$config->valor]= Yii::app()->db->createCommand($sql)->queryAll();
			}
			
			foreach($temp as $t){
				foreach($t as $d){
					$datos[] = array(
											"importe"=>$d["importe"],
											"lote"=>$d["lote"],
											"temporada"=>$d["temporada"],
											"semana"=>$d["semana"]
										);
				}
			}
		}else{
			$sql =  'select sum(p.importe) as importe, 
			l.lote as lote,
			p.temporada as temporada, p.semana as semana 
			from Presupuesto as p 
			inner join Superficies as s on s.id = p.superficie_did 
			inner join Lotes as l on l.id = s.lote_did 
			where ' . $lote . $empresa . $grupoCostosActual . ' 
			group by p.semana, p.temporada 
			order by p.temporada, p.semana';

			$datos = Yii::app()->db->createCommand($sql)->queryAll();

		}

		return $this->renderPartial("_lote",array("datos"=>$datos, "configuraciones" => $configuraciones, "valores"=>$valores), true);
	}

	public function actionLotetabular(){
		if(isset($_POST["empresa"])){
			$valores = $_POST;
		}else{
			$valores = $_POST["presupuesto"];
		}
		
		$configuraciones = Configuracion::model()->findAll("descripcion != 'Anterior'");
		$semanaActual = " = " . $valores["semana"];
		if($valores["semana"]==""){
			$semanaActual = '<= (select max(semana) from Presupuesto where  temporada = "' .
														$configuraciones[1]->valor . '")';
		}
		$grupoCostosActual = " && grupoCostos_did = " . $valores["grupoCostos"];
		if($valores["grupoCostos"]==""){
			$grupoCostosActual = ' && grupoCostos_did != 6 ';
		}
		$lote = '';
		if(isset($valores["lote"])){
			$lote = " l.lote = " . $valores["lote"] . ' && ';
		}
		$empresa = '';
		if($valores["empresa"]!= "" || $valores["empresa"]== 3){
			$empresa = " p.empresa_did = " . $valores["empresa"] . ' && ';
		}else{
			return '<span class="label label-warning">Por favor seleccione una empresa</span>';
			exit;
		}


		$sql = 'SELECT p.codigo AS codigo, p.descripcion AS descr, sum(p.importe) as importe,
			 l.lote as lote, p.temporada as temporada
						 FROM Presupuesto as p inner join Superficies as s on s.id = p.superficie_did
						 left JOIN Lotes as l on l.id = s.lote_did
						 WHERE ' . $lote . $empresa . ' (p.temporada = "' . $configuraciones[0]->valor . '" || p.temporada = "' . $configuraciones[1]->valor . '") && p.semana ' . $semanaActual . $grupoCostosActual . '
						 GROUP BY p.codigo, p.temporada
						 ORDER BY p.codigo, p.temporada;';
/*
		echo $sql;
		exit;
*/
		$datos = Yii::app()->db->createCommand($sql)->queryAll();

		return $this->renderPartial("_loteTotal",array('datos'=>$datos, 'valores'=>$valores),true);
	}
	
	// Es para mostrar la gráfica de bultos
	public function actionActualizacultivos(){
		if(isset($_POST["empresa"])){
			$valores = $_POST;
		}else{
			$valores = $_POST["presupuesto"];
		}
		$semanaActual = Yii::app()->db->createCommand("SELECT semana FROM SemanaActual")->queryScalar();
		// Consulta para mostar la gráfica
		$cultivo = (!isset($valores["cultivo"])) ? "" : $valores["cultivo"];
		$sqlempresa = (empty($valores["empresa"])) ? "" : " and empresa_did = " . $valores["empresa"];
		
		$sqlempresaacum = (empty($valores["empresa"])) ? "" : " empresa_did = " . $valores["empresa"];
		$sqlsemanasmayormenor = (empty($valores["empresa"])) ? "" : "where empresa_did = " . $valores["empresa"] . " and ";
		$configuracion = Configuracion::model()->findAll("estatus_did = 1");
		
		// Semana y Acumulado

		$sqlsemana = (empty($valores["semana"])) ? 	'semana <= ' . $semanaActual . " and "  : 'semana = ' . $valores["semana"] . " and ";
		// Empresa y Acumulado
		if(!isset($valores["cultivo"]))
			$sqlempresaacum = (empty($valores["empresa"])) ? "" : " empresa_did = " . $valores["empresa"];
		else{
			
			$sqlempresaacum = (empty($valores["empresa"])) ? "" : " empresa_did = " . $valores["empresa"] . " and ";																												
		}
			
		// Cultivo y Acumulado
		if(empty($valores["empresa"])){
			$sqlcultivo = (!isset($valores["cultivo"])) ? "" : ' cultivo = ' . $cultivo;
			$sqlcultivoconfiguracion = (!isset($valores["cultivo"])) ? "" : ' cultivo = ' . $cultivo . " and ";
		}else{
			$sqlcultivo = (!isset($valores["cultivo"])) ? "" : " cultivo = " . $cultivo;
			$sqlcultivoconfiguracion = (!isset($valores["cultivo"])) ? "" : " cultivo = " . $cultivo . " and ";
		}
		
		//Aquí inicia presupuestos acumulados
		$configuracion = Configuracion::model()->findAll("estatus_did = 1");
		$presupuestos = array();
		
		$comodinproximoquery = "";
		if(!empty($valores["empresa"]) && !isset($valores["cultivo"])){
			$comodinproximoquery = " and ";
		}else if(empty($valores["empresa"]) && !isset($valores["cultivo"])) {
			$comodinproximoquery = "";
		}
		
		
		foreach($configuracion as $config){
			$sql = "SELECT SUM(bultos) as bultos FROM BultosEmpaque WHERE " . $sqlsemana . $sqlempresaacum . $sqlcultivoconfiguracion . $comodinproximoquery . " temporada = '" . $config->valor . "'";

			$presupuestosAcumulados[$config->descripcion] = Yii::app()->db->createCommand($sql)->queryScalar();
		}
		if(isset($valores["semana"]))
			$presupuestosAcumulados["semana"] = $valores["semana"];
		else
			$presupuestosAcumulados["semana"] = $semanaActual;
		
		// Empresa y Sin Acumulado
		if(empty($valores["empresa"]) && empty($valores["cultivo"])){
			$where = "";
		}else{
			$where = "WHERE ";
		}
		
		if(isset($_POST["acum"])){
			$temp = array();
			Yii::app()->db->createCommand()->delete("BultosTemp");
			$insertarTablaSql = 'INSERT INTO BultosTemp (bultos, cultivo, temporada, semana)
				 SELECT sum(be.bultos) AS bultos,
					be.cultivo AS cultivo,
					be.temporada AS temporada, be.semana AS semana
				FROM BultosEmpaque AS be
				JOIN (SELECT @csum := 0) r ' .
				$where . $sqlempresaacum . $sqlcultivo .'
				GROUP BY be.temporada, be.semana;';
				
			Yii::app()->db->createCommand($insertarTablaSql)->execute();
			foreach($configuracion as $config){
				$sql =  'SELECT
				 (@csum := @csum + p.bultos) AS bultos, p.cultivo, p.temporada, p.semana
				FROM BultosTemp AS p
				JOIN (SELECT @csum := 0) r
				WHERE p.temporada = "' . $config->valor . '"
				GROUP BY p.semana';
				
				$presupuestos[$config->descripcion]= Yii::app()->db->createCommand($sql)->queryAll();
			}
		}else{			
			foreach($configuracion as $config){
				$sql = "SELECT semana, SUM(bultos) as bultos, temporada, cultivo as cultivo FROM BultosEmpaque WHERE " .  $sqlempresaacum . $sqlcultivoconfiguracion . $comodinproximoquery .  " temporada = '" . 
								$config->valor . "' GROUP BY temporada, semana";

				$presupuestos[$config->descripcion] = Yii::app()->db->createCommand($sql)->queryAll();
			}
		}

		$temporadaActual = Yii::app()->db->createCommand('select valor from Configuracion where descripcion = "Actual"')->queryScalar();

		$semanas = Yii::app()->db->createCommand("SELECT min(be.semana) menor, max(be.semana) mayor FROM BultosEmpaque as be " . substr($sqlsemanasmayormenor, 0, 18))->queryAll();
		$sqlSemanasActual = "SELECT min(be.semana) menor, max(be.semana) mayor FROM BultosEmpaque as be where " . substr($sqlsemanasmayormenor, 6) . " temporada = '" . $temporadaActual . "'";
		$semanasActual = Yii::app()->db->createCommand($sqlSemanasActual)->queryAll();

		// Me traigo todos los cultivos de la empresa seleccionada
		$sqlempresacultivos = (empty($valores["empresa"])) ? "" : " where empresa_did = " . $valores["empresa"];
		$sqlCultivos = "select distinct cultivo, descripcion from BultosEmpaque " . $sqlempresacultivos . " order by cultivo asc";
		$cultivos = Yii::app()->db->createCommand($sqlCultivos)->queryAll();		
		
		$arreglo = array();

		// Si hay bultos actualizo la tabla, pero si no hay la limpio
		if(count($cultivos)<=0){
			$this->renderPartial("_limpiarlotes",array(),false);
			echo CJSON::encode($arreglo);
		}else {
			//$arreglo["grafica"] = $this->renderPartial("_graficacultivos", array("datos"=>$datos), true);
			$arreglo["lotes"] = $this->renderPartial("_cultivos",array("cultivos"=>$cultivos, "empresa"=>$valores["empresa"], "semana" => $presupuestosAcumulados["semana"]), true);
			$arreglo["grafica"] = $this->renderPartial("_graficacultivos",array("valores"=>$valores, "semanas"=>$semanas, "presupuestos"=>$presupuestos, "empresa"=>$valores["empresa"]), true);
			$arreglo["acum"] = $this->renderPartial("_presupuestosacumuladoscultivo",array('presupuestosacumulados' => $presupuestosAcumulados, "semanasActuales" => $semanasActual),true);
			echo CJSON::encode($arreglo);
		}
	}
}
