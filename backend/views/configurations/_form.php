<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Configurations */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="configurations-form row">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-5">
        <?= $form->field($model, 'key')->textInput(['maxlength' => true, 'readonly' => ($model->isNewRecord) ? false : true]) ?>
    </div>
    <div class="col-md-5">
        <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-2">
        <div class="form-group label-padding">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
