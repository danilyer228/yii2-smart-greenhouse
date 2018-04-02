<?php

namespace app\garden;

use Yii;
use app\models\Device;


class Gateway {

	public function setPower($id, $value) {
		$device = Device::findOne($id);

		if($value == 'on') {
			Yii::$app->redis->set('command', $device['command_on']);
		}

		if($value == 'off') {
			Yii::$app->redis->set('command', $device['command_off']);
		}
	}
}