<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hosts Availabilities';
?>
<div class="container">
    <div class="hosts-availability-index">
        <div class="col-md-12">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a('Create Hosts Availability', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'id',
                    'host_id',
                    'number_of_staylancers',
                    'can_not_host',
                    'availabe_dates',
                    // 'help',
                    // 'created_at',
                    // 'updated_at',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>

        </div>
    </div>
</div>
