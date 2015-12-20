<?php

use yii\db\Schema;
use yii\db\Migration;

class m151217_114341_create_travellers_verification_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%travellers_verification}}', [
            'id' => $this->primaryKey(),
            'traveller_id' => $this->integer()->notNull(),
            'email_code' => $this->string(),
            'email_status' => $this->integer()->defaultValue(0),
            'mobile_status' => $this->integer()->defaultValue(0),
            'facebook_status' => $this->integer()->defaultValue(0),
            'googleplus_status' => $this->integer()->defaultValue(0),
            'linkedin_status' => $this->integer()->defaultValue(0),
            'video_status' => $this->integer()->defaultValue(0),
            'portfolio_status' => $this->integer()->defaultValue(0),
            'passport_status' => $this->integer()->defaultValue(0),
            'driving_lisence_status' => $this->integer()->defaultValue(0),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%travellers_verification}}');
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
