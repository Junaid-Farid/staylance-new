<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HostsAvailability */

$this->title = Yii::t('app', 'Create Hosts Availability');
?>
<div class="container">
    <div class="hosts-availability-create">
        <div class="col-md-12">
            <h1><?php echo Yii::t('app', 'What kind of Hosting do you want to offer ?') ?></h1>
            <p><?php echo Yii::t('app', 'You can choose all three') ?></p>
        </div>
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-md-4">
            <?=
            $form->field($model, 'help')->checkbox()
            ?>
            <p><?php echo Yii::t('app', '"That Shed is finally empty ..."') ?></p>        
            <p><?php echo Yii::t('app', '"The garden looks like fantastic we should have got help years ago"') ?></p>
            <p><?php echo Yii::t('app', '"Thats the fruit picking done for another year!"') ?></p>        
        </div>
        <div class="col-md-4">
            <?=
            $form->field($model, 'share')->checkbox()
            ?> 
            <p><?php echo Yii::t('app', '"Pizza made from Scrash! the children just love it!"') ?></p>
            <p><?php echo Yii::t('app', '"What a jam session, I have not played the guitar for a while but it was such fun"') ?></p>
        </div>
        <div class="col-md-4">
            <?=
            $form->field($model, 'pay')->checkbox()
            ?>
            <p><?php echo Yii::t('app', '"I was not going to host, but the room was empty and the money came in handy"') ?></p>
            <p><?php echo Yii::t('app', '"Our tennant left suddenly and we needed to share the rent until the end of term"') ?></p>
        </div>
        <div class="form-group">
            <?= Html::submitButton($model->availabe_dates ? Yii::t('app', 'Update') : Yii::t('app', 'Save'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div> 
        <?php ActiveForm::end(); ?>
    </div>
</div>
