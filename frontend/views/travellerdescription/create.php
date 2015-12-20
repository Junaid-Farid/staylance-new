<div class="container">
    <?php

    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
    /* @var $model app\models\TravellerPhoto */

    $this->title = Yii::t('app', 'Create Traveller Description');
    ?>
    <div class="traveller-photo-create">
        <div class="col-md-11 col-md-offset-1">
            <ul class="traveller-steps">
                <li id="active-breadcrumbs">Account Info</li>
                <li id="active-breadcrumbs">Profile</li>
                <li>About You</li>
                <li>Gallery</li>
                <li>Get Verified</li>
            </ul>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="travellers-form">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="Step-title">Profile > Describe Yourself</h1> 

                        <?=
                        $this->render('_form', [
                            'model' => $model,
                            'traveller_id' => $traveller_id,
                        ])
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
            <?php if (count($traveller_photo) > 0) { ?>
                <a href="<?php echo Url::to(['/travellerphoto/update', 'id' => $traveller_photo->id]); ?>" class="btn btn-arrow">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a href="<?php echo Url::to(['/travellerphoto/update', 'id' => $traveller_photo->id]); ?>" class="btn btn-back-text">back</a>
            <?php } else { ?>
                <a href="<?php echo Url::to(['/travellerphoto/create', 'traveller_id' => $traveller_id]); ?>" class="btn btn-arrow">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a href="<?php echo Url::to(['/travellerphoto/create', 'traveller_id' => $traveller_id]); ?>" class="btn btn-back-text">back</a>
            <?php } ?>       
        </div>
        <div class="col-md-4 align-center">
            <?php if (count($traveller_help) > 0) { ?>
                <a href="<?php echo Url::to(['/travellerhelp/update', 'id' => $traveller_help->id]); ?>" class="btn btn-success btn-skip">I will do this later</a>
            <?php } else { ?>
                <a href="<?php echo Url::to(['/travellerhelp/create', 'traveller_id' => $traveller_id]); ?>" class="btn btn-success btn-skip">I will do this later</a>
            <?php } ?>        
        </div>
        <div class="right-align col-md-4">
            <?= Html::submitButton(Yii::t('app', 'next step'), ['class' => 'btn btn-next-text btn-arrow']) ?>
            <?= Html::submitButton(Yii::t('app', '<i class="fa fa-arrow-right"></i>'), ['class' => 'btn btn-arrow']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>