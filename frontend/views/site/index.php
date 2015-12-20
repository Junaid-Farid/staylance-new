
<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Staylance';
?>
<!-- Landing page for Subscribers Start Here  -->
<div class="modal fade" id="member_modal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">                 
    <div class="container wrap_container"> 
        <div class="welcome_wrap"> 
            <div class="col-sm-12 welcome-container padding-top-4p">   
                <div class="col-md-9">
                    <h1 class="popover-heading">Welcome to Staylance!</h1>
                    <p class="para">Thank you for your interest. We´ve got our magic computer elves working overtime to get the site ready for you! We invite you to enter your email address below to receive a special offer for our original members. Then, you can create a profile and become part of the Staylance community as soon as the site launches.
                    </p>
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
                                    <h2 class="welcom-h2">Hosts</h2>
                                    <p class="para">Staylancers who host! You will have the opportunity to invite travelers from all over the world to stay in your home. People like you, who can offer either their professional skills, artistic talents, basic labour or even just good old fashioned currency in exchange for a more personal and unique form of accommodation.
                                    </p>
                                    <div class="row"> 
                                        <?php $formHost = ActiveForm::begin(); ?>
                                        <?= $formHost->field($model, 'type')->hiddenInput(['value' => "host_subscriber"])->label(false) ?>
                                        <div class="col-md-8">

                                            <?= $formHost->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Email', 'class' => 'form-control welcome-input'])->label(false) ?>

                                        </div>
                                        <div class="col-md-4"> 
                                            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'submit') : Yii::t('app', 'submit'), ['class' => $model->isNewRecord ? 'form-control welcome-submit' : 'form-control welcome-submit']) ?>
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
                                    <h2 class="welcom-h2">travelers</h2>

                                    <p class="para padding-bottom-7-prcnt">Staylancers travelling the world! You will have the opportunity to offer your skills, artistic gifts, basic labour or even just payment for a friendly stay with a local Host. In exchange, you will get a more unique, interesting, fun and authentic experience during your travels than the ordinary tourist.</p>

                                    <?php $form = ActiveForm::begin(); ?>

                                    <?= $form->field($model, 'type')->hiddenInput(['value' => "traveller_subscriber"])->label(false) ?>

                                    <div class="row" style="margin-top: 17px;"> 
                                        <div class="col-md-8">
                                            <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Email', 'class' => 'form-control welcome-input'])->label(false) ?>
                                        </div>
                                        <div class="col-md-4"> 
                                            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'submit') : Yii::t('app', 'submit'), ['class' => $model->isNewRecord ? 'form-control welcome-submit' : 'form-control welcome-submit']) ?>
                                        </div>
                                        <?php ActiveForm::end(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-12 welcome-h4"><?php echo $message; ?></div>
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
                                            <a href="https://www.facebook.com/StayLance/" target="_blank"><img src="<?= Yii::$app->request->baseUrl ?>/images/welcome-fb-icon_03.png" alt="welcome-log" class="img-responsive pull-left" /></a>
                                            <a href="https://twitter.com/Staylance" target="_blank"><img src="<?= Yii::$app->request->baseUrl ?>/images/welcome-tw-icon_03.png" alt="welcome-log" class="img-responsive pull-left" /></a>
                                            <a href="https://plus.google.com/u/1/100071967046689427894/posts" target="_blank"><img src="<?= Yii::$app->request->baseUrl ?>/images/welcome-gp-icon_03.png" alt="welcome-log" class="img-responsive pull-left" /></a>
                                            <a href="https://www.instagram.com/staylance/" target="_blank"><img src="<?= Yii::$app->request->baseUrl ?>/images/welcome-insta-icon_03.png" alt="welcome-log" class="img-responsive pull-left" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <h3 class="welcome-h3"></h3>
                    </div>
                </div> 
            </div>
        </div>
    </div>   
</div>  
<!-- Landing page for Subscribers End Here  -->

<section id="main-slider" class="no-margin">
    <div class="carousel slide wet-asphalt"> 
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(images/slider-bg.png);"> 
                <div class="col-md-1 pull-right social-icons">
                    <div class="row">
                        <div class="pull-right">  
                            <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/images/fb-transparent-icon.png" class="img-responsive " alt="staylance-fb-link"></a>
                            <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/images/tw-transparent-icon.png" class="img-responsive " alt="staylance-tw-link"></a>
                            <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/images/gp-transparent-icon.png" class="img-responsive " alt="staylance-gp-link"></a>
                            <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/images/insta-transparent-icon.png" class="img-responsive " alt="staylance-insta-link"></a>
                            <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/images/mail-transparent-icon.png" class="img-responsive " alt="staylance-mail-link"></a>
                        </div> 
                    </div> 
                </div> 
            </div><!--/.item--> 
        </div><!--/.carousel-inner-->
    </div><!--/.carousel--> 
</section><!--/#main-slider-->
<section id="services" class="emerald strike">  
    <div class="container ">  
        <div class="col-md-12"> 
            <div class="row strike-text text-center">
                <p><span>Share your </span> CULTURE - HOME - WAY OF LIFE</p> 
            </div>
        </div>
    </div>  
</section><!--/#services--> 
<section class="white-color-bg">  
    <div class="container">  
        <div class="col-md-12"> 
            <div class="row text-center">
                <p>Volunteering and cultural exchange around the world. Integrate and help local communities in over 130 countries.</p>
                <h2 class="meet-our-host">Meet Our hosts</h2>
            </div>
        </div>
    </div>  
</section> 
<div class="container text-center" > 
    <div class="container">

    </div>
</div>

<section id="our-hosts">
    <div class="container">
        <div class="col-sm-9 col-xs-12 alaska">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Alaska</h3>
                    <p>stay with the Roantree family</p>
                </div>
                <div class="col-sm-6">
                    <div class="row pull-right">  
                        <a href="#" class="help">Help</a><a href="#" class="share">Share</a><a href="#" class="pay">Pay</a>
                    </div>              
                </div> 
                <p class="bottom-p">Share playing music and help in the garden</p>
            </div>
        </div>
        <div class="col-sm-3 col-xs-12 room">
            <div class="row">
                <div class="col-xs-7"> 
                    <h3 class="left-h3">Rome</h3>
                    <p class="left-p">stay with andrea</p> 
                </div>
                <div class="col-xs-5">
                    <div class="row pull-right">
                        <a href="#" class="pay">Pay</a>
                    </div>
                </div>
            </div> 
        </div> 
        <div class="col-sm-3 col-xs-12 men-sitting">
            <div class="row">
                <div class="col-xs-6"> 
                    <h3 class="left-h3">Berline</h3> 
                    <p class="left-p">stay with <br/>Stefan</p>
                </div>
                <div class="col-xs-6">
                    <div class="row pull-right">
                        <a href="#" class="share">Share</a>
                    </div>
                </div>
            </div> 
        </div> 
        <div class="col-sm-6 col-xs-12 group-friends">
            <div class="row">
                <div class="col-xs-6">
                    <h3>california </h3>
                    <p>stay with David & Sue</p>
                </div> 
                <div class="col-xs-6">
                    <div class="row pull-right">
                        <a href="#" class="share">Share</a>
                    </div>
                </div>
                <p class="bottom-p">Share Yoga & Meditation</p>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12 palm-trees">
            <div class="row">
                <div class="col-md-6">
                    <h3>Spain </h3>
                    <p>stay with Carlos & Maria</p>
                </div> 
                <div class="col-md-6">
                    <div class="row pull-right">
                        <a href="#" class="help">Help</a><a href="#" class="share">Share</a><a href="#" class="pay">Pay</a>
                    </div>
                </div>
                <p class="bottom-p">Help with the Children and Housework</p>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12 paraguay">
            <div class="row">
                <div class="col-md-6">
                    <h3>paraguay </h3>
                    <p>stay with Augustin</p>
                </div>
                <div class="col-md-6">
                    <div class="row pull-right">
                        <a href="#" class="help">Help</a><a href="#" class="share">Share</a>
                    </div>
                </div>
                <p class="bottom-p">Help with the farm & share playing the flute</p> 
            </div>
        </div>
        <div class="col-sm-6 col-xs-12 women">
            <div class="row">
                <div class="col-sm-6">
                    <h3>paris </h3>
                    <p>stay with Monique</p>
                </div>
                <div class="col-sm-6">
                    <div class="row pull-right">
                        <a href="#" class="share">Share</a><a href="#" class="pay">Pay</a>
                    </div>
                </div> 
                <p class="bottom-p">Share having good times</p>
            </div>
        </div>
    </div>
</section>
<section class="white-color-bg">  
    <div class="container">  
        <div class="col-md-12"> 
            <div class="row text-center">
                <p class="volunterr-p">Volunteer A· Au Pair A· Housesit A· Eco Projects A· Teaching A· Gardening A· Art exchange</p>
            </div>
        </div>
    </div>  
</section>
<section id="our-stories">
    <div class="container"> 
        <div class="pull-left arrows"> 
            <div class="arrow-left"></div> 
        </div>
        <div class="col-md-12">
            <h2>stories from our travellers</h2> 
            <div class="row"> 
                <div class="col-md-4 col-sm-4">
                    <img src="<?= Yii::$app->request->baseUrl ?>/images/bottom-slider-img-1.jpg" class="img-responsive img-circle center-image">
                    <div class="col-md-9 col-md-offset-2 col-sm-12">
                        <h4>Andrea & Carlos, Spain </h4>
                        <p>“What a wonderful experience, we would always do it again. We will recommend this to all our friends” </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4"> 
                    <img src="<?= Yii::$app->request->baseUrl ?>/images/bottom-slider-img-2.jpg" class="img-responsive img-circle center-image">
                    <div class="col-md-9 col-md-offset-2 col-sm-12">
                        <h4>Andrea & Carlos, Spain</h4>
                        <p>“What a wonderful experience, we would always do it again. We will recommend this to all our friends” </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="col-md-1  pull-right" style="margin-top: 100px;"> 
                        <div class="row">
                            <div class="arrow-right"></div> 
                        </div> 
                    </div>
                    <img src="<?= Yii::$app->request->baseUrl ?>/images/bottom-slider-img-3.jpg" class="img-responsive img-circle center-image">
                    <div class="col-md-9 col-md-offset-2 col-sm-12">
                        <h4>Andrea & Carlos, Spain</h4>
                        <p>“What a wonderful experience, we would always do it again. We will recommend this to all our friends”</p>
                    </div>  
                </div>
            </div>
        </div> 
    </div>
</section>
<section id="promotion-slots">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="promo-box">
                    <h2 class="light-yellow">News from our blog</h2>
                    <p>Surfing in el Palmar</p>
                    <img src="<?= Yii::$app->request->baseUrl ?>/images/surface-image.png" class="img-responsive center-image">
                    <div class="row">
                        <div class="col-md-12" id="news-from">
                            <span>Wednesday, 8th October 2015</span><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="promo-box">
                    <h2 class="green-color">How it works</h2>
                    <p>Video explanation Staylance</p>
                    <img src="<?= Yii::$app->request->baseUrl ?>/images/promotional-video.png" class="img-responsive center-image">
                    <div class="row">
                        <div class="col-md-12" id="how-work">
                            <span>Find out more about why to become a Staylancer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="promo-box">
                    <h2 class="gray-text">why Staylance?</h2>
                    <img src="<?= Yii::$app->request->baseUrl ?>/images/green-van-object.png" class="img-responsive center-image">
                    <ol>
                        <li>Reason new sample</li>
                        <li>Reason sample sample</li>
                        <li>Reason other sample</li>
                    </ol>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Ready?</h3><a href="#">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>