<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HostsFoodDetails */

$this->title = $model->id;
?>
<div class="container">
    <div class="hosts-food-details-view">
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
                    'food_type',
                    'additional_charge',
                    'breakfast_per_day',
                    'lunch_per_day',
                    'dinner_per_day',
                    'breakfast_per_week',
                    'lunch_per_week',
                    'dinner_per_week',
                    'breakfast_per_month',
                    'lunch_per_month',
                    'dinner_per_month',
                    'additional_information',
                    'created_at',
                    'updated_at',
                ],
            ])
            ?>

        </div>
    </div>
</div>
