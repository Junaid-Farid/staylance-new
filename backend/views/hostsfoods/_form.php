<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="hosts-foods-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'host_id')->hiddenInput(['value' => $host_id])->label(false) ?>

    <?= $form->field($model, 'food_type')->dropDownList(array('mix of everything' => 'Mix Of thing', 'mostly vegan' => 'Mostly Vegan', 'mostly vegitarian' => 'Mostly Vegitarian', 'mostly meat' => 'Mostly Meat')) ?>

    <?= $form->field($model, 'food_category')->dropDownList(array('local' => 'Local', 'organic' => 'Organic', 'non-organic' => 'Non-Organic')) ?>

    <?= $form->field($model, 'drinks')->dropDownList(array('water' => 'Water', 'soft drinks' => 'Soft Drinks', 'bear/wine' => 'Bear/Wine')) ?>

    <?= $form->field($model, 'other')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
