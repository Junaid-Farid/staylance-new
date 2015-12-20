<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

frontend\assets\AppAsset::register($this);
/* @var $this yii\web\View */
/* @var $model app\models\HostsAvailability */

$this->title = Yii::t('app', 'I can host');
?>
<div class="container">
    <div class="hosts-availability-create">
        <div class="col-md-12">
            <h1><?php echo $this->title; ?></h1>
        </div>
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-md-6">
            <?=
            $form->field($model, 'availabe_dates')->radioList(array('1' => Yii::t('app', 'Anytime'), '2' => Yii::t('app', 'Choose Months year wise'), '3' => Yii::t('app', 'Choose date Range')), ['itemOptions' => ['class' => 'insides']])
            ?> 
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <?= Html::submitButton($model->availabe_dates ? Yii::t('app', 'Update') : Yii::t('app', 'Save'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
<script>
    function callme() {
        //console.log(this.val());
    }
    $(document).ready(function () {
        $('.insides').change(function () {
            var value = $('input:radio[name="HostsAvailability[availabe_dates]"]:checked').val();
            if (value == 2) {

            }
            else if (value == 3) {

            }
        });
    });
</script>