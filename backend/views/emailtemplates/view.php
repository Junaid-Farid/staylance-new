<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EmailTemplates */

$this->title = $model->email_key;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Email Templates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section>
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div class="pull-left">
                <h3><?= Html::encode($this->title) ?></h3>
                <small>View Email Template
                </small>
            </div>
            <div class="pull-right">
                <?= Html::a('<span class="btn-label"><i class="fa fa-pencil"></i>
                    </span>' . Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-labeled btn btn-primary']) ?>
                <?=
                Html::a(' <span class="btn-label"><i class="fa fa-trash"></i>
                    </span>' . Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                    'class' => 'btn btn btn-labeled btn-danger',
                    'data' => [
                        'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ])
                ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div role="tabpanel">
                    <!-- Nav tabs-->
                    <ul role="tablist" class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#english" aria-controls="english" role="tab" data-toggle="tab">English</a>
                        </li>
                        <li role="presentation"><a href="#german" aria-controls="german" role="tab" data-toggle="tab">German</a>
                        </li>
                        <li role="presentation"><a href="#spanish" aria-controls="spanish" role="tab" data-toggle="tab">Spanish</a>
                        </li>
                    </ul>
                    <!-- Tab panes-->
                    <div class="tab-content">
                        <div id="english" role="tabpanel" class="tab-pane active">
                            <h1><?php echo $model->title ?></h1>
                            <h3><?php echo $model->subject ?></h3>
                            <p><?php echo $model->content ?></p>
                        </div>
                        <div id="german" role="tabpanel" class="tab-pane">
                            <h1><?php echo $model->title_de ?></h1>
                            <h3><?php echo $model->subject_es ?></h3>
                            <p><?php echo $model->content_de ?></p>
                        </div>
                        <div id="spanish" role="tabpanel" class="tab-pane">
                            <h1><?php echo $model->title_es ?></h1>
                            <h3><?php echo $model->subject_es ?></h3>
                            <p><?php echo $model->content_es ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>