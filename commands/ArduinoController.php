<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use app\models\Todo;

class ArduinoController extends Controller
{  
    public function actionRun()
    {
        $handler = fopen('COM8', 'w');
        sleep(2);
    	while(1) {
            $command = Yii::$app->redis->get('command');
            if($command != 0) {
                fwrite($handler, $command);
                Yii::$app->redis->set('command', 0);
            }
    	}
    }

    
}


?>
