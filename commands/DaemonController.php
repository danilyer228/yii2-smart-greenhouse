<?php

namespace app\commands;

use Yii;
use app\models\Todo;
use yii\console\Controller;
use yii\console\ExitCode;
use app\garden\Gateway;

class DaemonController extends Controller
{  
    public function actionRun()
    {
    	while(1) {
    		$todos = Todo::find()->all();
            sleep(1);
    		foreach($todos as $todo) {
    			if($todo->isNeedRun()) {
                    Gateway::setPower($todo['device_id'],'on');
				    echo "On  $todo->task \n";
				}
				else if($todo->isNeedOff()) {
                    Gateway::setPower($todo['device_id'],'off');
					echo "Off $todo->task \n";
				} else {
				    echo "Nothing for $todo->task at " . date('h:i A', time()). "\n";
				}
			}
            sleep(50);
    	}
    }

    
}


?>
