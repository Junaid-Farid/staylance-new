<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HostsProfessionalHelp */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
            'modelClass' => 'Hosts Professional Help',
        ]) . ' ' . $model->id;
?>
<div class="container">
    <div class="hosts-professional-help-update">
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
