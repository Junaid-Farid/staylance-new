<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HostsProfessionalHelp */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hosts Professional Helps'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hosts-professional-help-view">

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
            'host_id',
            'chef',
            'builder',
            'painter',
            'carpenter',
            'landscraper',
            'plumber',
            'tiler',
            'house_other',
            'caring_children',
            'caring_elderly',
            'caring_other',
            'computer',
            'internet',
            'digial_marketing',
            'computer_other',
            'language',
            'music',
            'learning_other',
            'volunteering',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
