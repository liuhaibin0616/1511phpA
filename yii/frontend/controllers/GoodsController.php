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
use app\models\Goods;


use DfaFilter\SensitiveHelper;


class GoodsController extends Controller{

public $enableCsrfValidation = false;
	
	public function actionAdd(){
	
		return $this->render('add');

	}
	public function actionAdd_do(){
		if(Yii::$app->request->post()){
		$model = new Goods();
		$data = Yii::$app->request->post();
		$model->name = $data['name'];
		$model->content = $data['content'];
		$res = $model->save();
		if ($res) {
			$this->redirect(['show']);
		}else{
			echo "添加失败";
		}
		}
	}
	public function actionShow(){
		$model = new Goods();
	     $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $model->find()->count(),
        ]);
 	$list = $model->find()
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->asArray()
            ->all();
		return $this->render('show',['list'=>$list,'pagination'=>$pagination]);
	}
	public function actionDel(){
		$id = Yii::$app->request->get('id');
		$model = new Goods();
		$res = $model->deleteAll(['id'=>$id]);
		if($res){
			return $this->redirect(['goods/show']);
		}
	}
	public function actionUpdate(){
		$model = new Goods();
		$id = Yii::$app->request->get('id');
		$data =$model->find()->where(['id'=>$id])->asArray()->one();
		//print_r($data);die;
		return $this->render('update',['data'=>$data]);
	}
	public function actionUpdate_do(){
		$model = new Goods();
		$data = Yii::$app->request->post();
		// print_r($data);die;
		$res = $model->findOne($data['id']);
		//print_r($res);die;
		$res->name = $data['name'];
		$res->content = $data['content'];
		if($res->save()){
			
			return $this->redirect(['goods/show']);
		}
	}

}
?>