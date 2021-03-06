<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Hosts */

$this->title = $model->name;
?>
<div class="container">
    <div class="hosts-view">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?=
            Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
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
                'user_id',
                'name',
                'profile_name',
                'birthday',
                'adress',
                'mobile_phone',
                'home_phone',
                'facebook',
                'created_at',
                'updated_at',
            ],
        ])
        ?>

    </div>
</div>
