<?php

class SiteController extends Controller
{
	public $layout='//layouts/main';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction', 
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionDashboard($id)
	{
	 $this->render("dashboard",array('id'=>$id));
	}
	 
	public function actionIndex()
	{
		$usuarioActual = Usuario::model()->obtenerUsuarioActual();
		if($usuarioActual->tipoUsuario->nombre == "Administrador"){
			$this->redirect('/chapapresupuestos/index.php/presupuesto/presupuestos');
		}else if($usuarioActual->tipoUsuario->nombre == "Super"){
			$this->render('Super');
		}
		else{
			$this->redirect(array('login'));
		}
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				$this->redirect(array('contactoenviado'));
			}
		}
		$this->render('contact',array('model'=>$model));
	}
	
	public function actionContactoenviado()
	{
		$this->render('contactoenviado');
	}

	public function actionLogin()
	{
		$model=new LoginForm;
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			Yii::app($model->username . ' se ha logueado','info','application.*');
			if($model->validate() && $model->login())
			{
				Yii::app()->db->createCommand("insert into Actividad (mensaje, usuario) Values ('Ha iniciado sesión', '" . $model->username . "')")->execute();
				$this->redirect(Yii::app()->user->returnUrl);
			}
		}
		$this->render('login',array('model'=>$model));
	}

	public function actionLogout()
	{
		Yii::app()->db->createCommand("insert into Actividad (mensaje, usuario) Values ('Ha cerrado sesión', '" . Yii::app()->user->name . "')")->execute();
		Yii::app()->user->logout();	  	
		$this->redirect(Yii::app()->homeUrl);
	}
}