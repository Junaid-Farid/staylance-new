<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hosts';
?>
<div class="container">
    <div class="hosts-index">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Create Hosts', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'user_id',
                'name',
                'profile_name',
                'birthday',
                // 'adress',
                // 'mobile_phone',
                // 'home_phone',
                // 'facebook',
                // 'created_at',
                // 'updated_at',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>

    </div>
</div>
