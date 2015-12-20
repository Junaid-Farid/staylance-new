<?php

use yii\db\Schema;
use yii\db\Migration;

class m151110_135831_create_hosts_artistic_help_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%hosts_artistic_help}}', [
            'id' => $this->primaryKey(),
            'host_id' => $this->integer()->notNull(),
            'painting' => $this->string()->notNull(),
            'sculpting' => $this->string()->notNull(),
            'bother' => $this->string()->notNull(),
            'other' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%hosts_artistic_help}}');
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
