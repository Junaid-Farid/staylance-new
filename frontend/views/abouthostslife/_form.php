<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AboutHostsLife */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-hosts-life-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'host_id')->hiddenInput(['value' => $host_id])->label(false) ?>
    <div class="col-md-6">
        <?= $form->field($model, 'life_agenda')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
