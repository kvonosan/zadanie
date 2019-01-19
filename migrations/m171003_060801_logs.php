<?php

use yii\db\Migration;

class m171003_060801_logs extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m171003_060801_logs cannot be reverted.\n";

        return false;
    }

    public function up()
    {
	$this->createTable('logs', array(
	    'id' => $this->primaryKey(),
	    'email' => $this->string(),
	    'user_id' => $this->integer(),
	    'user_ip' => $this->string(),
	    'useragent' => $this->string(),
	    'date' => $this->dateTime(),
	    'action' => $this->string(),
	    'result' => $this->string(),
	));
    }

    public function down()
    {
	$this->dropTable('logs');
        return true;
    }
}
