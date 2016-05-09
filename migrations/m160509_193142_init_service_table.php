<?php

use yii\db\Migration;

class m160509_193142_init_service_table extends Migration
{
    public function up()
    {
        $this->createTable('service',[
                'id'=>'pk',
                'name'=>'string unique',
                'hourly_rate'=>'integer'
            ]);
    }

    public function down()
    {
        $this->dropTable('service');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
