<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use app\models\HostsAverageWeekdays;

/* @var $this yii\web\View */
/* @var $model app\models\HostsLanguages */

$this->title = Yii::t('app', 'Create Host Languages');
?>
<div class="container">
    <div class="host-languages-create">
        <div class="col-md-12">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <?=
        $this->render('_form', [
            'model' => $model,
            'host_id' => $host_id,
            'type' => 'Mother Tongue',
        ])
        ?>
        <?php if ($dataProvidermothertounge->getCount() > 0) { ?>
            <div class="col-md-12">
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvidermothertounge,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'id',
                        'language',
                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]);
                ?>
            <?php } ?> 
        </div>
        <?=
        $this->render('_form', [
            'model' => $model,
            'host_id' => $host_id,
            'type' => 'Fluent',
        ])
        ?>
        <?php if ($dataProviderFluent->getCount() > 0) { ?>
            <div class="col-md-12">
                <?=
                GridView::widget([
                    'dataProvider' => $dataProviderFluent,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'id',
                        'language',
                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]);
                ?>
            <?php } ?>
        </div>
        <?=
        $this->render('_form', [
            'model' => $model,
            'host_id' => $host_id,
            'type' => 'Learning',
        ])
        ?>

        <?php if ($dataProviderLearnig->getCount() > 0) { ?>
            <div class="col-md-12">
                <?=
                GridView::widget([
                    'dataProvider' => $dataProviderLearnig,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'id',
                        'language',
                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]);
                ?>
            </div>
        <?php } ?>
        <?php
        $newmodel = HostsAverageWeekdays::find()->where(['host_id' => $host_id])->one();
        ?>
        <div class="col-md-12">
            <?php
            if (count($newmodel) != 1) {
                ?>
                <a href="<?php echo Url::to(['hostsaverageweekdays/create?host_id=' . $host_id]); ?>" class="btn btn-primary">Next</a>
            <?php } else { ?>
                <a href="<?php echo Url::to(['hostsaverageweekdays/update?id=' . $newmodel->id]); ?>" class="btn btn-primary">Next</a>
            <?php }
            ?>
        </div>
    </div>
</div>
