<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CmsPages */

$this->title = Yii::t('app', 'Create Cms Pages');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cms Pages'), 'url' => ['index']];
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
            <?= Html::encode($this->title) ?>
            <small data-localize="dashboard.WELCOME"></small>
        </div>


        <?=
        $this->render('_form', [
            'model' => $model,
        ])
        ?>

    </div>
</section>
