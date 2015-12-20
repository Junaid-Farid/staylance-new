<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TravellersFavourites */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="travellers-favourites-form">
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'traveller_id')->hiddenInput(['value' => $traveller_id])->label(false) ?>

    <div class="row">
        <div class="col-md-1">
            <p><b class="green-text">1.</b>Music </p>
        </div>
        <div class="col-md-11">
            <?= $form->field($model, 'music')->textInput(['maxlength' => true])->label(false) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-1">
            <p><b class="green-text">2.</b>Film </p>
        </div>
        <div class="col-md-11">
            <?= $form->field($model, 'film')->textInput(['maxlength' => true])->label(false) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-1">
            <p><b class="green-text">3.</b>Food </p>
        </div>
        <div class="col-md-11">
            <?= $form->field($model, 'food')->textInput(['maxlength' => true])->label(false) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-1">
            <p><b class="green-text">4.</b>Book </p>
        </div>
        <div class="col-md-11">
            <?= $form->field($model, 'book')->textInput(['maxlength' => true])->label(false) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-1">
            <p><b class="green-text">5.</b>Quote </p>
        </div>
        <div class="col-md-11">
            <?= $form->field($model, 'quote')->textInput(['maxlength' => true, 'placeholder' => 'Do you have a favourite qoute?'])->label(false) ?>
        </div>
    </div>
</div>
