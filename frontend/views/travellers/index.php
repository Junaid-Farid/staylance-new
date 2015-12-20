<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Travellers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="travellers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Travellers'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'gender',
            'user_name',
            'name',
            // 'sur_name',
            // 'adress',
            // 'country',
            // 'city',
            // 'postcode',
            // 'mobile_phone',
            // 'landline',
            // 'birthday',
            // 'skype_id',
            // 'website',
            // 'how_find_staylance',
            // 'account_type',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
