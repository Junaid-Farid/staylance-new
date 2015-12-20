<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TravellerPhoto */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .cropit-image-preview {
        background-color: #fff;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 100%;
        height: 250px;
        cursor: move;
        text-align: center;
    }

    .cropit-image-background {
        opacity: .2;
        cursor: auto;
    }

    .image-size-label {
        margin-top: 10px;
    }

    input {
        display: block;
    }

    .export {
        margin-top: 10px;
    }
    input.cropit-image-input {
        display: none;
    }
</style>
<div class="row">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <?= $form->field($model, 'traveller_id')->hiddenInput(['value' => $traveller_id])->label(false) ?>
    <div class="col-md-12">
        <div class="col-md-4">
            <div class="btn select-image-btn">
                <span class="icon icon-image"></span>
                Upload
            </div>
            <div class="image-editor">
                <?= $form->field($uploadModel, 'imageFiles')->fileInput(['multiple' => false, 'accept' => 'image/*', 'class' => 'cropit-image-input'])->label(false) ?>
                <?= $form->field($uploadModel, 'uploadFiles')->hiddenInput(['cropit-image-input-text'])->label(false) ?>
                <div class="cropit-image-preview"><h4 id="profile-message">Add Profile Photo Here</h4></div>
                <br>
                <input type="range" class="cropit-image-zoom-input">
                <div class="image-size-label align-center">
                    resize
                </div>
                <!--                <button class="export">Export</button>-->
            </div>
        </div>
        <div class="col-md-4">
            <div class="box-view">
                <div class="align-center">
                    <p>Add a caption here to give some personality to your photo</p>
                    <p>I Like</p>
                </div>
                <span class="count-box">1.</span>
                <?= $form->field($model, 'text1')->textInput(['maxlength' => true])->label(false) ?>
                <span class="count-box">2.</span>
                <?= $form->field($model, 'text2')->textInput(['maxlength' => true])->label(false) ?>
                <span class="count-box">3.</span>
                <?= $form->field($model, 'text3')->textInput(['maxlength' => true])->label(false) ?>
            </div>
        </div>
        <div class="col-md-4 align-center">
            <h4 id="preview">Preview</h4>
            <div class="my-image-preview box-view2"></div>
            <div class="text-value">
                <p>"Names" likes <?php $model->text1 ? print('<b id="text1">"1.' . $model->text1 . '"</b>,') : print('<b id="text1"></b>'); ?> <?php $model->text2 ? print('<b id="text2">"2.' . $model->text2 . '"</b>,') : print('<b id="text2"></b>'); ?> <?php $model->text3 ? print('<b id="text3">"3.' . $model->text3 . '"</b>') : print('<b id="text3"></b>'); ?></p>
            </div>
        </div>
    </div>
</div>