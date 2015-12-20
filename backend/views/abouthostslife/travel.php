<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AboutHostsLife */

$this->title = Yii::t('app', 'Create About Hosts Life');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'About Hosts Lives'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-hosts-life-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="about-hosts-life-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'counteries_travelled')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'counteries_like_to_travell')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'favourite_country')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'why_host')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'travel_qoute')->textInput(['maxlength' => true]) ?>


        <div class="form-group">
            <?= Html::submitButton(!($model->counteries_travelled) ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
