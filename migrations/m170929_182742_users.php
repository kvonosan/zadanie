<?php

use yii\db\Migration;

class m170929_182742_users extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m170929_182742_users cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
	$this->createTable('users', array(
	    'id' => $this->primaryKey(),
	    'email' => $this->string()->notNull(),
	    'password_hash' => $this->string(60)->notNull(),
	    'created_at' => $this->dateTime()->notNull(),
	    'auth_key' => $this->string(32)->notNull(),
	    'confirmed_at' => $this->dateTime(),
	    'money' => $this->money(),
	));
    }

    public function down()
    {
	$this->dropTable('users');
        return true;
    }
}
