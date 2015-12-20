<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HostsArtisticHelp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hosts-artistic-help-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'host_id')->hiddenInput(['value' => $host_id])->label(false) ?>
    <p>what kind of artistic help are you interested in?</p>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                <?= $form->field($model, 'painting')->checkBox() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'sculpting')->checkBox() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'bother')->checkBox() ?>
            </div>
        </div>
    </div>


    <?= $form->field($model, 'other')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
