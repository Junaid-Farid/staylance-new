<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use app\models\HostsAverageWeekdays;

/* @var $this yii\web\View */
/* @var $model app\models\HostsLanguages */

$this->title = Yii::t('app', 'Create Host Languages');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Host Languages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section>
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <!-- START Language list-->
            <div class="pull-right">
                <div class="btn-group">
                    <button type="button" data-toggle="dropdown" class="btn btn-default">English</button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right animated fadeInUpShort">
                        <li><a href="#" data-set-lang="en">English</a>
                        </li>
                        <li><a href="#" data-set-lang="es">Spanish</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Language list    -->
            <h1><?php echo Yii::t('app', 'Hosts Registation process') ?></h1>
            <small data-localize="dashboard.WELCOME"></small>
        </div>
        <h1><?= Html::encode($this->title) ?></h1>

        <?=
        $this->render('_form', [
            'model' => $model,
            'host_id' => $host_id,
            'type' => 'Mother Tongue',
        ])
        ?>
        <?php if ($dataProvidermothertounge->getCount() > 0) { ?>
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
        <?=
        $this->render('_form', [
            'model' => $model,
            'host_id' => $host_id,
            'type' => 'Fluent',
        ])
        ?>

        <?php if ($dataProviderFluent->getCount() > 0) { ?>
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
        <?=
        $this->render('_form', [
            'model' => $model,
            'host_id' => $host_id,
            'type' => 'Learning',
        ])
        ?>

        <?php if ($dataProviderLearnig->getCount() > 0) { ?>
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
        <?php } ?>
        <?php
        $newmodel = HostsAverageWeekdays::find()->where(['host_id' => $host_id])->one();
        if (count($newmodel) != 1) {
            ?>
            <a href="<?php echo Url::to(['hostsaverageweekdays/create?host_id=' . $host_id]); ?>" class="btn btn-primary">Next</a>
        <?php } else { ?>
            <a href="<?php echo Url::to(['hostsaverageweekdays/update?id=' . $newmodel->id]); ?>" class="btn btn-primary">Next</a>
        <?php }
        ?>
    </div>
</section>
