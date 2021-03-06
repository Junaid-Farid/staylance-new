<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AboutHost */

$this->title = $model->id;
?>
<div class="container">
    <div class="about-host-view">
        <div class="col-md-12">

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
        </div>
        <div class="col-md-12"> 
            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'host_id',
                    'about',
                    'video',
                    'created_at',
                    'updated_at',
                ],
            ])
            ?>

        </div>
    </div>
</div>
