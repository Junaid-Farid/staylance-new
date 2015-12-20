<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HostsAverageWeekdays */

$this->title = Yii::t('app', 'Create Host Average Weekdays'); 
?>
<div class="container">
    <div class="host-average-weekdays-create">
        <div class="col-md-12">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <?=
        $this->render('_form', [
            'model' => $model,
            'host_id' => $host_id,
        ])
        ?>

    </div>
</div>
