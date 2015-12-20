<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Hosts');
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
            <h1><?php echo Yii::t('app', 'Hosts Registation process') ?></h1>
            <small data-localize="dashboard.WELCOME"></small>
        </div>
        <div class="col-lg-6">
            <div class="col-1-2">
                <div id="demo-basic" class="croppie-container">

                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <?= Html::submitButton(Yii::t('app', 'Select Image from gallery'), ['class' => 'btn btn-primary gallery-btn', 'data-toggle' => 'modal', 'data-target' => '#myModal']) ?>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Images Gallery</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row-masonry row-masonry-md-4 row-masonry-sm-2">
                                    <?php foreach ($newmodel as $Image) { ?>
                                        <div class="col-masonry">
                                            <button class="btn btn-danger gallery-button">Delete</button>
                                            <button class="btn btn-primary gallery-button">Select</button>
                                            <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl() . '/profiles/' . $Image->manupulated_name ?>" alt="" class="img-thumbnail img-responsive gallery-image">
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
                                <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*', 'class' => 'btn btn-primary browseImage'])->label(false) ?>
                                <button class="btn btn-primary" id="UploadedImages">Upload</button>                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <?php ActiveForm::end() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">

            <h1><?php echo Yii::t('app', 'What Type of Host are you ?') ?></h1>

            <p>
                <?= Html::a('Private Home', ['hosts/abouthost', 'type' => 1], ['class' => 'btn btn-success']) ?>
            </p>
            <p>
                <?= Html::a('Organization or group people', ['hosts/abouthost', 'type' => 2], ['class' => 'btn btn-success']) ?>
            </p>
        </div>
    </div>
</section>
<script src="<?php echo $this->theme->baseUrl; ?>/Croppie-master/croppie.js"></script>
<script>
    var basic = $('#demo-basic').croppie({
        viewport: {
            width: 150,
            height: 200
        }
    });
    basic.croppie('bind', {
        url: 'http://localhost/staylancenew/backend/web/themes/angle/Croppie-master/demo/placeholder.png',
        points: [77, 469, 280, 739]
    });
//on button click
    basic.croppie('result', 'canvas');
    $('#myModal').appendTo("body");
<?php if ($formState == 1) { ?>
        $(window).load(function () {
            $('#myModal').modal('show');
        });
<?php } ?>
    $(document).ready(function () {

    });
</script>


