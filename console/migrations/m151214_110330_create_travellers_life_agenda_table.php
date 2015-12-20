<?php

use yii\db\Schema;
use yii\db\Migration;

class m151214_110330_create_travellers_life_agenda_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%travellers_life_agenda}}', [
            'id' => $this->primaryKey(),
            'traveller_id' => $this->integer()->notNull(),
            'life_agenda' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%travellers_life_agenda}}');
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
