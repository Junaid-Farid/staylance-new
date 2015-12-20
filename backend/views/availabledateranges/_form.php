<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\AvailableDateRanges */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="available-date-ranges-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hosts_availability_id')->hiddenInput(['value' => 3])->label(false) ?>
    <div class="col-md-3">
        <?=
        $form->field($model, 'start_date')->widget(\yii\jui\DatePicker::classname(), [
                //'language' => 'ru',
                //'dateFormat' => 'yyyy-MM-dd',
        ])
        ?>
    </div>
    <div class="col-md-3">
        <?=
        $form->field($model, 'end_date')->widget(\yii\jui\DatePicker::classname(), [
                //'language' => 'ru',
                //'dateFormat' => 'yyyy-MM-dd',
        ])
        ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '+' : '+', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'start_date',
            'end_date',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
