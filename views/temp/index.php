<?php

use dosamigos\chartjs\ChartJs;
use app\models\Temp;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Moisture;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TempSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main">

     <?= ChartJs::widget([
    'type' => 'line',
    'options' => [
        'height' => 50,
        'width' => 100
    ],
    'data' => [
        'labels' => $model->getMeasurementTime(),
        'datasets' => [
            [
                'label' => "Температура",
                'backgroundColor' => "rgba(179,181,198,0.7)",
                'borderColor' => "rgba(255,0,0,1)",
                'pointBackgroundColor' => "rgba(179,181,198,1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(179,181,198,1)",
                'data' => $model->getMeasurementTemp()
            ],
            [
                'label' => "Влажность",
                'backgroundColor' => "rgba(179,181,198,0.7)",
                'borderColor' => "rgba(0,0,255,1)",
                'pointBackgroundColor' => "rgba(179,181,198,1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(179,181,198,1)",
                'data' => Moisture::getMeasurementMoisture()
            ],
        ]
    ]
]);
?>
</div>