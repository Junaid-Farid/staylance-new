<?php

use yii\db\Schema;
use yii\db\Migration;

class m151102_071431_modification_in_user_table extends Migration {

    public function up() {
        $this->addColumn('user', 'lastname', 'VARCHAR(150) AFTER `id` ');
        $this->addColumn('user', 'firstname', 'VARCHAR(150) AFTER `id` ');
        $this->addColumn('user', 'gender', 'VARCHAR(150) AFTER `id` ');
        $this->addColumn('user', 'birthday', 'VARCHAR(150) AFTER `email` ');
        $this->addColumn('user', 'user_role', 'VARCHAR(150) AFTER `status` ');
    }

    public function down() {
        $this->dropColumn('user', 'gender');
        $this->dropColumn('user', 'firstname');
        $this->dropColumn('user', 'lastname');
        $this->dropColumn('user', 'birthday');
        $this->dropColumn('user', 'user_role');
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
