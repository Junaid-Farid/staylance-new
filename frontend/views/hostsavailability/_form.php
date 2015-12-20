<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HostsAvailability */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$options = array();
for ($i = 1; $i < 15; $i++) {
    $options[$i] = $i;
}
?>
<div class="hosts-availability-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'host_id')->hiddenInput(['value' => $host_id])->label(false) ?>
    <div class="col-md-6">
        <p>Up to how many Staylancers can you host?</p>

        <?= $form->field($model, 'number_of_staylancers')->dropDownList($options)->label(false) ?>
    </div>
    <div class="col-md-6">
        <p>Is there any of the following you can not host?</p>

        <?= $form->field($model, 'can_not_host')->dropDownList(array('1' => 'Couples', '2' => 'Childern', '3' => 'Other', '4' => 'Families'))->label(false) ?>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
