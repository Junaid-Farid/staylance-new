<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HostsAverageWeekdays */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="host-average-weekdays-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'host_id')->hiddenInput(['value' => $host_id])->label(false) ?>

    <?= $form->field($model, 'breakfast')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lunch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dinner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'more_information')->textInput(['maxlength' => true]) ?>

    <b><?php echo Yii::t('app', 'By the Way! Can Staylancer smoke at your place'); ?></b>

    <?= $form->field($model, 'smoking')->dropDownList(array('1' => 'Outside is Okay', '2' => 'Every Where', '3' => 'Sorry we are Non-Smokers'))->label(false) ?>

    <?= $form->field($model, 'anything_else')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
