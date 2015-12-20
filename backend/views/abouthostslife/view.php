<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AboutHostsLife */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'About Hosts Lives'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-hosts-life-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'host_id',
            'life_agenda',
            'best_thing_in_life',
            'music',
            'film',
            'food',
            'book',
            'do_not_like',
            'counteries_travelled',
            'counteries_like_to_travell',
            'favourite_country',
            'why_host',
            'travel_qoute',
            'anything_special',
            'anything_else',
            'created_at',
            'updated_at',
        ],
    ])
    ?>

</div>
