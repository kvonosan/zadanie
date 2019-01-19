<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\RegisterForm;
use yii\db\Expression;
use app\models\LoginForm;
use yii\helpers\Url;
use app\models\ResendForm;
use app\models\ResetForm;
use app\models\Logs;
use app\models\EmailForm;
use yii\helpers\Html;

class AuthController extends Controller
{
    public $enableCsrfValidation = false;
    
    public function actionLogin()
    {
	if (Yii::$app->user->isGuest)
	{
    	    $model = new LoginForm();
    	    if ($model->load(Yii::$app->request->post())&& $model->validate())
    	    {
    		$user = User::find()->where(['email' => $model->email])->one();
    		if ($user!== null)
    		{
        		if ($user->confirmed_at == null)
        		{    		    
	    		    return $this->render('login', [
	        		'model' => $model,
	        		'mess' => '<h3 style="color:red;">Пожалуйста подтвердите почту.</h3>'
        	            ]);
        		}
        		Yii::$app->user->login($user, $model->rememberMe ? 3600*24*30 :0);
        		$logs = new Logs();
        		$logs->logUserAction($user->email, $user->id, 'login', 'sucess', Yii::$app->request->userIp, Yii::$app->request->userAgent);
        		Yii::$app->response->redirect(Url::to('/site/index'));
	        	return;
        	}
    	    }
    	    $logs = new Logs();
    	    $logs->logUserAction(Yii::$app->request->post('email'), 0, 'login', 'fail', Yii::$app->request->userIp, Yii::$app->request->userAgent);
    	    return $this->render('login', [
        	'model' => $model,
        	'mess' => ''
            ]);
        } else
        {
    	    Yii::$app->response->redirect(Url::to('/site/index'));
    	    return;
        }
    }

    public function actionAuth()
    {
	$register_model = new RegisterForm();
	if (Yii::$app->request->get() && Yii::$app->user->isGuest)
	{
	    if (Yii::$app->request->get('email') !== '')
	    {
		$email = Yii::$app->request->get('email');
		$user = User::find()->where(['email' => $email])->one();
		if ($user !== null)
		{
		    if ($user->confirmed_at !== null)
		    {
			return $this->render('register', ['register_model' => $register_model,
			'mess' => '<h3 style="color:red;">Логин уже подтвержден.</a>']);
		    }
		    //for debug
		    //echo Yii::$app->request->get('auth_key'); die();
		    if ($user->validateAuthKey(Yii::$app->request->get('auth')))
		    {
		    
			$user->confirmed_at = new Expression('NOW()');
			$user->save();
			$logs = new Logs();
		        $logs->logUserAction($user->email, $user->id, 'auth', 'sucess', Yii::$app->request->userIp, Yii::$app->request->userAgent);
			return $this->render('register', ['register_model' => $register_model,
			'mess' => 'Пользователь подтвержден. Можете войти под своим логином <a href="http://' . Yii::$app->name .'/auth/login">Войти</a>']);
		    }
		}
	    }
	    $logs = new Logs();
    	    $logs->logUserAction(Yii::$app->request->post('email'), 0, 'auth', 'fail', Yii::$app->request->userIp, Yii::$app->request->userAgent);
	    return $this->render('register', ['register_model' => $register_model,
	    'mess' => '<h3 style="color:red;">Ошибка подтверждения логина.</a>']);
	}
    }
    
