<div class="container"><?php

    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
    /* @var $dataProvider yii\data\ActiveDataProvider */

    $this->title = Yii::t('app', 'Travellers');
    ?>
    <div class="travellers-index">
        <div class="col-md-11 col-md-offset-1">
            <ul class="traveller-steps">
                <li id="active-breadcrumbs">Account Info</li>
                <li>Profile</li>
                <li>About You</li>
                <li>Gallery</li>
                <li>Get Verified</li>
            </ul>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="travellers-form">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="Step-title">Account Info > Type of Account</h1> 
                        <?php $form = ActiveForm::begin(); ?>

                        <?= $form->field($model, 'user_id')->hiddenInput(['value' => $user_id])->label(false) ?>

                        <?= $form->field($model, 'account_type')->radioList(array('1' => 'Single Person', '2' => 'Single with Kids', '3' => 'Couple', '4' => 'Group of Friends', '5' => 'Family')) ?>

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
        <div class="right-align col-md-12">
            <?= Html::submitButton(Yii::t('app', 'next step'), ['class' => 'btn btn-next-text btn-arrow']) ?>
            <?= Html::submitButton(Yii::t('app', '<i class="fa fa-arrow-right"></i>'), ['class' => 'btn btn-arrow']) ?>

            <?php ActiveForm::end(); ?>
        </div>
    </div>