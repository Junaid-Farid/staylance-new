<?php

use yii\db\Schema;
use yii\db\Migration;

class m151106_113209_create_hosts_other_services_table extends Migration {

    public function up() {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%hosts_other_services}}', [
            'id' => $this->primaryKey(),
            'host_id' => $this->integer(),
            'wifi_included_with_stay' => $this->integer(),
            'wifi_possible_for_extra_charges' => $this->integer(),
            'wifi_any_extra_charges' => $this->string(),
            'laundry_included_with_stay' => $this->integer(),
            'laundry_possible_for_extra_charges' => $this->integer(),
            'laundry_any_extra_charges' => $this->string(),
            'bicycle_included_with_stay' => $this->integer(),
            'bicycle_possible_for_extra_charges' => $this->integer(),
            'bicycle_any_extra_charges' => $this->string(),
            'collection_included_with_stay' => $this->integer(),
            'collection_possible_for_extra_charges' => $this->integer(),
            'collection_any_extra_charges' => $this->string(),
            'car_included_with_stay' => $this->integer(),
            'car_possible_for_extra_charges' => $this->integer(),
            'car_any_extra_charges' => $this->string(),
            'anything_else_included_with_stay' => $this->integer(),
            'anything_else_possible_for_extra_charges' => $this->integer(),
            'anything_else_any_extra_charges' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%hosts_other_services}}');
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
