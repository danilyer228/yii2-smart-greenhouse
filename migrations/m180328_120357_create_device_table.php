<?php

use yii\db\Migration;

/**
 * Handles the creation of table `device`.
 */
class m180328_120357_create_device_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('device', [
            'id' => $this->primaryKey(),
            'command_on' => $this->string(2),
            'command_off' => $this->string(2),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('device');
    }
}
