<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AboutHostsArea */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
            'modelClass' => 'About Hosts Area',
        ]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'About Hosts Areas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
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
        <h1><?php echo Yii::t('app', 'Getting to know Your Area'); ?></h1>

        <?=
        $this->render('_form', [
            'model' => $model,
            'host_id' => $host_id,
        ])
        ?>

    </div>
</section>