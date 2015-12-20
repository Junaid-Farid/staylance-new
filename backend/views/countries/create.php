<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\countries */

$this->title = Yii::t('app', 'Create Countries');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Countries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section>
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div class="pull-left">
                <h3><?= Html::encode($this->title) ?></h3>
                <small>Manage Users</small>
            </div>
            <div class="pull-right">
                <a href="<?php echo Yii::$app->getUrlManager()->createUrl('countries/index') ?>" class="btn btn-labeled btn-warning">
                    <span class="btn-label"><i class="fa fa-warning"></i>
                    </span>Back
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel panel-default">

            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>

        </div>
    </div>
</section>
