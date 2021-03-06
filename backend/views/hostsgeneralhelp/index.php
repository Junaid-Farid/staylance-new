<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Hosts General Helps');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hosts-general-help-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Hosts General Help'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'host_id',
            'gardening',
            'farming',
            'housework',
            // 'maintenance',
            // 'other_housework',
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
