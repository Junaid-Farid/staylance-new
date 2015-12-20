<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HostsOtherServices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hosts-other-services-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'host_id')->hiddenInput(['value' => $host_id])->label(false) ?>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <b>Service</b>    
            </div>
            <div class="col-md-3">
                <b>Included With the Stay</b>    
            </div>
            <div class="col-md-3">
                <b>Possible for extra Charges</b>    
            </div>
            <div class="col-md-3">
                <b>Extra Charges</b>    
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <p>Wifi</p>    
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'wifi_included_with_stay')->checkBox(['label' => false]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'wifi_possible_for_extra_charges')->checkBox(['label' => false]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'wifi_any_extra_charges')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <p>laundary</p>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'laundry_included_with_stay')->checkBox(['label' => false]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'laundry_possible_for_extra_charges')->checkBox(['label' => false]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'laundry_any_extra_charges')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <p>Bicycle</p>
            </div>
            <div class="col-md-3">

                <?= $form->field($model, 'bicycle_included_with_stay')->checkBox(['label' => false]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'bicycle_possible_for_extra_charges')->checkBox(['label' => false]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'bicycle_any_extra_charges')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <p>Collection</p>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'collection_included_with_stay')->checkBox(['label' => false]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'collection_possible_for_extra_charges')->checkBox(['label' => false]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'collection_any_extra_charges')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <p>Car</p>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'car_included_with_stay')->checkBox(['label' => false]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'car_possible_for_extra_charges')->checkBox(['label' => false]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'car_any_extra_charges')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <p>Any Thing Else</p>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'anything_else_included_with_stay')->checkBox(['label' => false]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'anything_else_possible_for_extra_charges')->checkBox(['label' => false]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'anything_else_any_extra_charges')->textInput(['maxlength' => true, 'disabled' => true])->label(false) ?>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
