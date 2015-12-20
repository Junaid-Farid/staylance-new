<?php

use yii\db\Schema;
use yii\db\Migration;

class m151202_103205_create_travellers_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%travellers}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'gender' => $this->string()->notNull(),
            'user_name' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'sur_name' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'country' => $this->string()->notNull(),
            'province' => $this->string()->notNull(),
            'city' => $this->string()->notNull(),
            'postcode' => $this->integer()->notNull(),
            'mobile_phone' => $this->string()->notNull(),
            'landline' => $this->string()->notNull(),
            'birthday' => $this->string()->notNull(),
            'skype_id' => $this->string()->notNull(),
            'website' => $this->string()->notNull(),
            'how_find_staylance' => $this->string()->notNull(),
            'account_type' => $this->integer()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%travellers}}');
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
