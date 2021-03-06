<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
    
    public function actionCalendar()
    {
    	return $this->render('calendar');
    }
    /**
    	*@comment 三月八日妇女节
    	* @date: 2016-3-8下午5:30:00
    	* @author: qfy
    	* @return:
    	*/
    public function actionMe(){
    	return $this->render('me');
    }
    public function actionLearn1(){
    	return $this->render('learn1');
    }
    public function actionSecret1(){
    	return $this->render('secret1');
    }
    public function actionEntry()
    {
    	$model = new EntryForm;
    
    	if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    		// 验证 $model 收到的数据
    
    		// 做些有意义的事 ...
    
    		return $this->render('entry-confirm', ['model' => $model]);
    	} else {
    		// 无论是初始化显示还是数据验证错误
    		return $this->render('entry', ['model' => $model]);
    	}
    }
    /**
    	*@comment 微擎学习
    	* @date: 2016-3-11下午4:22:28
    	* @author: qfy
    	* @return:
    	*/
    public function actionWe(){
    	return $this->render('we');
    }
}
