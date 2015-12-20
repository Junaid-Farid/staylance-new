<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AboutHost */
/* @var $form yii\widgets\ActiveForm */
?> 
    <div class="about-host-form"> 
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'host_id')->hiddenInput(['value' => $host_id])->label(false) ?>
        <div class="col-md-6">
            <?= $form->field($model, 'about')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model2, 'videoFile')->fileInput() ?>
        </div>
        <?= $form->field($model, 'video')->hiddenInput()->label(false) ?>
        <div class="col-md-12">
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div> 
<script>
    $(document).ready(function () {
        $("#uploadform-videofile").on('change', function () {
            var fullPath = $("#uploadform-videofile").val();
            if (fullPath) {
                var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                var filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
                $("#abouthost-video").val(filename);
            }
        });
    });
</script>