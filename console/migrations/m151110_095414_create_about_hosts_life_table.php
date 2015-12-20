<?php

use yii\db\Schema;
use yii\db\Migration;

class m151110_095414_create_about_hosts_life_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%about_hosts_life}}', [
            'id' => $this->primaryKey(),
            'host_id' => $this->integer()->notNull(),
            'life_agenda' => $this->string()->notNull(),
            'best_thing_in_life' => $this->string()->notNull(),
            'music' => $this->string()->notNull(),
            'film' => $this->string()->notNull(),
            'food' => $this->string()->notNull(),
            'book' => $this->string()->notNull(),
            'do_not_like' => $this->string()->notNull(),
            'counteries_travelled' => $this->string()->notNull(),
            'counteries_like_to_travell' => $this->string()->notNull(),
            'favourite_country' => $this->string()->notNull(),
            'why_host' => $this->string()->notNull(),
            'travel_qoute' => $this->string()->notNull(),
            'anything_special' => $this->string()->notNull(),
            'anything_else' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%about_hosts_life}}');
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
