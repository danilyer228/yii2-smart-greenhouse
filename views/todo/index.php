<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Todo;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TodoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Todos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main">
    <div class="todo-index">

        <?php
		$todos = Todo::find('id')->all();
		foreach($todos as $todo) {
		    echo '<p>' . Html::a('Update', ['update', 'id' => $todo->id], ['class' => 'btn btn-primary']) . '</p>'.
		     DetailView::widget([
	            'model' => $todo,
	            'attributes' => [
	                'task',
	                'from:time',
	                'to:time'
	            ],
	        ]); 
	    }
        ?>
    </div>
</div>