<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AboutHostsLife */

$this->title = Yii::t('app', 'Create About Hosts Life');
?>
<div class="container">
    <div class="about-hosts-life-create"> 
        <div class="col-md-12">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="about-hosts-life-form">

            <?php $form = ActiveForm::begin(); ?>
            <div class="col-md-6">
                <?= $form->field($model, 'music')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'film')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'food')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'book')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'do_not_like')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <?= Html::submitButton(!($model->film) ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>

    </div>
</div>
