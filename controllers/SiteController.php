<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Logs;
use app\models\User;

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
	if (Yii::$app->user->isGuest)
	{
    	    return $this->render('index', ['money' => '']);
    	} else
    	{
    	    return $this->render('index', ['money' => Yii::$app->user->identity->money]);
    	}
    }

    public function actionLogout()
    {
	if (Yii::$app->request->post())
	{
    	    $logs = new Logs();
    	    $logs->logUserAction(Yii::$app->user->identity->email, Yii::$app->user->identity->id, 'logout', 'success', Yii::$app->request->userIp, Yii::$app->request->userAgent);
    	    Yii::$app->user->logout();
    	    return $this->goHome();
    	}
    }
}
