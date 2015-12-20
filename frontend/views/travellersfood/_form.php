<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TravellersFood */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="travellers-food-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'traveller_id')->hiddenInput(['value' => $traveller_id])->label(false) ?>

    <?= $form->field($model, 'kind_of_food')->hiddenInput(['maxlength' => true])->label(false) ?>

    <p><b class="green-text">1.</b> What kind of food you like?</p>
    <a class="btn btn-food <?php ($model->kind_of_food == 'A mix of every thing') ? print('green-food-btn') : print(''); ?>" id="btn-food-1">A mix of every thing</a>
    <a class="btn btn-food <?php ($model->kind_of_food == 'Mostly Vegan') ? print('green-food-btn') : print(''); ?>" id="btn-food-2">Mostly Vegan</a>
    <a class="btn btn-food <?php ($model->kind_of_food == 'Mostly Vegetarian') ? print('green-food-btn') : print(''); ?>" id="btn-food-3">Mostly Vegetarian</a>
    <a class="btn btn-food <?php ($model->kind_of_food == 'Mostly Meat') ? print('green-food-btn') : print(''); ?>" id="btn-food-4">Mostly Meat</a>

    <br><br><br>
    <div class="row">
        <div class="col-md-6">
            <p><b class="green-text">2.</b> Do you have specific food requirements?</p>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'specific_food_requirement')->radioList(['yes' => 'Yes', 'no' => 'No'])->label(false) ?>
        </div>
    </div>
    <?= $form->field($model, 'let_hosts_know')->textInput(['maxlength' => true, 'placeholder' => 'Please let host know here'])->label(false) ?>

    <br>
    <p><b class="green-text">3.</b> Do you have any Allergies or illnesses which host should know about?</p> 
    <?= $form->field($model, 'allergies_illnesses')->textInput(['maxlength' => true])->label(false) ?>

    <br>
    <div class="row">
        <div class="col-md-3">
            <p><b class="green-text">4.</b> Do you Smoke?</p>
        </div>
        <div class="col-md-9">
            <?= $form->field($model, 'smoke')->radioList(['yes' => 'Yes', 'no' => 'No', 'occasionally' => 'Occasionally'])->label(false) ?>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-5">
            <p><b class="green-text">5.</b> Do you have driving license?</p>
        </div>
        <div class="col-md-7">
            <?= $form->field($model, 'driving_lisence')->radioList(['yes' => 'Yes', 'no' => 'No'])->label(false) ?>
        </div>
    </div>
    <br>
</div>
<script>
    $("#btn-food-1").click(function () {
        $("#travellersfood-kind_of_food").val("A mix of every thing");
        $("#btn-food-1").addClass("green-food-btn");
        $("#btn-food-2").removeClass("green-food-btn");
        $("#btn-food-3").removeClass("green-food-btn");
        $("#btn-food-4").removeClass("green-food-btn");
    }
    );
    $("#btn-food-2").click(function () {
        $("#travellersfood-kind_of_food").val("Mostly Vegan");
        $("#btn-food-1").removeClass("green-food-btn");
        $("#btn-food-2").addClass("green-food-btn");
        $("#btn-food-3").removeClass("green-food-btn");
        $("#btn-food-4").removeClass("green-food-btn");
    }
    );
    $("#btn-food-3").click(function () {
        $("#travellersfood-kind_of_food").val("Mostly Vegetarian");
        $("#btn-food-1").removeClass("green-food-btn");
        $("#btn-food-2").removeClass("green-food-btn");
        $("#btn-food-3").addClass("green-food-btn");
        $("#btn-food-4").removeClass("green-food-btn");
    }
    );
    $("#btn-food-4").click(function () {
        $("#travellersfood-kind_of_food").val("Mostly Meat");
        $("#btn-food-1").removeClass("green-food-btn");
        $("#btn-food-2").removeClass("green-food-btn");
        $("#btn-food-3").removeClass("green-food-btn");
        $("#btn-food-4").addClass("green-food-btn");
    }
    );
</script>