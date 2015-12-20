<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TravellersProfile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="travellers-profile-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'traveller_id')->hiddenInput(['value' => $traveller_id])->label(false) ?>
    <p>If Hosts not need help, What can you share with them?</p>
    <?= $form->field($model, 'what_can_share')->textarea(['class' => 'texarea-box', 'maxlength' => true])->label(false) ?>
    <p>What do you hope to get from your Staylance Experience?</p>
    <?= $form->field($model, 'staylance_experience')->textarea(['class' => 'texarea-box', 'maxlength' => true])->label(false) ?>
</div>
