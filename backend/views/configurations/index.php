<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConfigurationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Configurations');
$this->params['breadcrumbs'][] = $this->title;
?>
<section>
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div class="pull-left">
                <h3><?= Html::encode($this->title) ?></h3>
                <small>system configurations will effect system wide</small>
            </div>
            <div class="pull-right">
                <a href="<?php echo Yii::$app->getUrlManager()->createUrl('configurations/create') ?>" class="btn btn-labeled btn-success">
                    <span class="btn-label"><i class="fa fa-plus"></i>
                    </span>Add
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel panel-default">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'summary' => "",
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'key',
                    'value',
                    ['class' => 'yii\grid\ActionColumn','template' => '{update}',],
                ],
            ]);
            ?>
        </div>
    </div>
    <div class="clearfix"></div>
</section>