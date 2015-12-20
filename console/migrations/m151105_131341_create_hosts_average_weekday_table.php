<?php

use yii\db\Schema;
use yii\db\Migration;

class m151105_131341_create_hosts_average_weekday_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%hosts_average_weekdays}}', [
            'id' => $this->primaryKey(),
            'host_id' => $this->integer()->notNull(),
            'breakfast' => $this->string()->notNull(),
            'lunch' => $this->string()->notNull(),
            'dinner' => $this->string()->notNull(),
            'more_information' => $this->string()->notNull(),
            'smoking' => $this->string()->notNull(),
            'anything_else' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%hosts_average_weekdays}}');
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
