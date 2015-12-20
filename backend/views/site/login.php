<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
<!--    <h1><?//= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>-->

    <?php
    $form = ActiveForm::begin(['id' => 'login-form', 'options' => [
                    'class' => 'mb-lg',
                    'data-parsley-validate' => '', 'novalidate' => ''
    ]]);
    ?>
    <div class="form-group has-feedback">
        <?= $form->field($model, 'username')->textInput(array('placeholder' => 'Username', 'required', 'id' => 'exampleInputEmail1', 'autocomplete' => 'off'))->label(false) ?>
        <span class="fa fa-envelope form-control-feedback text-muted"></span>
    </div>
    <div class="form-group has-feedback">
        <?= $form->field($model, 'password')->passwordInput(array('placeholder' => 'Password', 'required', 'id' => 'exampleInputPassword1', 'autocomplete' => 'off'))->label(false) ?>
        <span class="fa fa-lock form-control-feedback text-muted"></span>
    </div>
    <div class="clearfix">

        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-block btn-success mt-lg', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
