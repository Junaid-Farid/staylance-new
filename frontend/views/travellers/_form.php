<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Travellers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="travellers-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'gender')->radioList(['women' => 'Women', 'man' => 'Man'])->label(FALSE) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'user_name')->textInput(['maxlength' => true, 'placeholder' => 'Username'])->label(false) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Name'])->label(false) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'sur_name')->textInput(['maxlength' => true, 'placeholder' => 'Surname'])->label(false) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'address')->textInput(['maxlength' => true, 'placeholder' => 'Address'])->label(false) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'country')->textInput(['maxlength' => true, 'placeholder' => 'Country'])->label(false) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'province')->textInput(['maxlength' => true, 'placeholder' => 'Province'])->label(false) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'city')->textInput(['maxlength' => true, 'placeholder' => 'City'])->label(false) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'postcode')->textInput(['maxlength' => true, 'placeholder' => 'Postcode'])->label(false) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'mobile_phone')->textInput(['maxlength' => true, 'placeholder' => 'Mobile Phone'])->label(false) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'landline')->textInput(['maxlength' => true, 'placeholder' => 'Land Line'])->label(false) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'birthday')->widget(DatePicker::className(), ['clientOptions' => ['defaultDate' => '2014-01-01'], 'options' => ['class' => 'form-control', 'placeholder' => 'Birthday']])->label(false) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'skype_id')->textInput(['maxlength' => true, 'placeholder' => 'Skype ID'])->label(false) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'website')->textInput(['maxlength' => true, 'placeholder' => 'Website'])->label(false) ?>
        </div>
        <div class="col-md-12">
            <?= $form->field($model, 'how_find_staylance')->textInput(['maxlength' => true, 'placeholder' => 'How Find Staylance'])->label(false) ?>
        </div>
    </div>
</div>
<script>
    $(function () {
        $("#travellers-address").placecomplete({});
    });
    $("#travellers-address").on({
        "placecomplete:selected": function (evt, placeResult) {
            console.log(placeResult);
            var city = placeResult['address_components'][1]['long_name'];
            var province = placeResult['address_components'][2]['long_name'];
            var country = placeResult['address_components'][3]['long_name'];
            $("#travellers-city").val(city);
            $("#travellers-province").val(province);
            $("#travellers-country").val(country);
            if (typeof (placeResult['address_components'][4]['long_name']) != "undefined" && placeResult['address_components'][4]['long_name'] !== null) {
                var postcode = placeResult['address_components'][4]['long_name'];
                $("#travellers-postcode").val(postcode);
            }
        }
    });
</script>