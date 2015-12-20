<?php

use yii\db\Schema;
use yii\db\Migration;

class m151103_102505_create_hosts_availability_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%hosts_availability}}', [
            'id' => $this->primaryKey(),
            'host_id' => $this->integer()->notNull(),
            'number_of_staylancers' => $this->integer()->notNull(),
            'can_not_host' => $this->integer()->notNull(),
            'availabe_dates' => $this->string(),
            'help' => $this->string(),
            'share' => $this->string(),
            'pay' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%hosts_availability}}');
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
