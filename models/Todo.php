<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "todo".
 *
 * @property int $id
 * @property string $task
 * @property string $from
 * @property string $to
 */
class Todo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'todo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task', 'from', 'to', 'device_id'], 'required'],
            [['from', 'to'], 'string', 'max' => 15],
            [['device_id'], 'integer'],
            [['task'], 'string', 'max' => 255],
            [['device_id'], 'exist', 'skipOnError' => true, 'targetClass' => Device::className(), 'targetAttribute' => ['device_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'task' => 'Задача',
            'from' => 'От',
            'to' => 'До',
            'device_id' => 'ID устройства'
        ];
    }
    public function isNeedRun(){
        $currentTime = date('H:i');
        $fromTime = date('H:i', strtotime($this->from));
        return  $currentTime == $fromTime;
    }
    public function isNeedOff(){
        $currentTime = date('H:i');
        $fromTime = date('H:i', strtotime($this->to));
        return  $currentTime == $fromTime;
    }

    public function getDevice()
    {
        return $this->hasOne(Device::className(), ['id' => 'device_id']);
    }
}
