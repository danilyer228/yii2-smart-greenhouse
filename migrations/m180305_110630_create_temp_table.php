<?php

use yii\db\Migration;

/**
 * Handles the creation of table `temp`.
 */
class m180305_110630_create_temp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('temp', [
            'id' => $this->primaryKey(),
            'temp' => $this->integer()->notNull(),
            'time' => $this->dateTime()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('temp');
    }
}
