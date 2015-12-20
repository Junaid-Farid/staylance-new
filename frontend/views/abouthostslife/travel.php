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
                <?= $form->field($model, 'counteries_travelled')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'counteries_like_to_travell')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'favourite_country')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'why_host')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'travel_qoute')->textInput(['maxlength' => true]) ?>
            </div> 
            <div class="col-md-12"> 
                <div class="form-group">
                    <?= Html::submitButton(!($model->counteries_travelled) ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>

    </div>
</div>
