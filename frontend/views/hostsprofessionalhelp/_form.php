<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HostsProfessionalHelp */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="hosts-professional-help-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'host_id')->hiddenInput(['value' => $host_id])->label(false) ?>

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                House OR Garden (Include Small farm Or holdings)
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'chef')->checkBox() ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'builder')->checkBox() ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'painter')->checkBox() ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'carpenter')->checkBox() ?>
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-4">
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'landscraper')->checkBox() ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'plumber')->checkBox() ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'tiler')->checkBox() ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'house_other')->textInput() ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                Caring
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'caring_children')->checkBox() ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'caring_elderly')->checkBox() ?>
            </div>
            <div class="col-md-2 col-md-offset-2">
                <?= $form->field($model, 'caring_other')->textInput() ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                Computer/IT
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'computer')->checkBox() ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'internet')->checkBox() ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'digial_marketing')->checkBox() ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'computer_other')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                Teaching/Learning
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'language')->checkBox(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'music')->checkBox(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2 col-md-offset-2">
                <?= $form->field($model, 'learning_other')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'volunteering')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-12"> 
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
