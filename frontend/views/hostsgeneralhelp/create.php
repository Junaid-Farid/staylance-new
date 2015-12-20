<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HostsGeneralHelp */

$this->title = Yii::t('app', 'Create Hosts General Help');
?>
<div class="container">
    <div class="hosts-general-help-create">
        <div class="col-md-12"> 
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <?=
        $this->render('_form', [
            'model' => $model,
            'host_id' => $host_id,
        ])
        ?>

    </div>
</div>
