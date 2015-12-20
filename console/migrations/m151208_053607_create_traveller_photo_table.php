<?php

use yii\db\Schema;
use yii\db\Migration;

class m151208_053607_create_traveller_photo_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%traveller_photo}}', [
            'id' => $this->primaryKey(),
            'traveller_id' => $this->integer()->notNull(),
            'attachment_id' => $this->integer()->notNull(),
            'text1' => $this->string(),
            'text2' => $this->string(),
            'text3' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%traveller_photo}}');
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
