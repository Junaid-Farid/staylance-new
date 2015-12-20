<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HostsAvailability */

$this->title = 'Update Hosts Availability: ' . ' ' . $model->id;
?>
<div class="container">
    <div class="hosts-availability-update"> 
        <div class="col-md-12">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <?=
        $this->render('_form', [
            'model' => $model,
            'host_id' => $model->host_id,
        ])
        ?> 
    </div>
</div>