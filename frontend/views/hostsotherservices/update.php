<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HostsOtherServices */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
            'modelClass' => 'Hosts Other Services',
        ]) . ' ' . $model->id; 
?>
<div class="container">
    <div class="hosts-other-services-update">
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
