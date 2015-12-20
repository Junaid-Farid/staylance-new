<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hosts */

$this->title = 'Update Hosts: ' . ' ' . $model->name;
?> 
<div class="hosts-update">
    <div class="col-md-12"> 
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?=
    $this->render('_form', [
        'model' => $model,
        'type' => $type,
        'about' => $about,
    ])
    ?> 
</div> 
