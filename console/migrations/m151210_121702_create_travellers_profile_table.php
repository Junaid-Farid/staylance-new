<?php

use yii\db\Schema;
use yii\db\Migration;

class m151210_121702_create_travellers_profile_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%travellers_profile}}', [
            'id' => $this->primaryKey(),
            'traveller_id' => $this->integer()->notNull(),
            'what_can_share' => $this->string()->notNull(),
            'staylance_experience' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%traveller_description}}');
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
