<?php

use yii\db\Schema;
use yii\db\Migration;

class m151214_101717_create_travellers_favourites_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%travellers_favourites}}', [
            'id' => $this->primaryKey(),
            'traveller_id' => $this->integer()->notNull(),
            'music' => $this->string()->notNull(),
            'film' => $this->string()->notNull(),
            'food' => $this->string()->notNull(),
            'book' => $this->string()->notNull(),
            'quote' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%travellers_favourites}}');
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