<script>
    $(document).ready(function () {
        $("#hostsotherservices-wifi_included_with_stay").on('change', function () {
            if (this.checked) {
                $("#hostsotherservices-wifi_possible_for_extra_charges").prop("disabled", true);
                $("#hostsotherservices-wifi_any_extra_charges").prop("disabled", true);
            }
            else {
                if ($("#hostsotherservices-wifi_possible_for_extra_charges").checked) {
                    $("#hostsotherservices-wifi_any_extra_charges").prop("disabled", false);
                }
                else {
                    $("#hostsotherservices-wifi_any_extra_charges").prop("disabled", true);
                }
                $("#hostsotherservices-wifi_possible_for_extra_charges").prop("disabled", false);

            }
        });
        $("#hostsotherservices-wifi_possible_for_extra_charges").on('change', function () {
            if (this.checked) {
                $("#hostsotherservices-wifi_any_extra_charges").prop("disabled", false);
            }
            else {
                $("#hostsotherservices-wifi_any_extra_charges").prop("disabled", true);
            }
        });


        ////
        $("#hostsotherservices-laundry_included_with_stay").on('change', function () {
            if (this.checked) {
                $("#hostsotherservices-laundry_possible_for_extra_charges").prop("disabled", true);
                $("#hostsotherservices-laundry_any_extra_charges").prop("disabled", true);
            }
            else {
                if ($("#hostsotherservices-laundry_possible_for_extra_charges").checked) {
                    $("#hostsotherservices-laundry_any_extra_charges").prop("disabled", false);
                }
                else {
                    $("#hostsotherservices-laundry_any_extra_charges").prop("disabled", true);
                }
                $("#hostsotherservices-laundry_possible_for_extra_charges").prop("disabled", false);

            }
        });
        $("#hostsotherservices-laundry_possible_for_extra_charges").on('change', function () {
            if (this.checked) {
                $("#hostsotherservices-laundry_any_extra_charges").prop("disabled", false);
            }
            else {
                $("#hostsotherservices-laundry_any_extra_charges").prop("disabled", true);
            }
        });

        ///
        $("#hostsotherservices-bicycle_included_with_stay").on('change', function () {
            if (this.checked) {
                $("#hostsotherservices-bicycle_possible_for_extra_charges").prop("disabled", true);
                $("#hostsotherservices-bicycle_any_extra_charges").prop("disabled", true);
            }
            else {
                if ($("#hostsotherservices-bicycle_possible_for_extra_charges").checked) {
                    $("#hostsotherservices-bicycle_any_extra_charges").prop("disabled", false);
                }
                else {
                    $("#hostsotherservices-bicycle_any_extra_charges").prop("disabled", true);
                }
                $("#hostsotherservices-bicycle_possible_for_extra_charges").prop("disabled", false);

            }
        });
        $("#hostsotherservices-bicycle_possible_for_extra_charges").on('change', function () {
            if (this.checked) {
                $("#hostsotherservices-bicycle_any_extra_charges").prop("disabled", false);
            }
            else {
                $("#hostsotherservices-bicycle_any_extra_charges").prop("disabled", true);
            }
        });

        ////
        $("#hostsotherservices-collection_included_with_stay").on('change', function () {
            if (this.checked) {
                $("#hostsotherservices-collection_possible_for_extra_charges").prop("disabled", true);
                $("#hostsotherservices-collection_any_extra_charges").prop("disabled", true);
            }
            else {
                if ($("#hostsotherservices-collection_possible_for_extra_charges").checked) {
                    $("#hostsotherservices-collection_any_extra_charges").prop("disabled", false);
                }
                else {
                    $("#hostsotherservices-collection_any_extra_charges").prop("disabled", true);
                }
                $("#hostsotherservices-collection_possible_for_extra_charges").prop("disabled", false);

            }
        });
        $("#hostsotherservices-collection_possible_for_extra_charges").on('change', function () {
            if (this.checked) {
                $("#hostsotherservices-collection_any_extra_charges").prop("disabled", false);
            }
            else {
                $("#hostsotherservices-collection_any_extra_charges").prop("disabled", true);
            }
        });


        ////
        $("#hostsotherservices-car_included_with_stay").on('change', function () {
            if (this.checked) {
                $("#hostsotherservices-car_possible_for_extra_charges").prop("disabled", true);
                $("#hostsotherservices-car_any_extra_charges").prop("disabled", true);
            }
            else {
                if ($("#hostsotherservices-car_possible_for_extra_charges").checked) {
                    $("#hostsotherservices-car_any_extra_charges").prop("disabled", false);
                }
                else {
                    $("#hostsotherservices-car_any_extra_charges").prop("disabled", true);
                }
                $("#hostsotherservices-car_possible_for_extra_charges").prop("disabled", false);

            }
        });
        $("#hostsotherservices-car_possible_for_extra_charges").on('change', function () {
            if (this.checked) {
                $("#hostsotherservices-car_any_extra_charges").prop("disabled", false);
            }
            else {
                $("#hostsotherservices-car_any_extra_charges").prop("disabled", true);
            }
        });

        ////
        $("#hostsotherservices-anything_else_included_with_stay").on('change', function () {
            if (this.checked) {
                $("#hostsotherservices-anything_else_possible_for_extra_charges").prop("disabled", true);
                $("#hostsotherservices-anything_else_any_extra_charges").prop("disabled", true);
            }
            else {
                if ($("#hostsotherservices-anything_else_possible_for_extra_charges").checked) {
                    $("#hostsotherservices-anything_else_any_extra_charges").prop("disabled", false);
                }
                else {
                    $("#hostsotherservices-anything_else_any_extra_charges").prop("disabled", true);
                }
                $("#hostsotherservices-anything_else_possible_for_extra_charges").prop("disabled", false);

            }
        });
        $("#hostsotherservices-wifi_possible_for_extra_charges").on('change', function () {
            if (this.checked) {
                $("#hostsotherservices-anything_else_any_extra_charges").prop("disabled", false);
            }
            else {
                $("#hostsotherservices-anything_else_any_extra_charges").prop("disabled", true);
            }
        });

    });
</script>
