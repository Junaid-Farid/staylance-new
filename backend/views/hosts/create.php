<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hosts */

$this->title = Yii::t('app', 'Create Hosts');
$this->params['breadcrumbs'][] = ['label' => 'Hosts', 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Account Information');
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
        <h1>Account Information</h1>
        <p>You can add delete edit any of your account information below.</p>
        <?=
        $this->render('_form', [
            'model' => $model,
            'type' => $type,
            'about' => $about,
        ])
        ?>

    </div>
</section>
