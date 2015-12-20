<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TravellerDescription */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="traveller-description-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'traveller_id')->hiddenInput(['value' => $traveller_id, 'placeholder' => 'Pleas e add some description about yourself in this box'])->label(false) ?>

    <?= $form->field($model, 'description')->textarea(['class' => 'description-box','maxlength' => true, 'placeholder' => 'Pleas e add some description about yourself in this box'])->label(false) ?>



</div>
