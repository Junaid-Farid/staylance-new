<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Travellers Verifications');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="travellers-verification-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Travellers Verification'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'traveller_id',
            'email_code:email',
            'email_status:email',
            'mobile_status',
            // 'facebook_status',
            // 'googleplus_status',
            // 'linkedin_status',
            // 'video_status',
            // 'portfolio_status',
            // 'passport_status',
            // 'driving_lisence_status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
