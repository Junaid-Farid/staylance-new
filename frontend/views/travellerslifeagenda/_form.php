<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TravellersLifeAgenda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="travellers-life-agenda-form align-center">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'traveller_id')->hiddenInput(['value' => $traveller_id])->label(false) ?>
    <p>What's next on your life's agenda?</p>
    <?= $form->field($model, 'life_agenda')->textarea(['maxlength' => true, 'class' => 'texarea-box'])->label(false) ?>
    <p>What's next on your life's agenda.What's next on your life's agenda.</p>
</div>
