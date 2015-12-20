<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use zxbodya\yii2\tinymce\TinyMce;
use zxbodya\yii2\elfinder\TinyMceElFinder;

/* @var $this yii\web\View */
/* @var $model app\models\CmsPages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cms-pages-form">
    <?php $form = ActiveForm::begin(); ?>
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
                    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]); ?>    
                    <?= $form->field($model, 'subject')->textInput(['maxlength' => 255]); ?>    
                    <?=
                    $form->field($model, 'content')->widget(
                            TinyMce::className(), [
                        'fileManager' => [
                            'class' => TinyMceElFinder::className(),
                            'connectorRoute' => 'el-finder/connector',
                        ],
                            ]
                    )
                    ?>
                </div>
                <div id="german" role="tabpanel" class="tab-pane">
                    <?= $form->field($model, 'title_de')->textInput(['maxlength' => 255]); ?>   
                    <?= $form->field($model, 'subject_de')->textInput(['maxlength' => 255]); ?>    
                    <?=
                    $form->field($model, 'content_de')->widget(
                            TinyMce::className(), [
                        'fileManager' => [
                            'class' => TinyMceElFinder::className(),
                            'connectorRoute' => 'el-finder/connector',
                        ],
                            ]
                    )
                    ?>
                </div>
                <div id="spanish" role="tabpanel" class="tab-pane">
                    <?= $form->field($model, 'title_es')->textInput(['maxlength' => 255]); ?>   
                    <?= $form->field($model, 'subject_es')->textInput(['maxlength' => 255]); ?>    
                    <?=
                    $form->field($model, 'content_es')->widget(
                            TinyMce::className(), [
                        'fileManager' => [
                            'class' => TinyMceElFinder::className(),
                            'connectorRoute' => 'el-finder/connector',
                        ],
                            ]
                    )
                    ?>
                </div>
                <?= $form->field($model, 'email_key')->textInput(['maxlength' => 255]) ?>

                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

            </div>
        </div>
    </div>



    <?php ActiveForm::end(); ?>

</div>
