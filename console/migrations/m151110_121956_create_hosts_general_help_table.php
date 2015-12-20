<?php

use yii\db\Schema;
use yii\db\Migration;

class m151110_121956_create_hosts_general_help_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%hosts_general_help}}', [
            'id' => $this->primaryKey(),
            'host_id' => $this->integer()->notNull(),
            'gardening' => $this->string()->notNull(),
            'farming' => $this->string()->notNull(),
            'housework' => $this->string()->notNull(),
            'maintenance' => $this->string()->notNull(),
            'other_housework' => $this->string()->notNull(),
            'caring_children' => $this->string()->notNull(),
            'caring_elderly' => $this->string()->notNull(),
            'caring_other' => $this->string()->notNull(),
            'computer' => $this->string()->notNull(),
            'internet' => $this->string()->notNull(),
            'digial_marketing' => $this->string()->notNull(),
            'computer_other' => $this->string()->notNull(),
            'language' => $this->string()->notNull(),
            'music' => $this->string()->notNull(),
            'learning_other' => $this->string()->notNull(),
            'volunteering' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%hosts_general_help}}');
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
