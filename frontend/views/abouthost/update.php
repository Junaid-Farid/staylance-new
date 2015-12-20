<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AboutHost */

$this->title = 'Update About Host: ' . ' ' . $model->id;
?>
<div class="container">
    <div class="about-host-update">
    <div class="col-md-12">

        <h1><?= Html::encode($this->title) ?></h1>
    </div>
        <?=
        $this->render('_form', [
            'model' => $model,
            'model2' => $model2,
            'host_id' => $model->host_id,
        ])
        ?>

    </div>
</div>
