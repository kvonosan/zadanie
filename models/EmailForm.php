<?php

namespace app\models;

use yii\base\Model;

class EmailForm extends Model
{
    public $email;
    public $subject;
    public $mess;
    
    public function rules(){
        return [
	    [['email', 'subject', 'mess'], 'required'],
	    ['email', 'email'],
	    ['subject', 'string', 'length' => [5, 30]],
	    ['mess', 'string', 'length' => [5, 500]],
        ];
    }
}