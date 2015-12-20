<?php

use yii\db\Schema;
use yii\db\Migration;

class m151202_060208_create_attachments_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%attachments}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'orignal_name' => $this->string()->notNull(),
            'manupulated_name' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%attachments}}');
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
