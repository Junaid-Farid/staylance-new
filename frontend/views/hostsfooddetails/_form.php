<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HostsFoodDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hosts-food-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'host_id')->hiddenInput(['value' => $host_id])->label(false) ?>
    <div class="col-md-6">
        <?= $form->field($model, 'food_type')->dropDownList(array('breakfast' => 'Breakfast', 'breakfast+lunch' => 'Breakfast + Lunch', 'breakfast+lunch+dinner' => 'Breakfast + Lunch + Dinner', 'none' => 'None')) ?>
        <?= $form->field($model, 'additional_charge')->checkBox() ?>
        <div id="data-div" style="display:none;">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-3">
                        <?php echo Yii::t('app', '$ per Day'); ?>
                    </div>
                    <div class="col-md-3">
                        <?php echo Yii::t('app', '$ per Week'); ?>
                    </div>
                    <div class="col-md-3">
                        <?php echo Yii::t('app', '$ per Month'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <?php echo Yii::t('app', 'Breakfast'); ?>
                    </div>
                    <div class="col-md-3">
                        <?= $form->field($model, 'breakfast_per_day')->textInput(['maxlength' => true])->label(false) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $form->field($model, 'breakfast_per_week')->textInput(['maxlength' => true])->label(false) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $form->field($model, 'breakfast_per_month')->textInput(['maxlength' => true])->label(false) ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <?php echo Yii::t('app', 'Lunch'); ?>
                    </div>
                    <div class="col-md-3">
                        <?= $form->field($model, 'lunch_per_day')->textInput(['maxlength' => true])->label(false) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $form->field($model, 'lunch_per_week')->textInput(['maxlength' => true])->label(false) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $form->field($model, 'lunch_per_month')->textInput(['maxlength' => true])->label(false) ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <?php echo Yii::t('app', 'Dinner'); ?>
                    </div>
                    <div class="col-md-3">
                        <?= $form->field($model, 'dinner_per_day')->textInput(['maxlength' => true])->label(false) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $form->field($model, 'dinner_per_week')->textInput(['maxlength' => true])->label(false) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $form->field($model, 'dinner_per_month')->textInput(['maxlength' => true])->label(false) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'additional_information')->textInput(['maxlength' => true]) ?>
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
        $("#hostsfooddetails-additional_charge").on('change', function () {
            if (this.checked) {
                $("#data-div").show();
            }
            else {
                $("#data-div").hide();
            }
        });
    });
</script>
