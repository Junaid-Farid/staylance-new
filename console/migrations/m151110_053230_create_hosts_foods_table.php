<?php

use yii\db\Schema;
use yii\db\Migration;

class m151110_053230_create_hosts_foods_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%hosts_foods}}', [
            'id' => $this->primaryKey(),
            'host_id' => $this->integer()->notNull(),
            'food_type' => $this->string()->notNull(),
            'food_category' => $this->string()->notNull(),
            'drinks' => $this->string()->notNull(),
            'other' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%hosts_foods}}');
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
