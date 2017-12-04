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
use yii\data\Pagination;
use app\models\Register;


use DfaFilter\SensitiveHelper;

class RegisterController extends Controller
{
	//防止攻击
	public $enableCsrfValidation = false;
	
	public function actionAdd(){
		return $this->render('register1');

	}
	public function actionAdd2(){
		
	if(Yii::$app->request->post()){
		$model = new Register;
		
		$data = Yii::$app->request->post();
		//print_r($data);die;
		$model->name = $data['name'];
		$model->address=$data['address'];
		$model->birthday=$data['birthday'];
		$res = $model->save();
		//var_dump($res);die;
		if($res){
			echo 1;die;
		 	$this->redirect(['show']);
			 }	
		}
	}
	
}