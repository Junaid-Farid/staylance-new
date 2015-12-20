<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TravellersBestThing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="travellers-best-thing-form align-center">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'traveller_id')->hiddenInput(['value' => $traveller_id])->label(false) ?>

    <p>What's the best thing you have done in life?</p>
    <?= $form->field($model, 'best_thing')->textarea(['maxlength' => true, 'class' => 'texarea-box'])->label(false) ?>
    <p>What's next on your life's agenda.What's next on your life's agenda.</p>
</div>
