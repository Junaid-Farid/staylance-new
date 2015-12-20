<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HostsAverageWeekdays */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
            'modelClass' => 'Host Average Weekdays',
        ]) . ' ' . $model->id;
?>
<div class="container">
    <div class="host-average-weekdays-update">
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
