<?php

use yii\helpers\Html;
use app\models\HostsGeneralHelp;
use app\models\HostsProfessionalHelp;
use app\models\HostsArtisticHelp;

/* @var $this yii\web\View */
/* @var $model app\models\AboutHostsLife */

$this->title = Yii::t('app', 'Create About Hosts Life');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'About Hosts Lives'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-hosts-life-create">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php
    $newmodel = HostsGeneralHelp::find()->where(['host_id' => $host_id])->one();
    if (count($newmodel) != 1) {
        ?>
        <?= Html::a('General OR Professional Help', ['hostsgeneralhelp/create', 'host_id' => $host_id], ['class' => 'btn btn-success']) ?>
    <?php } else {
        ?>
        <?= Html::a('General OR Professional Help', ['hostsgeneralhelp/update', 'id' => $newmodel->id], ['class' => 'btn btn-success']) ?>
    <?php }
    ?>
    <?php
    $newmodel1 = HostsProfessionalHelp::find()->where(['host_id' => $host_id])->one();
    if (count($newmodel1) != 1) {
        ?>
        <?= Html::a('Only Professional Help', ['hostsprofessionalhelp/create', 'host_id' => $host_id], ['class' => 'btn btn-success']) ?>
    <?php } else {
        ?>
        <?= Html::a('Only Professional Help', ['hostsprofessionalhelp/update', 'id' => $newmodel1->id], ['class' => 'btn btn-success']) ?>
    <?php }
    ?>

    <?php
    $newmodel2 = HostsArtisticHelp::find()->where(['host_id' => $host_id])->one();
    if (count($newmodel2) != 1) {
        ?>
        <?= Html::a('Artistic Help', ['hostsartistichelp/create', 'host_id' => $host_id], ['class' => 'btn btn-success']) ?>
    <?php } else {
        ?>
        <?= Html::a('Artistic Help', ['hostsartistichelp/update', 'id' => $newmodel1->id], ['class' => 'btn btn-success']) ?>
    <?php }
    ?>
    <?= Html::a('Any Help Welcome', ['help/create', 'host_id' => $host_id], ['class' => 'btn btn-success']) ?>

</div>
