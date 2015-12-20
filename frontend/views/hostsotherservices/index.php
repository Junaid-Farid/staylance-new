<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Hosts Other Services');
?>
<div class="container">
    <div class="hosts-other-services-index">
        <div class="col-md-12">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a(Yii::t('app', 'Create Hosts Other Services'), ['create'], ['class' => 'btn btn-success']) ?>
            </p>
        </div>
        <div class="col-md-12">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'id',
                    'host_id',
                    'wifi_included_with_stay',
                    'wifi_possible_for_extra_charges',
                    'wifi_any_extra_charges',
                    // 'laundry_included_with_stay',
                    // 'laundry_possible_for_extra_charges',
                    // 'laundry_any_extra_charges',
                    // 'bicycle_included_with_stay',
                    // 'bicycle_possible_for_extra_charges',
                    // 'bicycle_any_extra_charges',
                    // 'collection_included_with_stay',
                    // 'collection_possible_for_extra_charges',
                    // 'collection_any_extra_charges',
                    // 'car_included_with_stay',
                    // 'car_possible_for_extra_charges',
                    // 'car_any_extra_charges',
                    // 'anything_else_included_with_stay',
                    // 'anything_else_possible_for_extra_charges',
                    // 'anything_else_any_extra_charges',
                    // 'created_at',
                    // 'updated_at',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>

        </div>
    </div>
</div>
