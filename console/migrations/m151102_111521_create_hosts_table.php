<?php

use yii\db\Schema;
use yii\db\Migration;

class m151102_111521_create_hosts_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%hosts}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'profile_name' => $this->string()->notNull(),
            'birthday' => $this->string()->notNull(),
            'adress' => $this->string()->notNull(),
            'mobile_phone' => $this->string()->notNull(),
            'home_phone' => $this->string()->notNull(),
            'facebook' => $this->string()->notNull(),
            'host_type' => $this->integer()->notNull(),
            'about_host' => $this->integer()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%hosts}}');
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
