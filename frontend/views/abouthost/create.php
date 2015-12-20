<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AboutHost */

$this->title = 'Create About Host'; 
?>
<div class="container">
    <div class="about-host-create">
        <div class="col-md-12">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <?=
        $this->render('_form', [
            'model' => $model,
            'model2' => $model2,
            'host_id' => $host_id,
        ])
        ?>

    </div>
</div>
