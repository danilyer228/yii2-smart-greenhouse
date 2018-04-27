<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "moisture".
 *
 * @property int $id
 * @property int $moisure
 * @property string $time
 */
class Moisture extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'moisture';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['moisure', 'time'], 'required'],
            [['moisure'], 'integer'],
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
            'moisure' => 'Moisure',
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
    public function getMeasurementMoisture()
    {
        $arr =  self::find($id)->select('moisure')->asArray()->all();
        foreach($arr as $k => $v) {
            $moistures[] = $v['moisure'];
        }
        return $moistures;
    }

    public function addMoisture() {
        $this->moisure = rand(10,15);
        $this->time = date('Y-m-d H:i:s');
        $this->save();
    }

    public function getMoisture() {
        return Yii::$app->redis->get('moisture');
    }
}
