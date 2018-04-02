<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Temp */

$this->title = 'Create Temp';
$this->params['breadcrumbs'][] = ['label' => 'Temps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="temp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
