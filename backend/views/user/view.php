<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section>
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div class="pull-left">
                <h3><?= Html::encode($this->title) ?></h3>
                <small>View User Details
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
            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'gender',
                    'firstname',
                    'lastname',
                    'username',
                    //     'auth_key',
                    //     'password_hash',
                    //     'password_reset_token',
                    'email:email',
                    'birthday',
                    'status',
                    'user_role',
                    'created_at',
                    'updated_at',
                ],
            ])
            ?>

        </div>
    </div>
</section>
