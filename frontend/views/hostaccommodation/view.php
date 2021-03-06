<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HostsAccommodation */

$this->title = $model->id;
?>
<div class="container">
    <div class="hosts-accommodation-view">
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
                    'number_of_places',
                    'type',
                    'bedrooms',
                    'bedroom_type',
                    'beds',
                    'bathroom',
                    'bathroom_facilities',
                    'created_at',
                    'updated_at',
                ],
            ])
            ?>

        </div>
    </div>
</div>
