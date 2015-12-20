<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Hosts Food Details');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hosts-food-details-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Hosts Food Details'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'host_id',
            'food_type',
            'additional_charge',
            'breakfast_per_day',
            // 'lunch_per_day',
            // 'dinner_per_day',
            // 'breakfast_per_week',
            // 'lunch_per_week',
            // 'dinner_per_week',
            // 'breakfast_per_month',
            // 'lunch_per_month',
            // 'dinner_per_month',
            // 'additional_information',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
