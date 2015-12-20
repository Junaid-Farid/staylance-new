<div class="container">
    <?php

    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\widgets\ActiveForm;
    use zxbodya\yii2\galleryManager\GalleryManager;

/* @var $this yii\web\View */
    /* @var $model app\models\TravellerPhoto */

    $this->title = Yii::t('app', 'Traveller Gallery');
    ?>
    <div class="traveller-photo-create">
        <div class="col-md-11 col-md-offset-1">
            <ul class="traveller-steps">
                <li id="active-breadcrumbs">Account Info</li>
                <li id="active-breadcrumbs">Profile</li>
                <li id="active-breadcrumbs">About You</li>
                <li id="active-breadcrumbs">Gallery</li>
                <li>Get Verified</li>
            </ul>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="travellers-form">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="Step-title">Gallery </h1> 

                        <?php
                        echo GalleryManager::widget(
                                [
                                    'model' => $model,
                                    'behaviorName' => 'galleryBehavior',
                                    'apiRoute' => 'travellers/galleryApi'
                                ]
                        );
                        ?>

                    </div>
                    <div class="col-lg-4 join-message">
                        <h3> Thanks You for joining Staylance!</h3>
                        <p>Welcome our community,we wish you a wonderful time. Please complete your profile</p>
                        <br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group wrap_container">
    <div class="row">
        <div class="col-md-4">
            <?php if (count($travellercountries) > 0) { ?>
                <a href="<?php echo Url::to(['/travellerscountries/update', 'id' => $traveller_id]); ?>" class="btn btn-arrow">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a href="<?php echo Url::to(['/travellerscountries/update', 'id' => $traveller_id]); ?>" class="btn btn-back-text">back</a>
            <?php } else { ?>
                <a href="<?php echo Url::to(['/travellerscountries/create', 'traveller_id' => $traveller_id]); ?>" class="btn btn-arrow">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a href="<?php echo Url::to(['/travellerscountries/create', 'traveller_id' => $traveller_id]); ?>" class="btn btn-back-text">back</a>
            <?php } ?>       
        </div>
        <?php if (count($travellerVerification) > 0) { ?>
            <div class="col-md-4 align-center">
                <a href="<?php echo Url::to(['/travellersverification/update', 'id' => $travellerVerification->id]); ?>" class="btn btn-success btn-skip">I will do this later</a>
            </div>
            <div class="right-align col-md-4">
                <a href="<?php echo Url::to(['/travellersverification/update', 'id' => $travellerVerification->id]); ?>" class="btn btn-back-text btn-arrow">next step</a>
                <a href="<?php echo Url::to(['/travellersverification/update', 'id' => $travellerVerification->id]); ?>" class="btn btn-arrow">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        <?php } else { ?>
            <div class="col-md-4 align-center">
                <a href="<?php echo Url::to(['/travellersverification/create', 'traveller_id' => $traveller_id]); ?>" class="btn btn-success btn-skip">I will do this later</a>
            </div>
            <div class="right-align col-md-4">
                <a href="<?php echo Url::to(['/travellersverification/create', 'traveller_id' => $traveller_id]); ?>" class="btn btn-back-text btn-arrow">next step</a>
                <a href="<?php echo Url::to(['/travellersverification/create', 'traveller_id' => $traveller_id]); ?>" class="btn btn-arrow">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        <?php } ?>
    </div>
