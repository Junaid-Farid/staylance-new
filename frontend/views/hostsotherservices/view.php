<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HostsOtherServices */

$this->title = $model->id;
?>
<div class="container">
    <div class="hosts-other-services-view">
        <div class="col-md-12">
            <h1><?= Html::encode($this->title) ?></h1> 
            <p>
                <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?=
                Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ])
                ?>
            </p>
        </div>
        <div class="col-md-12">
            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'host_id',
                    'wifi_included_with_stay',
                    'wifi_possible_for_extra_charges',
                    'wifi_any_extra_charges',
                    'laundry_included_with_stay',
                    'laundry_possible_for_extra_charges',
                    'laundry_any_extra_charges',
                    'bicycle_included_with_stay',
                    'bicycle_possible_for_extra_charges',
                    'bicycle_any_extra_charges',
                    'collection_included_with_stay',
                    'collection_possible_for_extra_charges',
                    'collection_any_extra_charges',
                    'car_included_with_stay',
                    'car_possible_for_extra_charges',
                    'car_any_extra_charges',
                    'anything_else_included_with_stay',
                    'anything_else_possible_for_extra_charges',
                    'anything_else_any_extra_charges',
                    'created_at',
                    'updated_at',
                ],
            ])
            ?>

        </div>
    </div>
</div>
