<?php

use yii\db\Schema;
use yii\db\Migration;

class m151105_080440_create_hosts_languages_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%hosts_languages}}', [
            'id' => $this->primaryKey(),
            'host_id' => $this->integer()->notNull(),
            'language' => $this->string()->notNull(),
            'type' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%hosts_languages}}');
    }
}
