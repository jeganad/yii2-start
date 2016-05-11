<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation for table `table_slider`.
 */
class m160510_161911_create_table_slider extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%slider}}', [
            'id' => Schema::TYPE_PK,
            'slider_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'img' => Schema::TYPE_STRING . '(1000) NOT NULL',
            'title' => Schema::TYPE_STRING . '(100) NOT NULL',
            'data' => Schema::TYPE_TEXT . '(3000) NOT NULL',
            'sort' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

    }

    public function safeDown()
    {
        $this->dropTable('{{%slider}}');
    }
}
