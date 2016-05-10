<?php

use yii\db\Migration;

/**
 * Handles the dropping for table `table_yii_advanced_user`.
 */
class m160506_000513_drop_table_yii_advanced_user extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropTable('{{%user}}');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        echo "Does not support migration down.\n";
        return true;
    }
}
