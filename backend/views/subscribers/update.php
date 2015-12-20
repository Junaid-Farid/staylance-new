<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Subscribers */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
            'modelClass' => 'Subscribers',
        ]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subscribers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<section>
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div class="pull-left">
                <h3><?= Html::encode($this->title) ?></h3>
            </div>
            <div class="pull-right">
                <a href="<?php echo Yii::$app->getUrlManager()->createUrl('subscribers/index') ?>" class="btn btn-labeled btn-warning">
                    <span class="btn-label"><i class="fa fa-warning"></i>
                    </span>Back
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
        <?=
        $this->render('_form', [
            'model' => $model,
        ])
        ?>
    </div>
</section>
