<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AvailableDateRanges */

$this->title = 'Update Available Date Ranges: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Available Date Ranges', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="available-date-ranges-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
