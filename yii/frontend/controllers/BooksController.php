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
use app\models\Books;


use DfaFilter\SensitiveHelper;

class BooksController extends Controller
{
	//防止攻击
	public $enableCsrfValidation = false;
	
	public function actionAdd(){
	
		return $this->render('add');

	}
	
}