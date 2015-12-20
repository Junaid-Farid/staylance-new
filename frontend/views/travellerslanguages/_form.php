<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TravellersLanguages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="travellers-languages-form">
    <br>
    <p>Which Languages do you speak(you can enter as many as you like)?</p>
    <br><br>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'traveller_id')->hiddenInput(['value' => $traveller_id])->label(false) ?>
    <div class="row">
        <div class="col-md-3">
            <b>Mother Tongue</b>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'mother_language')->dropDownList($Languages, ['class' => 'form-control select-multiple-field js-example-basic-multiple', 'multiple' => 'multiple'])->label(false) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <b>Fluent</b>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'fluent_language')->dropDownList($Languages, ['class' => 'form-control select-multiple-field js-example-basic-multiple', 'multiple' => 'multiple'])->label(false) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <b>Learning</b>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'learning_language')->dropDownList($Languages, ['class' => 'form-control select-multiple-field js-example-basic-multiple', 'multiple' => 'multiple'])->label(false) ?>
        </div>
    </div>

</div>
<script>
    var Languages = <?php echo json_encode($Languages); ?>;
    $(".js-example-basic-multiple").select2();
</script>