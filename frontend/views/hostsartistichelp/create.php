<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HostsArtisticHelp */

$this->title = Yii::t('app', 'Create Hosts Artistic Help');
?>
<div class="container">
    <div class="hosts-artistic-help-create">
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
