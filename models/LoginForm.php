<?php

namespace app\models;

use Yii;
use yii\base\Model;

class LoginForm extends Model
{
    public $email;
    public $password;
    public $rememberMe;
    
    public $user;
    
    public function rules()
    {
	return [
	    [['email', 'password'], 'required'],
	    ['email', 'email'],
	    ['rememberMe', 'boolean'],
	    ['password', 'validatePassword']
	];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors())
        {
            $user = User::find()->where(['email' => $this->email])->one();
            if ($user == "" || !Yii::$app->getSecurity()->validatePassword($this->password, $user->password_hash))
            {
                $this->addError($attribute, 'Неверно введен логин или пароль.');
            }
        }
    }
}
