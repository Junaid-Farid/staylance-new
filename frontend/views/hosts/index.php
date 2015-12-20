<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Hosts');
?>
<div class="container">
    <div class="hosts-index">

        <h1><?php echo Yii::t('app', 'What Type of are you ?') ?></h1>

        <p>
            <?= Html::a('Private Home', ['hosts/abouthost', 'type' => 1], ['class' => 'btn btn-success']) ?>
        </p>
        <p>
            <?= Html::a('Organization or group people', ['hosts/abouthost', 'type' => 2], ['class' => 'btn btn-success']) ?>
        </p>

    </div>
</div>
