<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'About Hosts';
?>
<div class="container">
    <div class="about-host-index">
        <div class="col-md-12">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a('Create About Host', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
        </div>
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'host_id',
                'about',
                'video',
                'created_at',
                // 'updated_at',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>

    </div>
</div>
