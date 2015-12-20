<?php

use yii\db\Schema;
use yii\db\Migration;

class m151214_065807_create_travellers_food_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%travellers_food}}', [
            'id' => $this->primaryKey(),
            'traveller_id' => $this->integer()->notNull(),
            'kind_of_food' => $this->string()->notNull(),
            'specific_food_requirement' => $this->string()->notNull(),
            'let_hosts_know' => $this->string()->notNull(),
            'allergies_illnesses' => $this->string()->notNull(),
            'smoke' => $this->string()->notNull(),
            'driving_lisence' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%travellers_food}}');
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
