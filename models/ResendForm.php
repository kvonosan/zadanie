<?php

namespace app\models;

use yii\base\Model;

class ResendForm extends Model
{
    public $email;
    
    public function rules(){
        return [
	    ['email', 'required'],
	    ['email', 'email'],
        ];
    }
}