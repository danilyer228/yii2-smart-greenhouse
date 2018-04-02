<?php

use yii\db\Migration;

/**
 * Handles the creation of table `todo`.
 * Has foreign keys to the tables:
 *
 * - `device`
 */
class m180328_121405_create_todo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('todo', [
            'id' => $this->primaryKey(),
            'task' => $this->string()->notNull(),
            'from' => $this->time()->notNull(),
            'to' => $this->time()->notNull(),
            'device_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `device_id`
        $this->createIndex(
            'idx-todo-device_id',
            'todo',
            'device_id'
        );

        // add foreign key for table `device`
        $this->addForeignKey(
            'fk-todo-device_id',
            'todo',
            'device_id',
            'device',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `device`
        $this->dropForeignKey(
            'fk-todo-device_id',
            'todo'
        );

        // drops index for column `device_id`
        $this->dropIndex(
            'idx-todo-device_id',
            'todo'
        );

        $this->dropTable('todo');
    }
}
