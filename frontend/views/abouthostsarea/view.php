<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AboutHostsArea */

$this->title = $model->id;
?>
<div class="container">
    <div class="about-hosts-area-view"> 
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
                    'doctor',
                    'bus_staion',
                    'shop',
                    'bus_top',
                    'town',
                    'airport',
                    'cash_machine',
                    'train_station',
                    'what_to_do',
                    'travel_tips',
                    'car',
                    'created_at',
                    'updated_at',
                ],
            ])
            ?>

        </div>
    </div>
</div>
