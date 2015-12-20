<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Subscribers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subscribers-form row">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-5">
        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-5">
        <?= $form->field($model, 'type')->dropDownList(['traveller' => 'Traveller', 'host' => 'Host']) ?>
    </div>
    <div class="col-md-2">
        <div class="form-group label-padding">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
