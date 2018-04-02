<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "temp".
 *
 * @property int $id
 * @property int $temp
 * @property string $time
 */
class Temp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'temp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['temp', 'time'], 'required'],
            [['temp'], 'integer'],
            [['time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'temp' => 'Temp',
            'time' => 'Time',
        ];
    }

    public function getMeasurementTime()
    {
        $arr =  self::find($id)->select('time')->asArray()->all();
        foreach($arr as $k => $v) {
            $times[] = $v['time'];
        }
        return $times;
    }
    public function getMeasurementTemp()
    {
        $arr =  self::find($id)->select('temp')->asArray()->all();
        foreach($arr as $k => $v) {
            $temps[] = $v['temp'];
        }
        return $temps;
    }
}
