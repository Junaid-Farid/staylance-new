<?php

use yii\db\Schema;
use yii\db\Migration;

class m151106_091003_create_hosts_accommodation_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%hosts_accommodation}}', [
            'id' => $this->primaryKey(),
            'host_id' => $this->integer()->notNull(),
            'number_of_places' => $this->integer()->notNull(),
            'type' => $this->string()->notNull(),
            'bedrooms' => $this->integer()->notNull(),
            'bedroom_type' => $this->string()->notNull(),
            'beds' => $this->integer()->notNull(),
            'bathroom' => $this->string()->notNull(),
            'bathroom_facilities' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%hosts_accommodation}}');
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
