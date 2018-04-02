<?php

namespace app\models;

use Yii;
use app\models\Todo;

/**
 * This is the model class for table "device".
 *
 * @property int $id
 * @property string $command_on
 * @property string $command_off
 *
 * @property Todo[] $todos
 */
class Device extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'device';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['command_on', 'command_off'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'command_on' => 'Command On',
            'command_off' => 'Command Off',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTodos()
    {
        return $this->hasOne(Todo::className(), ['device_id' => 'id']);
    }

}
