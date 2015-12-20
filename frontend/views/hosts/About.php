<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hosts */

$this->title = Yii::t('app', 'Create Hosts');
?>
<div class="container">
    <div class="hosts-create">
        <?php
        $userId = \Yii::$app->user->identity->id;
        $user = \app\models\Hosts::find()->where(['user_id' => $userId])->one();
        if (count($user) != 1) {
            ?>
            <?php if ($type == 1) { ?>
                <h1><?php echo Yii::t('app', 'Private Home') ?></h1>
                <p><?php echo Yii::t('app', 'How would you describe your house hold') ?></p>
                <?= Html::a('Single', ['hosts/create', 'type' => 1, 'about' => 1], ['class' => 'btn btn-success'])
                ?>
                <?= Html::a('Couple', ['hosts/create', 'type' => 1, 'about' => 2], ['class' => 'btn btn-success']) ?>
                <?= Html::a('Group of Friends', ['hosts/create', 'type' => 1, 'about' => 3], ['class' => 'btn btn-success']) ?>
                <?= Html::a('With Children', ['hosts/create', 'type' => 1, 'about' => 4], ['class' => 'btn btn-success']) ?>
                <?= Html::a('without Childern', ['hosts/create', 'type' => 1, 'about' => 5], ['class' => 'btn btn-success']) ?>

                <?php
            }
            if ($type == 2) {
                ?>
                <h1><?php echo Yii::t('app', 'Organizations') ?></h1>
                <?= Html::a('Community', ['hosts/create', 'type' => 2, 'about' => 1], ['class' => 'btn btn-success']) ?>
                <?= Html::a('NGO', ['hosts/create', 'type' => 2, 'about' => 2], ['class' => 'btn btn-success']) ?>
                <?= Html::a('Ecoproject', ['hosts/create', 'type' => 2, 'about' => 3], ['class' => 'btn btn-success']) ?>
                <?= Html::a('Farm Project', ['hosts/create', 'type' => 2, 'about' => 4], ['class' => 'btn btn-success']) ?>
                <?= Html::a('Other', ['hosts/create', 'type' => 2, 'about' => 5], ['class' => 'btn btn-success']) ?>

                <?php
            }
        } else {
            ?>
            <?php if ($type == 1) { ?>
                <h1>Private Home</h1>
                <p>How would you describe your house hold </p>
                <?= Html::a('Single', ['hosts/update', 'id' => $user->id, 'type' => 1, 'about' => 1], ['class' => 'btn btn-success']) ?>
                <?= Html::a('Couple', ['hosts/update', 'id' => $user->id, 'type' => 1, 'about' => 2], ['class' => 'btn btn-success']) ?>
                <?= Html::a('Group of Friends', ['hosts/update', 'id' => $user->id, 'type' => 1, 'about' => 3], ['class' => 'btn btn-success']) ?>
                <?= Html::a('With Children', ['hosts/update', 'id' => $user->id, 'type' => 1, 'about' => 4], ['class' => 'btn btn-success']) ?>
                <?= Html::a('without Childern', ['hosts/update', 'id' => $user->id, 'type' => 1, 'about' => 5], ['class' => 'btn btn-success']) ?>

                <?php
            }
            if ($type == 2) {
                ?>
                <h1>Organizations</h1>
                <?= Html::a('Community', ['hosts/update', 'id' => $user->id, 'type' => 2, 'about' => 1], ['class' => 'btn btn-success']) ?>
                <?= Html::a('NGO', ['hosts/update', 'id' => $user->id, 'type' => 2, 'about' => 2], ['class' => 'btn btn-success']) ?>
                <?= Html::a('Ecoproject', ['hosts/update', 'id' => $user->id, 'type' => 2, 'about' => 3], ['class' => 'btn btn-success']) ?>
                <?= Html::a('Farm Project', ['hosts/update', 'id' => $user->id, 'type' => 2, 'about' => 4], ['class' => 'btn btn-success']) ?>
                <?= Html::a('Other', ['hosts/create', 'id' => $user->id, 'type' => 2, 'about' => 5], ['class' => 'btn btn-success']) ?>

                <?php
            }
        }
        ?>
    </div>
</div>
