<?php

use yii\db\Migration;

/**
 * Handles the creation of table `moisture`.
 */
class m180420_133916_create_moisture_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('moisture', [
            'id' => $this->primaryKey(),
            'moisure' => $this->integer()->notNull(),
            'time' => $this->dateTime()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('moisture');
    }
}
