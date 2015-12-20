<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HostsLanguages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="host-languages-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'host_id')->hiddenInput(['value' => $host_id])->label(false) ?>
    <div class="col-md-6">
        <p><?php echo $type . ':'; ?></p>
        <?= $form->field($model, 'language')->textInput(['maxlength' => true])->label(false) ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '+') : Yii::t('app', '+'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
        <?= $form->field($model, 'type')->hiddenInput(['value' => $type])->label(false) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>
