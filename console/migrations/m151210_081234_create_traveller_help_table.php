<?php

use yii\db\Schema;
use yii\db\Migration;

class m151210_081234_create_traveller_help_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%traveller_help}}', [
            'id' => $this->primaryKey(),
            'traveller_id' => $this->integer()->notNull(),
            'profession' => $this->string()->notNull(),
            'general_help' => $this->integer()->notNull(),
            'professional_help' => $this->integer()->notNull(),
            'artistic_help' => $this->integer()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%traveller_help}}');
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
