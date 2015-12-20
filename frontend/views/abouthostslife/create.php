<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AboutHostsLife */

$this->title = Yii::t('app', 'Create About Hosts Life');
?>
<div class="container">
    <div class="about-hosts-life-create">
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
