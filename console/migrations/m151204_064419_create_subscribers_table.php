<?php

use yii\db\Schema;
use yii\db\Migration;

class m151204_064419_create_subscribers_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%subscribers}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->notNull()->unique(),
            'type' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%subscribers}}');
    }

}
