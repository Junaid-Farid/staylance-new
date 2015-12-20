<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AboutHostsArea */

$this->title = Yii::t('app', 'Create About Hosts Area');
?>
<div class="container">
    <div class="about-hosts-area-create">
        <div class="col-md-12">
            <h1><?php echo Yii::t('app', 'Getting to know Your Area'); ?></h1>
        </div>
        <?=
        $this->render('_form', [
            'model' => $model,
            'host_id' => $host_id,
        ])
        ?>

    </div>
</div>
