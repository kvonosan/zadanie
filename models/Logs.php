<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\helpers\Html;
use yii\db\Expression;

class Logs extends ActiveRecord
{
    public static function tableName()
    {
	return 'logs';
    }
    
    public function logAction($action, $result, $user_ip, $useragent)
    {
	$this->action = Html::encode($action);
	$this->result = Html::encode($result);
	$this->user_ip = Html::encode($user_ip);
	$this->useragent = Html::encode($useragent);
	$this->date = new Expression('NOW()');
	$this->save();
    }
    
    public function logUserAction($email, $user_id, $action, $result, $user_ip, $useragent)
    {
	$this->email = Html::encode($email);
	$this->user_id = Html::encode($user_id);
	$this->action = Html::encode($action);
	$this->result = Html::encode($result);
	$this->user_ip = Html::encode($user_ip);
	$this->useragent = Html::encode($useragent);
	$this->date = new Expression('NOW()');
	$this->save();
    }
}
