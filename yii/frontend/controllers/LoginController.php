<?php
namespace frontend\controllers;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

use app\models\Login;

class LoginController extends Controller{
	public $enableCsrfValidation = false;
	public function actionIndex(){
		return $this->render('login');
	}
	public function actionLogin_do(){
		//echo 1;die;
		$data = Yii::$app->request->post();
		//print_r($data);die;
		$model = new Login();
		$res =$model->find()->where(['name'=>$data['name'],'pwd'=>$data['pwd']])->asArray()->one();
		$name = $res['name'];
		if($res){
			$session = Yii::$app->session;
      		$session->open();
      		$session->set('name',$res['name']);
			//print_r($res);die;
			return $this->redirect(['goods/add']);
			
			//$session->set('smister_array' ,[1,2,3]);
		}else{
			return $this->redirect(['login/index']);
		}
	}
}