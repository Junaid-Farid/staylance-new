<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TravellerHelp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="traveller-help-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'traveller_id')->hiddenInput(['value' => $traveller_id])->label(false) ?>
    <p>What is your profession or, if you don't have what are you working or doing?</p>
    <?= $form->field($model, 'profession')->textInput()->label(false) ?>
    <p>What kind of help you can offer to a host(you can click more than one)?</p>

    <?= $form->field($model, 'general_help')->checkbox()->label(false) ?>

    <?= $form->field($model, 'professional_help')->checkbox()->label(false) ?>

    <?= $form->field($model, 'artistic_help')->checkbox()->label(false) ?>
    <div class="row">
        <div class="col-md-4">
            <div id="box1" class="<?php ($model->general_help == 1) ? print('help-box help-box-geen') : print('help-box') ?>">
                <div style="text-align: left"> <b id='genral-help-icon'>√</b></div> <h4> General Help</h4>
                <div class="text-justify"><p>I can help with anything. I will it with best intentions and will</p></div>
            </div>
        </div>
        <div class="col-md-4">
            <div id="box2" class="<?php ($model->professional_help == 1) ? print('help-box help-box-geen') : print('help-box') ?>">
                <h4> Professional Help</h4>
                <div class="text-justify"><p>I can help with anything. I will it with best intentions and will</p></div>
            </div>
        </div>
        <div class="col-md-4">
            <div id="box3" class="<?php ($model->artistic_help == 1) ? print('help-box help-box-geen') : print('help-box') ?>">
                <h4> Artistic Help</h4>
                <div class="text-justify"><p>I can help with anything. I will it with best intentions and will</p></div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#box1").click(function () {
        $(this).toggleClass('help-box-geen');
        var checkBoxes = $("#travellerhelp-general_help");
        checkBoxes.prop("checked", !checkBoxes.prop("checked"));
    });
    $("#box2").click(function () {
        $(this).toggleClass('help-box-geen');
        var checkBoxes = $("#travellerhelp-professional_help");
        checkBoxes.prop("checked", !checkBoxes.prop("checked"));
    });
    $("#box3").click(function () {
        $(this).toggleClass('help-box-geen');
        var checkBoxes = $("#travellerhelp-artistic_help");
        checkBoxes.prop("checked", !checkBoxes.prop("checked"));
    });
</script>