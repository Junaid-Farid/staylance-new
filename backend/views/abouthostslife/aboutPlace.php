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

        <?= $form->field($model, 'anything_special')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'anything_else')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton(!($model->anything_special) ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