    public function actionRegister()
    {
	$register_model = new RegisterForm();
	if (Yii::$app->request->post() && Yii::$app->user->isGuest)
	{
	    if ($register_model->load(Yii::$app->request->post()) && $register_model->validate())
	    {
		$new_user = new User();
		$new_user->register($register_model->email, $register_model->password);
		//send email
		Yii::$app->mailer->compose()
		    ->setFrom(Yii::$app->params['adminEmail'])
		        ->setTo($register_model->email)
		            ->setSubject('Подтвердите вашу регистрацию на ' . Yii::$app->name  . '.')
		                    ->setHtmlBody('Подтвердите вашу регистрацию на '
		                 . Yii::$app->name . '. Для этого перейдите по ссылке 
		                    <a href="http://' . Yii::$app->name .'/auth/auth?auth=' .
		                     $new_user->auth_key . '&email=' . $register_model->email . '">Подтвердить</a>')
		                        ->send();
		
		$logs = new Logs();
	        $logs->logUserAction($new_user->email, $new_user->id, 'register', 'sucess', Yii::$app->request->userIp, Yii::$app->request->userAgent);
		return $this->render('register', ['register_model' => $register_model,
		'mess' => 'Пользователь создан. На email <h3 style="color:black;">'. $register_model->email .
		'</h3> <h3 style="color:green;">отправлено сообщение о подтверждении регистрации. Пожалуйста, подтвердите ваше регистрацию!</h3><h3 style="color:red;">Внимание:
		письмо может попасть в папку спам, проверьте ее!' ]);
	    } else
	    {
		$logs = new Logs();
    		$logs->logUserAction($register_model->email, 0, 'register', 'fail', Yii::$app->request->userIp, Yii::$app->request->userAgent);
		return $this->render('register', ['register_model' => $register_model,
		'mess' => '']);
	    }
	} else
	{
	    return $this->render('register', ['register_model' => $register_model,
	    'mess' => '']);
	}
    }
    
    public function actionResend()
    {
	$model = new ResendForm();
	if (Yii::$app->request->post() && Yii::$app->user->isGuest)
	{
	    if ($model->load(Yii::$app->request->post())&& $model->validate())
	    {
		$new_user = User::find()->where(['email' => $model->email])->one();
		if ($new_user == null)
		{
		    $logs = new Logs();
    		    $logs->logUserAction($model->email, 0, 'resend auth1', 'fail', Yii::$app->request->userIp, Yii::$app->request->userAgent);
		    return $this->render('resend', ['model'=> $model, 'mess' => '', 'mess1' => '<h3>Проверьте введенные данные.</h3>']);
		}
		if ($new_user->confirmed_at != null)
		{
		    $logs = new Logs();
    		    $logs->logUserAction($model->email, 0, 'resend auth2', 'fail', Yii::$app->request->userIp, Yii::$app->request->userAgent);
		    return $this->render('resend', ['model'=> $model, 'mess' => '', 'mess1' => '<h3>Ваш аккаунт уже подтвержден.</h3>']);
		}
		
		//send email
		Yii::$app->mailer->compose()
		    ->setFrom(Yii::$app->params['adminEmail'])
		        ->setTo($model->email)
		            ->setSubject('Подтвердите вашу регистрацию на ' . Yii::$app->name  . '.')
		                    ->setHtmlBody('Подтвердите вашу регистрацию на '
		                 . Yii::$app->name . '. Для этого перейдите по ссылке 
		                    <a href="http://' . Yii::$app->name .'/auth/auth?auth=' .
		                     $new_user->auth_key . '&email=' . $model->email . '">Подтвердить</a>')
		                        ->send();
		$logs = new Logs();
	        $logs->logUserAction($new_user->email, $new_user->id, 'resend auth', 'sucess', Yii::$app->request->userIp, Yii::$app->request->userAgent);
		
		return $this->render('resend', ['model'=> $model,
		'mess' => '<h3 style="color:green;">На email <h3 style="color:black;">'. $model->email .
		'</h3> <h3 style="color:green;">отправлено сообщение о подтверждении регистрации. Пожалуйста, подтвердите ваше регистрацию!</h3><h3 style="color:red;">Внимание:
		письмо может попасть в папку спам, проверьте ее!</h3>']);
	    }
	}
	return $this->render('resend', ['model'=> $model, 'mess' => '']);
    }
    
    public function actionReset()
    {
	$model = new ResetForm();
	if (Yii::$app->request->post() && Yii::$app->user->isGuest)
	{
	    if ($model->load(Yii::$app->request->post())&& $model->validate())
	    {
		$new_user = User::find()->where(['email' => $model->email])->one();
		
		if ($new_user == null)
		{
		    $logs = new Logs();
    		    $logs->logUserAction($model->email, 0, 'reset password', 'fail', Yii::$app->request->userIp, Yii::$app->request->userAgent);
		    return $this->render('reset', ['model'=> $model, 'mess' => '', 'mess1' => '<h3>Проверьте введенные данные.</h3>']);
		}
		
		$pass = Yii::$app->getSecurity()->generateRandomString(8);
		$new_user->password_hash = Yii::$app->getSecurity()->generatePasswordHash($pass);
		$new_user->save();
		
		//send email
		Yii::$app->mailer->compose()
		    ->setFrom(Yii::$app->params['adminEmail'])
		        ->setTo($model->email)
		            ->setSubject('Новый пароль от кабинета ' . Yii::$app->name  . '.')
		                    ->setHtmlBody('Ваш новый пароль от кабинета ' . Yii::$app->name . ': ' . $pass . '<br><a href="' . Yii::$app->name  . '/auth/login">Войти в личный кабинет.</a>')
		                        ->send();
		$logs = new Logs();
	        $logs->logUserAction($new_user->email, $new_user->id, 'reset password', 'sucess', Yii::$app->request->userIp, Yii::$app->request->userAgent);
		
		return $this->render('reset', ['model'=> $model,
		'mess' => '<h3 style="color:green;">На email <h3 style="color:black;">'. $model->email .
		'</h3> <h3 style="color:green;">отправлено сообщение с новым паролем.</h3><h3 style="color:red;">Внимание:
		письмо может попасть в папку спам, проверьте ее!</h3>']);
	    }
	}
	return $this->render('reset', ['model'=> $model, 'mess' => '']);
    }
    
    public function actionEmail()
    {
	$model = new EmailForm();
	if (Yii::$app->request->post() && Yii::$app->user->isGuest)
	{
	    if ($model->load(Yii::$app->request->post())&& $model->validate())
	    {
		//send email
		$result = Yii::$app->mailer->compose()
		    ->setFrom(Yii::$app->params['adminEmail'])
		        ->setTo('kvonosan@rambler.ru')
		            ->setSubject('Письмо с сайта ' . Yii::$app->name)
		                    ->setHtmlBody(Html::encode($model->email. ' пишет(тема:' . $model->subject . ')  ' .$model->mess))
		                        ->send();
		if ($result)
		{
		    return $this->render('email', ['mess' => '<h3 style="color:green;">Ваше письмо отправлено.</h3>']);
		} else
		{
		    return $this->render('email', ['mess' => '<h3 style="color:red;">Ваше письмо не отправлено.</h3>']);
		}
	    }
	}
    }
}
