<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
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
                <a href="<?php echo Yii::$app->getUrlManager()->createUrl('user/create') ?>" class="btn btn-labeled btn-success">
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
                'summary' => '',
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'gender',
                    'firstname',
                    'lastname',
                    'username',
                    [
                        'attribute' => 'status',
                        'value' => function($model) {
                            return $model->getStatus();
                        }
                    ],
                    [
                        'attribute' => 'Take Action',
                        'format' => 'html',
                        'value' => function($model) {
                            if ($model->status == 12) {
                                return Html::a(Yii::t('app', 'Approve'), ['approve', 'id' => $model->id], ['class' => 'btn btn-success']);
                            } elseif ($model->status == 11) {
                                return Html::a(Yii::t('app', 'Unapprove'), ['unapprove', 'id' => $model->id], ['class' => 'btn btn-danger']);
                            } else {
                                return Html::a(Yii::t('app', 'Approve'), ['approve', 'id' => $model->id], ['class' => 'btn btn-success']) . '  ' . Html::a(Yii::t('app', 'Unapprove'), ['unapprove', 'id' => $model->id], ['class' => 'btn btn-danger']);
                            }
                        }
                            ],
                            'user_role',
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]);
                    ?>

            <!-- END dashboard sidebar-->
        </div>
    </div>
</section>
