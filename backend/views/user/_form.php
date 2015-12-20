<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="user-form">
    <!-- START row-->
    <div class="row">
        <div class="col-lg-12">
            <!-- START panel-->
            <div class="panel panel-default">
               
                <div class="panel-body">
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="col-lg-6">
                        <div class="form-group" style="width: 30%; float: left; margin-bottom: 0px;">
                            <?= $form->field($model, 'gender')->dropDownList(array('' => 'Select your Sex', 'Mr.' => 'Mr.', 'Ms.' => 'Ms')) ?>
                        </div>
                        <div class="form-group" style="width: 70%; float:left; margin-bottom: 0px;">
                            <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="form-group">
                            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="form-group">
                            <?= $form->field($model, 'user_role')->dropDownList(array('' => 'Select User Role', 'admin' => 'Administrator', 'host' => 'Host', 'staylance' => 'Staylance')) ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="form-group">
                            <?= $form->field($model, 'password')->passwordInput() ?>
                        </div>
                        <div class="form-group">
                            <?=
                            $form->field($model, 'birthday')->widget(DatePicker::className(), ['clientOptions' => ['defaultDate' => '2014-01-01'], 'options' => ['class' => 'form-control']])
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="panel-footer">
    <div class="clearfix">
        <div class="pull-left">
            <div class="checkbox c-checkbox">
                <label>
                    <input type="checkbox" name="agreements" required data-parsley-error-message="Please read and agree the terms">
                    <span class="fa fa-check"></span>I agree with the <a href="#">terms</a>
                </label>
            </div>
        </div>
        <div class="pull-right">
            <?= Html::submitButton(Yii::t('app', 'Create'), ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>

<!-- END panel-->