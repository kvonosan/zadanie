<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\db\Expression;

class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
	return 'users';
    }
    
    public static function findIdentity($id)
    {
	return static::findOne($id);
    }
    
    public static function findIdentityByAccessToken($token, $type = null)
    {
	return null;
	
    }
    
    public function getId()
    {
	return $this->id;
    }
    
    public function getAuthKey()
    {
	return $this->auth_key;
    }
    
    public function validateAuthKey($authKey)
    {
	return $this->getAuthKey() === $authKey;
    }
    
    public function register($email, $password)
    {
	$this->email = $email;
	$this->password_hash = Yii::$app->getSecurity()->generatePasswordHash($password);
	$this->created_at = new Expression('NOW()');
	$this->auth_key = Yii::$app->getSecurity()->generateRandomString();
	$this->money = 0;
	$this->save();
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
