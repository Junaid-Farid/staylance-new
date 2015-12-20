<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Travellers */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Travellers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="travellers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'gender',
            'user_name',
            'name',
            'sur_name',
            'address',
            'country',
            'city',
            'postcode',
            'mobile_phone',
            'landline',
            'birthday',
            'skype_id',
            'website',
            'how_find_staylance',
            'account_type',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
