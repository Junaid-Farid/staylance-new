<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TravellersCountries */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="travellers-languages-form">
    <br>
    <p>Which Languages do you speak(you can enter as many as you like)?</p>
    <br><br>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'traveller_id')->hiddenInput(['value' => $traveller_id])->label(false) ?>
    <div class="row">
        <div class="col-md-6">
            <p>What countries have you travelled to?</p>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'travelled_country')->dropDownList($Countries, ['class' => 'form-control select-multiple-field js-example-basic-multiple', 'multiple' => 'multiple'])->label(false) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p>What countries have you lived in?</p>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'lived_country')->dropDownList($Countries, ['class' => 'form-control select-multiple-field js-example-basic-multiple', 'multiple' => 'multiple'])->label(false) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p>What's your favourite country in the world?</p>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'favourite_country')->dropDownList($Countries, ['class' => 'form-control select-multiple-field js-example-basic-multiple', 'multiple' => 'multiple'])->label(false) ?>
        </div>
    </div>

</div>
<script>
    $(".js-example-basic-multiple").select2();
</script>

