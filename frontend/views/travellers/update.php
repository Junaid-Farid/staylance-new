<div class="container">
    <?php

    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    use yii\helpers\Url;

/* @var $this yii\web\View */
    /* @var $model app\models\Travellers */

    $this->title = Yii::t('app', 'Update {modelClass}: ', [
                'modelClass' => 'Travellers',
            ]) . ' ' . $model->name;
    ?>
    <div class="travellers-create">
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
                        <h1 class="Step-title">Account Info > Address Details</h1> 
                        <?=
                        $this->render('_form', [
                            'model' => $model,
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
        <div class="col-md-6">
            <a href="<?php echo Url::to(['/travellers/updatetype', 'id' => $model->id]); ?>" class="btn btn-arrow">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a href="<?php echo Url::to(['/travellers/updatetype', 'id' => $model->id]); ?>" class="btn btn-back-text">back</a>
        </div>
        <div class="right-align col-md-6">
            <?= Html::submitButton(Yii::t('app', 'next step'), ['class' => 'btn btn-next-text btn-arrow']) ?>
            <?= Html::submitButton(Yii::t('app', '<i class="fa fa-arrow-right"></i>'), ['class' => 'btn btn-arrow']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>