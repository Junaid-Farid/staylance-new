<?php

use yii\db\Schema;
use yii\db\Migration;

class m151106_071740_create_about_hosts_area_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%about_hosts_area}}', [
            'id' => $this->primaryKey(),
            'host_id' => $this->integer()->notNull(),
            'doctor' => $this->string()->notNull(),
            'bus_staion' => $this->string()->notNull(),
            'shop' => $this->string()->notNull(),
            'bus_top' => $this->string()->notNull(),
            'town' => $this->string()->notNull(),
            'airport' => $this->string()->notNull(),
            'cash_machine' => $this->string()->notNull(),
            'train_station' => $this->string()->notNull(),
            'what_to_do' => $this->string()->notNull(),
            'travel_tips' => $this->string()->notNull(),
            'car' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%about_hosts_area}}');
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
