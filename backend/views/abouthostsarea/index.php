<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'About Hosts Areas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-hosts-area-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create About Hosts Area'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'host_id',
            'doctor',
            'bus_staion',
            'shop',
            // 'bus_top',
            // 'town',
            // 'airport',
            // 'cash_machine',
            // 'train_station',
            // 'what_to_do',
            // 'travel_tips',
            // 'car',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
