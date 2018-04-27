<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use app\models\Todo;

class ArduinoController extends Controller
{  
    protected $handler;
    public function actionRun()
    {
        $this->handler = fopen('/dev/ttyUSB0', "w+");
        sleep(2);
    	while(1) {
            $this->writeCommand();
    	}
    }    

    public function checkCommandAvailability() {
        $command = Yii::$app->redis->get('command');
        return ($command != 0) ? $command : false;
    }

    public function writeCommand() {
        $command = $this->checkCommandAvailability();
        if($command) {
            fwrite($this->handler, $command);
            Yii::$app->redis->set('command', 0);
        }
    }
}


?>
