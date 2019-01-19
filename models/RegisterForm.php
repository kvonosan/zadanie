<?php

namespace app\models;

use yii\base\Model;

class RegisterForm extends Model
{
    public $email;
    public $password;
    
    public function rules()
    {
	return [
	    [['email', 'password'], 'required'],
	    ['email', 'email'],
	    ['email', 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'email'],
	    ['password', 'string', 'length' => [4,20]],
	];
    }
}