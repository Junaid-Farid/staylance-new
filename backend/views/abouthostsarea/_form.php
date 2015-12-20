<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AboutHostsArea */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-hosts-area-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'host_id')->hiddenInput(['value' => $host_id])->label(false) ?>

    <?= $form->field($model, 'doctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bus_staion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bus_top')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'town')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'airport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cash_machine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'train_station')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'what_to_do')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'travel_tips')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car')->dropDownList(array('1' => 'Not Necessary', '2' => 'Recommended', '3' => 'Essential')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
