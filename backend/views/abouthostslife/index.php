<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'About Hosts Lives');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-hosts-life-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create About Hosts Life'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'host_id',
            'life_agenda',
            'best_thing_in_life',
            'music',
            //'film',
            // 'food',
            // 'book',
            // 'do_not_like',
            // 'counteries_travelled',
            // 'counteries_like_to_travell',
            // 'favourite_country',
            // 'why_host',
            // 'travel_qoute',
            // 'anything_special',
            // 'anything_else',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
