<?php

namespace app\commands;

use Yii;
use app\models\Temp;
use app\models\Moisture;
use yii\console\Controller;
use yii\console\ExitCode;

class StatsController extends Controller
{  
    public function actionRun()
    {
        $temp = new Temp();
        $moisture = new Moisture;
    	while(1) {
            $temp->addTemp();
            $moisture->addMoisture();
            Yii::$app->redis->set('temp', $temp->temp);
            Yii::$app->redis->set('moisture', $moisture->moisure);
            sleep(60*30);
    	}
    }

    
}


?>
