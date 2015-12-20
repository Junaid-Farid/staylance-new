<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HostsSkillDetails */

$this->title = Yii::t('app', 'Create Hosts Skill Details');
?>
<div class="container">
    <div class="hosts-skill-details-create">
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
