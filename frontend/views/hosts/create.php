<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hosts */

$this->title = Yii::t('app', 'Create Hosts');
?>
<div class="container">
    <div class="hosts-create">
        <div class="col-md-12">
            <h1>Account Information</h1>
            <p>You can add delete edit any of your account information below.</p>
        </div>
        <?=
        $this->render('_form', [
            'model' => $model,
            'type' => $type,
            'about' => $about,
        ])
        ?>

    </div>
</div>
