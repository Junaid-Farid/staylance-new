<?php

use yii\db\Schema;
use yii\db\Migration;

class m151110_062559_create_hosts_food_details_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%hosts_food_details}}', [
            'id' => $this->primaryKey(),
            'host_id' => $this->integer()->notNull(),
            'food_type' => $this->string()->notNull(),
            'additional_charge' => $this->string()->notNull(),
            'breakfast_per_day' => $this->string(),
            'lunch_per_day' => $this->string(),
            'dinner_per_day' => $this->string(),
            'breakfast_per_week' => $this->string(),
            'lunch_per_week' => $this->string(),
            'dinner_per_week' => $this->string(),
            'breakfast_per_month' => $this->string(),
            'lunch_per_month' => $this->string(),
            'dinner_per_month' => $this->string(),
            'additional_information' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%hosts_food_details}}');
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
