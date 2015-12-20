<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subscribers */

$this->title = Yii::t('app', 'Create Subscribers');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subscribers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscribers-create">

    <div class="modal fade" id="member_modal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">                 
        <div class="container wrap_container"> 
            <div class="welcome_wrap">

                <div class="col-sm-12 welcome-container padding-top-4p"> 

                    <div class="col-md-9">
                        <h1 class="popover-heading">Welcome to Staylance!</h1>
                        <p class="para">Thank you for your interest! We've got our magic computer elves working overtime to get the site ready for you! We invite you to enter your email address below in order to receive an invitation to create a profile and become part of the StayLance community when the site launches!</p>
                    </div>
                    <div class="col-md-3 padding-top-8p">
                        <img src="<?= Yii::$app->request->baseUrl ?>/images/welcom-pop-van_03.png" class="img-responsive" alt="welcome-van-img">
                    </div> 
                    <hr>
                    <div class="col-md-12 padding-top-1p">
                        <hr class="welcome-hr">
                        <div class="col-md-6  padding-top-2-prcnt padding-botton-2-6p">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="row">
                                        <h2 class="welcom-h2">Hosts!</h2>
                                        <p class="para padding-bottom-7-prcnt">Staylance who host will have the opportunity to invite travelers to stay in their homes and offer either their professional skills, artistic talents, basic labour or even just good ole fashioned currency in exchange for more personal and unique form of accommodation.</p>
                                        <div class="row"> 
                                            <?php $formHost = ActiveForm::begin(); ?>
                                            <?= $formHost->field($model, 'type')->hiddenInput(['value' => "host_subscriber"])->label(false) ?>
                                            <div class="col-md-8">

                                                <?= $formHost->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Email', 'class' => 'form-control welcome-input'])->label(false) ?>

                                            </div>
                                            <div class="col-md-4"> 
                                                <input type="submit" name="submit"  value="submit"  id="" class="form-control welcome-submit" />
                                            </div>
                                            <?php ActiveForm::end(); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 padding-top-2-prcnt">
                            <div class="row">
                                <div class="col-md-10 pull-right">
                                    <div class="row">
                                        <h2 class="welcom-h2">Travellers!</h2>

                                        <p class="para padding-bottom-7-prcnt">Staylancers travelling the world will have the opportunity to offer their professional skills, artistic gifts, basic labour or even just pay for accommodation with a host who can offera more unique, interesting, fun and authentic experience to people looking to get more out their travels than the ordinary tourist.</p>

                                        <?php $form = ActiveForm::begin(); ?>

                                        <?= $form->field($model, 'type')->hiddenInput(['value' => "traveller_subscriber"])->label(false) ?>

                                        <div class="row"> 
                                            <div class="col-md-8">
                                                <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Email', 'class' => 'form-control welcome-input'])->label(false) ?>
                                            </div>
                                            <div class="col-md-4"> 
                                                <input type="submit" name="submit"  value="submit"  id="" class="form-control welcome-submit" />
                                            </div>
                                            <?php ActiveForm::end(); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-12 subscriber-message"><?php echo $message; ?></div>
                        <div class="col-md-12 padding-top-5 padding-left-6pt-2"> 
                            <img src="<?= Yii::$app->request->baseUrl ?>/images/welcom-staylance-logo_10.png" alt="welcome-log" class="img-responsive center-image" />
                        </div>
                        <div class="col-md-10 padding-top-5 padding-left-6pt-2"> 
                            <div class="col-md-8 pull-right">
                                <div class="row">
                                    <h4 class="welcome-h4">Connect with the staylance community now!!</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10  center-block  padding-top-5 padding-left-6pt-2 center-image"> 
                            <div class="row">
                                <div class="col-md-8 welcom-icon pull-right">
                                    <div class="row">
                                        <div class="col-md-10 pull-right">
                                            <div class="row">
                                                <img src="<?= Yii::$app->request->baseUrl ?>/images/welcome-fb-icon_03.png" alt="welcome-log" class="img-responsive pull-left" />
                                                <img src="<?= Yii::$app->request->baseUrl ?>/images/welcome-tw-icon_03.png" alt="welcome-log" class="img-responsive pull-left" />
                                                <img src="<?= Yii::$app->request->baseUrl ?>/images/welcome-gp-icon_03.png" alt="welcome-log" class="img-responsive pull-left" />
                                                <img src="<?= Yii::$app->request->baseUrl ?>/images/welcome-insta-icon_03.png" alt="welcome-log" class="img-responsive pull-left" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <h3 class="welcome-h3">Contact us</h3>
                        </div>
                    </div> 
                </div>
            </div>
        </div>   
    </div>  

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $message; ?>
    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
