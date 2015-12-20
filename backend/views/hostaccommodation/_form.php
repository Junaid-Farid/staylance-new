<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HostsAccommodation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hosts-accommodation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'host_id')->hiddenInput(['value' => $host_id])->label(false) ?>

    <?= $form->field($model, 'number_of_places')->dropDownList(array('1' => '1', '2' => '2', '3' => '3')) ?>

    <?= $form->field($model, 'type')->dropDownList(array('1' => 'Apartment', '2' => 'Room or House', '3' => 'House + Barn', '4' => 'House + Barn + Tent')) ?>

    <?= $form->field($model, 'bedrooms')->textInput() ?>

    <?= $form->field($model, 'bedroom_type')->dropDownList(array('1' => 'Signle', '2' => 'Double')) ?>

    <?= $form->field($model, 'beds')->textInput() ?>

    <?= $form->field($model, 'bathroom')->dropDownList(array('1' => 'Private', '2' => 'Public')) ?>

    <?= $form->field($model, 'bathroom_facilities')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
