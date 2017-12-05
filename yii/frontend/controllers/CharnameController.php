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
use app\models\Charname;
use DfaFilter\SensitiveHelper;
/**
* 
*/
class CharnameController extends Controller
{
	//防止攻击
	public $enableCsrfValidation = false;
	public $layout = false;
	//进入添加页面
	public function actionAdd(){
		//展示添加页面
		return $this->render('add');
	}
	//展示界面
	public function actionShow(){
		//实例化模型
		$model = new Charname();
	    $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $model->find()->count(),
        ]);
 	$list = $model->find()
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->asArray()
            ->all();
		return $this->render('index',['list'=>$list,'pagination'=>$pagination]); 
	}
	//添加页面
	public function actionAdd_do(){
		//判断是否接到值
		if(Yii::$app->request->post()){
		$model = new Charname();
		
		$data = Yii::$app->request->post();
		
		$model->name = $data['name'];
		$model->value=$data['value'];
		$model->type=$data['type'];
		$model->yz=$data['yz'];
		$model->tian=$data['tian'];
		$model->long=$data['xiao'].'-'.$data['da'];
		
		$res = $model->save();
	
		if($res){
		 	$this->redirect(['show']);
			 }	
		}
	}
	//删除
	public function actionDel(){
		$id = Yii::$app->request->get('id');

		$model = new Charname();

		$res = $model->deleteAll(['id'=>$id]);
		if($res){
			return $this->redirect(['charname/show']);
		}
	}
	//修改界面
	public function actionUpdate(){
		$id = Yii::$app->request->get('id');
		
		$model = new Charname();
		
		$data = $model->find()->where(['id'=>$id])->asArray()->one();
		//print_r($data);die;
		$res = explode("-", $data['long']);
		$data['xiao']=$res[0];
		$data['da']=$res[1];
		//print_r($data);die;
		return $this->render('update',['data'=>$data]); 
	}
	//执行修改
	public function actionUpdate_do(){
		$data = Yii::$app->request->post();
		$model = new Charname();
		$res = $model->findOne($data['id']);
		$res->name = $data['name'];
		$res->value=$data['value'];
		$res->type=$data['type'];
		$res->yz=$data['yz'];
		$res->tian=$data['tian'];
		$res->long=$data['xiao'].'-'.$data['da'];
		if($res->save()){
			return $this->redirect(['show']);
		}
		
	}
}