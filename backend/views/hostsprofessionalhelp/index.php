<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Hosts Professional Helps');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hosts-professional-help-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Hosts Professional Help'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'host_id',
            'chef',
            'builder',
            'painter',
            // 'carpenter',
            // 'landscraper',
            // 'plumber',
            // 'tiler',
            // 'house_other',
            // 'caring_children',
            // 'caring_elderly',
            // 'caring_other',
            // 'computer',
            // 'internet',
            // 'digial_marketing',
            // 'computer_other',
            // 'language',
            // 'music',
            // 'learning_other',
            // 'volunteering',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
