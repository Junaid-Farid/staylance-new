<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TravellersVerification */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="travellers-verification-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'traveller_id')->hiddenInput(['value' => $traveller_id])->label(false) ?>

    <?= $form->field($model, 'email_code')->hiddenInput(['maxlength' => true])->label(false) ?>

    <?= $form->field($model, 'email_status')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'mobile_status')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'facebook_status')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'googleplus_status')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'linkedin_status')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'video_status')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'portfolio_status')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'passport_status')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'driving_lisence_status')->hiddenInput()->label(false) ?>

    <div class="form-group">
        <div class="col-md-6">
            <div class="social-verification">
                <p><i class="fa fa-check"></i>
                    Email
                    <?= Html::submitButton(($model->isNewRecord || $model->email_status == 0) ? Yii::t('app', 'verify') : ($model->email_status == 1 ? Yii::t('app', 'resend') : Yii::t('app', 'done')), ['class' => ($model->isNewRecord || $model->email_status == 0) ? 'btn btn-start' : ($model->email_status == 1 ? 'btn btn-middle' : 'btn btn-end'), 'id' => 'email-btn']) ?>
                </p>
                <p><i class="fa fa-check"></i> Mobile
                    <?= Html::submitButton(($model->isNewRecord || $model->mobile_status == 0) ? Yii::t('app', 'verify') : ($model->mobile_status == 1 ? Yii::t('app', 'resend') : Yii::t('app', 'done')), ['class' => ($model->isNewRecord || $model->mobile_status == 0) ? 'btn btn-start' : ($model->mobile_status == 1 ? 'btn btn-middle' : 'btn btn-end'), 'id' => 'phone-btn']) ?>
                </p>
                <p><i class="fa fa-check"></i> Facebook
                    <?= Html::submitButton(($model->isNewRecord || $model->facebook_status == 0) ? Yii::t('app', 'verify') : ($model->facebook_status == 1 ? Yii::t('app', 'resend') : Yii::t('app', 'done')), ['class' => ($model->isNewRecord || $model->facebook_status == 0) ? 'btn btn-start' : ($model->facebook_status == 1 ? 'btn btn-middle' : 'btn btn-end'), 'id' => 'facebook-btn']) ?>
                </p>
                <p><i class="fa fa-check"></i> Google +
                    <?= Html::submitButton(($model->isNewRecord || $model->googleplus_status == 0) ? Yii::t('app', 'verify') : ($model->googleplus_status == 1 ? Yii::t('app', 'resend') : Yii::t('app', 'done')), ['class' => ($model->isNewRecord || $model->googleplus_status == 0) ? 'btn btn-start' : ($model->googleplus_status == 1 ? 'btn btn-middle' : 'btn btn-end'), 'id' => 'googleplus-btn']) ?>
                </p>
                <p><i class="fa fa-check"></i> Linked In
                    <?= Html::submitButton(($model->isNewRecord || $model->linkedin_status == 0) ? Yii::t('app', 'verify') : ($model->linkedin_status == 1 ? Yii::t('app', 'resend') : Yii::t('app', 'done')), ['class' => ($model->isNewRecord || $model->linkedin_status == 0) ? 'btn btn-start' : ($model->linkedin_status == 1 ? 'btn btn-middle' : 'btn btn-end'), 'id' => 'linkedin-btn']) ?>
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="physical-verification">
                <p><i class="fa fa-check"></i> Video
                    <?= Html::submitButton(($model->isNewRecord || $model->video_status == 0) ? Yii::t('app', 'verify') : ($model->video_status == 1 ? Yii::t('app', 'resend') : Yii::t('app', 'done')), ['class' => ($model->isNewRecord || $model->video_status == 0) ? 'btn btn-start' : ($model->video_status == 1 ? 'btn btn-middle' : 'btn btn-end'), 'id' => 'video-btn']) ?>
                </p>
                <p><i class="fa fa-check"></i> Portfolio
                    <?= Html::submitButton(($model->isNewRecord || $model->portfolio_status == 0) ? Yii::t('app', 'verify') : ($model->portfolio_status == 1 ? Yii::t('app', 'resend') : Yii::t('app', 'done')), ['class' => ($model->isNewRecord || $model->portfolio_status == 0) ? 'btn btn-start' : ($model->portfolio_status == 1 ? 'btn btn-middle' : 'btn btn-end'), 'id' => 'portfolio-btn']) ?>
                </p>
                <p><i class="fa fa-check"></i> Passport
                    <?= Html::submitButton(($model->isNewRecord || $model->passport_status == 0) ? Yii::t('app', 'verify') : ($model->passport_status == 1 ? Yii::t('app', 'resend') : Yii::t('app', 'done')), ['class' => ($model->isNewRecord || $model->passport_status == 0) ? 'btn btn-start' : ($model->passport_status == 1 ? 'btn btn-middle' : 'btn btn-end'), 'id' => 'passport-btn']) ?>
                </p>
                <p><i class="fa fa-check"></i> Driving License
                    <?= Html::submitButton(($model->isNewRecord || $model->driving_lisence_status == 0) ? Yii::t('app', 'verify') : ($model->driving_lisence_status == 1 ? Yii::t('app', 'resend') : Yii::t('app', 'done')), ['class' => ($model->isNewRecord || $model->driving_lisence_status == 0) ? 'btn btn-start' : ($model->driving_lisence_status == 1 ? 'btn btn-middle' : 'btn btn-end'), 'id' => 'drivinglisence-btn']) ?>
                </p>   
                <br> <br>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
    $("#email-btn").on("click", function () {
        $("#travellersverification-email_code").val(makeid());
        function makeid()
        {
            var text = "";
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

            for (var i = 0; i < 20; i++)
                text += possible.charAt(Math.floor(Math.random() * possible.length));

            return text;
        }
    });
</script>